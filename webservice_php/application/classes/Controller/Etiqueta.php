<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Etiqueta extends Controller{
    
    public static function relacionar_etiquetas($nota, $id){
        $relacion = DB_ORM::model('EtiquetaNota');
        $relacion->NOTA = $nota;
        $relacion->ETIQUETA = $id;
        $relacion->save();
    }
    
    public function insertar_etiquetas($nota, $nombres){
        foreach ($nombres as $nombre){
            $finder = DB_ORM::select('Etiqueta');
            $finder->where('NOMBRE','=',$nombre);
            $result = $finder->query();
            $id = false;
            if (count($result) == 0){
                $etiqueta = DB_ORM::model('Etiqueta');
                $id = $etiqueta->totalRegistros();
                $etiqueta->NOMBRE = $nombre;
                $etiqueta->save(TRUE);
            }
            else {
                $id = $result[0]->ID;
            }
            $this->relacionar_etiquetas($nota, $id);
            //Controller_Etiqueta::relacionar_etiquetas($nota, $id);
        }
    }
    
    public function eliminar_etiquetas($nota){
        $finder = DB_ORM::delete('EtiquetaNota');
        $finder->where('NOTA', '=', $nota);
        $finder->execute();
    }
    
    public function action_etiquetas(){
        $this->insertar_etiquetas($_POST['nota'], $_POST['etiquetas']);
        $response = array('response' => true);
        json_encode($response);
    }
    
    public function action_actualizarEtiquetas(){
        $nota = $_POST['nota'];
        //$nota = $_GET['nota'];
        $etiquetas = $_POST['etiquetas'];
        //$etiquetas = $_GET['etiquetas'];
        $this->eliminar_etiquetas($nota);
        $this->insertar_etiquetas($nota, $etiquetas);
        $response = array('response' => true);
        echo json_encode($response);
    }
}

