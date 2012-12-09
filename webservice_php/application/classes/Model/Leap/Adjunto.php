<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_Adjunto extends DB_ORM_Model {

   public function __construct() {
       parent::__construct();
       $this->fields = array(
           'ID' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
           'ARCHIVO' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
           'NOTA' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
       );
	   
       $this->relations = array(
           'OWN_ARCHIVO' => new DB_ORM_Relation_BelongsTo($this, array(
			   'child_key' => array('ARCHIVO'),
			   'parent_key' => array('ID'),
			   'parent_model' => 'Archivo',
		   )),
           'OWN_NOTA' => new DB_ORM_Relation_BelongsTo($this, array(
			   'child_key' => array('NOTA'),
			   'parent_key' => array('ID'),
			   'parent_model' => 'Nota',
		   )),
       );
   }

   public static function data_source() {
       return 'default';
   }

   public static function table() {
       return 'ADJUNTO';
   }

   public static function primary_key() {
       return array('ID');
   }

}
?>            