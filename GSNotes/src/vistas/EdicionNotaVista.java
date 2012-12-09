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

public class EdicionNotaVista extends Activity {

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_edicion_nota_vista);
        Comunicacion.cargarEdicionNotaVista((EditText) findViewById(R.id.editTextTituloNota),
        		(TextView) findViewById(R.id.textViewTags), 
        		(TextView) findViewById(R.id.textViewAdjuntos), 
        		(EditText) findViewById(R.id.editTextTextoNota),
        		(TextView) findViewById(R.id.textViewIdNota));
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_nota_vista, menu);
        return true;
    }
    
    public void guardarNota(View view){
    	Comunicacion.modificarNota((EditText) findViewById(R.id.editTextTituloNota),
        		(TextView) findViewById(R.id.textViewTags), 
        		(TextView) findViewById(R.id.textViewAdjuntos), 
        		(EditText) findViewById(R.id.editTextTextoNota),
        		(TextView) findViewById(R.id.textViewIdNota));
    	this.finish();
    	Util.IntentActivity(this, BienvenidoVista.class);
    }
    
    public void modificarEtiquetas(View view){
    	Util.IntentActivity(this, EtiquetasVista.class);
    	this.finish();
    }
    
    public void cancelar(View view){
    	this.finish();
    	Util.IntentActivity(this, BienvenidoVista.class);
    }
}
