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

	function hotel_list()
	{

		$url = explode('/', $_GET['url']);
		$count = count($url);
        if ($count < 8) {
			$homepage=root;
			echo ("<script>location.href='$homepage'</script>");
		}

        $lang = $url[1];
        $currceny = $url[2];
        $city = $url[3];
        $checkin = $url[4];
        $checkout = $url[5];
        $adults = $url[6];
        $children = $url[7];
		$data = array(
			'country'=>$city,
			'checkin'=>$checkin,
			'checkout'=>$checkout,
			'adults'=>$adults,
			'children'=>$children,
			'currceny_code'=>$currceny
		);

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
		// echo $response . PHP_EOL
		$arr = json_decode($response);

		if (empty($arr->response->HotelListResponse)) {
		$listrating = [];
    	foreach ($arr->response as $list) {
    		$y = $list->rating;
			$x = (int)$y;
    		if ($x == 1) {
    			$stars []= $x;
    			$listrating = array('count_stars'=>array_count_values($stars));
    		}elseif ($x == 2) {
    			$stars []= $x;
    			$listrating = array('count_stars'=>array_count_values($stars));
    		}elseif ($x== 3) {
    			$stars []= $x;
    			$listrating = array('count_stars'=>array_count_values($stars));
    		}elseif ($x == 4) {
    			$stars []=$x;
    			$listrating = array('count_stars'=>array_count_values($stars));
    		}elseif ($x == 5) {
    			$stars []= $x;
    			$listrating = array('count_stars'=>array_count_values($stars));
    		}
    		}
	  if (isset($listrating['count_stars']['5']))
          {$five_stars = $listrating['count_stars']['5'];
          }else{$five_stars = "0";} 
      if (isset($listrating['count_stars']['4']))
          {$four_stars=$listrating['count_stars']['4'];
          }else{$four_stars="0";}
      if (isset($listrating['count_stars']['3']))
          {$three_stars=$listrating['count_stars']['3'];
          }else{$three_stars="0";}
      if (isset($listrating['count_stars']['2']))
          {$two_stars=$listrating['count_stars']['2'];
          }else{$two_stars="0";}
      if (isset($listrating['count_stars']['1']))
          {$one_stars=$listrating['count_stars']['1'];
          }else{$one_stars="0";}

		// $arrs = json_encode($listrating);
		// $arrsdecode = json_decode($arrs);
		// $obj_merged = (object) array_merge(
  //       (array) $arrsdecode, (array) $arr);
		
	}

	if (empty($arr->response->HotelListResponse)) {
			$listdata = $arr;
			$totalhotel = count($listdata->response);
			$cityname = $url[3];
		}else{
			$listempty = 'data not found!';
			$totalempty = '0';
			$cityname = $url[3];
		}
         echo "<script>var title = 'Hotel listing page'</script>";
         include HotelsViews."list.php";
	}

	function hotel_detail(){

		if (empty($_POST['id'])) {
			$url = explode('/', $_GET['url']);
        	$lang = $url[1];
        	$currceny = $url[2];
        	$id = $url[3];
        	$checkin = $url[5].'/'.$url[6].'/'.$url[7];
        	$checkout = $url[8].'/'.$url[9].'/'.$url[10];
        	$adults = $url[11];
        	$children = $url[12];

        	$data = array(
			'currceny '=>$currceny,
			'checkin'=> $checkin,
			'checkout'=> $checkout,
			'hotel_id'=> $id,
			'custom_payload'=>'{"vendor": 3}'
		);
		// echo "<pre>";
		// print_r($data);
		// exit();

		}else{

		$id = $_POST['id'];
		$checkin = $_POST['checkin'];
		$checkout = $_POST['checkout'];
		$company_name = $_POST['title'];
		$currceny = $_POST['currceny'];
		$data = array(
			'currceny'=>$currceny,
			// 'country'=>'USD',
			'checkin'=> $checkin,
			'checkout'=> $checkout,
			'hotel_id'=> $id,
			// 'company_name'=> $company_name,
			'custom_payload'=>'{"vendor": 3}'
		);
		// echo "<pre>";
		// print_r($data);
		// exit();

		}

		$this->apiurl = API_ENDPOINT.'Travelhopehotels/detail?appKey='.API_KEYS;
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
		$arr = json_decode($response);
	   //	echo "<pre>";
       //	print_r ($arr);
        $hotel = $arr;

         include HotelsViews."details.php";
	}
}

?>