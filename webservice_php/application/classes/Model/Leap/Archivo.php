<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_Archivo extends DB_ORM_Model {

   public function __construct() {
       parent::__construct();
       $this->fields = array(
           'ID' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
           'NOMBRE' => new DB_ORM_Field_String($this, array(
               'max_length' => 256,
               'nullable' => FALSE,
           )),
       );
	   
       $this->relations = array(
           'ADJUNTOS' => new DB_ORM_Relation_HasMany($this, array(
               'child_key' => array('ARCHIVO'),
               'child_model' => 'Adjunto',
           )),
       );
   }

    public static function is_auto_incremented() {
       return TRUE;
   }
   public static function data_source() {
       return 'default';
   }

   public static function table() {
       return 'ARCHIVO';
   }

   public static function primary_key() {
       return array('ID');
   }

}
?>            