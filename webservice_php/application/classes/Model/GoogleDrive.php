<?php defined('SYSPATH') or die('No direct script access.');

class Model_GoogleDrive extends Model {

  public function do_uploadFile($filepath){

            $client = new Google_Client();
            $client->setUseObjects(true);
            $client->setApplicationName(APP_NAME);
            $client->setClientId(CLIENT_ID);
            $client->setClientSecret(CLIENT_SECRET);
            $client->setRedirectUri(REDIRECT_URI);
            $client->setDeveloperKey(API_KEY);


            $drive = new Google_DriveService($client);

            $client->setAccessToken(unserialize(
               Model_Leap_Usuario::getUsuarioActual()->TOKEN
             ));
			//Insert a file
            $file = new Google_DriveFile();
            $file->setTitle(basename($filepath));
            $file->setDescription(basename($filepath).' ARCHIVO SUBIDO CON GSNote!! ');
            $file->setMimeType('application/octet-stream');

            $data = file_get_contents($filepath);

            $createdFile = $service->files->insert($file, array(
                  'data' => $data,
                  'mimeType' => 'application/octet-stream',
                ));

            return $createdFile;
  }

    public function getFileContent($file){

        try{
            $client = new Google_Client();
            $client->setUseObjects(true);
            $client->setApplicationName(APP_NAME);
            $client->setClientId(CLIENT_ID);
            $client->setClientSecret(CLIENT_SECRET);
            $client->setRedirectUri(REDIRECT_URI);
            $client->setDeveloperKey(API_KEY);


            $drive = new Google_DriveService($client);

            $client->setAccessToken(unserialize(
               Model_Leap_Usuario::getUsuarioActual()->TOKEN
             ));

             $files=$drive->files->listFiles(array( 'q' =>$file )) ;

             foreach($files as $file){
                 if($file->getDownloadUrl())
                         return file_get_contents ($file->getDownloadUrl());
             }
        }catch(Exception $e){
           // echo $e->getMessage();
            return false;
        }


            return false;
  }
    public function is_google_drive_connect(){

        try{
            $client = new Google_Client();
            $client->setUseObjects(true);
            $client->setApplicationName(APP_NAME);
            $client->setClientId(CLIENT_ID);
            $client->setClientSecret(CLIENT_SECRET);
            $client->setRedirectUri(REDIRECT_URI);
            $client->setDeveloperKey(API_KEY);


            $drive = new Google_DriveService($client);

            $client->setAccessToken(unserialize(
               Model_Leap_Usuario::getUsuarioActual()->TOKEN 
             ));
            
             $drive->about->get() ;

            
        }catch(Exception $e){
           // echo $e->getMessage();
            return false;
        }


            return true;
  }


}