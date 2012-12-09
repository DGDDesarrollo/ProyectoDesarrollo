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
import ayuda.Util;

public class LoginVista extends Activity {

	EditText editTextEmail;
	EditText editTextPassword;
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_vista);
        editTextEmail = (EditText) findViewById(R.id.editTextEmailLogin);
        editTextPassword = (EditText) findViewById(R.id.editTextPasswordLogin);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_login_vista, menu);
        return true;
    }
    
    public void registrar(View view){
    	Util.IntentActivity(this, RegistrarseVista.class);
    }
    
    public void iniciarSesion(View view){
    	Comunicacion.iniciarSesion(this,
    			editTextEmail.getText().toString(),
    			editTextPassword.getText().toString());
    }
}
