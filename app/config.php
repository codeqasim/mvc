<?php

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// included libs
// require 'lib/compress/compress.php';
require 'lib/i18n/i18n.class.php';
$i18n = new i18n('app/lang/{LANGUAGE}.json', 'app/cache/', 'en');

// Set Language variable
if(isset($_POST['lang']) && !empty($_POST['lang'])){
 $_SESSION['session_lang'] = $_POST['lang'];

 if(isset($_SESSION['session_lang']) && $_SESSION['session_lang'] != $_POST['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['session_lang'])){
 //   print_r($_SESSION['session_lang']);
    $i18n->setForcedLang($_SESSION['session_lang']);
    $i18n->init();
}else{
    $_SESSION['session_lang'] = 'en';
    $i18n->setForcedLang('en');
    $i18n->init();
}

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


// Function to get the client IP address
$ip = call_user_func(function(){
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
});


// geo api 
$geo_url = "http://api.ipstack.com/";
$geo = $geo_url.$ip."?access_key=7f51f6157497018e41465e3d87e86f60";
$details = json_decode(file_get_contents($geo));
//$geo_url = "http://ip-api.com/json/";
// $geo_url = "https://api.ipdata.co/?api-key=test/";
// $geo_url = "https://geolocation-db.com/jsonp";
define('city', $details->city);
define('country', $details->country_name);

// $servername = "localhost:3307";
// $username = "root";
// $password = "";
// $database = "app";

// hotels api
define('HOTELS_API_ENDPOINT', "https://bookingengine.co/api/");
define('Ota', "172a7bc0-d892-11e9-ad7d-8d041c8c7592");
define('HotelsList', HOTELS_API_ENDPOINT."hotels/search");
define('HotelsDetail', HOTELS_API_ENDPOINT."hotels/details");

// Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>