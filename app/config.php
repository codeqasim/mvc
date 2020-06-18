<?php

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// included libs
// require 'lib/compress/compress.php';
require 'lib/i18n/i18n.class.php';
$i18n = new i18n('app/lang/{LANGUAGE}.json', 'app/cache/', 'en');

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
$geo_url = "http://ip-api.com/json/";
// $geo_url = "https://geolocation-db.com/jsonp";
$details = json_decode(file_get_contents($geo_url));

define('city', $details->city);
define('country', $details->country);

// $servername = "localhost:3307";
// $username = "root";
// $password = "";
// $database = "app";

define('API_ENDPOINT', "https://www.phptravels.net/api/");
define('API_KEYS', "phptravels");
define('root', $root);


// hotels api
define('HOTELS_API_ENDPOINT', "https://bookingengine.co/api/");
define('Ota', "172a7bc0-d892-11e9-ad7d-8d041c8c7592");
define('HotelsList', "hotels/search");
define('HotelsDetail', "hotels/details");


define('views', "app/views/");
define('css', "assets/css/");
define('js', "assets/js/");

// Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>