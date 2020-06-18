<?php
//Loaction Api
if(isset($_GET['q']) && !empty($_GET['q'])) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://yasen.hotellook.com/autocomplete?lang=en-US&limit=10&term=" . $_GET['q'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $city = json_decode($response);
    $final_results = array();
    foreach ($city->cities as $item) {
        array_push($final_results, (object)array("id" => $item->countryCode, "text" => $item->latinFullName));
    }
    echo json_encode($final_results);
}


$user_country ="<span id='country'></span>";
$user_state ="<span id='state'></span>";
$user_city_name ="<span id='city_name'></span>";
$user_address ="<span id='address'></span>";
$user_latitude ="<span id='latitude'></span>";
$user_longitude ="<span id='longitude'></span>";
