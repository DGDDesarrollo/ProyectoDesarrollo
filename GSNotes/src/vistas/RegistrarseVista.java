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

public class RegistrarseVista extends Activity {

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrarse_vista);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_registrarse_vista, menu);
        return true;
    }
    
    public void registrarUsuario(View view){
    	String nombre =( (EditText) this.findViewById(R.id.editTextNombre) ).getText().toString();
    	String eMail = ((EditText) this.findViewById(R.id.editTextEmail)).getText().toString();
    	String password = ((EditText) this.findViewById(R.id.editTextPassword)).getText().toString();
    	String passwordConfirm = ((EditText) this.findViewById(R.id.editTextPasswordConfirm)).getText().toString();
    	
    	Comunicacion.registrarUsuario(this, nombre, eMail, password, passwordConfirm);
    }
    
    public void volver(View view){
    	this.finish();
    }
}
