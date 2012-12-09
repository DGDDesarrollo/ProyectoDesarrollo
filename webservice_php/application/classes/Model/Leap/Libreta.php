<?php defined('SYSPATH') or die('No direct script access.');

class Model_Leap_Libreta extends DB_ORM_Model {

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
           'USUARIO' => new DB_ORM_Field_Integer($this, array(
               'max_length' => 5,
               'nullable' => FALSE,
               'unsigned' => TRUE,
           )),
       );
	   
       $this->relations = array(
		   'OWN_USUARIO' => new DB_ORM_Relation_BelongsTo($this, array(
			   'child_key' => array('USUARIO'),
			   'parent_key' => array('ID'),
			   'parent_model' => 'Usuario',
		   )),
           'NOTAS' => new DB_ORM_Relation_HasMany($this, array(
               'child_key' => array('LIBRETA'),
               'child_model' => 'Nota',
           )),
       );
   }

   public static function data_source() {
       return 'default';
   }

   public static function table() {
       return 'LIBRETA';
   }

   public static function primary_key() {
       return array('ID');
   }
   
   public static function get_libreta_name($id){
        $builder = DB_ORM::select('Libreta');
        $builder->where('ID','=',$id);
        $libretas = $builder->query();

        return $libretas[0]->NOMBRE;
   }
   
    public static function getLibretas(){
        $builder = DB_ORM::select('Libreta');
        $builder->where('USUARIO','=',Model_Leap_Usuario::getUsuarioActual()->ID);
        $libretas = $builder->query();

        return $libretas;
    }

    public static function update_libreta($nombre, $value){
        $update = DB_ORM::update('Libreta');
        $update->where('NOMBRE','=', $nombre);
        $update->set('NOMBRE', $value);
        $update->execute();
    }
    
    public static function existe_nota($libretaN, $titulo){
        $finder = DB_ORM::select('Libreta');
        $finder->where('NOMBRE','=',$libretaN);
        $libreta = $finder->query();
        $finderNota = DB_ORM::select('Nota');
        $finderNota->where('LIBRETA', '=', $libreta[0]->ID);
        $finderNota->where('TITULO', '=', $titulo);
        $nota = $finderNota->query();
        if (count($nota) > 0)
            return true;
        return false;
    }
}
?>            