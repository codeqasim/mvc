<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";
// Here append the common URL characters.
$link .= "://";
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
$base_url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$base_explode = explode('/', $base_url);
?>
<div class="nav c10 p0 flex hide-m mobnav animated fadeInLeft hide row-rtl">
    <div class="items-center">
        <div class="menu row-rtl">
            <a href="<?=$root?>"><i class="mdi mdi-home"></i> <span>Home</span></a>
            <a href="<?=$root;?>hotels" class="active"> <i class="mdi mdi-hotel"></i> <span>Hotels</span></a>
            <a href="<?=$root;?>flights" class=""> <i class="mdi mdi-airplane"></i> <span>Flights</span></a>
            <a href="<?=$root;?>tours" class=""> <i class="mdi mdi-case"></i> <span>Tours</span></a>
            <a href="<?=$root;?>bus" class=""> <i class="mdi mdi-bus"></i> <span>bus</span></a>
            <a href="<?=$root;?>cars" class=""> <i class="mdi mdi-car"></i> <span>Cars</span></a>
        </div>
    </div>

    <div class="nav-right">
        <ul>
            <li class="dropdown_show"><a href="usd"><strong>USD</strong></a>
            <ul class="dropdown">
                <li><a href="<?=$root;?>"><i class="flag us"></i> <strong>USD</strong> United States Dollar</a></li>
                <li><a href="<?=$root;?>"><i class="flag gb"></i> <strong>EURO</strong> Eorupeon Euro</a></li>
                <li><a href="<?=$root;?>"><i class="flag sa"></i> <strong>SAR</strong> Saudi Riyals</a></li>
                <li><a href="<?=$root;?>"><i class="flag pk"></i> <strong>PKR</strong> Pakistani Rupees</a></li>
                <li><a href="<?=$root;?>"><i class="flag gb"></i> <strong>POUND</strong> British Pound</a></li>
                <li><a href="<?=$root;?>"><i class="flag in"></i> <strong>INR</strong> Indian Rupees</a></li>
            </ul>

            </li>
            <li class="dropdown_show">
                <form method="post" action="<?=$root;?>en/">
                    <input type="hidden" name="test" value="<?=str_replace($base_explode[2],'en',$link)?>">
                    <button  class="languages"><i class="flag us"></i> ENGLISH <span class="arrow-down">&#10094;</span></button>
                </form>
            <?php
            $dir   = 'app/lang';
            $files = scandir($dir,1); 
            $data=array();
            for ($i=0; $i < count($files)-2; $i++) { 
               array_push ($data,$files[$i]);
            }
            $fils_data = array();
            foreach ($data as $value )
            {
              $string = file_get_contents("app/lang/$value");
              array_push ($fils_data,json_decode($string));
            }?>
            
            <ul class="dropdown">
            <?php
            foreach($fils_data as $item):?>
            <li>
                <form method="post" action="<?=$root ."".$item->lang_code;?>/">
                    <input type="hidden" name="test" value="<?=str_replace($base_explode[2],$item->lang_code,$link)?>">
                    <input type="hidden" name="testss" value="<?=$base_explode[2]?>">
                    <button  class="languages"><i class="flag <?=$item->country?>"></i>  <?=$item->language_name?></button>
                </form>
                </li>
            <?php endforeach; ?>
            </ul>
            </li>
            <li><a href="<?=$root;?>login"><i class="icon mdi mdi-face"></i> <strong><?=T::login; ?></strong></a></li>
        </ul>
        <a href="<?=$root;?>login#signup" class="btn danger-o f-left"><?=T::signup; ?></a>
        <ul>
         <li><a href="<?=$root;?>agents"><strong><?=T::agents; ?></strong></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>