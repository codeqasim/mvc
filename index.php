    <?php
    // All rights reserved by PHPTRAVELS 2020 www.phptravels.com
    ?>

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
    require_once('app/controller/Account.php');

    $hotels = new Hotels();
    $flights = new Flights();
    $cms = new Cms();
    $account = new Account();
    function home()
    {
    $title = "Homepage";
    include "app/views/home.php";
    }

    function page404()
    { $title = "page not found!"; include "app/views/404.php"; }

    function copyright() {
    echo "All rights reserved by <strong>PHPTRAVELS</strong> 2020";
    }

    if (isset($_GET['url'])) {  $url = explode('/', $_GET['url']);
    /* routes */
    if     ($url[0] == 'search') $hotels->search();
    elseif ($url[0] == 'hotels') $hotels->hotel_data();
    elseif ($url[0] == 'hotel') $hotels->hotel_detail();
    elseif ($url[0] == 'flights') $flights->index();

    /* CMS */ 
    elseif ($url[0] == 'cms') $cms->index();
    elseif ($url[0] == 'about') $cms->about();
    elseif ($url[0] == 'login') $account->index();
    else page404();
    }

    else
    { home(); }

    include "app/views/footer.php";