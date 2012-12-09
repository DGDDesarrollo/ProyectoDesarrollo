<?php defined('SYSPATH') or die('No direct access allowed!');

class NotaTest extends Kohana_UnitTest_TestCase
{

	public function setUp()
	{
           $this->environmentDefault = array(
                    'nota_prueba'=>array(
                            'ID'=>'0',
                            'FECHA_CREACION'=>'2012/11/08',
                            'TITULO'=>'PRUEBA',
                            'TEXTO'=>'PRUEBA CONTENIDO',
                            'LIBRETA'=>'0',
                        ),

                    'nota_prueba2'=>array(
                            'ID'=>'0',
                            'FECHA_CREACION'=>'2012/11/08',
                            'TITULO'=>'PRUEBA',
                            'TEXTO'=>'PRUEBA CONTENIDO',
                            'LIBRETA'=>'0',
                        ),

            );
            parent::setUp();
        }
    public function testCreate()
    {
        $nota = DB_ORM::model('Nota');
        $nota->set_values($this->environmentDefault['nota_prueba']);

        $this->assertEquals($nota->save(), True, "NO SE PUDO GUARDAR LA NOTA");
    }
    public function testUpdate()
    {
        $nota = DB_ORM::model('Nota');
        $nota->set_values($this->environmentDefault['nota_prueba2']);

        $this->assertEquals($nota->update(), True, "NO SE PUDO ACTUALIZAR LA NOTA");
    }
    public function testSearch()
    {
        $builder = DB_ORM::select('Nota');

        $titulo= $this->environmentDefault['nota_prueba2']['TITULO'];
        $builder->where("TITULO", "=", $titulo);
        $result=$builder->query();

        $this->assertEquals(count($result)>0, True, "NO SE PUDO ACTUALIZAR LA NOTA");
    }
}