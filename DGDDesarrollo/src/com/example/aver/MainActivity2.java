package com.example.aver;

import controlador.Logica;
import controlador.Nota;
import controlador.Usuario;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.view.View.OnClickListener;

public class MainActivity2 extends Activity{
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        
        TextView registrarse = (TextView) this.findViewById(R.id.TextView01);
        registrarse.setOnClickListener(accionLink);
        Button login = (Button) this.findViewById(R.id.button1);
    }
	
	View.OnClickListener accionLink = new View.OnClickListener() {
		@Override
		public void onClick(View v) {
			Intent miIntent = new Intent(MainActivity2.this, Registro.class);
			MainActivity2.this.startActivity(miIntent);
		}
	};
	
	public void enviarLogin(View login){
		EditText mail = (EditText) this.findViewById(R.id.editText1);
		EditText password = (EditText) this.findViewById(R.id.editText2);
		String email = mail.getText().toString();
		String pass = password.getText().toString();
		if (Logica.getInstance().iniciarSesionUsuario(email, pass) != null){
			Intent miIntent = new Intent(MainActivity2.this, Home.class);
			MainActivity2.this.startActivity(miIntent);
		}
		else
			Log.i("ghesn", "pass malo");
	}

	

}
