<?php defined('SYSPATH') or die('No direct access allowed!');

class NotaTest extends Kohana_UnitTest_TestCase
{

	public function setUp()
	{
           $this->environmentDefault = array(
                    'usuario_prueba'=>array(
                            'ID'=>'0',
                            'EMAIL'=>'ghesn@gmail.com',
                            'NOMBRE'=>'ghesn sfeir',
                            'PASSWORD'=>'123456',
                            'TOKEN'=>'0',
                        ),

                    'usuario_prueba2'=>array(
                            'ID'=>'0',
                            'EMAIL'=>'ghesn@gmail.com',
                            'NOMBRE'=>'ghesn daniel sfeir',
                            'PASSWORD'=>'1234',
                            'TOKEN'=>'0',
                        ),

            );
            parent::setUp();
        }
    public function testCreate()
    {
        $usuario = DB_ORM::model('Usuario');
        $usuario->set_values($this->environmentDefault['usuario_prueba']);

        $this->assertEquals($usuario->save(), True, "NO SE PUDO GUARDAR EL USUARIO");
    }
    public function testUpdate()
    {
        $usuario = DB_ORM::model('Usuario');
        $usuario->set_values($this->environmentDefault['usuario_prueba2']);

        $this->assertEquals($usuario->update(), True, "NO SE PUDO ACTUALIZAR EL USUARIO");
    }
    public function testSearch()
    {
        $builder = DB_ORM::select('Usuario');

        $nombre= $this->environmentDefault['usuario_prueba2']['NOMBRE'];
        $builder->where("NOMBRE", "=", $nombre);
        $result=$builder->query();

        $this->assertEquals(count($result)>0, True, "NO SE PUDO ACTUALIZAR EL USUARIO");
    }
}