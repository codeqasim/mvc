<?php

class Cms
{
	
	function __construct(){
	}
	
	function index(){
		echo 'index';
	}

    function about()
    {
        $title = "About Us";
        $body = "app/views/modules/cms/about.php";
        include "app/views/main.php";
    }

    function careers()
    {
    include "app/views/modules/cms/careers.php";
    }

    function contact()
    {
    include "app/views/modules/cms/contact.php";
    }

    function faqs()
    {
    include "app/views/modules/cms/faqs.php";
    }

    function policy()
    {
    include "app/views/modules/cms/policy.php";
    }

}
?>