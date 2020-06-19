<?php

/**
 * 
 */
class Main
{
	
	function __construct()
	{
		
	}

	function index()
	{

        $base_url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        if (!empty($base_url)){

        $url = explode('/', $_GET['url']);
        $lang_val = $url[0];
        $_SESSION['session_lang'] = $lang_val;
        $lang = $_SESSION['session_lang'];

        }else {

         echo "hello";

        }



        $title = "Homepage";
        $body = "app/views/home.php";
        include "app/views/main.php";


	}
}