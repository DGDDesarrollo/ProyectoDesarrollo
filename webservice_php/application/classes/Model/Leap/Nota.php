<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_Nota extends DB_ORM_Model {

   public function __construct() {
       parent::__construct();
       $this->fields = array(
           'ID' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
           'FECHA_CREACION' => new DB_ORM_Field_Date($this, array(
               'nullable' => FALSE,
		   )),
		   
           'TITULO' => new DB_ORM_Field_String($this, array(
               'max_length' => 100,
               'nullable' => FALSE,
           )),
           'TEXTO' => new DB_ORM_Field_String($this, array(
               'nullable' => TRUE,
               'max_length' => 2048,
           )),
           'LIBRETA' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
           )),
       );
       $this->relations = array(
		   'OWN_LIBRETA' => new DB_ORM_Relation_BelongsTo($this, array(
			   'child_key' => array('LIBRETA'),
			   'parent_key' => array('ID'),
			   'parent_model' => 'Libreta',
		   )),
           'ETIQUETA_NOTA' => new DB_ORM_Relation_HasMany($this, array(
               'child_key' => array('NOTA'),
               'child_model' => 'EtiquetaNota',
           )),
           'ADJUNTOS' => new DB_ORM_Relation_HasMany($this, array(
               'child_key' => array('NOTA'),
               'child_model' => 'Adjunto',
           )),
       );
   }

   public static function data_source() {
       return 'default';
   }

   public static function table() {
       return 'NOTA';
   }

   public static function primary_key() {
       return array('ID');
   }
    public static function is_auto_incremented() {
       return TRUE;
   }
   
   public static function get_etiquetas($nota){
       $finder = DB_ORM::select('EtiquetaNota');
       $finder->where('NOTA', '=', $nota);
       $result = $finder->query();
       return $result;
   }
   
   public static function get_libreta($id){
       $finder = DB_ORM::select('Nota');
       $finder->where('ID', '=', $id);
       $result = $finder->query();
       $libreta = DB_ORM::model('Libreta');       
       return $libreta::get_libreta_name($id);
   }
}
?>            