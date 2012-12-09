<?php defined('SYSPATH') or die('No direct script access.');

class Controller_GoogleDrive extends Controller {

	public function action_index()
	{
            $google = new Model_GoogleDrive();

            if($google->is_google_drive_connect()){
                  echo "True";
            }else{
                  echo "False";
            }
	}


        public function action_download(){

            $file=$_POST['file'];
            $google = new Model_GoogleDrive();

            $content=$google->getFileContent($file);
            if($content){
                echo base64_encode($content);
            }else
                echo "Error";
        }

        public function action_authentication_1()
        {
            @session_start();
            $_SESSION['email']=$_GET['email'];
            $_SESSION['password']=$_GET['password'];
            
            
            $client = new Google_Client();
            $client->setUseObjects(true);
            $client->setApplicationName(APP_NAME);
            $client->setClientId(CLIENT_ID);
            $client->setClientSecret(CLIENT_SECRET);
            $client->setRedirectUri(REDIRECT_URI);
            $client->setDeveloperKey(API_KEY);


            $drive = new Google_DriveService($client);

            
            $authUrl = $client->createAuthUrl();
            $this->redirect($authUrl);
            
            
        }

        
        public function action_authentication_2()
        {
            $token='';
            @session_start();
            
            $client = new Google_Client();
            $client->setUseObjects(true);
            $client->setApplicationName(APP_NAME);
            $client->setClientId(CLIENT_ID);
            $client->setClientSecret(CLIENT_SECRET);
            $client->setRedirectUri(REDIRECT_URI);
            $client->setDeveloperKey(API_KEY);

            $drive = new Google_DriveService($client);
            
            $client->authenticate();
            
            $token = $client->getAccessToken();
                  
            
            
            $builder = DB_ORM::select('Usuario');
            $builder->where('EMAIL','=',$_SESSION['email']);
            $builder->where('PASSWORD','=',$_SESSION['password']);
            $models=$builder->query();            
            $usuario =$models[0];
            $email=$_SESSION['email'];
            $password=$_SESSION['password'];


            $usuario->TOKEN = serialize($token);


            $usuario->update();
            
             $this->redirect("Welcome/index?email=$email&password=$password");
            
        }

} // End Welcome