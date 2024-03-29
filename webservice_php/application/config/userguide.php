<?php defined('SYSPATH') or die('No direct script access.');

return array(
	// Leave this alone
	'modules' => array(

		// This should be the path to this modules userguide pages, without the 'guide/'. Ex: '/guide/modulename/' would be 'modulename'
		'oauth' => array(

			// Whether this modules userguide pages should be shown
			'enabled' => TRUE,
			
			// The name that should show up on the userguide index page
			'name' => 'OAuth',

			// A short description of this module, shown on the index page
			'description' => 'Open protocol authorization.',
			
			// Copyright message, shown in the footer for this module
			'copyright' => '&copy; 2008–2010 Kohana Team',
		),
                'unittest' => array(
			'enabled' => TRUE,
			'name' => 'Unittest',
			'description' => 'Unit testing module',
			'copyright' => '&copy; 2009-2011 Kohana Team',
		)
	)
);