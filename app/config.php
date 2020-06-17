<?php

require './lib/i18n/i18n.class.php';
$i18n = new i18n('./lib/lang/{LANGUAGE}.json', './lib/i18n/langcache/', 'en');
$i18n->setForcedLang('en');
$i18n->init();

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

$APPNAME = "Travel App";

/* API CREDENTIALS */
$API_ENDPOINT = "https://www.phptravels.net/api/";
$API_KEYS = "phptravels";

// $servername = "localhost:3307";
// $username = "root";
// $password = "";
// $database = "app";

define('API_ENDPOINT', "https://www.phptravels.net/api/");
define('API_KEYS', "phptravels");
define('root', $root);

define('views', "app/views/");

// Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>