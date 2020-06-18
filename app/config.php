<span id="country"></span>
<span id="state"></span>
<span id="city_name"></span>
<span id="address"></span>
<span id="latitude"></span>
<span id="longitude"></span>

<?php

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// translation lib
require 'lib/i18n/i18n.class.php';
$i18n = new i18n('app/lang/{LANGUAGE}.json', 'app/lib/i18n/langcache/', 'en');

// function dd
function dd($data) {
echo "<pre>";
print_r($data);
}

$APPNAME = "Travel App";

/* API CREDENTIALS */
$API_ENDPOINT = "https://www.phptravels.net/api/";
$API_KEYS = "phptravels";

/* GEO LOCATION PROVIDER */
// $geo_url = "http://ip-api.com/json/";
$geo_url = "https://geolocation-db.com/jsonp";

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