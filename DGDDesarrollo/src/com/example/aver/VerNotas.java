/**
 * 
 */
package com.example.aver;

import controlador.Logica;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.RelativeLayout;

/**
 * @author Gasune
 *
 */
public class VerNotas extends Activity {
	String[][] notas;
	public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.consultar_nota);

        
        notas= Logica.getInstance().listarNotas("gslivedt@gmail.com");
        Button bt;
        LinearLayout RL = (LinearLayout) findViewById(R.id.consultarId1);
        

    	Log.i("ghesn","size:"+notas.length);
    	
        for(int i=0;i<notas[0].length;i++){
        	String key= notas[0][i];
        	String value= notas[1][i];
        	
        	Log.i("ghesn","VALUE: "+value);

        	bt = new Button(this);
        	bt.setText(value);
        	RL.addView(bt,RL.getChildCount());
            bt.setLayoutParams(new LinearLayout.LayoutParams(100, 50));
            
        }
        
	}
	
	public void irHome(View home){
		Intent miIntent = new Intent(VerNotas.this, Home.class);
		VerNotas.this.startActivity(miIntent);
	}
	
}
