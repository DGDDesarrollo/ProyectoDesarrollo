package vistas;

import modelos.UsuarioModelo;

import com.example.gdnotes.R;
import com.example.gdnotes.R.layout;
import com.example.gdnotes.R.menu;

import controladores.Comunicacion;

import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.view.ViewGroup;
import android.widget.LinearLayout;
import android.widget.TextView;
import ayuda.Util;

public class BienvenidoVista extends Activity {

	UsuarioModelo usuario;
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_bienvenido_vista);
        LinearLayout scrollLayout = (LinearLayout) this.findViewById(R.id.ScrollLayout);
        TextView titulo = (TextView) this.findViewById(R.id.textViewBienvenido);
        Comunicacion.cargarBienvenidoVista(this, titulo, scrollLayout);
    	usuario = UsuarioModelo.getSingleton();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_bienvenido_vista, menu);
        return true;
    }
    
    public void editarNota(View view){
		this.finish();
    	Comunicacion.editarNota(this,view.getId());
    }
    
    public void editarLibreta(View view){
    	Comunicacion.editarLibreta(this,((TextView) view).getText().toString());
    	this.finish();
    }
    
    public void crearNuevaNota(View view){
    	if (UsuarioModelo.getSingleton().getLibretas().isEmpty())
    		Util.Alert(this, "El usuario debe tener al menos una libreta");
    	else{
    		Util.IntentActivity(this, NuevaNotaVista.class);
    		this.finish();
    	}
    }
    
    public void crearNuevaLibreta(View view){
		this.finish();
    	Util.IntentActivity(this, NuevaLibretaVista.class);
    }
}
