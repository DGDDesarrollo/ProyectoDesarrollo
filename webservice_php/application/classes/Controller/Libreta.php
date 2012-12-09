<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Libreta
 *
 * @author Gasune
 */
class Controller_Libreta extends Controller {
    
    public function action_crear(){
        
        $libreta = DB_ORM::model('Libreta');
        $libreta->NOMBRE = $_POST['nombre'];
        $libreta->USUARIO = Model_Leap_Usuario::getUsuarioActual()->ID;
        if ($libreta->save())
            echo "Exito";
        else
            echo "Error";
    }
    
    public function action_listar(){
        
        $builder = DB_ORM::select('Libreta');
        $builder->where('USUARIO','=',Model_Leap_Usuario::getUsuarioActual()->ID);
        $libretas=$builder->query();
        $lista = array ();
    
        foreach ($libretas as $libreta){
            $lista = array_merge($lista,array($libreta->as_array()));
        }
        
        echo json_encode($lista);
    }
    
    public function action_actualizar(){
        //$libreta = $_GET['libreta'];
        $libreta = $_POST['libreta'];
        //$nuevo = $_GET['nuevo'];
        $nuevo = $_POST['nuevo'];
        $actualizar = DB_ORM::model('Libreta');
        $actualizar->update_libreta($libreta, $nuevo);
        $response = array('response' => true);
        echo json_encode($response);
    }
}
