/**
 * 
 */
package controlador;

import android.util.Log;

/**
 * @author Gasune
 *
 */
public class Nota {
 
    public boolean crearNota(String email, String titulo, String fecha, String texto){
    	String[] peticion = new String[8];
    	peticion[0] = "email";
    	peticion[1] = email;
    	peticion[2] = "titulo";
    	peticion[3] = titulo.replace(" ", "%20");
    	peticion[4] = "fecha";
    	peticion[5] = fecha;
    	peticion[6] = "texto";
    	peticion[7] = texto.replace(" ", "%20");
    	Comunicacion webservice = new Comunicacion();
    	boolean creo = webservice.crearNota("index.php", "crear_nota", peticion);
    	Log.i("Crear Nota: ", String.valueOf(creo));
    	return true;
    }
    
    public boolean eliminarNota(int id){
    	String[] peticion = new String[2];
    	peticion[0] = "id";
    	peticion[1] = String.valueOf(id);
    	Comunicacion webservice = new Comunicacion();
    	boolean creo = webservice.eliminarNota("index.php", "eliminar_nota", peticion);
    	return true;
    }
    
    public boolean modificarNota(Integer id, String titulo, String texto){
    	String[] peticion = new String[6];
    	peticion[0] = "id";
    	peticion[1] = id.toString();
    	peticion[2] = "titulo";
    	peticion[3] = titulo.replace(" ", "%20");
    	peticion[4] = "texto";
    	peticion[5] = texto.replace(" ", "%20");
    	Comunicacion webservice = new Comunicacion();
    	boolean creo = webservice.modificarNota("index.php", "modificar_nota", peticion);
    	return true;
    }
    
    public String[][] verNotas(String email){
    	String[] peticion = new String[2];
    	peticion[0] = "email";
    	peticion[1] = email;
    	Comunicacion webservice = new Comunicacion();
    	return webservice.verNotas("index.php", "ver_notas", peticion);
    }
	
	
}
