package ayuda;

import controladores.Comunicacion;
import vistas.BienvenidoVista;
import modelos.EtiquetaModelo;
import modelos.LibretaModelo;
import modelos.NotaModelo;
import android.content.Context;
import android.opengl.Visibility;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.view.ViewGroup.LayoutParams;
import android.view.ViewGroup.MarginLayoutParams;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TableLayout;
import android.widget.TextView;

public class ConstructorInterfaz {
	
	public static void agregarLibreta(final Context contexto, LinearLayout layout, final LibretaModelo libreta){
		
		TextView textView = new TextView(layout.getContext());
        textView.setText((CharSequence) (libreta.getNombre()));
        textView.setClickable(true);
        textView.setOnClickListener(new OnClickListener() {
			
			public void onClick(View v) {
				Comunicacion.editarLibreta(contexto, libreta.getNombre());
			}
		});
        
		layout.addView(textView);
	}
	
	public static void agregarNota(final Context contexto, LinearLayout layout, final NotaModelo nota){
		LinearLayout layoutNota = new LinearLayout(layout.getContext());
		layoutNota.setPadding(20, 0, 0, 0);
		layoutNota.setOrientation(LinearLayout.HORIZONTAL);
		layoutNota.requestLayout();
		layoutNota.setClickable(true);
		layoutNota.setOnClickListener(new OnClickListener() {
			
			public void onClick(View v) {
				Comunicacion.editarNota(contexto, nota.getId());
			}
		});
		
		TextView textViewTituloNota = new TextView(layout.getContext());
		textViewTituloNota.setText((CharSequence) ("- "+nota.getTitulo()+": "));
		textViewTituloNota.setId(nota.getId());
		layoutNota.addView(textViewTituloNota);
		
		TextView textViewDescripcionNota = new TextView(layout.getContext());
		textViewDescripcionNota.setText(nota.getDescripcion());
		layoutNota.addView(textViewDescripcionNota);
		layout.addView(layoutNota);
	}
	
	public static EditText construirEditText(LinearLayout layout){
		
		EditText editText = new EditText(layout.getContext());
		MarginLayoutParams editTextLayoutParams = new ViewGroup.MarginLayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT);
		editTextLayoutParams.setMargins(50, 50, 50, 50);
		editText.requestLayout();
		editText.setLayoutParams(editTextLayoutParams);
		editText.requestLayout();
		
		return editText;
	}
	
	public static void agregarEtiqueta(final LinearLayout scrollLayout, String etiqueta){
		
		final TextView textViewEtiqueta = new TextView(scrollLayout.getContext());
		textViewEtiqueta.setText(etiqueta);
		textViewEtiqueta.setClickable(true);
		textViewEtiqueta.setOnClickListener(new OnClickListener() {
			
			public void onClick(View arg0) {
				scrollLayout.removeView(textViewEtiqueta);
			}
		});
		
		scrollLayout.addView(textViewEtiqueta);
	}
}
