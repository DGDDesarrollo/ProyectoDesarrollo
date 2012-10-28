package com.example.aver;

import controlador.Nota;
import controlador.Usuario;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.StatusLine;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONObject;

import com.example.aver.R;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.LinearLayout.LayoutParams;
import android.widget.TextView;

public class MainActivity extends Activity {

	public MainActivity(){
		super();

		
		//modificarNota(34,"borrachon perozo","El mayor de los borrachones negros");
        //verNotas("gslivedt@gmail.com");
		//abrirNota(34);
		//eliminarNota(34);
		//Usuario usuario = new Usuario();
		//usuario.registrarUsuario("bat", "bat@gmail.com", "pego");
		
		//usuario.iniciarSesion("gslivedt@gmail.com","batr");
		//usuario.iniciarSesion("gslivedt@gmail.com","CLAVEMALA");
		
		//iniciarSesion("gslivedt@gmail.com","batr");
		//iniciarSesion("gslivedt@gmail.com","CLAVEMALA");
		
		//Nota nota = new Nota();
		//nota.modificarNota(23, "Modifico", "NOJODA");
		//crearNota("gslivedt@gmail.com", "La Nota es", "15/15/2015", "LA NOTA");
		//nota.crearNota("gslivedt@gmail.com", "La Nota es", "15/12/2015", "LA NOTA");
		//nota.eliminarNota(12);
		
	}
	
	
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        
        Button tv = (Button) findViewById(R.id.button_message);
        tv.setText("TEXT ME");
        tv = new Button(this);
        tv.setText("Probando con Obando");
        LinearLayout LL = (LinearLayout) findViewById(R.id.Layout1);
        LL.addView(tv,LL.getChildCount());
        tv.setLayoutParams(new LinearLayout.LayoutParams(480, 100));
        
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_main, menu);
        return true;
    }
    
    
    public void lanzar(View view) {
        Intent i = new Intent(this, MainActivity2.class );
        startActivity(i);
    }
    
    
    //Copiar en las clases segun tu diagrama
    
    //Devolver JSONArray para la interfaz, por ahora void
    public void realizarPeticion(String page, String function, String[] strs){
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
        	  Log.i("ghesn", e.getMessage());
            e.printStackTrace();
          }
    }
    
    public boolean registrarUsuario(String nombre, String email, String pass){
    	String[] peticion = new String[6];
    	peticion[0] = "nombre";
    	peticion[1] = nombre;
    	peticion[2] = "email";
    	peticion[3] = email;
    	peticion[4] = "pass";
    	peticion[5] = pass;
    	realizarPeticion("index.php", "registrar_usuario", peticion);
    	return true;
    }
    
    public boolean crearNota(String email, String titulo, String fecha, String texto){
    	String[] peticion = new String[8];
    	peticion[0] = "email";
    	peticion[1] = email;
    	peticion[2] = "titulo";
    	peticion[3] = titulo.replace(" ", "%20");;
    	peticion[4] = "fecha";
    	peticion[5] = fecha;
    	peticion[6] = "texto";
    	peticion[7] = texto.replace(" ", "%20");;
    	realizarPeticion("index.php", "crear_nota", peticion);
    	return true;
    }
    
    public boolean verNotas(String email){
    	String[] peticion = new String[2];
    	peticion[0] = "email";
    	peticion[1] = email;
    	realizarPeticion("index.php", "ver_notas", peticion);
    	return true;
    }
    
    public boolean abrirNota(Integer id){
    	String[] peticion = new String[2];
    	peticion[0] = "id";
    	peticion[1] = id.toString();
    	realizarPeticion("index.php", "abrir_nota", peticion);
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
    	realizarPeticion("index.php", "modificar_nota", peticion);
    	return true;
    }
    
    public boolean eliminarNota(Integer id){
    	String[] peticion = new String[2];
    	peticion[0] = "id";
    	peticion[1] = id.toString();
    	realizarPeticion("index.php", "eliminar_nota", peticion);
    	return true;
    }
    
    public boolean iniciarSesion(String email, String pass){
    	String[] peticion = new String[4];
    	peticion[0] = "email";
    	peticion[1] = email;
    	peticion[2] = "pass";
    	peticion[3] = pass;
    	realizarPeticion("index.php", "iniciar_sesion", peticion);
    	return true;
    }
}
