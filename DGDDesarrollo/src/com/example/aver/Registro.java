package com.example.aver;

import controlador.Logica;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Registro extends Activity {
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.registro);
        
        Button registrarse = (Button) this.findViewById(R.id.button1);
    }
	
	public void registro(View registrarse){
		EditText nombre = (EditText) this.findViewById(R.id.EditText01);
		EditText mail = (EditText) this.findViewById(R.id.editText1);
		EditText password = (EditText) this.findViewById(R.id.editText2);
		String email = mail.getText().toString();
		String pass = password.getText().toString();
		String name = nombre.getText().toString();
		if (Logica.getInstance().registrarUsuario(name, email, pass)){
			Intent miIntent = new Intent(Registro.this, Home.class);
			Registro.this.startActivity(miIntent);
		}
		else
			Log.i("ghesn", "Error");
	}
	

}
