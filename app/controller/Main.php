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
		
		// session_start();
		$url = explode('/', $_GET['url']);
		$mylan = $url[0];
		$_SESSION['test'] = $mylan;
		 // return TRUE;
		$test_lang = $_SESSION['test'];
		include "app/views/header.php";
		
	}
}