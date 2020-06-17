<div class="nav c10 p0 flex hide-m mobnav animated fadeInLeft hide row-rtl">
    <div class="items-center">
        <div class="menu row-rtl">
            <a href="<?=$root;?>search" class=""> <i class="mdi mdi-search"></i> </a>
            <a href="<?=$root;?>hotels" class="active"> <i class="mdi mdi-hotel"></i> </a>
            <a href="<?=$root;?>flights" class=""> <i class="mdi mdi-airplane"></i> </a>
            <a href="<?=$root;?>tours" class=""> <i class="mdi mdi-case"></i> </a>
            <a href="<?=$root;?>bus" class=""> <i class="mdi mdi-bus"></i> </a>
            <a href="<?=$root;?>car" class=""> <i class="mdi mdi-car"></i> </a>
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
            <li class="dropdown_show"><a href="<?=$root;?>" class="languages"><i class="flag us"></i> ENGLISH <span class="arrow-down">&#10094;</span></a>

            <?php
            $dir    = 'app/lang';
            $files1 = scandir($dir);

            dd($files1);
            ?>

            <ul class="dropdown">
              <li><a href="<?=$root;?>ar"><i class="flag sa"></i> Arabic</a></li>
              <li><a href="<?=$root;?>en"><i class="flag us"></i> English</a></li>
            </ul>
            </li>
            <li><a href="<?=$root;?>login"><i class="icon mdi mdi-face"></i> <strong><?=TRANS::login; ?></strong></a></li>
        </ul>
        <a href="<?=$root;?>login#signup" class="btn danger-o f-left"><?=TRANS::signup; ?></a>
        <ul>
         <li><a href="<?=$root;?>agents"><strong><?=TRANS::agents; ?></strong></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>