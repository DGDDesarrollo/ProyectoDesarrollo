<?php defined('SYSPATH') OR die('No direct script access.');

$config = array();

$config['default'] = array(
	'type'          => 'SQL',       // string (e.g. SQL, NoSQL, or LDAP)
	'dialect'       => 'Oracle',     // string (e.g. DB2, Drizzle, Firebird, MariaDB, MsSQL, MySQL, Oracle, PostgreSQL, or SQLite)
	'driver'        => 'Standard',  // string (e.g. Standard, Improved, or PDO)
	'connection'    => array(
		'persistent'    => FALSE,       // boolean
		'hostname'      => '127.0.0.1', // string
		'port'          => '',          // string
		'database'      => 'xe',          // string
		'username'      => 'android',      // string
		'password'      => 'android',      // string
		'role'          => '',          // string
	),
	'caching'       => FALSE,       // boolean
	'charset'       => 'utf8',      // string
);

return $config;
?>