package com.example.aver;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Home extends Activity {
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.home_dos);
        
        Button crear = (Button) this.findViewById(R.id.button1);
    }

	public void crearNota(View crear){
		Intent miIntent = new Intent(Home.this, CrearNota.class);
		Home.this.startActivity(miIntent);
	}
	public void verNotas(View ver){
		Intent miIntent = new Intent(Home.this, VerNotas.class);
		Home.this.startActivity(miIntent);
	}

}
