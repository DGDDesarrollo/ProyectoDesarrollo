<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
			
            $builder = DB_ORM::select('Usuario');
            $builder->where('EMAIL','=',$_GET['email']);
            $builder->where('PASSWORD','=',$_GET['password']);
            $models=$builder->query();            
            
            
            $usuario = $models[0];
            
            if($usuario)
                echo "Bienvenid@, ".$usuario->NOMBRE;
            else
                echo "Error";
			
            
            
	}
        
        
	public function action_list()
	{
            $email='';
            if(isset($_GET['email']))
                $email=$_GET['email'];
            
            $builder = DB_ORM::select('Usuario');
            $builder->where('EMAIL','LIKE',"%$email%");

            $models=$builder->query();

            foreach($models as $m){
                    echo $m->NOMBRE.' '.$m->EMAIL.' <br/>';
            }
			
	}
        public function action_create(){
            
            $usuario = DB_ORM::model('Usuario');
            $usuario->NOMBRE = 'Miguel Obando';
            $usuario->PASSWORD = '1234';
            $usuario->EMAIL = 'miguel@obando.com.ve';    
            $usuario->save();
            
			
        }

} // End Welcome
