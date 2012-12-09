package vistas;

import com.example.gdnotes.R;
import com.example.gdnotes.R.layout;
import com.example.gdnotes.R.menu;

import controladores.Comunicacion;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.widget.EditText;
import ayuda.Util;

public class NuevaLibretaVista extends Activity {

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_nueva_libreta_vista);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_nueva_libreta_vista, menu);
        return true;
    }
    
    public void crearNuevaLibreta(View view){
    	Comunicacion.crearNuevaLibreta( ((EditText)
    			findViewById(R.id.editTextNombreNuevaLibreta)).getText().toString());
		Util.IntentActivity(this, BienvenidoVista.class);
    }
    
    public void cancelar(View view){
    	this.finish();
		Util.IntentActivity(this, BienvenidoVista.class);
    }
}
