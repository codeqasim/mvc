<?php

    include "app/views/header.php";
    echo "<div class='container'>";
    require_once('app/controller/Hotels.php');
    require_once('app/controller/Flights.php');

    $Hotels = new Hotels();
    $flights = new Flights();

    function home()
    {
    $title='Homepage';
    echo "Hotels Listing Page";

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
