/**
 * 
 */
package controlador;
import org.json.JSONArray;
import org.json.JSONObject;

import android.util.Log;
import helper.WebService;
/**
 * @author Gasune
 *
 */
public class Comunicacion {
	
    /*public void realizarPeticion(String page, String function, String[] strs){
    	Log.i("ghesn","INICIO");
    	try {
            JSONArray jsonArray = new JSONArray(helper.WebService.get(page, function,strs));
            Log.i("ghesn",
                "Number of entries " + jsonArray.length());
            for (int i = 0; i < jsonArray.length(); i++) {
              JSONObject jsonObject = jsonArray.getJSONObject(i);
              //PARA PROBAR verNotas
              //Log.i("ghesn","ID:" +jsonObject.getInt("ID"));
              //Log.i("ghesn","Titulo: " +jsonObject.getString("TITULO"));
              
              //PARA PROBAR abrirNota
              //Log.i("ghesn","ID:" +jsonObject.getInt("ID"));
              //Log.i("ghesn","FECHA_CREACION: " +jsonObject.getString("FECHA_CREACION"));
              //Log.i("ghesn","TITULO: " +jsonObject.getString("TITULO"));
              //Log.i("ghesn","TEXTO: " +jsonObject.getString("TEXTO"));
              
              //PARA PROBAR eliminarNota
              //Log.i("ghesn","ELIMINADA: " + jsonObject.getBoolean("respuesta"));
              
              //PARA PROBAR iniciarSesion BUENA
              //Log.i("ghesn","ID:" +jsonObject.getInt("ID"));
              //Log.i("ghesn","Titulo: " +jsonObject.getString("TITULO"));
              
              //PARA PROBAR iniciarSesion MALA
              //Log.i("ghesn", "MENSAJE: " +jsonObject.getString("ERROR"));
            }
          } catch (Exception e) {
            e.printStackTrace();
          }
    }*/
	public JSONArray realizarPeticion(String page, String function, String[] strs){
		JSONArray jsonArray = null;
    	try {
            jsonArray = new JSONArray(helper.WebService.get(page, function,strs));
    	} catch (Exception e) {
            e.printStackTrace();
            Log.i("Error", e.getMessage());
            return null;
        }
    	return jsonArray;
    }
	
	public boolean registrarNuevo(String page, String function, String[] strs){
		JSONArray jsonArray = realizarPeticion(page, function, strs);
		try{
			return jsonArray.getJSONObject(0).getBoolean("registro");
		}catch(Exception e){
			return false;
		}		
	}
	
	public String[][] iniciarSesion(String page, String function, String[] strs){
		JSONArray jsonArray = realizarPeticion(page, function, strs);
		String [][] notas;
		try{
			if (jsonArray.getJSONObject(0).has("ERROR")){
				notas = new String[2][1];
				notas[0][0] = "Error";
				notas[0][1] = "El email y el password no coinciden.";
			}
			else {
				notas = new String [2][jsonArray.length()];
				for (int i = 0; i < jsonArray.length(); i++) {
					JSONObject jsonObject = jsonArray.getJSONObject(i);
					notas[0][i] = String.valueOf(jsonObject.getInt("ID"));
					notas[1][i] = jsonObject.getString("TITULO");
				}
			}
		}catch(Exception e){
			return null;
		}
		return notas;
	}
	
	public boolean crearNota(String page, String function, String[] strs) {
		realizarPeticion(page, function, strs);
    	return true;
	}
	
	public boolean eliminarNota(String page, String function, String[] strs){
    	realizarPeticion(page, function, strs);
    	return true;
    }
	
	public boolean modificarNota(String page, String function, String[] strs){
    	realizarPeticion(page, function, strs);
    	return true;
    }
	
	public String[][] verNotas(String page, String function, String[] strs){
		JSONArray jsonArray = realizarPeticion(page, function, strs);
		String [][] notas;
		try{
			notas = new String [2][jsonArray.length()];
			for (int i = 0; i < jsonArray.length(); i++) {
				JSONObject jsonObject = jsonArray.getJSONObject(i);
				notas[0][i] = String.valueOf(jsonObject.getInt("ID"));
				notas[1][i] = jsonObject.getString("TITULO");
			}
		}catch(Exception e){
			return null;
		}
		return notas;
	}
}
