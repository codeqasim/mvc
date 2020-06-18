
    <script type="text/javascript">
       async getAddress() {
    // notice, no then(), cause await would block and
    // wait for the resolved result
    const position = await this.getCoordinates();
    let latitude = position.coords.latitude;
    let longitude = position.coords.longitude;
    let url = Constants.OSMAP_URL + latitude + "&lon=" + longitude;

    // Actually return a value
    return this.reverseGeoCode(url);
}
    </script>


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