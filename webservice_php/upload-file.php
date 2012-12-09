<?php

require_once 'google_api/Google_Client.php';
require_once 'google_api/contrib/Google_DriveService.php';


$file = 'test.pdf';

DEFINE('CLIENT_ID','730763475833.apps.googleusercontent.com');
DEFINE('CLIENT_SECRET','mYdMNDN9d0vEVRdbxRnKdhJF');
DEFINE('REDIRECT_URI','http://localhost/ghesnservice/upload-file.php');
DEFINE('APP_NAME','test');
DEFINE('API_KEY','AIzaSyCX8NCq7B2KoEc39xChJopceAdwbhVuKQc');

// Set your cached access token. Remember to replace $_SESSION with a
// real database or memcached.
session_start();

$client = new Google_Client();
$client->setUseObjects(true);
$client->setApplicationName(APP_NAME);
$client->setClientId(CLIENT_ID);
$client->setClientSecret(CLIENT_SECRET);
$client->setRedirectUri(REDIRECT_URI);
$client->setDeveloperKey(API_KEY);


$drive = new Google_DriveService($client);

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
	  $files = $drive->files->listFiles();
	  foreach($files->getItems() as $file){
			$name=$file->getOriginalFilename();
			$url=$file->getDownloadUrl();
			if(!empty($name))
				echo "<a href='$url'>$name</a><br/>";
	  }

} else {
  $authUrl = $client->createAuthUrl();
  print "<a href='$authUrl'>Connect Me!</a>";
}

/**
 * Download a file's content.
 *
 * @param Google_DriveService $service Drive API service instance.
 * @param File $file Drive File instance.
 * @return String The file's content if successful, null otherwise.
 */
function downloadFile($service, $file) {
  $downloadUrl = $file->getDownloadUrl();
  if ($downloadUrl) {
    $request = new Google_HttpRequest($downloadUrl, 'GET', null, null);
    $httpRequest = Google_Client::$io->authenticatedRequest($request);
    if ($httpRequest->getResponseHttpCode() == 200) {
      return $httpRequest->getResponseBody();
    } else {
      // An error occurred.
      return null;
    }
  } else {
    // The file doesn't have any content stored on Drive.
    return null;
  }
}