<?php

    $root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
    $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

    include "app/views/header.php";
    include "config.php";
    echo "<div class='container'>";
    require_once('app/controller/Hotels.php');
    require_once('app/controller/Flights.php');

    $Hotels = new Hotels();
    $flights = new Flights();

    function home()
    {
    $title='Homepage';
    include "app/views/home.php";
    }

    function page404()
    {
    include "app/views/404.php";
    }


if (isset($_GET['url'])) {  
        
        $url = explode('/', $_GET['url']);
        /*Route*/
        if ($url[0] == 'search')
            /*Controller object/function*/
            $Hotels->search();

        elseif ($url[0] == 'hotels')
            /*Controller object/function*/
            $Hotels->hotel_data();

        elseif ($url[0] == 'flights')
            /*Controller object/function*/
            $flights->index();

        elseif ($url[0] == 'hotel')
            /*Controller object/function*/
            $Hotels->hotel_detail();

        else
            page404();
    
}
/*********default function*/


else
{
    home();
}
echo "</div>";
include "app/views/footer.php";
