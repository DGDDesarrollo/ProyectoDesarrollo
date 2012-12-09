package vistas;

import com.example.gdnotes.R;
import com.example.gdnotes.R.layout;
import com.example.gdnotes.R.menu;

import controladores.Comunicacion;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.widget.AutoCompleteTextView;
import android.widget.LinearLayout;
import ayuda.Util;

public class EtiquetasVista extends Activity {

	LinearLayout layoutEtiquetas;
	AutoCompleteTextView autoCompleteTextView;
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_etiquetas_vista);
        layoutEtiquetas = (LinearLayout) findViewById(R.id.LayoutEtiquetas);
        autoCompleteTextView = (AutoCompleteTextView) findViewById(R.id.autoCompleteTextView1);
        Comunicacion.cargarEtiquetasVista(this,autoCompleteTextView,layoutEtiquetas);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_etiquetas_vista, menu);
        return true;
    }
    
    public void agregarEtiqueta(View view){
    	Comunicacion.agregarEtiquetaAVista(layoutEtiquetas,autoCompleteTextView);
    }
    
    public void guardar(View view){
    	Comunicacion.actualizarEtiquetas(layoutEtiquetas);
    	cancelar(view);
    }
    
    public void cancelar(View view){
    	Util.IntentActivity(this, EdicionNotaVista.class);
    	this.finish();
    }
}
