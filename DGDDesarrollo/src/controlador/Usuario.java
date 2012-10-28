package controlador;
import android.util.Log;

import com.example.aver.*;

public class Usuario {
	
	public boolean registrarUsuario(String nombre, String email, String pass){
	    	String[] peticion = new String[6];
	    	peticion[0] = "nombre";
	    	peticion[1] = nombre;
	    	peticion[2] = "email";
	    	peticion[3] = email;
	    	peticion[4] = "pass";
	    	peticion[5] = pass;
	    	Comunicacion webservice = new Comunicacion();
	    	boolean inserto = webservice.registrarNuevo("index.php", "registrar_usuario", peticion);
	    	Log.i("Insertar Usuario: ", String.valueOf(inserto));
	    	return inserto;	    	
	}
    
    public String[][] iniciarSesion(String email, String pass){
    	String[] peticion = new String[4];
    	peticion[0] = "email";
    	peticion[1] = email;
    	peticion[2] = "pass";
    	peticion[3] = pass;
    	Comunicacion webservice = new Comunicacion();
    	String[][] notas = webservice.iniciarSesion("index.php", "iniciar_sesion", peticion);
    	if (notas == null)
    		Log.i("Iniciar Sesion: ", "Error al conectar con el servidor");
    	else if (notas[0][0] == "Error")
    		Log.i("Iniciar Sesion: ", notas[0][1]);
    	else
    		Log.i("Iniciar Sesion: ", "Sesion iniciada con exito");
    	
    	return notas;
    }

}
