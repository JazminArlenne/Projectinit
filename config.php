<?php 

date_default_timezone_set('America/Mexico_City');
define('__ver__', "1.0");
define('_prod_', false);


if(_prod_===true){
	define('DB_USER','');
	define('DB_NAME','');
	define('DB_PASS','');
	define('DB_HOST','');
	define('__PATH__', 'https://'.$_SERVER['SERVER_NAME'].'/');

}else{
	define('DB_USER','');
	define('DB_NAME','');
	define('DB_PASS','');
	define('DB_HOST','');
	define('__PATH__', 'http://'.$_SERVER['SERVER_NAME'].'/'); 
		// Motrar todos los errores de PHP
	error_reporting(-1);
		// No mostrar los errores de PHP
	error_reporting(0);
		// Motrar todos los errores de PHP
	error_reporting(E_ALL);
		// Motrar todos los errores de PHP
	ini_set('error_reporting', E_ALL); 
}