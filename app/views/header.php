<?php
include "app/config.php";
include "app/functions.php";
?>
<!DOCTYPE html>
<html lang="en" dir="#rtl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<title><?=$title;?></title>
<link rel="stylesheet" href="<?=$root.css;?>_style.css" />
<!-- <link rel='stylesheet' href='<?=$root;?>assets/css/_rtl.css'/> -->
<script> var baseurl = "<?=$root;?>"; </script>
<link rel="shortcut icon" href="<?=$root;?>assets/img/logo.png">
<script src="<?=$root.js;?>jquery.min.js"></script>
<script src="<?=$root.js;?>isotope.min.js"></script>

<script>
var app = {
    url:'<?=$root;?>',
    url_root:'<?=$root;?>',
    user_ip:'<?=user_ip;?>',
    user_city:'<?=user_city;?>',
    user_country:'<?=user_country;?>',
    user_country_code:'<?=user_country_code;?>',
    user_calling_code:'<?=user_calling_code;?>',
    user_latitude:'<?=user_latitude;?>',
    user_longitude:'<?=user_longitude;?>',
    booking_decimals:0,
    thousand_separator:'.',
    decimal_separator:',',
    currency_position:'left',
    currency_code:'USD',
    currency_symbol:'$',
    currency_rate:'1',
    date_format:'DD/MM/YYYY',
    user_country:'',
    map_provider:'gmap',
    map_gmap_key:'key',
    routes:{
        login:'<?=$root;?>login',
        register:'<?=$root;?>/register',
    },
    currentUser:0,
    rtl: 0
};
var i18n = {
    warning:"Warning",
    success:"Success",
};
</script>

</head>
<body>

<header class="sticky">
    <nav>
        <div class="container flex flex-content-between row-rtl">
            <div class="c2 c-sm-2 p0 rtl-align-right mx-auto">
                <div class="logo">
                    <a href="<?=$root;?>">
                    <img alt="logo" src="<?=$root;?>uploads/main/logo.png" />
                    <strong>BOOK</strong>NOW
                    </a>
                </div>
                <div class="bars show-m">
                    <input type="checkbox" id="menu-left" hidden />
                    <label for="menu-left">
                    <span></span>
                    </label>
                    <?php include 'menu.php'; ?>
                </div>
            </div>
            <?php include 'menu.php'; ?>
        </div>
    </nav>


</header>


    <ul class="dropdown">
    <?php $count = 0; foreach($fils_data as $item):?>
    <form method='post' name="langformform_lang<?=$count;?>" action='' id='form_lang<?=$count;?>'>
    <li  onclick="langformform_lang<?=$count;?>.submit();" ><a  href="#"><i class="flag <?=$item->country?>"></i> <?=$item->language_name?></a></li>
    <input type="hidden" name="lang" value="<?=$item->lang_code?>" />
    </form>
    <script>function changeLang(){ document.getElementById('form_lang<?=$count;?>').submit(); }</script>
    <?php $count++; endforeach; ?>
    </ul>




<!--<form method='post' action='' id='form_lang' style="display:inline">
<select name='lang' onchange='changeLang();' style="height: 40px; padding: 5px 10px; text-align: left; min-width: 115px; border-radius: 4px; border: 1px solid #c2c5d9;">
<?php foreach($fils_data as $item):?>
<?php if($_SESSION['session_lang'] == $item->lang_code){?>
<option value='<?=$_SESSION['session_lang']?>' selected><?=$item->language_name?></option>
<?php }else{ ?>
<option value='<?=$item->lang_code?>'><?=$item->language_name?></option>
<?php } ?>
<?php endforeach;?>
</select>
</form>
<script>function changeLang(){ document.getElementById('form_lang').submit(); }</script>-->

