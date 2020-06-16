<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
    $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

    include "app/views/header.php";
    include "config.php";
    require_once('app/controller/Hotels.php');
    require_once('app/controller/Flights.php');
    require_once('app/controller/Cms.php');

    $Hotels = new Hotels();
    $flights = new Flights();

    function home()
    {
    define('title', "Homepage");
    include "app/views/home.php";
    }

    function page404()
    { include "app/views/404.php"; }

    if (isset($_GET['url'])) {  $url = explode('/', $_GET['url']);
    /* routes */
    if     ($url[0] == 'search') $Hotels->search();
    elseif ($url[0] == 'hotels') $Hotels->hotel_data();
    elseif ($url[0] == 'hotel') $Hotels->hotel_detail();
    elseif ($url[0] == 'flights') $flights->index();

    /* CMS */
    elseif ($url[0] == 'cms') $cms->index();
    else page404();
}

else
{ home(); }

include "app/views/footer.php";