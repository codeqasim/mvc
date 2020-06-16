<?php

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

$APPNAME = "Travel App";

/* API CREDENTIALS */
$API_ENDPOINT = "https://www.phptravels.net/api/";
$API_KEYS = "phptravels";

$servername = "localhost";
$username = "root";
$password = "";
$database = "app";


define('API_ENDPOINT', "https://www.phptravels.net/api/");
define('API_KEYS', "phptravels");
define('root', $root);

define('views', "app/views/");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>