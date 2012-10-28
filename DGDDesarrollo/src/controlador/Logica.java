package controlador;

import java.sql.Date;
import java.util.Calendar;

import android.util.Log;

public class Logica {
	
	private static Logica miLogica = new Logica();
	private Usuario usuarioController = new Usuario();
	private Nota notaController = new Nota();
	
	public static Logica getInstance(){
		return miLogica;
	}
	
	public boolean registrarUsuario(String nombre, String email, String pass){
		return usuarioController.registrarUsuario(nombre, email, pass);
	}
	
	public String[][] iniciarSesionUsuario(String email, String pass){
		return usuarioController.iniciarSesion(email, pass);
	}
	
	public boolean crearNota(String email, String titulo, String texto){
		Calendar date = Calendar.getInstance();		
		String fecha = String.valueOf(date.get(date.DATE)) + "/" + String.valueOf(date.get(date.MONTH) + 1) + "/" + String.valueOf(date.get(date.YEAR));
		Log.i("ghesn", fecha);		
		return notaController.crearNota(email, titulo, fecha, texto);
	}
	public String[][] listarNotas(String email){
		return notaController.verNotas(email);
	}

}
