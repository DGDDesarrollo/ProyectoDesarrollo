<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Usuario extends Controller {

	public function action_index()
	{
	}
        
        public function action_registrar()
        {
            $usuario = DB_ORM::model('Usuario');
            $usuario->NOMBRE = $_POST['nombre'];
            $usuario->PASSWORD = $_POST['password'];
            $usuario->EMAIL = $_POST['email'];
//            $usuario->NOMBRE = $_GET['nombre'];
//            $usuario->PASSWORD = $_GET['password'];
//            $usuario->EMAIL = $_GET['email'];
            
            if ($usuario->save())
                echo "Exito";
            else
                echo "Error";
            
        }

        
        public function action_create(){
            
            $usuario = DB_ORM::model('Usuario');
            $usuario->NOMBRE = 'Miguel Obando';
            $usuario->PASSWORD = '1234';
            $usuario->EMAIL = 'miguel@obando.com.ve';    
            $usuario->save();
            
			
        }
        
        
        public function action_ver(){
            
            
            echo json_encode(Model_Leap_Usuario::getUsuarioActual()->as_array());
            
        }
}
