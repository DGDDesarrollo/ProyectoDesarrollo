package controladores;

import android.content.Context;
import android.util.Log;
import ayuda.Util;

public class MensajePopUp {

	public static void notificarLongitudPassword(Context contexto){
		Util.Alert(contexto,"El password no puede sobrepasar los 50 caracteres");
	}
	
	public static void notificarConfirmacionPassword(Context contexto){
		Util.Alert(contexto,"El password no coincide con su confirmacion");
	}
	
	public static void notificarDisponibilidadEmail(Context contexto){
		Util.Alert(contexto,"El email especificado ya está registrado");
	}
	
	public static void notificarLongitudEmail(Context contexto){
		Util.Alert(contexto,"El email no puede sobrepasar los 100 caracteres");
	}
	
	public static void notificarFormatoEmail(Context contexto){
		Util.Alert(contexto,"Formato de Email invalido");
	}
	
	public static void notificarLongitudNombre(Context contexto){
		Util.Alert(contexto,"El nombre no puede sobrepasar los 50 caracteres");
	}
	
	public static void notificarCampoNulo(Context contexto, String campo){
		Util.Alert(contexto,"El campo "+campo+" no puede estar vacio");
	}
}
