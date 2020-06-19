    <?php
    // All rights reserved by PHPTRAVELS 2020 www.phptravels.com
    ?>

    <?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (!file_exists(".htaccess")) {
    echo '<!DOCTYPE html><html lang="en">';
    echo "<style>body{font-family:calibri;padding:0px;margin:25px}.alert{background:red}.box{height:24px;width:10%;position:relative:display:block}code{font-family:monospace; color: crimson; background-color: #f1f1f1; padding: 0px; font-size: 16px; }</style>";
    echo "The .htaccess file does not exist on main directory of your site.<br>";
    echo "If you can't see this file, you can create a new file named \".htaccess\" in the main directory of your site and you can add these codes to inside this file:<br>";
    echo "<br>";
    echo "<code>";
    echo "RewriteEngine On<br>";
    echo "RewriteCond %{REQUEST_FILENAME} !-f<br>";
    echo "RewriteCond %{REQUEST_FILENAME} !-d<br>";
    echo "RewriteRule ^(.*)$ index.php?/$1 [L]";
    echo "</code>";
    echo "<br><br><br>";
    echo "<strong>If you have SSL installed use this code instead</strong><br><br>";
    echo "<code>";
    echo "RewriteEngine on<br>";
    echo "DirectoryIndex load.php index.php<br>";
    echo "RewriteCond %{HTTPS} !=on<br>";
    echo "RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301,NE]<br>";
    echo "RewriteCond %{SCRIPT_FILENAME} !-d<br>";
    echo "RewriteCond %{SCRIPT_FILENAME} !-f<br>";
    echo "RRewriteRule ^(.*)$ index.php?url=$1 [QSA,L]<br>";
    echo "</code>";
    exit();
    }

    $php_version = explode('.', phpversion());
    if ($php_version[0] < 7) { include_once 'app/core/php.php'; die(); }

    $root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
    $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);




    include('app/controller/Hotels.php');
    include('app/controller/Flights.php');
    include('app/controller/Cms.php');
    include('app/controller/Account.php');
    include('app/controller/Main.php');
    

    $hotels = new Hotels();
    $flights = new Flights();
    $cms = new Cms();
    $account = new Account();
    $main = new Main();
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
    $lan_function = $url[0];
    /* routes */
    if     ($url[0] == 'search') $hotels->search();
    elseif ($url[0] == 'hotels') $hotels->hotel_list();
    elseif ($url[0] == 'hotel') $hotels->hotel_detail();
    elseif ($url[0] == 'flights') $flights->index();
    elseif ($url[0] == $lan_function) $main->index();
    /* CMS */ 
    elseif ($url[0] == 'cms') $cms->index();
    elseif ($url[0] == 'policy') $cms->policy();
    elseif ($url[0] == 'faqs') $cms->faqs();
    elseif ($url[0] == 'careers') $cms->careers();
    elseif ($url[0] == 'contact') $cms->contact();
    elseif ($url[0] == 'about') $cms->about();
    elseif ($url[0] == 'login') $account->index();
    
    else page404();
    }

    else
    { home(); }

    include "app/views/footer.php";