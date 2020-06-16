<?php

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
define('root', "http://localhost/mvc/");

define('views', "app/views/");

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>