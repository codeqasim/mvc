<?php
session_start();
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
        $base_explode = explode('/', $base_url);
        // $lang_val = $base_url;
        $_SESSION['session_lang'];
        // return $_SESSION['session_lang'];
        $title = "Homepage";
        $body = "app/views/home.php";
        include "app/views/main.php";


	}
}