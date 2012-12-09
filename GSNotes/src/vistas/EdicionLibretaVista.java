package vistas;

import com.example.gdnotes.R;
import com.example.gdnotes.R.layout;
import com.example.gdnotes.R.menu;

import controladores.Comunicacion;

import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import ayuda.Util;

public class EdicionLibretaVista extends Activity {

	EditText editTextNombreLibreta;
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_edicion_libreta_vista);
        editTextNombreLibreta = (EditText) findViewById(R.id.editTextNuevoNombreLibreta);
        editTextNombreLibreta.setText(Comunicacion.ultimaLibretaEditada.getNombre());
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_edicion_libreta_vista, menu);
        return true;
    }
    
    public void guardarModificacionesLibreta(View view){
    	Comunicacion.guardarModificacionesLibreta(
    			editTextNombreLibreta.getText().toString());
    	cancelar(view);
    }
    
    public void cancelar(View view){
    	Util.IntentActivity(this, BienvenidoVista.class);
    	this.finish();
    }
}
