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
class Controller_Nota extends Controller {

    public function action_index(){

    }
    public function action_crear(){
        
        $builder = DB_ORM::select('Libreta');
        $builder->where('NOMBRE','=',$_POST['libreta']);
        $libretas=$builder->query();
        
        $nota = DB_ORM::model('Nota');
        $nota->TITULO = $_POST['titulo'];
        $nota->TEXTO = $_POST['texto'];
        
        //$nota->FECHA_CREACION= 'TO_DATE('. date("d M Y H:i:s") .',"YYYY-MM-DD")';
        $nota->LIBRETA = $libretas[0]->ID;
        
        if ($nota->save(TRUE))
            echo $nota->ID;
        else
            echo "Error";
    }
    
    
    public function action_obtener(){
        $libretaNombre=$_REQUEST['libreta'];
        $builder = DB_ORM::select('Libreta');
        $builder->where("NOMBRE", "LIKE", "%$libretaNombre%");
        $result=$builder->query();

        $builder = DB_ORM::select('Nota');
        foreach($result as $r){
                $builder->where('LIBRETA','=', $r->ID,'OR');
        }
        
        $notas=$builder->query();
        $lista = array ();
    
        foreach ($notas as $nota){
            $notaArray=$nota->as_array();
            
            $etiquetaArray = array();
            $etiquetas = Model_Leap_Nota::get_etiquetas($nota->ID);
            foreach($etiquetas as $etiqueta){
                $obj_etiqueta = $etiqueta->OWN_ETIQUETA;
                $etiquetaArray = array_merge($etiquetaArray, array($obj_etiqueta->as_array()));
            }
            $notaArray['ETIQUETAS'] = $etiquetaArray;
            
            $adjuntoArray=array();

            foreach($nota->ADJUNTOS as $adjunto){
                $adjuntoArray = array_merge($adjuntoArray,array($adjunto->archivo->as_array()));
            }
            $notaArray['ADJUNTOS']=$adjuntoArray;
            $lista = array_merge($lista,array($notaArray));
        }
        
        echo json_encode($lista);
    }
    
    public function action_agregar_etiqueta(){
        $id = $_GET['nota'];
        //$id = $_POST['nota'];
        $nombre_etiqueta = $_GET['etiqueta'];
        //$nombre_etiqueta = $_POST['etiqueta'];
        $etiqueta = Model_Leap_Etiqueta::get_etiqueta_id($nombre_etiqueta);
        if ($etiqueta != false){
            if (Model_Leap_EtiquetaNota::exists($id, $etiqueta) == false){
                $add = DB_ORM::model('EtiquetaNota');
                $add->NOTA = $id;
                $add->ETIQUETA = $etiqueta;
                $add->save();
            }
        }
        else{
            $etiquetaM = DB_ORM::model('Etiqueta');
            $id = $etiquetaM->totalRegistros();
            $etiquetaM->NOMBRE = $nombre_etiqueta;
            $etiquetaM->save();
            $add = DB_ORM::model('EtiquetaNota');
            $add->NOTA = $id;
            $add->ETIQUETA = $etiqueta;
            $add->save();
        }
    }
    
    public function action_eliminar_etiqueta(){
        //$id = $_GET['nota'];
        $id = $_POST['nota'];
        //$nombre = $_GET['etiqueta'];
        $nombre = $_POST['etiqueta'];
        $etiqueta = Model_Leap_Etiqueta::get_etiqueta_id($nombre);
        $delete = DB_ORM::delete('EtiquetaNota');
        $delete->where('NOTA', '=', $id);
        $delete->where('ETIQUETA', '=', $etiqueta);
        $delete->execute();
    }

    public function action_adjuntar(){
    try{
        $id=$_POST['nota'];
        $nombre=$_POST['nombre'];        
        $file_data=base64_decode($_POST['base64_file']);

        file_put_contents($nombre, $file_data);

        $google = new Model_GoogleDrive();
        $google->do_uploadFile($nombre);

        $archivo=  DB_ORM::model('Archivo');
        $archivo->NOMBRE=$nombre;
        $archivo->save();

        $adjunto=  DB_ORM::model('Adjunto');
        $adjunto->NOTA=$id;
        $adjunto->ARCHIVO=$archivo->ID;
        $adjunto->save();        

    }catch(Exception $e){
        echo "Error";

    }

        unlink($nombre);

        echo "Exito";
    }
    
    public function action_actualizar(){
        $id = $_REQUEST['id'];
        $titulo = $_REQUEST['titulo'];
        $texto = $_REQUEST['texto'];
        $nota = DB_ORM::model('Nota');
        $libreta = $nota::get_libreta($id);
        $model = DB_ORM::model('Libreta');
        $existe = $model::existe_nota($libreta, $titulo);
        $response = array('response' => false);
        if ($existe == false){
            $updater = DB_ORM::update('Nota');
            $updater->where('ID','=',$id);
            $updater->set('TITULO', $titulo);
            $updater->set('TEXTO', $texto);
            $updater->execute();
            $response = array('response' => true);
        }
        return $response;
    }


}

