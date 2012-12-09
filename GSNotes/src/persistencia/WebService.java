package persistencia;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.LinkedHashMap;
import java.util.Map;

import modelos.UsuarioModelo;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.StatusLine;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.apache.http.params.HttpParams;

import android.util.Log;

public class WebService {
	
	public final static String base_url = "http://10.0.2.2/Dropbox/GSNotes/index.php/";

	public static String addUser(String script){
		if(UsuarioModelo.getSingleton()!=null){			
			if(script.indexOf('?')>=0)
				script+='&';				
			else
				script+='?';			
			script+="email="+UsuarioModelo.getSingleton().getEmail()+"&password="+UsuarioModelo.getSingleton().getPassword();			
		}		
		return script;
	}
	
	public static String get(){
		return get("index.php");
	}
	
	public static String get(String ... strs){
		String script=strs[0]+"?";
		for(int i=1;i<strs.length;i+=2)
			script+=strs[i]+"="+strs[i+1]+"&";
		return get(script);		
	}
	
	 public static String get(String script) {
		    StringBuilder builder = new StringBuilder();
		    HttpClient client = new DefaultHttpClient();
		    HttpGet httpGet = new HttpGet(base_url+addUser(script));
			Log.i("ghesnHttpGet",base_url+script);
		    try {
		      HttpResponse response = client.execute(httpGet);
		      StatusLine statusLine = response.getStatusLine();
		      int statusCode = statusLine.getStatusCode();
		      if (statusCode == 200) {
		        HttpEntity entity = response.getEntity();
		        InputStream content = entity.getContent();
		        BufferedReader reader = new BufferedReader(new InputStreamReader(content));
		        String line;
		        while (  (line = reader.readLine()) != null) {
		          builder.append(line);
		        }
		      } else {
		        Log.i("ghesn", "Failed to download file");
		      }
		    } catch (ClientProtocolException e) {
		      e.printStackTrace();
		        Log.i("ghesn", "protocol Failed to download file");
		    } catch (IOException e) {
		      e.printStackTrace();
		        Log.i("ghesn", "lectura Failed to download file");
		    }
		    //Log.i("ghesn",builder.toString());
		    return builder.toString();
		  }
	 

	public static String post(String ... strs){
		String script=strs[0]+"?";
		HashMap<String, String> hash= new HashMap<String, String>();
		for(int i=1;i<strs.length;i+=2){
			hash.put(strs[i], strs[i+1]);
		}
		return post(script,hash);		
	}
		
	 public static String post(String script, Map<String, String> hash ) {
		    StringBuilder builder = new StringBuilder();
		    HttpClient client = new DefaultHttpClient();
		    HttpPost httpPost= new HttpPost(base_url+addUser(script));		    

		    ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
		    
		    for( String key :hash.keySet() ){
			    postParameters.add(new BasicNameValuePair(key, hash.get(key)));		    	
		    }
		    
		    try {
				httpPost.setEntity(new UrlEncodedFormEntity(postParameters));
			} catch (UnsupportedEncodingException unused) {
				unused.printStackTrace();
			}
		    
			Log.i("ghesnHttpPost",base_url+script);
		    try {
		      HttpResponse response = client.execute(httpPost);
		      StatusLine statusLine = response.getStatusLine();
		      int statusCode = statusLine.getStatusCode();
		      if (statusCode == 200) {
		        HttpEntity entity = response.getEntity();
		        InputStream content = entity.getContent();
		        BufferedReader reader = new BufferedReader(new InputStreamReader(content));
		        String line;
		        while (  (line = reader.readLine()) != null) {
		          builder.append(line);
		        }
		      } else {
		        Log.i("ghesn", "Failed to download file");
		      }
		    } catch (ClientProtocolException e) {
		      e.printStackTrace();
		        Log.i("ghesn", "protocol Failed to download file");
		    } catch (IOException e) {
		      e.printStackTrace();
		        Log.i("ghesn", "lectura Failed to download file");
		    }
		    //Log.i("ghesn",builder.toString());
		    return builder.toString();
		  }
}