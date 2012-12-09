package modelos;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.json.JSONArray;
import org.json.JSONObject;

import android.util.Log;

import persistencia.WebService;

public class LibretaModelo {

	private String nombre;
	private List<NotaModelo> notas;
	
	
	public LibretaModelo(String nombre) {
		this.nombre = nombre;
		this.notas = new ArrayList<NotaModelo>();
	}

	public String getNombre() {
		return nombre;
	}

	public List<NotaModelo> getNotas() {
		return notas;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public void setNotas(List<NotaModelo> notas) {
		this.notas = notas;
	}
	
	public boolean agregarNota(NotaModelo nota){
		HashMap<String, String> hash = new HashMap<String, String>();
		hash.put("titulo", nota.getTitulo());
		hash.put("texto", nota.getTexto());
		hash.put("libreta", this.nombre);
		
		String respuesta = WebService.post("nota/crear",hash);
		if (respuesta.trim().equals("Error")){
			return false;
		}

		nota.setId(Integer.valueOf(respuesta.trim()));
		return this.notas.add(nota);
	}
	
	public NotaModelo buscarNota(Integer id){
		for (NotaModelo nota : notas)
			if (nota.getId() == id)
				return nota;
		return null;
	}
	
	public NotaModelo buscarNota(String id){
		return buscarNota(Integer.valueOf(id));
	}
	
	@Override
	public boolean equals(Object o) {
		
		if (o instanceof LibretaModelo){
			LibretaModelo otraLibreta = (LibretaModelo) o;
			return this.nombre.equals(otraLibreta.getNombre());
		}
		
		return super.equals(o);
	}
	
	public boolean modificarLibreta(String nuevoNombreLibreta){
		try {
			HashMap<String, String> hash = new HashMap<String, String>();
			hash.put("libreta", this.nombre);
			hash.put("nuevo", nuevoNombreLibreta);
			String respuesta = WebService.post("libreta/actualizar", hash);
			Log.i("ghesn", respuesta);
			if (!respuesta.equals("Error"))
				this.nombre = nuevoNombreLibreta;
			
		}catch (Exception e){
			e.printStackTrace();
		}
		
		return false;
	}	
	
	public void sincronizarNotas(){
		HashMap<String, String> hash = new HashMap<String, String>();
		hash.put("libreta", this.nombre);
		String contenido = WebService.post("nota/obtener", hash);
		try {
			JSONArray arregloNotas = new JSONArray(contenido);
			for (int i = 0; i < arregloNotas.length(); i++) {
				JSONObject notaJSON = arregloNotas.getJSONObject(i);
				NotaModelo nota = new NotaModelo(notaJSON.getInt("ID"),
						notaJSON.getString("TITULO"),
						notaJSON.getString("TEXTO").replaceFirst("null", ""));
				JSONArray arregloEtiquetas = notaJSON.getJSONArray("ETIQUETAS");
				for (int j = 0; j < arregloEtiquetas.length(); j++) {
					JSONObject etiquetaJSON = arregloEtiquetas.getJSONObject(j);
					EtiquetaModelo etiqueta = new EtiquetaModelo(
							etiquetaJSON.getString("NOMBRE"));
					nota.agregarEtiqueta(etiqueta);
				}
				if (!this.notas.contains(nota)){
					notas.add(nota);
				}
			}
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}
	
}
