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
		
		$_SESSION['mylans'] = $mylan;
		
	}
}