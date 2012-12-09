<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_EtiquetaNota extends DB_ORM_Model {

   public function __construct() {
       parent::__construct();
       $this->fields = array(
           'ID' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
           'ETIQUETA' => new DB_ORM_Field_Integer($this, array(
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
           'OWN_ETIQUETA' => new DB_ORM_Relation_BelongsTo($this, array(
			   'child_key' => array('ETIQUETA'),
			   'parent_key' => array('ID'),
			   'parent_model' => 'Etiqueta',
           )),
           'OWN_NOTA' => new DB_ORM_Relation_BelongsTo($this, array(
			   'child_key' => array('NOTA'),
			   'parent_key' => array('ID'),
			   'parent_model' => 'Nota',
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
       return 'ETIQUETA_NOTA';
   }

   public static function primary_key() {
       return array('ID');
   }
   
   public static function exists($nota, $etiqueta){
       $finder = DB_ORM::select('EtiquetaNota');
       $finder->where('NOTA', '=', $nota);
       $finder->where('ETIQUETA', '=', $etiqueta);
       $result = $finder->query();
       if ((count($result)) > 0)
           return true;
       return false;
   }

}
?>            