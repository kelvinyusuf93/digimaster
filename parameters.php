<?php
	
	$db['default'] = array(
		'dsn'				=> '',
		'hostname' 			=> '127.0.0.1',
		'username' 			=> 'root',
		'password' 			=> '',
		'database' 			=> 'digimaster',
		'dbdriver' 			=> 'mysqli',
		'dbprefix' 			=> '',
		'pconnect' 			=> FALSE,
		'db_debug' 			=> FALSE,
		'cache_on' 			=> FALSE,
		'cachedir' 			=> '',
		'char_set' 			=> 'utf8',
		'dbcollat' 			=> 'utf8_general_ci',
		'swap_pre' 			=> '',
		'encrypt' 			=> FALSE,
		'compress' 			=> FALSE,
		'stricton' 			=> FALSE,
		'failover' 			=> array(),
		'save_queries' 		=> TRUE
	);

	$GLOBALS['database_config'] = $db;
?>