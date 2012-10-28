package helper;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.StatusLine;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

import android.util.Log;

public class WebService {

	public static String get(){
		return get("index.php");
	}
	public static String get(String page, String function, String[] strs){
		String script=page+"?";
		script+="funcion="+function+"&";
		for(int i=0;i<strs.length;i+=2)
			script+=strs[i]+"="+strs[i+1]+"&";
		Log.i("ghesnURL","http://10.0.2.2/"+script);
		return get(script);		
	}
	 public static String get(String script) {
		    StringBuilder builder = new StringBuilder();
		    HttpClient client = new DefaultHttpClient();
		    HttpGet httpGet = new HttpGet("http://10.0.2.2/"+script);
			Log.i("ghesnHttpGet","http://10.0.2.2/"+script);
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
}
