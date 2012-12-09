<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-07 16:39:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\wamp\www\application\classes\Controller\Welcome.php:9
2012-12-07 16:39:23 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\app...', 9, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(142): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\Welcome.php:9
2012-12-07 16:39:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in C:\wamp\www\application\classes\Controller\Welcome.php:10
2012-12-07 16:39:34 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\Welcome.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\app...', 10, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(142): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\Welcome.php:10
2012-12-07 16:44:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\wamp\www\application\classes\Controller\Welcome.php:9
2012-12-07 16:44:38 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\app...', 9, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(142): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\Welcome.php:9
2012-12-07 17:55:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Libreta::get() ~ APPPATH\classes\Controller\Libreta.php [ 34 ] in :
2012-12-07 17:55:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-07 17:55:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Libreta::get() ~ APPPATH\classes\Controller\Libreta.php [ 34 ] in :
2012-12-07 17:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-07 17:56:11 --- CRITICAL: ErrorException [ 4096 ]: Object of class DB_ResultSet could not be converted to string ~ APPPATH\classes\Controller\Libreta.php [ 33 ] in C:\wamp\www\application\classes\Controller\Libreta.php:33
2012-12-07 17:56:11 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\Libreta.php(33): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\app...', 33, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(142): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\Libreta.php:33
2012-12-07 17:57:43 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Libreta.php [ 34 ] in C:\wamp\www\application\classes\Controller\Libreta.php:34
2012-12-07 17:57:43 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\Libreta.php(34): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\app...', 34, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(142): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\Libreta.php:34