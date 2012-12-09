package vistas;

import modelos.UsuarioModelo;

import com.example.gdnotes.R;
import com.example.gdnotes.R.layout;
import com.example.gdnotes.R.menu;

import controladores.Comunicacion;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.Spinner;
import ayuda.Util;

public class NuevaNotaVista extends Activity {

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_nueva_nota_vista);
        UsuarioModelo usuario = UsuarioModelo.getSingleton();
        Spinner libretas = (Spinner) findViewById(R.id.spinnerLibretasNuevaNota);
        String[] nombresLibretas = new String[usuario.getLibretas().size()];
        
        for (int i = 0; i < nombresLibretas.length; i++) {
			nombresLibretas[i] = usuario.getLibretas().get(i).getNombre();
		}
        ArrayAdapter<String> adaptador = new ArrayAdapter<String>(this,
            android.R.layout.simple_spinner_item, nombresLibretas);
 
        libretas.setAdapter(adaptador);
        
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_nueva_nota_vista, menu);
        return true;
    }
    
    public void crearNuevaNota(View view){
    	Comunicacion.crearNuevaNota( ((EditText)
    			findViewById(R.id.editTextTituloNuevaNota)).getText().toString(),
    			((Spinner)
    			findViewById(R.id.spinnerLibretasNuevaNota)).getSelectedItem().toString());
		Util.IntentActivity(this, BienvenidoVista.class);
		this.finish();
    }
    
    public void cancelar(View view){
    	this.finish();
		Util.IntentActivity(this, BienvenidoVista.class);
    }
}
