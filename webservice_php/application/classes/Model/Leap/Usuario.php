<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_Usuario extends DB_ORM_Model {

    public static function getUsuarioActual(){
        $builder = DB_ORM::select('Usuario');
        $builder->where('EMAIL','=',$_GET['email']);
        $builder->where('PASSWORD','=',$_GET['password']);
        $models=$builder->query();
        $usuario = $models[0];

        return $usuario;
    }
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
           'EMAIL' => new DB_ORM_Field_String($this, array(
               'max_length' => 100,
               'nullable' => FALSE,
           )),
           'PASSWORD' => new DB_ORM_Field_String($this, array(
               'max_length' => 50,
               'nullable' => FALSE,
           )),
           'TOKEN' => new DB_ORM_Field_String($this, array(
               'max_length' => 1024,
               'nullable' => TRUE,
           )),
       );

       $this->relations = array(
           'LIBRETAS' => new DB_ORM_Relation_HasMany($this, array(
               'child_key' => array('USUARIO'),
               'child_model' => 'Libreta',
           )),
       );
   }

   public static function data_source() {
       return 'default';
   }

   public static function table() {
       return 'USUARIO';
   }

   public static function primary_key() {
       return array('ID');
   }

    public static function is_auto_incremented() {
       return TRUE;
   }
}
?>            