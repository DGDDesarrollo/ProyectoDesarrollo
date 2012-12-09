<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-29 17:34:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::head() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in :
2012-11-29 17:34:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 17:34:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::header() ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in :
2012-11-29 17:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 17:48:05 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:48:05 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:48:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:48:17 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:49:31 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:49:31 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:49:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:49:51 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:50:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:50:00 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:50:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:50:12 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\system\classes\Kohana\Cookie.php:67
2012-11-29 17:51:30 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\modules\database\classes\Kohana\Database\MySQL.php:75
2012-11-29 17:51:30 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\modules\database\classes\Kohana\Database\MySQL.php(333): Kohana_Database_MySQL->query(1, 'SHOW TABLES', false)
#3 C:\wamp\www\modules\scaffold\classes\controller\scaffold.php(129): Kohana_Database_MySQL->list_tables()
#4 C:\wamp\www\modules\scaffold\classes\controller\scaffold.php(183): Controller_Scaffold->auto_modeler()
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Scaffold->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Scaffold))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\MySQL.php:75
2012-11-29 18:01:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\scaffold\classes\controller\scaffold.php [ 129 ] in :
2012-11-29 18:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:02:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_SQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in :
2012-11-29 18:02:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:06:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\scaffold\classes\controller\scaffold.php [ 129 ] in :
2012-11-29 18:06:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:21:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function oci_connect() ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 80 ] in :
2012-11-29 18:21:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:22:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function oci_pconnect() ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 79 ] in :
2012-11-29 18:22:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:23:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function oci_connect() ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 80 ] in :
2012-11-29 18:23:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:27:09 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 18:27:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #71, 32)
#2 C:\wamp\www\application\classes\Controller\Welcome.php(9): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2012-11-29 18:27:36 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 18:27:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #71, 32)
#2 C:\wamp\www\application\classes\Controller\Welcome.php(9): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2012-11-29 18:28:23 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 18:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #71, 32)
#2 C:\wamp\www\application\classes\Controller\Welcome.php(9): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2012-11-29 18:29:01 --- CRITICAL: Throwable_Database_Exception [ 0 ]: Message: Failed to establish connection. Reason: ORA-12154: TNS:no se ha podido resolver el identificador de conexión especificado ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 84 ] in C:\wamp\www\modules\ormleap\classes\Base\DB\Connection\Pool.php:195
2012-11-29 18:29:01 --- DEBUG: #0 C:\wamp\www\modules\ormleap\classes\Base\DB\Connection\Pool.php(195): Base_DB_Oracle_Connection_Standard->open()
#1 C:\wamp\www\application\classes\Controller\Welcome.php(8): Base_DB_Connection_Pool->get_connection('default')
#2 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\modules\ormleap\classes\Base\DB\Connection\Pool.php:195
2012-11-29 18:29:17 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 18:29:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #71, 32)
#2 C:\wamp\www\application\classes\Controller\Welcome.php(9): Base_DB_Oracle_Connection_Standard->query('SELECT * FROM `...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2012-11-29 18:33:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Leap_Usuario' not found ~ MODPATH\ormleap\classes\Base\DB\ORM\Select\Proxy.php [ 80 ] in :
2012-11-29 18:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:33:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Leap_Usuario' not found ~ MODPATH\ormleap\classes\Base\DB\ORM\Select\Proxy.php [ 80 ] in :
2012-11-29 18:33:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:36:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Leap_Usuario' not found ~ MODPATH\ormleap\classes\Base\DB\ORM\Select\Proxy.php [ 80 ] in :
2012-11-29 18:36:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:37:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Leap_Usuario' not found ~ MODPATH\ormleap\classes\Base\DB\ORM\Select\Proxy.php [ 80 ] in :
2012-11-29 18:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 18:40:22 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to load data source. Reason: Database group database.orcl is undefined. ~ MODPATH\ormleap\classes\Base\DB\DataSource.php [ 57 ] in C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:80
2012-11-29 18:40:22 --- DEBUG: #0 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(80): Base_DB_DataSource->__construct('orcl')
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM.php(109): Base_DB_ORM_Select_Proxy->__construct('Usuario', Array)
#2 C:\wamp\www\application\classes\Controller\Welcome.php(8): Base_DB_ORM::select('Usuario')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:80
2012-11-29 21:04:15 --- CRITICAL: ErrorException [ 1 ]: Class 'DM_ORM' not found ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in :
2012-11-29 21:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 21:04:49 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 164 ] in :
2012-11-29 21:04:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 164, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(164): oci_execute(Resource id #99, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\wamp\www\application\classes\Controller\Welcome.php(19): Base_DB_ORM_Model->save(true)
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in :
2012-11-29 21:09:23 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(8): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-11-29 21:11:43 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:11:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(11): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-11-29 21:12:01 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(11): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-11-29 21:17:34 --- CRITICAL: Throwable_InvalidArgument_Exception [ 0 ]: Message: Invalid operator token specified. Reason: Token must exist in the enumerated set. ~ MODPATH\ormleap\classes\Base\DB\Oracle\Expression.php [ 244 ] in C:\wamp\www\modules\ormleap\classes\Base\DB\SQL\Select\Builder.php:263
2012-11-29 21:17:34 --- DEBUG: #0 C:\wamp\www\modules\ormleap\classes\Base\DB\SQL\Select\Builder.php(263): Base_DB_Oracle_Expression->prepare_operator(' like ', 'COMPARISON')
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('EMAIL', ' like ', ''%X%'', 'AND')
#2 C:\wamp\www\application\classes\Controller\Welcome.php(9): Base_DB_ORM_Select_Proxy->where('EMAIL', ' like ', ''%X%'')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\ormleap\classes\Base\DB\SQL\Select\Builder.php:263
2012-11-29 21:17:51 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:17:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(11): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-11-29 21:18:10 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:18:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(11): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-11-29 21:18:33 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(11): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-11-29 21:27:28 --- CRITICAL: ErrorException [ 2 ]: oci_execute():  ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-11-29 21:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute(): ', 'C:\wamp\www\mod...', 134, Array)
#1 C:\wamp\www\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #89, 32)
#2 C:\wamp\www\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "USUARIO...', 'Model_Leap_Usua...')
#3 C:\wamp\www\application\classes\Controller\Welcome.php(11): Base_DB_ORM_Select_Proxy->query()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in :