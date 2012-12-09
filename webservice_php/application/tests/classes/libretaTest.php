<?php defined('SYSPATH') or die('No direct access allowed!');

class NotaTest extends Kohana_UnitTest_TestCase
{

	public function setUp()
	{
           $this->environmentDefault = array(
                    'libreta_prueba'=>array(
                            'ID'=>'0',
                            'NOMBRE'=>'ghesn sfeir',
                            'USUARIO'=>'0',
                        ),

                    'libreta_prueba2'=>array(
                            'ID'=>'0',
                            'NOMBRE'=>'ghesn sfeir',
                            'USUARIO'=>'0',
                        ),

            );
            parent::setUp();
        }
    public function testCreate()
    {
        $libreta = DB_ORM::model('libreta');
        $libreta->set_values($this->environmentDefault['libreta_prueba']);

        $this->assertEquals($libreta->save(), True, "NO SE PUDO GUARDAR La libreta");
    }
    public function testUpdate()
    {
        $libreta = DB_ORM::model('libreta');
        $libreta->set_values($this->environmentDefault['libreta_prueba2']);

        $this->assertEquals($libreta->update(), True, "NO SE PUDO ACTUALIZAR La libreta");
    }
    public function testSearch()
    {
        $builder = DB_ORM::select('libreta');

        $nombre= $this->environmentDefault['libreta_prueba2']['NOMBRE'];
        $builder->where("NOMBRE", "=", $nombre);
        $result=$builder->query();

        $this->assertEquals(count($result)>0, True, "NO SE PUDO ACTUALIZAR La libreta");
    }
}