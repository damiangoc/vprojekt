<?php
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'vprojekt',
		'prefix' => '',
	);

	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
	);
}
