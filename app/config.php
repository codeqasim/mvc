<?php

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// included libs
// require 'lib/compress/compress.php';
require 'lib/i18n/i18n.class.php';
$i18n = new i18n('app/lang/{LANGUAGE}.json', 'app/cache/', 'en');

// Set Language variable
if(isset($_SESSION['session_lang'])){
    // unset($_SESSION['session_lang']);
    $i18n->setForcedLang($_SESSION['session_lang']);
    $i18n->init();
}else{
    session_start();
    $_SESSION['session_lang'] = 'en';
    $i18n->setForcedLang($_SESSION['session_lang']);
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
        $ipaddress = 'lahore';
    return $ipaddress;
});

if ($ip == '::1'){
$ip ="110.36.223.2";
}

// geo api
$geo_url = "http://api.ipstack.com/";
$geo = $geo_url.$ip."?access_key=7f51f6157497018e41465e3d87e86f60";
$details = json_decode(file_get_contents($geo));
//$geo_url = "http://ip-api.com/json/";
// $geo_url = "https://api.ipdata.co/?api-key=test/";
// $geo_url = "https://geolocation-db.com/jsonp";
// get response http://api.ipstack.com/110.38.8.53?access_key=7f51f6157497018e41465e3d87e86f60
// locations resp https://yasen.hotellook.com/autocomplete?lang=en-US&limit=10&term=lah
define('user_city', $details->city);
define('user_country', $details->country_name);
define('user_ip', $details->ip);
define('user_country_code', $details->country_code);
define('user_calling_code', $details->location->calling_code);
define('user_latitude', $details->latitude);
define('user_longitude', $details->longitude);

// $servername = "localhost:3307";
// $username = "root";
// $password = "";
// $database = "app";

// Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>