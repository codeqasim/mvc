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
        array_push($final_results, (object)array("id" => $item->latinFullName, "text" => $item->latinFullName , "icon" => $item->countryCode));
    }
    echo json_encode($final_results);
}
