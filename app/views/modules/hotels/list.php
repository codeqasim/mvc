<div class="list-page" id="listing">
  <div class="edit-search">
    <div class="container">
      <div class="row mb-20 row-rtl">
        <div class="c10">
          <div class="left-side-info rtl-align-right">
            <span><strong>Cairo, Cairo, Egypt</strong></span>
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
              <input type="range" />
            </div>
          </div>
          <div class="filter-section star-rating mt-30 pb-10">
            <div class="filter-header">
              <h5>Star Rating</h5>
            </div>

            <!--<?php foreach($listdata->response as $list){?>
            <label><input type="checkbox" value="<?= $list->rating ;?>" class="filter-item" /> <?= $list->rating ;?></label>&nbsp;&nbsp;
            <?php } ?>-->

            <div class="mt-30 row-rtl">

            <label for="s5"> <input type="radio" id="s5" name="stars" value="s5" class="filter-item"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong><?php echo count($listdata->response) ?></strong>
            </label>
            <div class="clear"></div>

            <label for="s4"> <input type="radio" id="s4" name="stars" value="s4" class="filter-item"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>20</strong>
            </label>
            <div class="clear"></div>

            <label for="s3"> <input type="radio" id="s3" name="stars" value="s3" class="filter-item"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>20</strong>
            </label>
            <div class="clear"></div>

            <label for="s2"> <input type="radio" id="s2" name="stars" value="s2" class="filter-item"/>
              <span>&#10029;</span>
              <span>&#10029;</span>
              <strong>15</strong>
            </label>
            <div class="clear"></div>

            <label for="s1"> <input type="radio" id="s1" name="stars" value="s1" class="filter-item"/>
              <span>&#10029;</span>
              <strong>5</strong>
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
            <?php for ($i = 1; $i <= 19; $i++) { ?>
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
            <?php for ($l = 1; $l <= 19; $l++) { ?>
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
            <?php for ($k = 1; $k <= 19; $k++) { ?>
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
                    <?php echo count($listdata->response) ?> Hotels in Cairo
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

        <?php foreach($listdata->response as $list){?>

        <?php
        $y = $list->rating;
        $x = (int)$y;
        ?>

        <div class="row row-rtl s<?= $x ;?> product-block item">
          <div class="c12">
            <div class="list-wrapper">
              <div class="row row-rtl">
                <div class="c-sm-5 c3 p-10">
                  <a href="">
                  <img
                    class="main-img"
                    src="<?= $list->image ;?>"
                    title="Holiday Inn Citystars"
                    alt="Holiday Inn Citystars"
                    />
                  </a>
                  <!--<div class="gallery flex-content-between hide-m">
                    <div class="gallery_img">
                      <img  alt="Holiday Inn Citystars" src="<?php echo $theme_url;?>assets/img/hotel.jpg">
                    </div>
                    <div class="gallery_img">
                      <img  alt="Holiday Inn Citystars" src="<?php echo $theme_url;?>assets/img/hotel.jpg">
                    </div>
                    <div class="gallery_img">
                      <img  alt="Holiday Inn Citystars" src="<?php echo $theme_url;?>assets/img/hotel.jpg">
                    </div>
                  </div>-->
                </div>
                <div class="c-sm-7 c9">
                  <div class="row h-100 row-rtl">
                    <div class="c7 border-right rtl-align-right">
                      <div class="detail">
                        <h6 class="title"><a target="_blank" href="#"><strong><?= $list->company_name ;?></strong></a></h6>
                        <div class="rating mb-10">
                          <?php for ($x = 1; $x <= $list->rating; $x++):?>
                            <span>&#10029;</span>
                          <?php endfor; ?>
                          
                        </div>
                        <small class="text-muted"><strong><?= $list->address ;?></strong></small><br>
                        <small class="text-muted"><?php echo substr($list->description,0,150);?></small>
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
                          <p><?= $list->rating ;?></p>
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
                          </span> <strong><?= $list->price ;?></strong> <span>USD</span>
                        </h5>
                      </div>
                      <div class="text-center mt-10">
                        <a class="btn prime-o hide-m w100" href="hotels/details">Details </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      </div>
    </div>
  </div>
</div>





<script>

        var itemSelector = ".item";
        var $checkboxes = $('.filter-item');
        var $container = $('#products').isotope({ itemSelector: itemSelector });

        //Ascending order
        var responsiveIsotope = [ [480, 4] , [720, 6] ];
        var itemsPerPageDefault = 10;
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
                $checkboxes.each(function (i, elem) {
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
                    $checkboxes.each(function (i, elem) {
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
            $checkboxes.each(function (i, elem) {
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
        $checkboxes.change(function(){
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

