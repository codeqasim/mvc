<?php


class Hotels
{
	
	function __construct()
	{
	    
	}

    function index()
	{
		$title = 'Search Hotels';
		echo "Hotels Listing Page";
	}

	function search()
	{
		$title = 'Search Hotels';
		include "app/views/search.php";
	}

	function hotel_data()
	{
	    $title = 'Hotels';
		$url = explode('/', $_GET['url']);

        $country = $url[1];
        $city = $url[2];
        $checkin = $url[3];
        $checkout = $url[4];
        $adults = $url[5];
        $children = $url[6];
        $currceny_code = $url[7];
		$data = array(
			'country'=>$country,
			'city'=>$city,
			'checkin'=>$checkin,
			'checkout'=>$checkout,
			'adults'=>$adults,
			'children'=>$children,
			'currceny_code'=>$currceny_code
		);

		// echo "<pre>";
		// print_r($data);
	// kvstore API url

	   $this->apiurl = API_ENDPOINT.'Travelhopehotels/list?appKey='.API_KEYS;

		// Initializes a new cURL session
		$curl = curl_init($this->apiurl);
		// Set the CURLOPT_RETURNTRANSFER option to true
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// Set the CURLOPT_POST option to true for POST request
		curl_setopt($curl, CURLOPT_POST, true);
		// Set the request data as JSON using json_encode function
		curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
		// Set custom headers for RapidAPI Auth and Content-Type header
		curl_setopt($curl, CURLOPT_HTTPHEADER, [
		  'Content-Type: application/json'
		]);
		// Execute cURL request with all previous settings
		$response = curl_exec($curl);
		// Close cURL session
		curl_close($curl);
		// echo $response . PHP_EOL;

    	echo ($response);

	}
}

?>