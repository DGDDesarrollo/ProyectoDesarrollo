package modelos;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import controladores.Comunicacion;

import android.util.Log;

import persistencia.WebService;

public class UsuarioModelo {
	
	private static UsuarioModelo _singleton;
	public static UsuarioModelo getSingleton(){
		return _singleton;
	}
	public static void clearSingleton(){
		_singleton=null;
	}
	
	private String nombre;
	private String email;
	private String password;
	private List<LibretaModelo> libretas;
	
	public UsuarioModelo(String nombre, String email,
			String password) {
		super();
		_singleton = this;
		this.nombre = nombre;
		this.email = email;
		this.password = password;
		this.libretas = new ArrayList<LibretaModelo>();
	}
	
	public void cargarLibretas(){
		
	}
	
	public static UsuarioModelo generarUsuarioMock(){
		UsuarioModelo usuarioMock;
		usuarioMock = new UsuarioModelo("Ghesn Sfeir", "gslivedt@gmail.com", "1234");
		usuarioMock.agregarLibreta("Libreta Vacia");
		usuarioMock.agregarLibreta("Libretazo");
		usuarioMock.buscarLibreta("Libretazo").agregarNota(new NotaModelo(0,"Notaza", "Textazo"));
		usuarioMock.buscarLibreta("Libretazo").agregarNota(new NotaModelo(1,"Nota Vacia", null));
		usuarioMock.buscarLibreta("Libretazo").agregarNota(new NotaModelo(2,"Otra Nota", 
				"Esta es una prueba de otra nota a ver que tan largo se hace este texto," +
				" porque, imaginate... necesito probarlo!! ojala de bien"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(0).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #1"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(1).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #2"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(2).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #3"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(2).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #4"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(2).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #5"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(2).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #6"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(2).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #7"));
		usuarioMock.buscarLibreta("Libretazo").getNotas().get(2).agregarEtiqueta(
				new EtiquetaModelo("Etiqueta #8"));
		return usuarioMock;
	}
	
	public static boolean verificarExistencia(String email){
		return false;
	}
	
	public String getNombre() {
		return nombre;
	}
	public String getEmail() {
		return email;
	}
	public String getPassword() {
		return password;
	}
	public List<LibretaModelo> getLibretas() {
		return libretas;
	}	
	
	public void sincronizarLibretas(){
		String contenido = WebService.get("libreta/listar");
		
		
		try {
			JSONArray arregloLibretas = new JSONArray(contenido);
			for (int i = 0; i < arregloLibretas.length(); i++) {
				LibretaModelo libreta = new LibretaModelo(arregloLibretas.getJSONObject(i).getString("NOMBRE"));
				libreta.sincronizarNotas();
				if (!this.libretas.contains(libreta)){
					libretas.add(libreta);
				}
			}
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}
	
	public boolean agregarLibreta(String nombreLibreta){
		try {
			LibretaModelo nuevaLibreta = new LibretaModelo(nombreLibreta);
			HashMap<String, String> hash = new HashMap<String, String>();
			hash.put("nombre", nombreLibreta);
			if (WebService.post("libreta/crear", hash) != "Error"){
				Comunicacion.ultimaLibretaEditada = nuevaLibreta;
				return libretas.add(nuevaLibreta);
			}
		}
		catch (Exception e){
			e.printStackTrace();
		}
		return false;
	}
	
	public LibretaModelo buscarLibreta(String nombreLibreta){
		for (LibretaModelo libreta: libretas)
			if (libreta.getNombre().equals(nombreLibreta))
				return libreta;
		return null;
	}
	
	public List<NotaModelo> buscarNotas(){
		return null;
	}
}
