<?php

date_default_timezone_set('America/Sao_Paulo');

// get document root
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].'/');

// set this the base url of the project.
define('BASE_URL', 'http://localhost/');

// define Database Variables
define('DB_HOST', 'mariadb');
define('DB_NAME', 'db_vivencia');
define('DB_USER', 'root');
define('DB_PASS', '');

// Autoload Classes
function autoloader ($class_name) {

	if ($class_name == 'Db') {
		include(constant('DOCUMENT_ROOT').'/classes/database/PDO.class.php');
	} else {
    	include(constant('DOCUMENT_ROOT').'/classes/'.strtolower($class_name).'.php');
    }
}
spl_autoload_register("autoloader");
?>