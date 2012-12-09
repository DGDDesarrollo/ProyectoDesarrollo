package ayuda;

import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Handler;
import android.os.Looper;
import android.os.Message;

public class Util {
	
	static boolean lastconfirm=false;
	
	public static void IntentActivity(Context pack,Class<?>  cls){
    	Intent in= new Intent(pack, cls);
		pack.startActivity(in);
	}
	
	public static boolean Confirm(Context context, String message){

		// make a handler that throws a runtime exception when a message is received
	    final Handler handler = new Handler() {
	        @Override
	        public void handleMessage(Message mesg) {
	            throw new RuntimeException();
	        } 
	    };

		
		AlertDialog.Builder confirm = new AlertDialog.Builder(context);
		
		confirm.setTitle("Confirmar");
		confirm.setMessage(message);
		confirm.setPositiveButton("Aceptar",
				new DialogInterface.OnClickListener() {
					public void onClick(DialogInterface dialog, int which) {
						lastconfirm=true;
						
						handler.sendMessage(handler.obtainMessage());
					}
				});

		confirm.setNegativeButton("Cancelar",
				new DialogInterface.OnClickListener() {
					public void onClick(DialogInterface dialog, int which) {
						lastconfirm=false;
						handler.sendMessage(handler.obtainMessage());
					}
				});
		
		confirm.show();

	    // loop till a runtime exception is triggered.
	    try { Looper.loop(); }
	    catch(RuntimeException unused) {}
	    
		return lastconfirm;
	}
	public static void Alert(Context context, String message){		
		Alert(context,message,"Error!");
	}
	public static void Alert(Context context, String message, String titulo){		
		// make a handler that throws a runtime exception when a message is received
	    final Handler handler = new Handler() {
	        @Override
	        public void handleMessage(Message mesg) {
	            throw new RuntimeException();
	        } 
	    };

		 AlertDialog.Builder alert = new AlertDialog.Builder(context);
		 alert.setTitle(titulo);
		 alert.setMessage(message);
		 alert.setPositiveButton("Aceptar",
				new DialogInterface.OnClickListener() {
					public void onClick(DialogInterface dialog, int which) {

						handler.sendMessage(handler.obtainMessage());
					}
				});

		 alert.show();

	    // loop till a runtime exception is triggered.
	    try { Looper.loop(); }
	    catch(RuntimeException unused) {}

	}
}
