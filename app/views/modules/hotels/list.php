<div class="crumb">
  <div class="container h-100">
    <ul>
      <li class="breadcrumb-item"><a href="<?=root;?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?=$lang = $url[0];;?>"><?=$lang = $url[0];;?></a></li>
      <li class="breadcrumb-item active"><?=$city = $url[3]; ?> </li>
    </ul>
  </div>
</div>
<div class="list-page" id="listing">
  <div class="edit-search">
    <div class="container">
      <div class="row mb-20 row-rtl">
        <div class="c10">
          <div class="left-side-info rtl-align-right">
            <span><strong>Lahore, Cairo, Egypt</strong></span>
            <div>
              <p><strong>1 Night </strong>( 11 Feb , 2020 - 12 Feb , 2020 )</p>
              <p>1 Traveler , 1 Room</p>
            </div>
          </div>
        </div>
        <div class="c2 modify-search">
          <div class="right-side-info">
            <label for="edit" class="btn prime-outline w100">Edit</label>
          </div>
        </div>
      </div>
      <input id="edit" type="checkbox" hidden>
      <div class="panel">
        <div class="search-form">
          <?php include 'search.php';?>
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="wrapper">
    <div class="row row-rtl">
      <div class="c3">
        <aside>
          <section class="" id="stuff-filters">
            <!--<button id="show-map-data" class="map-view" style="background-image:url('<?php echo $theme_url;?>assets/img/map-filter.png');">
              <span>Map View</span>
              </button>-->
            <div class="filter-section">
              <div class="filter-header">
                <h5>Filters</h5>
              </div>
              <div class="flex flex-content-between items-center pb-10 row-rtl">
                <span>Make search easier</span>
                <button id="clear-filters">Clear Filter</button>
              </div>
            </div>
            <input type="text" placeholder="Search for hotel name" id="searchlist"/>
            <div class="filter-section mt-30 pb-10">
              <div class="filter-header">
                <h5>Price</h5>
                <br>
                <div class="row">
                  <div class="c12">
                    <div id="slider-range"></div>
                  </div>
                </div>
                <div class="row slider-labels">
                  <div class="c6 caption">
                    <strong>Min:</strong> <span id="slider-range-value1"></span>
                  </div>
                  <div class="c6 text-right caption">
                    <strong>Max:</strong> <span id="slider-range-value2"></span>
                  </div>
                </div>
                <input type="hidden" name="min-value" value="">
                <input type="hidden" name="max-value" value="">
              </div>
              <script>
                // Set visual min and max values and also update value hidden form inputs
                  $(document).ready(function() {
                    $('.noUi-handle').on('click', function() {
                      $(this).width(50);
                    });
                    var rangeSlider = document.getElementById('slider-range');
                    var moneyFormat = wNumb({
                      decimals: 0,
                      thousand: ',',
                      prefix: 'USD '
                    });
                    noUiSlider.create(rangeSlider, {
                      start: [450, 1500],
                      step: 1,
                      range: {
                        'min': [20],
                        'max': [2000]
                      },
                      format: moneyFormat,
                      connect: true
                    });

                    // Set visual min and max values and also update value hidden form inputs
                    rangeSlider.noUiSlider.on('update', function(values, handle) {
                      document.getElementById('slider-range-value1').innerHTML = values[0];
                      document.getElementById('slider-range-value2').innerHTML = values[1];
                      document.getElementsByName('min-value').value = moneyFormat.from(
                        values[0]);
                      document.getElementsByName('max-value').value = moneyFormat.from(
                        values[1]);
                    });
                  });
              </script>
            </div>
            <div class="filter-section star-rating mt-30 pb-10">
              <div class="filter-header">
                <h5>Star Rating</h5>
              </div>
              <!--<?php foreach($listdata->response as $list){?>
                <label><input type="checkbox" value="<?= $list->rating ;?>" class="filter-item" /> <?= $list->rating ;?></label>&nbsp;&nbsp;
                <?php } ?>-->
              <div class="mt-30 row-rtl">
                <label for="s5"> <input type="radio" id="s5" name="stars" value="s5" class="filter-stars"/>
                <span class="stars star1"></span>
                <?php for ($i = 1; $i <= 5; $i++) { ?><span class="icon mdi mdi-star"></span><?php }?>
                <strong>
                <?php if (empty($listempty)) { echo $five_stars; }else{echo'0';} ?>
                </strong>
                </label>
                <div class="clear"></div>
                <label for="s4"> <input type="radio" id="s4" name="stars" value="s4" class="filter-stars"/>
                <?php for ($i = 1; $i <= 4; $i++) { ?><span class="icon mdi mdi-star"></span><?php }?>
                <strong>
                <?php if (empty($listempty)) { echo $four_stars; }else{echo'0';} ?>
                </strong>
                </label>
                <div class="clear"></div>
                <label for="s3"> <input type="radio" id="s3" name="stars" value="s3" class="filter-stars"/>
                <?php for ($i = 1; $i <= 3; $i++) { ?><span class="icon mdi mdi-star"></span><?php }?>
                <strong>
                <?php if (empty($listempty)) { echo $three_stars; }else{echo'0';} ?>
                </strong>
                </label>
                <div class="clear"></div>
                <label for="s2"> <input type="radio" id="s2" name="stars" value="s2" class="filter-stars"/>
                <?php for ($i = 1; $i <= 2; $i++) { ?><span class="icon mdi mdi-star"></span><?php }?>
                <strong>
                <?php if (empty($listempty)) { echo $two_stars; }else{echo'0';} ?>
                </strong>
                </label>
                <div class="clear"></div>
                <label for="s1"> <input type="radio" id="s1" name="stars" value="s1" class="filter-stars"/>
                <?php for ($i = 1; $i <= 1; $i++) { ?><span class="icon mdi mdi-star"></span><?php }?>
                <strong>
                <?php if (empty($listempty)) { echo $one_stars; }else{echo'0';} ?>
                </strong>
                </label>
                <div class="clear"></div>
              </div>
            </div>
            <div class="clear"></div>
            <div class="filter-section chain-hotel pb-10">
              <div class="filter-header">
                <h5>Chain</h5>
              </div>
              <div class="mt-30 row-rtl">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <label for="<?= $i; ?>"> <input type="checkbox" id="<?= $i; ?>" /> Content <strong>4</strong></label>
                <div class="clear"></div>
                <?php } ?>
              </div>
              <span class="more rtl-f-right">More +</span>
              <div class="clear"></div>
            </div>
            <div class="filter-section amenities pb-10">
              <div class="filter-header">
                <h5>Hotel Amenities</h5>
              </div>
              <div class="mt-30 row-rtl">
                <?php for ($l = 1; $l <= 5; $l++) { ?>
                <label for="<?= $l; ?>"> <input type="checkbox" id="<?= $l; ?>" /> Content <strong>4</strong></label>
                <div class="clear"></div>
                <?php } ?>
              </div>
              <span class="more rtl-f-right">More +</span>
              <div class="clear"></div>
            </div>
            <div class="filter-section amenities pb-10">
              <div class="filter-header">
                <h5>Rooms Amenities</h5>
              </div>
              <div class="mt-30 row-rtl">
                <?php for ($k = 1; $k <= 5; $k++) { ?>
                <label for="<?= $k; ?>"> <input type="checkbox" id="<?= $k; ?>" /> Content <strong>4</strong></label>
                <div class="clear"></div>
                <?php } ?>
              </div>
              <span class="more rtl-f-right">More +</span>
              <div class="clear"></div>
            </div>
            <div class="cover-bar"></div>
          </section>
          <button class="btn prime w100" style="margin-top:-70px"><span class="icon mdi mdi-search"></span> Search</button>
        </aside>
      </div>
      <div class="c9">
        <div class="row">
          <div class="c12">
            <div class="flex flex-content-between items-center mb-10 row-rtl">
              <div class="sortby">
                <small>sort by</small> <strong>Guest reviews (5-0)</strong>
                <div class="sortby-dropdown hide">
                  <span>Guest reviews (5-0)</span>
                  <ul>
                    <li>Price</li>
                    <li>Price</li>
                    <li>Hotel Rate (0-5)</li>
                    <li>Hotel Rate (5-0)</li>
                    <li>Name (A-Z)</li>
                    <li>Name (Z-A)</li>
                  </ul>
                </div>
              </div>
              <div>
                <div class="flex items-center">
                  <div>
                    <strong>
                    <?php  if (!empty($totalhotel)){echo $totalhotel .' '. $cityname;
                      }else{echo $totalempty .' '. $cityname;}?>
                    </strong>
                  </div>
                  <!--<div class="ml-30">
                    <strong> Cairo<span>℃</span> </strong>
                    <br />
                    <small class="text-muted">20/01/2020</small>
                    </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="products">

         <div id="hotels"></div>

        <?php if (empty($listempty)) {?>
        <script type="text/handlebars-template" id="handlebars-hotels">
        {{#hotels}}

         <div class="row row-rtl s{{rating}} product-block item">
            <div class="c12">
              <div class="list-wrapper">
                <div class="row row-rtl">
                  <div class="c-sm-5 c3 p-10">
                    <a href="{{link}}">
                    <img  class="main-img lazy" data-src="{{image}}" />
                    </a>
                  </div>
                  <div class="c-sm-7 c9">
                    <div class="row h-100 row-rtl">
                      <div class="c7 border-right rtl-align-right">
                        <div class="detail">
                          <h6 class="title"><a target="_blank" href="{{link}}"><strong>{{name}}</strong></a></h6>
                          <div class="rating mb-10 mt-10">
                          <span class="stars star{{stars}}"></span>
                          </div>
                          <small class="text-muted"><strong>{{address}}</strong></small><br>
                          <small class="text-muted">{{desc}}</small>
                        </div>
                        <!--<div class="aminities mt-10 hide-m">
                          <span>&#10070;</span>
                          <span>&#10070;</span>
                          <span>&#10070;</span>
                          <span>&#10070;</span>
                          </div>-->
                      </div>
                      <div class="c5 p-10">
                        <div class="flex flex-content-between row-rtl">
                          <div class="trust-you">
                            <p>{{rating}}</p>
                            <div class="vrified">
                              <span>Fabulous</span>
                            </div>
                          </div>
                          <div class="social_share social-containerer">
                            <span class="share icon-share hide-m">&#9737;</span>
                          </div>
                        </div>
                        <span class="discount-precentage">Save 10 %</span>
                        <div class="total-price">
                          <span class="title hide-m">Total price for 1 <span>nights</span></span>
                          <h5 class="total-price-value">
                            <span class="total-price-value-before-discount">
                              <!--<span class="price-before">250</span>
                                <span class="currency-before-discount">USD</span>-->
                            </span>
                            <strong>{{price}}</strong> <span>{{currency}}</span>
                          </h5>
                        </div>
                        <div class="text-center mt-10">
                          <form target="self" method="POST" action="">
                            <button class="btn prime-o hide-m w100" href="{{link}}">Details </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        {{/hotels}}
        </script>
        <?php }else{echo $listempty;} ?>

        </div>
        <br><br><br><br><br>
       <p id="loading"></p>
      </div>
    </div>
  </div>
</div>





<script>document.getElementById("loading").innerHTML = '<div class="plane-loader"> <div class="cloud cloud1"></div> <div class="cloud cloud4"></div> <div class="cloud cloud3"></div> <div class="plane"></div> <div class="cloud cloud2"></div> <div class="steam steam1"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam2"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam3"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam4"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> </div>';</script>

<script src='<?=root.js;?>handlebars.min.js'></script>
<?=$hotels;?>

<script>
  var itemSelector = ".item";
  var $stars = $('.filter-stars');
  var $price = $('.filter-price');
  var $container = $('#hotels').isotope({ itemSelector: itemSelector });

  //Ascending order
  var responsiveIsotope = [ [480, 4] , [720, 6] ];
  var itemsPerPageDefault = 15;
  var itemsPerPage = defineItemsPerPage();
  var currentNumberPages = 1;
  var currentPage = 1;
  var currentFilter = '*';
  var filterAttribute = 'data-filter';
  var filterValue = "";
  var pageAttribute = 'data-page';
  var pagerClass = 'isotope-pager';

  // update items based on current filters
  function changeFilter(selector) { $container.isotope({ filter: selector }); }

  //grab all checked filters and goto page on fresh isotope output
  function goToPage(n) {
    currentPage = n;
    var selector = itemSelector;
    var exclusives = [];
        // for each box checked, add its value and push to array
        $stars.each(function (i, elem) {
            if (elem.checked) {
                selector += ( currentFilter != '*' ) ? '.'+elem.value : '';
                exclusives.push(selector);
            }
        });
        // smash all values back together for 'and' filtering
        filterValue = exclusives.length ? exclusives.join('') : '*';

        // add page number to the string of filters
        var wordPage = currentPage.toString();
        filterValue += ('.'+wordPage);

    changeFilter(filterValue);
  }

  // determine page breaks based on window width and preset values
  function defineItemsPerPage() {
    var pages = itemsPerPageDefault;

    for( var i = 0; i < responsiveIsotope.length; i++ ) {
        if( $(window).width() <= responsiveIsotope[i][0] ) {
            pages = responsiveIsotope[i][1];
            break;
        }
    }
    return pages;
  }

  function setPagination() {

    var SettingsPagesOnItems = function(){
        var itemsLength = $container.children(itemSelector).length;
        var pages = Math.ceil(itemsLength / itemsPerPage);
        var item = 1;
        var page = 1;
        var selector = itemSelector;
        var exclusives = [];
            // for each box checked, add its value and push to array
            $stars.each(function (i, elem) {
                if (elem.checked) {
                    selector += ( currentFilter != '*' ) ? '.'+elem.value : '';
                    exclusives.push(selector);
                }
            });
            // smash all values back together for 'and' filtering
            filterValue = exclusives.length ? exclusives.join('') : '*';
            // find each child element with current filter values
            $container.children(filterValue).each(function(){
                // increment page if a new one is needed
                if( item > itemsPerPage ) {
                    page++;
                    item = 1;
                }
                // add page number to element as a class
                wordPage = page.toString();

                var classes = $(this).attr('class').split(' ');
                var lastClass = classes[classes.length-1];
                // last class shorter than 4 will be a page number, if so, grab and replace
                if(lastClass.length < 4){
                    $(this).removeClass();
                    classes.pop();
                    classes.push(wordPage);
                    classes = classes.join(' ');
                    $(this).addClass(classes);
                } else {
                    // if there was no page number, add it
                   $(this).addClass(wordPage);
                }
                item++;
            });
        currentNumberPages = page;
    }();

    // create page number navigation
    var CreatePagers = function() {

        var $isotopePager = ( $('.'+pagerClass).length == 0 ) ? $('<div class="'+pagerClass+'"></div>') : $('.'+pagerClass);

        $isotopePager.html('');
        if(currentNumberPages > 1){
          for( var i = 0; i < currentNumberPages; i++ ) {
              var $pager = $('<a href="javascript:void(0);" class="pager" '+pageAttribute+'="'+(i+1)+'"></a>');
                  $pager.html(i+1);

                  $pager.click(function(){
                      var page = $(this).eq(0).attr(pageAttribute);
                      goToPage(page);
                  });
              $pager.appendTo($isotopePager);
          }
        }
        $container.after($isotopePager);
    }();
  }
  // remove checks from all boxes and refilter
  function clearAll(){
    $stars.each(function (i, elem) {
        if (elem.checked) {
            elem.checked = null;
        }
    });
   currentFilter = '*';
   setPagination();
   goToPage(1);
  }

  setPagination();
  goToPage(1);

  //event handlers
  $stars.change(function(){
    var filter = $(this).attr(filterAttribute);
    currentFilter = filter;
    setPagination();
    goToPage(1);
  });

  $('#clear-filters').click(function(){clearAll()});

  $(window).resize(function(){
    itemsPerPage = defineItemsPerPage();
    setPagination();
    goToPage(1);
  });

</script>
<script>
  $(".filter-item,.pager").click(function() {
  $('html, body').animate({
  scrollTop: $("#listing").offset().top
  }, 1);
  });
</script>

