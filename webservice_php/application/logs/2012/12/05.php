<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-05 22:00:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\GoogleDrive.php [ 11 ] in :
2012-12-05 22:00:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 22:02:37 --- CRITICAL: ErrorException [ 1 ]: Class 'OAuth_Provider_drive' not found ~ MODPATH\oauth\classes\kohana\oauth\provider.php [ 28 ] in :
2012-12-05 22:02:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 22:03:12 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required parameter to not passed: scope ~ MODPATH\oauth\classes\kohana\oauth\provider\google.php [ 47 ] in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:03:12 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\GoogleDrive.php(15): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer))
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:04:15 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required parameter to not passed: scope ~ MODPATH\oauth\classes\kohana\oauth\provider\google.php [ 47 ] in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:04:15 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\GoogleDrive.php(15): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer))
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:04:16 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required parameter to not passed: scope ~ MODPATH\oauth\classes\kohana\oauth\provider\google.php [ 47 ] in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:04:16 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\GoogleDrive.php(15): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer))
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:04:17 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required parameter to not passed: scope ~ MODPATH\oauth\classes\kohana\oauth\provider\google.php [ 47 ] in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:04:17 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\GoogleDrive.php(15): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer))
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\GoogleDrive.php:15
2012-12-05 22:06:55 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required parameter to not passed: scope ~ MODPATH\oauth\classes\kohana\oauth\provider\google.php [ 47 ] in C:\wamp\www\application\classes\Controller\GoogleDrive.php:14
2012-12-05 22:06:55 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer))
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\GoogleDrive.php:14
2012-12-05 22:08:16 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant CURLOPT_CONNECTTIMEOUT - assumed 'CURLOPT_CONNECTTIMEOUT' ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 471 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:471
2012-12-05 22:08:16 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(471): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\mod...', 471, Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:471
2012-12-05 22:09:29 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=drive [ status 0 ] SSL certificate problem, verify that the CA cert is OK. Details:
error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed ~ MODPATH\oauth\classes\kohana\oauth.php [ 72 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:09:29 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:16:14 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=drive [ status 0 ] SSL certificate problem, verify that the CA cert is OK. Details:
error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed ~ MODPATH\oauth\classes\kohana\oauth.php [ 73 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:16:14 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:17:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ch ~ MODPATH\oauth\classes\kohana\oauth.php [ 42 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth.php:42
2012-12-05 22:17:22 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mod...', 42, Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#4 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#6 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#9 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth.php:42
2012-12-05 22:17:44 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=drive [ status 0 ] SSL certificate problem, verify that the CA cert is OK. Details:
error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:17:44 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:20:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ch ~ MODPATH\oauth\classes\kohana\oauth.php [ 47 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth.php:47
2012-12-05 22:20:24 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\mod...', 47, Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#4 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#6 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#9 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth.php:47
2012-12-05 22:20:34 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=drive [ status 400 ] Consumer is not registered: AIzaSyCX8NCq7B2KoEc39xChJopceAdwbhVuKQc

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:20:34 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:22:04 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=drive [ status 400 ] Invalid scope: drive

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:22:04 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:22:18 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=Drive [ status 400 ] Invalid scope: Drive

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:22:18 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:23:15 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope=drive.file [ status 400 ] Invalid scope: drive.file

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:23:15 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:23:27 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetRequestToken?scope= [ status 400 ] Invalid scope parameter.

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:23:27 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\token.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(143): Kohana_OAuth_Request_Token->execute()
#3 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider\google.php(52): Kohana_OAuth_Provider->request_token(Object(OAuth_Consumer), Array)
#4 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer), Array)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:23:39 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required parameter to not passed: scope ~ MODPATH\oauth\classes\kohana\oauth\provider\google.php [ 47 ] in C:\wamp\www\application\classes\Controller\GoogleDrive.php:14
2012-12-05 22:23:39 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\GoogleDrive.php(14): Kohana_OAuth_Provider_Google->request_token(Object(OAuth_Consumer))
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\GoogleDrive.php:14
2012-12-05 22:37:44 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FZbIz4zMcLIiyqxpkTIZLyRdbUxzy [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DqFeYIPZsKvuNQEzHpPFndxmNbEJsG1ojwWFBdm6N%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354768663%26oauth_token%3D4%252FZbIz4zMcLIiyqxpkTIZLyRdbUxzy%26oauth_verifier%3DsYlcs6ssQrr0EyqsuOFKaKyQ%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FZbIz4zMcLIiyqxpkTIZLyRdbUxzy

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:37:44 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(37): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:37:56 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DE8ZAlOaL0HU6f7dEm07RfN3YnHRtO8wTXyKjRyAc%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354768676%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:37:56 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(37): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:41:24 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Required option not passed: token ~ MODPATH\oauth\classes\kohana\oauth\token.php [ 55 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\token.php:27
2012-12-05 22:41:24 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\token.php(27): Kohana_OAuth_Token->__construct(Array)
#1 C:\wamp\www\application\classes\Controller\GoogleDrive.php(36): Kohana_OAuth_Token::factory('request', Array)
#2 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\token.php:27
2012-12-05 22:41:57 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?callback=http%3A%2F%2Flocalhost%2Findex.php%2FgoogleDrive%2Fauthentication_2&key=730763475833.apps.googleusercontent.com&secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&callback%3Dhttp%253A%252F%252Flocalhost%252Findex.php%252FgoogleDrive%252Fauthentication_2%26key%3D730763475833.apps.googleusercontent.com%26oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DjOaTph0UryznIxp4aKPy6iBD3VxDcGwRvUF65syN%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354768916%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:41:57 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(36): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:44:37 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?callback=http%3A%2F%2Flocalhost%2Findex.php%2FgoogleDrive%2Fauthentication_2&key=730763475833.apps.googleusercontent.com&secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&callback%3Dhttp%253A%252F%252Flocalhost%252Findex.php%252FgoogleDrive%252Fauthentication_2%26key%3D730763475833.apps.googleusercontent.com%26oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DGwJk5wIZtbyN2yKV0057bpD7kHVTCN7grpo2KvVS%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769077%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:44:37 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(38): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:45:10 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DBFCD4XOTwJEglDffuwebvFNt1AueouOMw8XKmPbR%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769109%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:45:10 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(37): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:45:13 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DMXoqXYgzRL1NQA74JWGTM8O8GO62HkVQtDoqSiyf%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769112%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:45:13 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(506): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(37): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:506
2012-12-05 22:51:25 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:25 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:27 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:27 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:50 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:50 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:51 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:51:51 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:52:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ MODPATH\oauth\classes\kohana\oauth\response.php [ 17 ] in :
2012-12-05 22:52:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-05 22:52:21 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:52:21 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:55:13 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:55:13 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:55:16 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Request to https://www.google.com/accounts/OAuthGetAccessToken requires missing parameter "oauth_verifier" ~ MODPATH\oauth\classes\kohana\oauth\request.php [ 444 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:55:16 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(466): Kohana_OAuth_Request->check()
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:466
2012-12-05 22:57:36 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DJRGHf9sVGbx43H5y4sWP9WOiHREMJ73V1emj7mgS%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769856%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:57:36 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:57:39 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3Dj3rfE70TECa7F79hWGOnjzYJ6IZVNQkW5SoU2Jfe%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769858%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:57:39 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:58:04 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DKo8dXW1o7CHvm1xrrkA4YZO1h6tHI91sKKxN8I3R%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769884%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:58:04 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:59:05 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DUhMjuWfwBqjpOC6eTPDwfJ5LJ39PPfnWLJHHoFYu%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769945%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:59:05 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:59:07 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DXotVeCzYb56juKj7OlqanodJJepEWHWTzulisJxU%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354769946%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 22:59:07 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:00:03 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DOnz3kq7R89KuW8ME2k8qDFiiSLYQYsaXTE1vRNCC%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770002%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:00:03 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:00:05 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB&verifier=OwUIrVN4IiR9gT18lZ5wCHji [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DjjXSQM08laGKKuOeqSnKRSZth86mrZQSdzTZJHli%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770005%26oauth_token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26oauth_verifier%3DOwUIrVN4IiR9gT18lZ5wCHji%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252Fx5zq3AgR1NwwlPUhvLTD2mS7mbBB%26verifier%3DOwUIrVN4IiR9gT18lZ5wCHji

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:00:05 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:00:22 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DePQfWvBSiUeFDO9PqoRRnbWxkM3ThXpdKr6iUpXs%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770021%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:00:22 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:01:02 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3D3hzLa6JiqikCYJk2PjYsYn7GP5AVs69sSeToZxcQ%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770062%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:01:02 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:01:04 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DANnQ5tKthUrpwq5KsOVHj15XrtJR5wd9YVmveZ3p%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770064%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:01:04 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:01:06 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DPYxsb1AGqzEkFFav5Uq2cAszjUkYRSoBGPUB0cXS%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770065%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:01:06 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(206): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:04:36 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DvlgcTGpeFlRM26siL6Srrhy3D9nO3xC9mesYcfu8%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770275%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:04:36 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(208): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:04:36 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DoGNjG2U1SoYeZCwByLhpEQotUeAJxebxsWBJ9HOu%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770276%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:04:36 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(208): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:06:38 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DyjElxzY89IhCJbx7w7fHhnDh3IrdpO5dSOEi3i7v%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770397%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:06:38 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(207): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:06:54 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DPaASgBz1bEKPMXZrXVKQld6uNvEUPEvOZrZS9sWT%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770414%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:06:54 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(207): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:11:38 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DgYnJ4hokKDDnZIbBIM1RkoaDKQiVuMwmXsbFy9k3%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354770698%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 75 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:11:38 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(207): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:22:44 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DunpRhycW37MZPCnWHBLCpP0XChKROvJvKYnwJoTW%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771363%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:22:44 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(210): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request))
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:27 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DsQqTakalIKvAYgasTlqnrkex2Yq9fzaWLhJumyhb%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771526%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:27 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(208): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:29 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3D9AiC0e6NNuPCCJWWRDxiHyGB4IMi3zqXwPEFNa5t%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771529%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:29 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(208): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:48 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3D623Vvtb3api4pM0Umb44unV2v8eBR5N5csHDvM0k%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771548%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:48 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(208): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:49 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DlYMLsJp48lBvCaZl7comAhJ06wiiXU6Sajzv0rCU%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771549%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:25:49 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(208): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:28:39 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=RSA-SHA1&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DJewSc8y5PfsUrPILLOwTDQhSm2wSX9sL0V40vlun%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771719%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3DRSA-SHA1%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:28:39 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(207): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:28:42 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=RSA-SHA1&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DoV4fsOF3q8dR3qOw7ftFf0FbSYIXYGftTConp55k%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771721%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3DRSA-SHA1%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:28:42 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(207): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:30:50 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] need to set public key with  OAuthConsumer.setProperty when verifying RSA-SHA1 signatures.
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DmjYa2ydCRnsyJLg4ezeLUiJEk8YswYkeP3X5AnEP%26oauth_signature_method%3DRSA-SHA1%26oauth_timestamp%3D1354771849%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:30:50 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(210): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:32:09 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3D8XqLq26WdVKUgJEqjb85nFvDkHeRsnOOd5hxZ4Cj%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771929%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:32:09 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(210): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:32:21 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DwOzBHGB9HarT4YrLUALYfCkpHIJvm52yjQe2MADQ%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771941%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:32:21 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:33:11 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3D3hk4pUHi7twgMkJkl9GyOj0W4QJSJOujVixCYTUS%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771990%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:33:11 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:33:13 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DDOjBzIaft0KxPvbzDcsfiiqOr8dqpg3q2riNTY1e%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354771993%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:33:13 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:33:36 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DyEBWcxkHkLexbnDcXLIB1AMptqtcyX8GKL7nfewc%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772016%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:33:36 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:40:12 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=PLAINTEXT&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3D0aooqtTVyvzKjgM9AfErRpulTbzzK7DwGy8NYArK%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772411%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3DPLAINTEXT%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:40:12 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:41:20 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=plaintext&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] Signature method not supported.

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:41:20 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:41:36 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=plaintext&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DugV2UdrJCaqFLBF2hDrM86a4m4knyiH9FifsqAwx%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772496%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3Dplaintext%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:41:36 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:42:46 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=plaintext&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DWE1B4ZDeiu57nPZh8nqtXrhppuJGApF9SMrzeumO%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772565%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3Dplaintext%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:42:46 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:44:37 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=plaintext&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DFFbogoog6zAg1NRYs6pEv3jDF22qS5tuIggsVa3Q%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772676%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3Dplaintext%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:44:37 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:45:42 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&signature=plaintext&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DukMWQLhxSGMJI7IT0fKYJuESUMwVzQlTaF905oU5%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772742%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26signature%3Dplaintext%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:45:42 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(40): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:47:44 --- CRITICAL: Kohana_OAuth_Exception [ 0 ]: Error fetching remote https://www.google.com/accounts/OAuthGetAccessToken?secret=mYdMNDN9d0vEVRdbxRnKdhJF&token=4%2FDxTNiVaPqNJiN34WrZZqdQ9RFaOR&verifier=9vjubrFOlqFxtM029f-r6dWx [ status 400 ] signature_invalid
base_string:GET&https%3A%2F%2Fwww.google.com%2Faccounts%2FOAuthGetAccessToken&oauth_consumer_key%3D730763475833.apps.googleusercontent.com%26oauth_nonce%3DLjqfFFS5riByopnyA0pShNW7J0Vdp72PBIXLcKzb%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1354772864%26oauth_token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26oauth_verifier%3D9vjubrFOlqFxtM029f-r6dWx%26oauth_version%3D1.0%26secret%3DmYdMNDN9d0vEVRdbxRnKdhJF%26token%3D4%252FDxTNiVaPqNJiN34WrZZqdQ9RFaOR%26verifier%3D9vjubrFOlqFxtM029f-r6dWx

 ~ MODPATH\oauth\classes\kohana\oauth.php [ 77 ] in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505
2012-12-05 23:47:44 --- DEBUG: #0 C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php(505): Kohana_OAuth::remote('https://www.goo...', Array)
#1 C:\wamp\www\modules\oauth\classes\kohana\oauth\request\access.php(29): Kohana_OAuth_Request->execute(NULL)
#2 C:\wamp\www\modules\oauth\classes\kohana\oauth\provider.php(209): Kohana_OAuth_Request_Access->execute()
#3 C:\wamp\www\application\classes\Controller\GoogleDrive.php(39): Kohana_OAuth_Provider->access_token(Object(OAuth_Consumer), Object(OAuth_Token_Request), Array)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\modules\oauth\classes\kohana\oauth\request.php:505