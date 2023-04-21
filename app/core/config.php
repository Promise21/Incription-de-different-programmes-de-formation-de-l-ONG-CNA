<?php
//CONFIG IS

//WEBSITE NAME

define("WEBSITE_NAME", "ONG CNA");

//DATABASE VARIABLES
define('DB_TYPE', 'mysql');
define('DB_NAME', 'ong_cna');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

//PROTOCAL TYPE
define('PROTOCAL', 'http');

//root and asset paths

$path = str_replace("\\", "/", PROTOCAL . "://" . $_SERVER['SERVER_NAME'] . __DIR__  . "");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

// define('ROOT', str_replace("app/core", "app/", $path));
define('ASSETS', str_replace("app/core", "public/template", $path));

// set to true to allow error reporting
// set to false when uploaded online to stop error reporting
if ('DEBUG') {
    ini_set("display_errors", 1);
} else {
    ini_set("display_errors", 0);
}
define('DEBUG', true);
