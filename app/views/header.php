<!DOCTYPE html>
<html lang="en" dir="#rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title></title>
        <link rel="stylesheet" href="<?=$root;?>assets/css/_style.css" />
        <!--<link rel="stylesheet" href="<?=$root;?>assets/css/_rtl.css" />-->
        <script> var baseurl = "<?=$root;?>"; </script>
        <link rel="shortcut icon" href="<?=$root;?>assets/img/logo.png">

        <?php meta; ?>

        <script>
        /*var app = {
            url:'<?=$root;?>,
            url_root:'<?=$root;?>',
            booking_decimals:0,
            thousand_separator:'.',
            decimal_separator:',',
            currency_position:'left',
            currency_code:'USD',
            currency_symbol:'$',
            currency_rate:'1',
            date_format:'DD/MM/YYYY',
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
        var daterangepickerLocale = {
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "first_day_of_week": 1,
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
        };*/
    </script>

    <script src="<?=$root;?>assets/js/jquery.min.js"></script>
    <script src="<?=$root;?>assets/js/isotope.min.js"></script>
    
    </head>
    <body onload="<!--oneway()-->" >
        <header class="sticky">
            <nav>
                <div class="container flex flex-content-between row-rtl" >
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