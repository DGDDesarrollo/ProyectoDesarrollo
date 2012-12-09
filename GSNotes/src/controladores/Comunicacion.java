package controladores;

import java.lang.reflect.Constructor;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import persistencia.WebService;

import com.example.gdnotes.R;

import vistas.BienvenidoVista;
import vistas.EdicionLibretaVista;
import vistas.EdicionNotaVista;

import android.R.color;
import android.app.AlertDialog;
import android.content.Context;
import android.provider.ContactsContract.CommonDataKinds.Website;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup.LayoutParams;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;
import ayuda.ConstructorInterfaz;
import ayuda.Util;

import modelos.ArchivoModelo;
import modelos.EtiquetaModelo;
import modelos.LibretaModelo;
import modelos.ListaNotasModelo;
import modelos.NotaModelo;
import modelos.UsuarioModelo;


public class Comunicacion {

	public static NotaModelo ultimaNotaEditada;
	public static LibretaModelo ultimaLibretaEditada;

	public static boolean registrarUsuario(Context contexto, String nombre, String eMail, String password, String passwordConfirm){
		if (Validaciones.validarRegistro(contexto, nombre, eMail, password, passwordConfirm)){
			try{
				HashMap<String, String> informacion = new HashMap<String, String>();
				informacion.put("nombre", nombre);
				informacion.put("email", eMail);
				informacion.put("password", password);				
				
				String respuestaWebService = WebService.post("usuario/registrar", informacion);
				
				if (respuestaWebService != "Error"){
					new UsuarioModelo(nombre, eMail, password);
					Util.IntentActivity(contexto, BienvenidoVista.class);
					return true;
				}
			}catch (Exception e){
				e.printStackTrace();
			}
		}
		return false;
	}
	
	public static boolean iniciarSesion(Context contexto, String eMail, String password){
		if (Validaciones.validarInicioSesion(contexto, eMail, password)){
			new UsuarioModelo("", eMail, password);
			String content=WebService.get("Welcome/index");
			if(content.indexOf("Bienvenid@")>=0){
				Util.Alert(contexto, content,"Mensaje");
				Util.IntentActivity(contexto, BienvenidoVista.class);
				return true;
			}else{
				UsuarioModelo.clearSingleton();
				Util.Alert(contexto, "Email y passwords incorrectos");
				return false;
			}
			
		}
		return false;
	}
	
	public static void cargarBienvenidoVista(Context contexto, TextView titulo, LinearLayout scrollLayout){
		UsuarioModelo usuario = UsuarioModelo.getSingleton();
		usuario.sincronizarLibretas();

		titulo.setText("Bienvenid@, "+usuario.getNombre()+"!");
        
		for (LibretaModelo libreta : usuario.getLibretas()){
			ConstructorInterfaz.agregarLibreta(contexto, scrollLayout, libreta);
			for (NotaModelo nota : libreta.getNotas()){
				ConstructorInterfaz.agregarNota(contexto, scrollLayout, nota);
			}
		}
	}
	
	public static void editarNota(Context contexto, Integer idNota){
		UsuarioModelo usuario = UsuarioModelo.getSingleton();
		for (LibretaModelo libreta : usuario.getLibretas())
			for (NotaModelo nota : libreta.getNotas())
				if (nota.getId() == idNota){
					ultimaNotaEditada = nota;
					Util.IntentActivity(contexto, EdicionNotaVista.class);	
				}
	}
	
	public static void editarLibreta(Context contexto, String nombreLibreta){
		UsuarioModelo usuario = UsuarioModelo.getSingleton();
		ultimaLibretaEditada = usuario.buscarLibreta(nombreLibreta);
		Util.IntentActivity(contexto, EdicionLibretaVista.class);
	}
	
	public static void cargarEdicionNotaVista(EditText titulo, TextView tags, TextView adjuntos, EditText texto, TextView id){
		titulo.setText(ultimaNotaEditada.getTitulo());
		tags.setText("");
		adjuntos.setText("");
		for (EtiquetaModelo etiqueta : ultimaNotaEditada.getEtiquetas()){
			if (tags.getText().length() > 0)
				tags.setText(tags.getText()+", "+etiqueta.getNombre());
			else
				tags.setText(etiqueta.getNombre());
		}

		for (ArchivoModelo archivo : ultimaNotaEditada.getAdjuntos()){
			if (adjuntos.getText().length() > 0)
				adjuntos.setText(adjuntos.getText()+", "+archivo.getNombre());
			else
				adjuntos.setText(archivo.getNombre());
		}
		
		texto.setText(ultimaNotaEditada.getTexto());
		
		id.setText(ultimaNotaEditada.getId().toString());
	}
	
	public static boolean crearNota(EditText titulo, TextView tags, TextView adjuntos, EditText texto, TextView id){
		return false;
	}
	
	public static boolean modificarNota(EditText titulo, TextView tags, TextView adjuntos, EditText texto, TextView id){
		String nuevoTitulo = titulo.getText().toString();
		ArrayList<EtiquetaModelo> nuevasEtiquetas = new ArrayList<EtiquetaModelo>();
		for (int i = 0; i < tags.getText().toString().split(", ").length; i++) {
			nuevasEtiquetas.add(new EtiquetaModelo(tags.getText().toString().split(", ")[i]));
		}
		ArrayList<ArchivoModelo> nuevosAdjuntos = new ArrayList<ArchivoModelo>();
		for (int i = 0; i < tags.getText().toString().split(", ").length; i++) {
			nuevosAdjuntos.add(new ArchivoModelo(adjuntos.getText().toString().split(", ")[i]));
		}
		String nuevoTexto = texto.getText().toString();
		
		ultimaNotaEditada.actualizarEtiquetas(nuevasEtiquetas);
		ultimaNotaEditada.actualizarTituloYTexto(nuevoTitulo, nuevoTexto);
		
		return false;
	}
	
	public static void cargarEtiquetasVista(Context contexto, 
			AutoCompleteTextView autoCompleteTextView, LinearLayout layout){
		
		String[] etiquetas = ultimaNotaEditada.getArregloEtiquetas();
		ArrayAdapter<String> adaptador = new ArrayAdapter<String>(
				contexto, android.R.layout.simple_dropdown_item_1line,etiquetas);
		autoCompleteTextView.setThreshold(1);
		autoCompleteTextView.setAdapter(adaptador);
		autoCompleteTextView.setHintTextColor(color.primary_text_dark);
		
		for (int i = 0; i < etiquetas.length; i++) {
			ConstructorInterfaz.agregarEtiqueta(layout, etiquetas[i]);
		}
	}
	
	public static void crearNuevaLibreta(String nombreLibreta){
		UsuarioModelo.getSingleton().agregarLibreta(nombreLibreta);
	}
	
	public static void crearNuevaNota(String tituloNota, String nombreLibreta){
		UsuarioModelo usuario = UsuarioModelo.getSingleton();
		LibretaModelo libreta = new LibretaModelo(nombreLibreta);
		libreta = usuario.getLibretas().get(usuario.getLibretas().indexOf(libreta));
		if (libreta.agregarNota(new NotaModelo(null, tituloNota, ""))){
			Log.i("ghesn", libreta.getNombre()+libreta.getNotas().get(0).getTitulo());
		}
		else
			Log.i("ghesn", "NO TIENE NOTAS");
		
		
	}
	
	public static void guardarModificacionesLibreta(String nuevoNombreLibreta){
		ultimaLibretaEditada.modificarLibreta(nuevoNombreLibreta);
	}
	
	public static void actualizarEtiquetas(LinearLayout layoutEtiquetas){
		ArrayList<EtiquetaModelo> etiquetas = new ArrayList<EtiquetaModelo>();
		for (int i = 0; i < layoutEtiquetas.getChildCount(); i++) {
			etiquetas.add(new EtiquetaModelo(
					((TextView) layoutEtiquetas.getChildAt(i)).getText().toString()));
		}
		ultimaNotaEditada.setEtiquetas(etiquetas);
	}
	
	public static void agregarEtiquetaAVista(LinearLayout layoutEtiquetas, AutoCompleteTextView autoCompleteTextView){
		ConstructorInterfaz.agregarEtiqueta(layoutEtiquetas, autoCompleteTextView.getText().toString());
	}
}
