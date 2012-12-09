<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-08 12:39:42 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.SYS_C009884) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 12:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #120, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\application\classes\Controller\Usuario.php(19): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Usuario->action_registrar()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuario))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 13:30:38 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.SYS_C009884) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 13:30:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #121, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\application\classes\Controller\Usuario.php(33): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Usuario->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuario))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 14:25:50 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.SYS_C009884) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 14:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #121, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Usuario.php(33): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Usuario->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuario))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 14:26:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Model\Leap\Usuario.php [ 7 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 14:26:04 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 7, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Usuario.php(42): Model_Leap_Usuario::getUsuarioActual()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Usuario->action_ver()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Usuario))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 14:42:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 14:42:50 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 9, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 15:49:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 15:49:52 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 9, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 16:08:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Model\Leap\Usuario.php [ 7 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 16:08:56 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 7, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(29): Model_Leap_Usuario::getUsuarioActual()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 16:09:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function insertar_etiquetas() ~ APPPATH\classes\Controller\Etiqueta.php [ 25 ] in :
2012-12-08 16:09:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 16:09:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function insertar_etiquetas() ~ APPPATH\classes\Controller\Etiqueta.php [ 25 ] in :
2012-12-08 16:09:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 16:09:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Etiqueta::where() ~ APPPATH\classes\Controller\Etiqueta.php [ 13 ] in :
2012-12-08 16:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 16:15:11 --- CRITICAL: Throwable_UnimplementedMethod_Exception [ 0 ]: Message: Call to undefined member function. Reason: Function save has not been defined in class Base_DB_ORM_Select_Proxy. ~ MODPATH\ormleap\classes\Base\DB\ORM\Select\Proxy.php [ 116 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:17
2012-12-08 16:15:11 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(17): Base_DB_ORM_Select_Proxy->__call('save', Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(17): DB_ORM_Select_Proxy->save()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(26): Controller_Etiqueta->insertar_etiquetas(Array)
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#9 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:17
2012-12-08 16:15:26 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.UNIQUE_LIBRETA_1) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 16:15:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #142, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "LI...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(20): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_crear()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 16:22:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 16:22:20 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 9, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 16:30:24 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Leap_Etiqueta could not be converted to int ~ MODPATH\ormleap\classes\Base\DB\ORM\Field\Integer.php [ 159 ] in :
2012-12-08 16:30:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Object of class...', 'C:\Users\Dell\D...', 159, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field\Integer.php(159): settype(1, 'integer')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field_Integer->__set('value', Object(Model_Leap_Etiqueta))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(13): Base_DB_ORM_Model->__set('ETIQUETA', Object(Model_Leap_Etiqueta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(32): Controller_Etiqueta->relacionar_etiquetas('0', Object(Model_Leap_Etiqueta))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(37): Controller_Etiqueta->insertar_etiquetas('0', Array)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#12 {main} in :
2012-12-08 16:43:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Etiqueta.php [ 37 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:37
2012-12-08 16:43:09 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 37, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:37
2012-12-08 16:43:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: names ~ APPPATH\classes\Controller\Etiqueta.php [ 37 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:37
2012-12-08 16:43:42 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 37, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:37
2012-12-08 16:48:38 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.UNIQUE_ETIQUETA_NOTA) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 16:48:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #151, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(14): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(32): Controller_Etiqueta->relacionar_etiquetas('1', 0)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(37): Controller_Etiqueta->insertar_etiquetas('1', Array)
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#13 {main} in :
2012-12-08 16:50:36 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.UNIQUE_ETIQUETA_NOTA) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 16:50:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #154, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(14): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(32): Controller_Etiqueta->relacionar_etiquetas('1', 1)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(37): Controller_Etiqueta->insertar_etiquetas('1', Array)
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#13 {main} in :
2012-12-08 16:50:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: libreta_padre ~ APPPATH\classes\Controller\Nota.php [ 37 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:37
2012-12-08 16:50:58 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 37, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:37
2012-12-08 16:51:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: libreta_padre ~ APPPATH\classes\Controller\Nota.php [ 37 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:37
2012-12-08 16:51:22 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 37, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:37
2012-12-08 16:51:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: libreta_padre ~ APPPATH\classes\Controller\Nota.php [ 37 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:37
2012-12-08 16:51:30 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 37, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:37
2012-12-08 16:51:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Leap_ETIQUETA_NOTA' not found ~ MODPATH\ormleap\classes\Base\DB\ORM\Relation\HasMany.php [ 84 ] in :
2012-12-08 16:51:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 16:51:54 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.UNIQUE_ETIQUETA_NOTA) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 16:51:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #140, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(14): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(32): Controller_Etiqueta->relacionar_etiquetas('1', 2)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(37): Controller_Etiqueta->insertar_etiquetas('1', Array)
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_etiquetas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#13 {main} in :
2012-12-08 16:52:38 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:52:38 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'IN', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'IN', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:52:50 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:52:50 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'IN', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'IN', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:53:36 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:53:36 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'in', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'in', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:54:31 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:54:31 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'in', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'in', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:03 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:03 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'IN', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'IN', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:05 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:05 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'IN', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'IN', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:12 --- CRITICAL: Throwable_SQL_Exception [ 0 ]: Message: Invalid SQL build instruction. Reason: Operator requires the value to be declared as an array. ~ MODPATH\ormleap\classes\Base\DB\SQL\Select\Builder.php [ 276 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:12 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(222): Base_DB_SQL_Select_Builder->where('LIBRETA', 'IN', '( SELECT ID FRO...', 'AND')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(38): Base_DB_ORM_Select_Proxy->where('LIBRETA', 'IN', '( SELECT ID FRO...')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php:222
2012-12-08 16:59:13 --- CRITICAL: ErrorException [ 2 ]: oci_fetch_assoc() [function.oci-fetch-assoc]: ORA-01722: invalid number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 140 ] in :
2012-12-08 16:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_fetch_assoc...', 'C:\Users\Dell\D...', 140, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(140): oci_fetch_assoc(Resource id #116)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(40): Base_DB_ORM_Select_Proxy->query()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 16:59:13 --- CRITICAL: ErrorException [ 2 ]: oci_fetch_assoc() [function.oci-fetch-assoc]: ORA-01722: invalid number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 140 ] in :
2012-12-08 16:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_fetch_assoc...', 'C:\Users\Dell\D...', 140, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(140): oci_fetch_assoc(Resource id #116)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(40): Base_DB_ORM_Select_Proxy->query()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 16:59:20 --- CRITICAL: ErrorException [ 2 ]: oci_fetch_assoc() [function.oci-fetch-assoc]: ORA-01722: invalid number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 140 ] in :
2012-12-08 16:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_fetch_assoc...', 'C:\Users\Dell\D...', 140, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(140): oci_fetch_assoc(Resource id #116)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(40): Base_DB_ORM_Select_Proxy->query()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 17:04:30 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;LIBRETA&quot;: invalid identifier ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-12-08 17:04:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 134, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #132, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "LIBRETA...', 'Model_Leap_Libr...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(48): Base_DB_ORM_Select_Proxy->query()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 17:04:55 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;LIBRETA&quot;: invalid identifier ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-12-08 17:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 134, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #132, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "LIBRETA...', 'Model_Leap_Libr...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(48): Base_DB_ORM_Select_Proxy->query()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 17:05:13 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00904: &quot;LIBRETA&quot;: invalid identifier ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 134 ] in :
2012-12-08 17:05:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 134, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(134): oci_execute(Resource id #132, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Select\Proxy.php(368): Base_DB_Oracle_Connection_Standard->query('SELECT "LIBRETA...', 'Model_Leap_Libr...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(48): Base_DB_ORM_Select_Proxy->query()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 17:08:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: libreta ~ APPPATH\classes\Controller\Nota.php [ 36 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:36
2012-12-08 17:08:34 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 36, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:36
2012-12-08 17:09:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: libreta ~ APPPATH\classes\Controller\Nota.php [ 36 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:36
2012-12-08 17:09:27 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 36, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:36
2012-12-08 17:15:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 59 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:59
2012-12-08 17:15:41 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 59, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_eliminar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:59
2012-12-08 17:16:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nombre ~ APPPATH\classes\Controller\Nota.php [ 61 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:61
2012-12-08 17:16:43 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 61, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_eliminar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:61
2012-12-08 17:17:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DB_ResultSet::$ID ~ APPPATH\classes\Model\Leap\Etiqueta.php [ 53 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Etiqueta.php:53
2012-12-08 17:17:34 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Etiqueta.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\Dell\D...', 53, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(61): Model_Leap_Etiqueta::get_etiqueta_id('lin')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_eliminar_etiqueta()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Etiqueta.php:53
2012-12-08 17:40:53 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant nuevo - assumed 'nuevo' ~ APPPATH\classes\Controller\Libreta.php [ 44 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php:44
2012-12-08 17:40:53 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 44, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_actualizar_libreta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php:44
2012-12-08 17:44:15 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:44:15 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:46:21 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:46:21 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:48:58 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:48:58 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:51:51 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:51:51 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:54:08 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:54:08 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:55:42 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:55:42 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:56:02 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:56:02 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:58:05 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 80 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:80
2012-12-08 17:58:05 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(80): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 80, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:80
2012-12-08 17:58:18 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 17:58:18 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(67): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 17:59:00 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 80 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:80
2012-12-08 17:59:00 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(80): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 80, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:80
2012-12-08 17:59:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nota ~ APPPATH\classes\Controller\Nota.php [ 69 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:69
2012-12-08 17:59:01 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 69, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:69
2012-12-08 17:59:37 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 17:59:37 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:00:11 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:00:11 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(67): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:00:26 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:00:26 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:00:28 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 80 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:80
2012-12-08 18:00:28 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(80): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 80, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:80
2012-12-08 18:01:05 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:01:05 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:01:08 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:01:08 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:01:49 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:01:49 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:02:07 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property adjunto is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:02:07 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(55): Base_DB_ORM_Model->__get('adjunto')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:55
2012-12-08 18:04:24 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property ADJUNTO is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:58
2012-12-08 18:04:24 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(58): Base_DB_ORM_Model->__get('ADJUNTO')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:58
2012-12-08 18:05:34 --- CRITICAL: Throwable_InvalidProperty_Exception [ 0 ]: Message: Unable to get the specified property. Reason: Property ADJUNTO is either inaccessible or undefined. ~ MODPATH\ormleap\classes\Base\DB\ORM\Model.php [ 114 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:58
2012-12-08 18:05:34 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(58): Base_DB_ORM_Model->__get('ADJUNTO')
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:58
2012-12-08 18:05:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ADJUNTO ~ APPPATH\classes\Controller\Nota.php [ 58 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:58
2012-12-08 18:05:47 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(58): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 58, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:58
2012-12-08 18:08:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: libreta ~ APPPATH\classes\Controller\Libreta.php [ 42 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php:42
2012-12-08 18:08:38 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 42, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php:42
2012-12-08 18:08:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: libreta ~ APPPATH\classes\Controller\Libreta.php [ 42 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php:42
2012-12-08 18:08:59 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 42, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php:42
2012-12-08 18:11:20 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:11:20 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(67): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:11:25 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:11:25 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(67): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:11:45 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 83 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:83
2012-12-08 18:11:45 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(83): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 83, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:83
2012-12-08 18:12:36 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:12:36 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(67): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:13:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _EMAIL ~ APPPATH\classes\Controller\GoogleDrive.php [ 59 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:59
2012-12-08 18:13:09 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 59, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:59
2012-12-08 18:13:43 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:13:43 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(69): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:14:05 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 84 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:84
2012-12-08 18:14:05 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(84): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 84, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:84
2012-12-08 18:16:18 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 86 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:86
2012-12-08 18:16:18 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(86): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 86, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:86
2012-12-08 18:17:43 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:17:43 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(71): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:18:07 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:18:07 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(71): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:18:11 --- CRITICAL: Google_AuthException [ 400 ]: Error fetching OAuth2 access token, message: 'invalid_grant' ~ DOCROOT\google_api\auth\Google_OAuth2.php [ 113 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:18:11 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php(131): Google_OAuth2->authenticate(Array, NULL)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(71): Google_Client->authenticate()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\google_api\Google_Client.php:131
2012-12-08 18:19:19 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00001: unique constraint (ANDROID.SYS_C009921) violated ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 18:19:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #138, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "US...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(88): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 18:53:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:53:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:53:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:53:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:53:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:54:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:54:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:54:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:54:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 87 ] in :
2012-12-08 18:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 18:55:10 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 18:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 18:55:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 18:55:57 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 9, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 18:56:43 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\GoogleDrive.php [ 85 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:85
2012-12-08 18:56:43 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(85): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Dell\D...', 85, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_2()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:85
2012-12-08 18:58:29 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant JSON_PRETTY_PRINT - assumed 'JSON_PRETTY_PRINT' ~ APPPATH\classes\Controller\Nota.php [ 72 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:72
2012-12-08 18:58:29 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(72): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 72, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:72
2012-12-08 18:58:38 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant JSON_PRETTY_PRINT - assumed 'JSON_PRETTY_PRINT' ~ APPPATH\classes\Controller\Nota.php [ 72 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:72
2012-12-08 18:58:38 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(72): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 72, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:72
2012-12-08 18:58:41 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant JSON_PRETTY_PRINT - assumed 'JSON_PRETTY_PRINT' ~ APPPATH\classes\Controller\Nota.php [ 72 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:72
2012-12-08 18:58:41 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(72): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 72, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:72
2012-12-08 19:06:09 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant JSON_PRETTY_PRINT - assumed 'JSON_PRETTY_PRINT' ~ APPPATH\classes\Controller\Nota.php [ 73 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:73
2012-12-08 19:06:09 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(73): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 73, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:73
2012-12-08 20:17:54 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant nota - assumed 'nota' ~ APPPATH\classes\Controller\Etiqueta.php [ 38 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:17:54 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 38, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(146): Controller_Etiqueta::eliminar_etiquetas('1')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:21:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant nota - assumed 'nota' ~ APPPATH\classes\Controller\Etiqueta.php [ 38 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:21:12 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 38, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(146): Controller_Etiqueta::eliminar_etiquetas('1')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:28:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\GoogleDrive.php [ 32 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:32
2012-12-08 20:28:13 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 32, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_GoogleDrive->action_authentication_1()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_GoogleDrive))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\GoogleDrive.php:32
2012-12-08 20:29:28 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant nota - assumed 'nota' ~ APPPATH\classes\Controller\Etiqueta.php [ 38 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:29:28 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 38, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Controller_Etiqueta::eliminar_etiquetas('1')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:29:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant nota - assumed 'nota' ~ APPPATH\classes\Controller\Etiqueta.php [ 38 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:29:57 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Dell\D...', 38, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Controller_Etiqueta::eliminar_etiquetas('1')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:38
2012-12-08 20:30:10 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:30:52 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:30:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:31:10 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:31:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:31:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function relacionar_etiquetas() ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:32:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function relacionar_etiquetas() ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:32:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:32:19 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:32:38 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:32:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:33:08 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:33:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\classes\kohana\tests.php(44): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\classes\controller\unittest.php(69): Kohana_Tests::configure_enviroment(false)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(69): Controller_UnitTest->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UnitTest))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 20:33:11 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:33:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\classes\kohana\tests.php(44): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\classes\controller\unittest.php(69): Kohana_Tests::configure_enviroment(false)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(69): Controller_UnitTest->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UnitTest))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 20:33:12 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:33:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\classes\kohana\tests.php(44): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\classes\controller\unittest.php(69): Kohana_Tests::configure_enviroment(false)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(69): Controller_UnitTest->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UnitTest))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 20:33:16 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 20:33:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:33:50 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:33:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:34:18 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:34:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:34:18 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:34:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:34:25 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:34:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:34:58 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:34:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:35:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\phpunit\classes\kohana\tests.php [ 45 ] in :
2012-12-08 20:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:35:26 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:35:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:35:27 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:35:47 --- CRITICAL: ErrorException [ 1024 ]: Please no longer include "PHPUnit/Framework.php". ~ C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php [ 50 ] in :
2012-12-08 20:35:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(1024, 'Please no longe...', 'C:\Users\Dell\D...', 50, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\php\PEAR\PHPUnit\Framework.php(50): trigger_error('Please no longe...', 1024)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\phpunit\init.php(16): require_once('C:\Users\Dell\D...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Core.php(602): require_once('C:\Users\Dell\D...')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\bootstrap.php(122): Kohana_Core::modules(Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(126): require('C:\Users\Dell\D...')
#6 {main} in :
2012-12-08 20:35:56 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$is_cli ~ MODPATH\phpunit\classes\kohana\tests.php [ 47 ] in :
2012-12-08 20:35:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:37:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\kohana\tests.php [ 57 ] in :
2012-12-08 20:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:38:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\phpunit\classes\controller\unittest.php [ 71 ] in :
2012-12-08 20:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:40:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Unittest_Testcase' not found ~ MODPATH\ormleap\tests\DB\DataSourceTest.php [ 28 ] in :
2012-12-08 20:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:44:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 77 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:44:11 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(77): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 77, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:44:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Unittest_Testcase' not found ~ MODPATH\ormleap\tests\DB\DataSourceTest.php [ 28 ] in :
2012-12-08 20:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:44:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Unittest_Testcase' not found ~ MODPATH\ormleap\tests\DB\DataSourceTest.php [ 28 ] in :
2012-12-08 20:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:44:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Unittest_Testcase' not found ~ MODPATH\ormleap\tests\DB\DataSourceTest.php [ 28 ] in :
2012-12-08 20:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 20:44:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 77 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:44:53 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(77): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 77, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:45:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 77 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:45:02 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(77): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 77, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:45:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 77 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:45:22 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(77): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 77, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:77
2012-12-08 20:45:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nombre ~ APPPATH\classes\Controller\Nota.php [ 92 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:92
2012-12-08 20:45:49 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 92, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:92
2012-12-08 20:46:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nombre ~ APPPATH\classes\Controller\Nota.php [ 92 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:92
2012-12-08 20:46:21 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 92, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:92
2012-12-08 20:46:28 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Leap_Etiqueta could not be converted to int ~ MODPATH\ormleap\classes\Base\DB\ORM\Field\Integer.php [ 159 ] in :
2012-12-08 20:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Object of class...', 'C:\Users\Dell\D...', 159, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field\Integer.php(159): settype(1, 'integer')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field_Integer->__set('value', Object(Model_Leap_Etiqueta))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(96): Base_DB_ORM_Model->__set('ETIQUETA', Object(Model_Leap_Etiqueta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 20:47:26 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_2) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 20:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(97): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 20:47:45 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_2) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 20:47:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(97): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 20:49:20 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_2) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 20:49:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(97): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 20:49:28 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_2) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 20:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(97): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 20:49:54 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_2) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 20:49:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(97): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 20:50:32 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_2) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 20:50:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #143, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(97): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_agregar_etiqueta()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 20:53:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 145 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:145
2012-12-08 20:53:31 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 145, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:145
2012-12-08 20:55:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 145 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:145
2012-12-08 20:55:05 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 145, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:145
2012-12-08 20:58:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: libreta ~ APPPATH\classes\Controller\Nota.php [ 39 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:39
2012-12-08 20:58:20 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 39, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_obtener()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:39
2012-12-08 21:00:00 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_1) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:00:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #154, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(14): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(33): Controller_Etiqueta::relacionar_etiquetas('1', 16)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(149): Controller_Etiqueta::insertar_etiquetas('1', Array)
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#13 {main} in :
2012-12-08 21:00:04 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_1) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:00:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #157, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(14): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(33): Controller_Etiqueta::relacionar_etiquetas('1', 17)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(149): Controller_Etiqueta::insertar_etiquetas('1', Array)
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#13 {main} in :
2012-12-08 21:01:22 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 21:01:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:01:31 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Etiqueta.php [ 32 ] in :
2012-12-08 21:01:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:03:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:03:37 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 43, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Controller->__construct()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:09 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:09 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 43, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Controller->__construct(NULL, NULL)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:16 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:16 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 43, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Controller->__construct(NULL, NULL)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nota ~ APPPATH\classes\Controller\Nota.php [ 145 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:145
2012-12-08 21:04:19 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(145): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 145, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:145
2012-12-08 21:04:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:31 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 43, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Controller->__construct(NULL, NULL)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:51 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:04:51 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 43, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Controller->__construct(NULL, NULL)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php:43
2012-12-08 21:05:23 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Request.php [ 654 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php:654
2012-12-08 21:05:23 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(654): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Users\Dell\D...', 654, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Request->__construct()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php:654
2012-12-08 21:05:48 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Response::__construct() must be an array, string given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Response.php [ 120 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Response.php:120
2012-12-08 21:05:48 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Response.php(120): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 120, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Response->__construct('')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Response.php:120
2012-12-08 21:06:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Response::__construct() must be an array, string given, called in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php on line 148 and defined ~ SYSPATH\classes\Kohana\Response.php [ 120 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Response.php:120
2012-12-08 21:06:08 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Response.php(120): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\Users\Dell\D...', 120, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Kohana_Response->__construct('')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizarEtiquetas()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Response.php:120
2012-12-08 21:07:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nombres ~ APPPATH\classes\Controller\Etiqueta.php [ 56 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:56
2012-12-08 21:07:12 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 56, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_actualizarEtiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:56
2012-12-08 21:07:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nombres ~ APPPATH\classes\Controller\Etiqueta.php [ 56 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:56
2012-12-08 21:07:25 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Dell\D...', 56, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_actualizarEtiquetas()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php:56
2012-12-08 21:07:30 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-02291: integrity constraint (ANDROID.FK_ETIQUETA_NOTA_1) violated - parent key not found ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #156, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(14): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(32): Controller_Etiqueta::relacionar_etiquetas('1', 19)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(56): Controller_Etiqueta->insertar_etiquetas('1', Array)
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_actualizarEtiquetas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#13 {main} in :
2012-12-08 21:18:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 21:18:59 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 9, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 21:38:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Nota::get_libreta_name() ~ APPPATH\classes\Model\Leap\Nota.php [ 73 ] in :
2012-12-08 21:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:41:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Nota::get_libreta_name() ~ APPPATH\classes\Model\Leap\Nota.php [ 73 ] in :
2012-12-08 21:41:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:42:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Nota::get_libreta_name() ~ APPPATH\classes\Model\Leap\Nota.php [ 73 ] in :
2012-12-08 21:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:42:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Nota::get_libreta_name() ~ APPPATH\classes\Model\Leap\Nota.php [ 73 ] in :
2012-12-08 21:42:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:42:15 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DB_ResultSet::$NOMBRE ~ APPPATH\classes\Model\Leap\Libreta.php [ 54 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:54
2012-12-08 21:42:15 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\Dell\D...', 54, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Nota.php(73): Model_Leap_Libreta::get_libreta_name('0')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(151): Model_Leap_Nota::get_libreta('0')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#9 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:54
2012-12-08 21:42:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DB_ResultSet::$NOMBRE ~ APPPATH\classes\Model\Leap\Libreta.php [ 54 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:54
2012-12-08 21:42:37 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\Dell\D...', 54, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Nota.php(73): Model_Leap_Libreta::get_libreta_name('0')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(151): Model_Leap_Nota::get_libreta('0')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#9 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:54
2012-12-08 21:42:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DB_ResultSet::$ID ~ APPPATH\classes\Model\Leap\Libreta.php [ 77 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:77
2012-12-08 21:42:41 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\Dell\D...', 77, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(153): Model_Leap_Libreta::existe_nota('Danilofis', 'Hola')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:77
2012-12-08 21:43:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: DB_ResultSet::$ID ~ APPPATH\classes\Model\Leap\Libreta.php [ 77 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:77
2012-12-08 21:43:05 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\Dell\D...', 77, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(153): Model_Leap_Libreta::existe_nota('Danilofis', 'Hola')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:77
2012-12-08 21:43:13 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(161): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:44:12 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(161): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:44:33 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(161): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:44:39 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(161): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:45:29 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(160): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:46:00 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(160): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:48:25 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(160): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:48:29 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(160): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:48:45 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(160): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:48:51 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:48:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(161): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:49:16 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:49:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(162): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:50:42 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(162): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:51:09 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:51:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(162): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:51:12 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:51:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(162): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:51:19 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(162): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:51:21 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(162): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:51:41 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(163): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:52:02 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(163): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:52:05 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(163): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:52:08 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(163): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:52:16 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01465: invalid hex number ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 21:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #146, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Update\Proxy.php(208): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(163): Base_DB_ORM_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#10 {main} in :
2012-12-08 21:55:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function hex2bin() ~ APPPATH\classes\Controller\Nota.php [ 159 ] in :
2012-12-08 21:55:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 21:56:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Nota.php [ 144 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 21:56:08 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 144, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:00:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Nota.php [ 144 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:00:23 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 144, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:00:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Nota.php [ 144 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:00:29 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 144, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:00:34 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;ANDROID&quot;.&quot;ETIQUETA&quot;.&quot;NOMBRE&quot;) ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 22:00:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #148, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "ET...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(27): Base_DB_ORM_Model->save(true)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Etiqueta.php(55): Controller_Etiqueta->insertar_etiquetas('0', Array)
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Etiqueta->action_actualizarEtiquetas()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Etiqueta))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#12 {main} in :
2012-12-08 22:01:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Nota.php [ 144 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:01:04 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 144, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:01:07 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 22:01:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #150, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Update\Proxy.php(180): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(509): Base_DB_SQL_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(625): Base_DB_ORM_Model->save(false, false)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(159): Base_DB_ORM_Model->update()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#12 {main} in :
2012-12-08 22:01:18 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 22:01:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #150, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Update\Proxy.php(180): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(509): Base_DB_SQL_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(625): Base_DB_ORM_Model->save(false, false)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(159): Base_DB_ORM_Model->update()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#12 {main} in :
2012-12-08 22:01:44 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-00933: SQL command not properly ended ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 22:01:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #150, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Update\Proxy.php(180): Base_DB_Oracle_Connection_Standard->execute('UPDATE "NOTA" S...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(509): Base_DB_SQL_Update_Proxy->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(625): Base_DB_ORM_Model->save(false, false)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(159): Base_DB_ORM_Model->update()
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#12 {main} in :
2012-12-08 22:02:16 --- CRITICAL: ErrorException [ 2 ]: oci_execute() [function.oci-execute]: ORA-01400: cannot insert NULL into (&quot;ANDROID&quot;.&quot;NOTA&quot;.&quot;LIBRETA&quot;) ~ MODPATH\ormleap\classes\Base\DB\Oracle\Connection\Standard.php [ 166 ] in :
2012-12-08 22:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'oci_execute() [...', 'C:\Users\Dell\D...', 166, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(166): oci_execute(Resource id #150, 32)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Insert\Proxy.php(130): Base_DB_Oracle_Connection_Standard->execute('INSERT INTO "NO...')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(547): Base_DB_SQL_Insert_Proxy->execute(true)
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(159): Base_DB_ORM_Model->save()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 22:03:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Nota.php [ 144 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:03:32 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 144, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:04:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Nota.php [ 144 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:04:00 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 144, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php:144
2012-12-08 22:04:06 --- CRITICAL: ErrorException [ 1 ]: Class 'DB_ORM_Field_Clob' not found ~ APPPATH\classes\Model\Leap\Nota.php [ 21 ] in :
2012-12-08 22:04:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 22:04:19 --- CRITICAL: ErrorException [ 1 ]: Class 'DB_ORM_Field_Clob' not found ~ APPPATH\classes\Model\Leap\Nota.php [ 21 ] in :
2012-12-08 22:04:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 22:04:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: max_length ~ MODPATH\ormleap\classes\Base\DB\ORM\Field\String.php [ 42 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field\String.php:42
2012-12-08 22:04:22 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field\String.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 42, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Nota.php(23): Base_DB_ORM_Field_String->__construct(Object(Model_Leap_Nota), Array)
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(684): Model_Leap_Nota->__construct()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM.php(83): Base_DB_ORM_Model::factory('Nota')
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(150): Base_DB_ORM::model('Nota')
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field\String.php:42
2012-12-08 22:04:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Leap_Nota::where() ~ APPPATH\classes\Controller\Nota.php [ 157 ] in :
2012-12-08 22:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-08 22:05:34 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:05:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:06:16 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:06:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:06:30 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:06:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(380): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(563): Base_DB_ORM_Model->load()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(31): Base_DB_ORM_Model->save(true)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_crear()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#11 {main} in :
2012-12-08 22:10:25 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:10:33 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:10:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:10:40 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:10:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:12:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Model\Leap\Usuario.php [ 7 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 22:12:33 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 7, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(29): Model_Leap_Usuario::getUsuarioActual()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 22:12:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 22:12:50 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 9, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#7 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Welcome.php:9
2012-12-08 22:13:04 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:13:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:13:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Model\Leap\Usuario.php [ 7 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 22:13:19 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Dell\D...', 7, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(29): Model_Leap_Usuario::getUsuarioActual()
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#8 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Usuario.php:7
2012-12-08 22:14:01 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:14:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:15:51 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:15:54 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:15:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:15:56 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:15:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:15:58 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:15:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:16:01 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:16:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:16:02 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:16:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:16:23 --- CRITICAL: ErrorException [ 4096 ]: Object of class OCI-Lob could not be converted to string ~ MODPATH\ormleap\classes\Base\DB\ORM\Field.php [ 118 ] in :
2012-12-08 22:16:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\Users\Dell\D...', 118, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Field.php(118): settype('Object', 'string')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(129): Base_DB_ORM_Field->__set('value', Object(OCI-Lob))
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Connection.php(302): Base_DB_ORM_Model->__set('TEXTO', Object(OCI-Lob))
#4 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\Oracle\Connection\Standard.php(141): Base_DB_Connection::type_cast('Model_Leap_Nota', Array)
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\SQL\Select\Proxy.php(331): Base_DB_Oracle_Connection_Standard->query('SELECT "NOTA".*...', 'Model_Leap_Nota')
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation\HasMany.php(166): Base_DB_SQL_Select_Proxy->query('Model_Leap_Nota')
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Relation.php(81): Base_DB_ORM_Relation_HasMany->load()
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\modules\ormleap\classes\Base\DB\ORM\Model.php(152): Base_DB_ORM_Relation->__get('result')
#9 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Libreta.php(34): Base_DB_ORM_Model->as_array()
#10 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Libreta->action_listar()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libreta))
#13 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#16 {main} in :
2012-12-08 22:19:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Leap\Libreta.php [ 54 ] in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:54
2012-12-08 22:19:41 --- DEBUG: #0 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php(54): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\Users\Dell\D...', 54, Array)
#1 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Nota.php(74): Model_Leap_Libreta::get_libreta_name('0')
#2 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Controller\Nota.php(148): Model_Leap_Nota::get_libreta('0')
#3 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Controller.php(84): Controller_Nota->action_actualizar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Nota))
#6 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\index.php(142): Kohana_Request->execute()
#9 {main} in C:\Users\Dell\Desktop\Ghesn Desarrollo\xampp\htdocs\Dropbox\GSNotes\application\classes\Model\Leap\Libreta.php:54