package modelos;

import java.util.ArrayList;
import java.util.List;

public class ListaNotasModelo {

	/*private ArrayList<NotaModelo> notas;

	
	public ListaNotasModelo(ArrayList<NotaModelo> notas) {
		this.notas = notas;
	}
	
	public ListaNotasModelo(){
		this.notas = null;
	}
	
	public ArrayList<NotaModelo> ordenarPorFecha(ArrayList<NotaModelo> lista){
		if (!lista.isEmpty()){
			ArrayList<NotaModelo> listaOrdenada = null;
			NotaModelo referencia = lista.get(0);
			for (NotaModelo nota : lista){
				if (referencia.getFechacreacion().before(nota.getFechacreacion()))
					referencia = nota;
			}
			if (lista.remove(referencia)){
				listaOrdenada = ordenarPorFecha(lista);
				listaOrdenada.add(referencia);
			}
			return listaOrdenada;
		}
		else
			return null;
	}

	public ArrayList<NotaModelo> getNotas() {
		return notas;
	}

	public void setNotas(ArrayList<NotaModelo> notas) {
		this.notas = notas;
	}
	
	public boolean agregarNota(NotaModelo nota){
		return this.notas.add(nota);
	}*/
}
