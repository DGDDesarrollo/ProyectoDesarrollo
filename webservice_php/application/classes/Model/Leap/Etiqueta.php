<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_Etiqueta extends DB_ORM_Model {

   public function __construct() {
       parent::__construct();
       $this->fields = array(
           'ID' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
           'NOMBRE' => new DB_ORM_Field_String($this, array(
               'max_length' => 50,
               'nullable' => FALSE,
           )),
       );
	   
       $this->relations = array(
           'ETIQUETA_NOTA' => new DB_ORM_Relation_HasMany($this, array(
               'child_key' => array('ETIQUETA'),
               'child_model' => 'EtiquetaNota',
           )),
       );
   }

   public static function data_source() {
       return 'default';
   }

   public static function table() {
       return 'ETIQUETA';
   }

   public static function primary_key() {
       return array('ID');
   }

    public static function is_auto_incremented() {
       return TRUE;
   }
   
   public function totalRegistros(){
       $query = DB_ORM::select('Etiqueta');
       $result = $query->query();
       return count($result);
   }
   
   public static function get_etiqueta($id){
       $finder = DB_ORM::select('Etiqueta');
       $etiqueta = $finder->where('ID','=',$id);
       $result = $finder->query();
       if ((count($result)) > 0)
           return $result;
       return false;
   }
   
   public static function get_etiqueta_id($nombre){
       $finder = DB_ORM::select('Etiqueta');
       $etiqueta = $finder->where('NOMBRE','=',$nombre);
       $result = $finder->query();
       if ((count($result)) > 0)
           return $result[0]->ID;
       return false;
   }
   
   public static function get_etiqueta_name($id){
       $finder = DB_ORM::select('Etiqueta');
       $etiqueta = $finder->where('ID','=',$id);
       $result = $finder->query();
       if ((count($result)) > 0)
           return $result[0]->NAME;
       return false;
   }
}
?>            