<script>
$.ajax({
    url: "https://geolocation-db.com/jsonp",
    jsonpCallback: "callback",
    dataType: "jsonp",
    success: function(location) {
        $('#country').html(location.country_name);
        $('#state').html(location.state);
        $('#city').html(location.city);
        $('#latitude').html(location.latitude);
        $('#longitude').html(location.longitude);
        $('#ip').html(location.IPv4);
    }
});


    </script>

    <p>Country: <span id="country"></span></p>
    <p>State: <span id="state"></span></p>
    <p>City: <span id="city"></span></p>
    <p>Address: <span id="address"></span></p>

    <p>Latitude: <span id="latitude"></span></p>
    <p>Longitude: <span id="longitude"></span></p>

   


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