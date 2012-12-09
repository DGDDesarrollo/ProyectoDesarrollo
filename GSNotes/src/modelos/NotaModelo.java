package modelos;

import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;

import org.json.JSONArray;

import android.util.Log;

import persistencia.WebService;

public class NotaModelo {

	private Integer id;
	private String titulo;
	private String texto;
	private ArrayList<EtiquetaModelo> etiquetas;
	private ArrayList<ArchivoModelo> adjuntos;
	
	
	public NotaModelo(Integer id, String titulo, String texto) {
		super();
		this.id = id;
		this.titulo = titulo;
		this.texto = texto;
		this.etiquetas = new ArrayList<EtiquetaModelo>();
		this.adjuntos = new ArrayList<ArchivoModelo>();
	}
	
	public Integer getId(){
		return id;
	}
	
	public String getTitulo() {
		return titulo;
	}
	
	public String getTexto() {
		return texto;
	}
	
	public ArrayList<EtiquetaModelo> getEtiquetas() {
		return etiquetas;
	}
	
	public ArrayList<ArchivoModelo> getAdjuntos() {
		return adjuntos;
	}
	
	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	
	public void setTexto(String texto) {
		this.texto = texto;
	}
	
	public void setId(Integer id) {
		this.id = id;
	}
	
	public void setEtiquetas(ArrayList<EtiquetaModelo> etiquetas) {
		this.etiquetas = etiquetas;
	}
	
	public void setAdjuntos(ArrayList<ArchivoModelo> adjuntos) {
		this.adjuntos = adjuntos;
	}
	
	public boolean agregarEtiqueta(EtiquetaModelo etiqueta){
		return this.etiquetas.add(etiqueta);
	}
	
	public boolean agregarAdjunto(ArchivoModelo archivo){
		return this.adjuntos.add(archivo);
	}

	public String getNombreYDescripcion(){
		if (this.texto != null)
			if (this.texto.length()>20)
				return this.titulo +": "+ this.texto.substring(0, 20)+"...";
			else
				return this.titulo +": "+ this.texto+"...";
		else
			return this.titulo+"...";
	}
	
	public String getDescripcion(){
		if (this.texto != null)
			if (this.texto.length()>25)
				return this.texto.substring(0, 25)+"...";
			else
				return this.texto+"...";
		else
			return "...";
	}
	
	public String[] getArregloEtiquetas(){
		if (etiquetas.isEmpty())
			return new String[0];
		else {
			Object[] arregloEtiquetas = this.etiquetas.toArray();
			String[] arregloStrings = new String[arregloEtiquetas.length];
			for (int i = 0; i < arregloEtiquetas.length; i++) {
				arregloStrings[i] = ((EtiquetaModelo) arregloEtiquetas[i]).getNombre();
			}
			return arregloStrings;
		}
		
	}

	@Override
	public boolean equals(Object o) {

		if (o instanceof NotaModelo){
			NotaModelo otraNota = (NotaModelo) o;
			return this.titulo.equals(otraNota.getTitulo());
		}
		
		return super.equals(o);
	}
	
	public boolean adjuntarArchivo(String nombreArchivo, String archivoBase64){
		HashMap<String, String> hash = new HashMap<String, String>();
		hash.put("nombre", nombreArchivo);
		hash.put("base_64file",archivoBase64);
		String respuesta = WebService.post("nota/adjuntar", hash);
		try{
			
		}catch (Exception e){
			e.printStackTrace();
		}
		return false;
	}
	
	public void actualizarEtiquetas(ArrayList<EtiquetaModelo> etiquetas){
		
		HashMap<String, String> hash = new HashMap<String, String>();
		hash.put("nota", this.id.toString());
		
		for (int i = 0; i < etiquetas.size(); i++) 
			hash.put("etiquetas[]", etiquetas.get(i).getNombre());
		
		String respuesta = WebService.post("etiqueta/actualizarEtiquetas", hash);
		
		if (!respuesta.equals("Error")){
			this.etiquetas = etiquetas;
		}
			
	}
	
	public void actualizarTituloYTexto(String nuevoTitulo, String nuevoTexto){
		
		HashMap<String, String> hash = new HashMap<String, String>();
		hash.put("id", this.id.toString());
		hash.put("titulo", nuevoTitulo);
		hash.put("texto", nuevoTexto);
		
		String respuesta = WebService.post("nota/actualizar", hash);
		Log.i("ghesn", respuesta);
		
		if (!respuesta.equals("Error")){
			this.titulo = nuevoTitulo;
			this.texto = nuevoTexto;
		}
	}
}
