<?php

require  "vendor/autoload.php";
$whoops = new Whoops\Run();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
$whoops->register();

session_start();
define('layout', "app/views/main.php");
define('views', "app/views/");
define('breadcrumb', "app/views/partcials/breadcrumb.php");

define('HotelsViews', "app/views/modules/hotels/");
define('css', "assets/css/");
define('js', "assets/js/");

define('API_ENDPOINT', "https://www.phptravels.net/api/");
define('API_KEYS', "phptravels");
define('root', $root);
define('HotelList', 'app/views/modules/hotels/list.php');
define('HotelDetails', 'app/views/modules/hotels/details.php');


// included libs
// require 'lib/compress/compress.php';
require 'app/lib/i18n/i18n.class.php';
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

class Main
{

    function __construct()
    {

    }

    function index()
    {
        $base_url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $base_explode = explode('/', $base_url);
        // if($_SESSION['session_lang'] == 'assets')
        // {$_SESSION['session_lang'] = 'en';}

        // meta
        $title = "Homepage";
        $meta_title = "Homepage";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";

        $body = views."home.php";
        include layout;
    }

    function login()
    {
        $title = "Login";
        $meta_title = "Login";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";
        // $body = breadcrumb;
        $body = views."accounts/login.php";
        include layout;
    }

    function about()
    {
        // meta
        $title = T::hotels_hotels;
        $meta_title = "about";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";
        // $body = breadcrumb;
        $body = views."modules/cms/about.php";
        include layout;
    }

        function careers()
    {
                // meta
        $title = "careers";
        $meta_title = "careers";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";
        $body = views."modules/cms/careers.php";
        include layout;
    }

    function contact()
    {
        // meta
        $title = "careers";
        $meta_title = "careers";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";
        $body = views."modules/cms/contact.php";
        include layout;
    }

    function faqs()
    {
                // meta
        $title = "faqs";
        $meta_title = "faqs";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";
        $body = views."modules/cms/faqs.php";
        include layout;
    }

    function policy()
    {
            // meta
        $title = "policy";
        $meta_title = "policy";
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";
        $body = views."modules/cms/policy.php";
        include layout;
    }

    function hotel_list()
    {

        $url = explode('/', $_GET['url']);
        $count = count($url);
        if ($count < 8) {
            $homepage=root;
            echo ("<script>location.href='$homepage'</script>");
        }


        $lang = $url[0];
        $currceny = $url[1];
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

       $this->apiurl = API_ENDPOINT.'Travelhopehotels/list?appKey='.API_KEYS;
        $curl = curl_init($this->apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
          'Content-Type: application/json'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
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
        // (array) $arrsdecode, (array) $arr);
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

        $arr = [];
        if(!empty($listdata)){

        ;
        foreach($listdata->response as $a){
        $arr[] = array(
        'name' =>$a->company_name,
        'address'=> $a->address,
        'image'=>$a->image,
        'rating'=>$a->rating,
        'price'=>$a->price,
        'currency'=>$url[1],
        'desc'=>substr($a->description,0,150),
        'id'=>$a->id,
        'stars'=>(int)$a->rating,
        'link'=> root.''.$lang .'/'.$currceny.'/hotel/'.$list->id .'/'.str_replace(' ', '-', strtolower($list->company_name)) .'/'.$checkin.'/'.$checkout."/".$adults."/".$children
        );
        }
        }


        $hotels = '
        <script>
        var $hotels = $("#hotels"),
        handlebarsTemplate = $("#handlebars-hotels").html(),
        templateCompile = Handlebars.compile(handlebarsTemplate),
        data = {
        "hotels" :
        '.json_encode($arr).'
        }
        $hotels.html(templateCompile(data));
        </script>
        ';

        // meta
        $title = "Hotels in ".$city;
        $meta_title = "Hotels in ".$city;
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";

        $body = HotelList;
        include "app/views/main.php";




    }

    function hotel_detail(){

        if (empty($_POST['id'])) {
            $url = explode('/', $_GET['url']);
        	$currceny = $url[1];
        	$id = $url[3];
        	$checkin = str_replace('-',' /',$url[5]);
            $checkout = str_replace('-',' /',$url[6]);
        	$adults = $url[7];
        	$children = $url[8];

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

        // meta
        $title = $hotel->response->company_name;
        $meta_title = $hotel->response->company_name;
        $meta_appname = "Booknow";
        $meta_desc = "";
        $meta_img = "";
        $meta_url = "";
        $meta_author = "";
        $meta = "1";

        $body = HotelDetails;
        include "app/views/main.php";
    }


}