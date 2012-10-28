package com.example.aver;

import controlador.Logica;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class CrearNota extends Activity {
	
	public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.crear_nota);
	}
	
	public void irHome(View home){
		Intent miIntent = new Intent(CrearNota.this, Home.class);
		CrearNota.this.startActivity(miIntent);
	}
	
	public void guardarNota(View nota){
		EditText title = (EditText) this.findViewById(R.id.editText2);
		EditText text = (EditText) this.findViewById(R.id.editText1);
		String titulo = title.getText().toString().trim();
		String texto = text.getText().toString().trim();
		String email = "gslivedt@gmail.com";
		if (Logica.getInstance().crearNota(email, titulo, texto)){
			Intent miIntent = new Intent(CrearNota.this, Home.class);
			CrearNota.this.startActivity(miIntent);
		}
	}

}
