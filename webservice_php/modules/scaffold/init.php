<?php defined('SYSPATH') or die('No direct script access.');

Route::set('scaffold', 'scaffold(/<controller>(/<action>((/<column>)(/<id>))))')
	->defaults(array(
		'controller' => 'Scaffold',
		'action'     => 'index',
	));
	
	