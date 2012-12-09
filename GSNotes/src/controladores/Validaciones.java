package controladores;

import android.content.Context;
import android.util.Log;

public class Validaciones {

	private static boolean validarPassword(Context contexto, String password, String passwordConfirm){
		if (password.length()<1)
			MensajePopUp.notificarCampoNulo(contexto, "Password");
		else if (passwordConfirm.length()<1)
			MensajePopUp.notificarCampoNulo(contexto, "Confirme password");
		else {
			if (password.equals(passwordConfirm))
				if (password.length() <51)
					return true;
				else
					MensajePopUp.notificarLongitudPassword(contexto);
			else
				MensajePopUp.notificarConfirmacionPassword(contexto);
		}
		return false;
	}
	
	private static boolean verificarDisponibilidadEmail(Context contexto, String email){
		return true;
	}
	
	private static boolean validarEmail(Context contexto, String eMail){
    	if (eMail.length()>1)
			if (verificarDisponibilidadEmail(contexto, eMail))
				if (eMail.length() < 101)
					if (eMail.split("@").length == 2)
						return true;
					else
						MensajePopUp.notificarFormatoEmail(contexto);
				else
					MensajePopUp.notificarLongitudEmail(contexto);
			else
				MensajePopUp.notificarDisponibilidadEmail(contexto);
    	else
    		MensajePopUp.notificarCampoNulo(contexto, "Email");
		return false;
	}
	
	private static boolean validarNombreUsuario(Context contexto, String nombre){
    	if (nombre.length()>1)
			if (nombre.length() < 51)
				return true;
			else
				MensajePopUp.notificarLongitudNombre(contexto);
    	else
    		MensajePopUp.notificarCampoNulo(contexto, "Nombre");
		return false;
	}
	
	public static boolean validarRegistro(Context contexto, String nombre, String email, String password, 
			String passwordConfirm){
		
		return validarNombreUsuario(contexto, nombre) && validarEmail(contexto, email) &&
				validarPassword(contexto, password, passwordConfirm);
	}
	
	public static boolean validarInicioSesion(Context contexto, String eMail, String password){
		return validarEmail(contexto, eMail);
	}
}