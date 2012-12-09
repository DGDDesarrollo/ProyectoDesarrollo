package vistas;

import com.example.gdnotes.R;
import com.example.gdnotes.R.layout;
import com.example.gdnotes.R.menu;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;

public class ArchivosVista extends Activity {

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_archivos_vista);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_archivos_vista, menu);
        return true;
    }
}
