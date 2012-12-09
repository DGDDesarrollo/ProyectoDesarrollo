<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Configuration for OAuth providers.
 */
return array(
	/**
	 * Twitter applications can be registered at https://twitter.com/apps.
	 * You will be given a "consumer key" and "consumer secret", which must
	 * be provided when making OAuth requests.
	 */
	'google' => array(
		'key' => '730763475833.apps.googleusercontent.com',
		'secret' => 'mYdMNDN9d0vEVRdbxRnKdhJF',
                'callback' => 'http://localhost/index.php/googleDrive/authentication_2'
	),
);