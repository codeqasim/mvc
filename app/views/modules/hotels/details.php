<div class="hotels-detail-page pt-20">
  <div class="container">
    <div class="crumb">
     <a href="<?=root?>">Home</a> <i class="icon mdi mdi-chevron-right"></i> Hotels <i class="icon mdi mdi-chevron-right"></i> Lahore <i class="icon mdi mdi-chevron-right"></i> <strong><?php echo $hotel->response->company_name; ?></strong> <i class="icon mdi mdi-chevron-right"></i> Booking <i class="icon mdi mdi-chevron-right"></i> Payment
    </div>
      <div class="sticky">
        <div class="list-wrapper">
          <div class="row row-rtl">
            <div class="c1 p-10">
              <img class="main-img lazy" data-src="<?php echo $hotel->response->thumb; ?>" />
            </div>
            <div class="c11">
              <div class="row h-100 row-rtl">
                <div class="c8 border-right">
                  <div class="detail rtl-align-right">
                    <div class="flex flex-content-between row-rtl">
                      <div class="trust-you">
                        <p>4.5</p>
                        <div class="vrified">
                          <span>Fabulous</span>
                        </div>
                      </div>
                      <div class="social_share social-containerer">
                        <span class="share icon-share hide-m">&#9737;</span>
                      </div>
                    </div>
                    <h6 class="title flex row-rtl">
                      <?php echo $hotel->response->company_name; ?>
                      <div class="rating ml-10">
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                        <span>&#10029;</span>
                      </div>
                    </h6>
                    <small class="text-muted"><?php echo $hotel->response->address; ?></small>
                  </div>
                </div>
                <div class="c2 p-10">
                  <div class="total-price">
                    <span>starts from</span>
                    <span><strong>
                        <?php $i = 1; foreach($hotel->response->rooms as $room){ ?>
                        <?=$room->price;?>
                        <?php if ($i++ == 1) break; ?>
                        <?php } ?>
                      </strong></span>
                    <span> USD </span>
                  </div>
                </div>

                <div class="c2 p-10">
                  <div class="text-center mt-10">
                    <a class="book-room hide-m" href="#available-room">View Rooms </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <ul class="tabs flex flex-content-between row-rtl">
          <li>
          <a href="#hotel" class="active">hotels</a>
         </li>
          <li>
         <a href="#available-room">Available Rooms</a>
        </li>
          <li>
            <a href="#guest-rating">Guests Rating
            </a>
          </li>
          <li>
          <a href="#hotel-detail">hotel details</a></li>
        </ul>
      </div>
      <div class="row row-rtl" id="hotel">
        <div class="c9">
          <div class="grid-img">
            <div class="row">
              <div class="c8 pr-0">
                <img class="main-img lazy" data-src="<?php echo $hotel->response->images[1]; ?>" />
              </div>
              <div class="c4">
                <ul class="other-img">
                <?php
                $i = 1;
                foreach($hotel->response->images as  $k => $img){
                if ($k < 2) continue; ?>
                <li><img class="lazy" data-src="<?=$img;?>" /></li>
                <?php if ($i++ == 3) break; ?>
                <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="c3">
          <div style="overflow:hidden;max-width:100%;width:100%;height:292px;" class="grid-img">
            <div id="embeddedmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://maps.google.com/maps?q=<?php echo $hotel->response->latitude; ?>,<?php echo $hotel->response->longitude; ?>&hl=es;z=14&amp;output=embed"></iframe></div>
            <style>#embeddedmap-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="c12">
          <section class="content-section" id="available-room">
            <div class="head">
              <span>available rooms for <span class="number"><span> 1 </span> nights 
              </span>
              </span>
            </div>
            <div class="p-10">
                <?php // include 'search.php';?>
            </div>
            <div class="room-wrapper p-10">
              <div class="row row-rtl">
                <div class="c3" hidden>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>bed Types</span>
                    </div>
                    <label for="bed-type-single">
                    <input type="checkbox" id="bed-type-single" class="mr-5">
                    Single
                    </label>
                    <label for="bed-type-king">
                    <input type="checkbox" id="bed-type-king" class="mr-5">
                    King
                    </label>
                    <label for="bed-type-dubble">
                    <input type="checkbox" id="bed-type-dubble" class="mr-5">
                    Dubble
                    </label>
                    <label for="bed-type-suite">
                    <input type="checkbox" id="bed-type-suite" class="mr-5">
                    Suite
                    </label>
                  </div>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>Room Basis</span>
                    </div>
                    <label for="room-only">
                    <input type="checkbox" id="room-only" class="mr-5">
                    Room only
                    </label>
                    <label for="bed">
                    <input type="checkbox" id="bed" class="mr-5">
                    Bed and Breakfast
                    </label>
                  </div>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>Room Classes</span>
                    </div>
                    <label for="standrad">
                    <input type="checkbox" id="standrad" class="mr-5">
                    Standrad
                    </label>
                    <label for="superior">
                    <input type="checkbox" id="superior" class="mr-5">
                    Superior
                    </label>
                    <label for="deluxe">
                    <input type="checkbox" id="deluxe" class="mr-5">
                    Deluxe
                    </label>
                  </div>
                  <div class="filter-section">
                    <div class="service-title">
                      <span>Refundability</span>
                    </div>
                    <label for="non-refundable">
                    <input type="checkbox" id="non-refundable" class="mr-5">
                    Non-refundable
                    </label>
                    <label for="refundable">
                    <input type="checkbox" id="refundable" class="mr-5">
                    Refundable
                    </label>
                  </div>
                </div>
                <div class="c12">
                <?php foreach($hotel->response->rooms as $room){ ?>

                  <div class="room-cart">
                    <div class="room-header rtl-align-right">
                      <h3>
                      <div class="row">
                      <div class="c2">Room</div>
                      <div class="c10">
                      <div class="row">
                      <div class="c4">Option</div>
                      <div class="c2">Capacity</div>
                      <div class="c2">Price / Night</div>
                      </div>
                      </div>
                      </div>
                      </h3>
                    </div>
                    <div class="room-wrapper-inner">
                      <div class="row row-rtl">

                      <div class="c2">
                      <img class="lazy roompic" data-src="<?=$room->image[0];?>" alt="" />
                      </div>

                        <div class="c10">

                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="row panel">
                        <div class="c4">
                          <div class="single-room-header rtl-align-right">
                            <h3><?=$room->room_name;?></h3>
                          </div>
                          <ul>
                            <li><i class="mdi mdi-check"></i> max number of guests</li>
                            <li><i class="mdi mdi-check"></i> Room only</li>
                            <li><i class="mdi mdi-check"></i> Non-refundable</li>
                          </ul>
                        </div>

                        <div class="c2">
                          <ul class="middle">
                            <li>Adults 2</li>
                            <li>Child 1</li>
                          </ul>
                        </div>

                        <div class="c2">
                           <div class="">
                           <!--<h6 class="">Total stay for <span><span> 1 </span>nights </span></h6>-->
                            <!--<small><h4 class="price-before-discount"><span>433</span><span class="currency"> SAR</span></h4></small>-->
                            <h3 class="price middle">
                              <small class="tax">incl.tax</small>
                              <span><strong><?=$room->price;?></strong></span> &nbsp;<small class="currency">USD</small>
                            </h3>
                            </div>
                        </div>


                        <div class="c4">
                          <div class="price-sec middle" style="justify-content: center;">
                            <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            </select>
                            <a  class="btn success" href="hotels/booking">Book now</a>
                          </div>
                        </div>
                        </div>
                        <?php } ?>

                        </div>
                      </div>
                      <!--<button class="load_more">Load More</button>-->
                    </div>
                  </div>
                  <?php } ?>






                </div>
              </div>
            </div>
          </section>
          <section class="content-section mt-30 pb-50" id="guest-rating">
            <div class="head rtl-align-right"><span>Guests Rating</span></div>
            <div class="container px-20">
              <div class="overview">
                <div class="trust-score mr-10">
                  <div class="value">4.4</div>
                </div>
                <div class="score">
                  Excellent
                  <div>
                    <span>✭</span>
                    <span>✭</span>
                    <span>✭</span>
                    <span>✭</span>
                    <span>✭</span>
                  </div>
                </div>
                <h1>Summary of 3,521 verified reviews</h1>
                <div class="clear"></div>
              </div>
              <div class="row">
                <div class="c7">
                  <div class="summary rtl-align-right">
                    <p class="summary-score">Rated <strong>4.4</strong>/5 based on reviews from <strong>all travelers</strong>.</p>
                    <span class="summary-sentence">"Excellent business hotel. Great location."</span>
                  </div>
                  <div class="review-highlights">
                    <?php for ($i = 1; $i <= 9; $i++) { ?>
                    <div class="category">
                      <div class="category-stats">
                        <h2 class="rtl-align-right">Location</h2>
                        <div class="rating">
                          <div class="bar-chart">
                            <div class="value value-pos" style="width: 95%;"></div>
                          </div>
                          <div class="score"><span class="text-pos">4.8</span>/5</div>
                        </div>
                        <div class="review-count rtl-align-right">11 reviews</div>
                      </div>
                      <div class="category-details">
                        <p>
                          <strong> "Great location near the airport."</strong>
                          Near to the city centre with good shopping options nearby.
                          Parking is rare.
                        </p>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="c4 ml-auto mt-20">
                  <aside>
                    <div class="rank">
                      <div class="starburst">
                        <span>&#9813;</span>
                        <div class="ribbon-tail"></div>
                      </div>
                      <div class="rank-value">
                        <div>
                          <strong class="label">Great</strong> Overall Ranking
                          <span class="ranking-percentage">Top 13% in city</span>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="rank">
                      <div class="starburst">
                        <span>&#9813;</span>
                        <div class="ribbon-tail"></div>
                      </div>
                      <div class="rank-value">
                        <div>
                          <strong class="label">EXCELLENT</strong> Business Hotel
                          <span class="ranking-percentage">Top 13% in city</span>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="rank">
                      <div class="starburst">
                        <span>&#9813;</span>
                        <div class="ribbon-tail"></div>
                      </div>
                      <div class="rank-value">
                        <div>
                          <strong class="label">EXCELLENT</strong> City Hotel
                          <span class="ranking-percentage">Top 13% in city</span>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="gtk">
                      <h1 class="pb-20">Good to know</h1>
                      <ul>
                        <li>
                          <h2><span class="mr-10">&#10003;</span>Great shopping</h2>
                        </li>
                        <li>
                          <h2><span class="mr-10">&#10003;</span>Good access to airport</h2>
                        </li>
                        <li>
                          <h2><span class="mr-10">&#10005;</span>Rooms could be larger</h2>
                        </li>
                        <li>
                          <h2><span class="mr-10">&#10005;</span>Could be quieter</h2>
                        </li>
                      </ul>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
          </section>
          <section class="mt-30 mb-30" id="hotel-detail">
            <div class="row row-rtl">
              <div class="c9">
                <div class="extra-hotel-info  p-10">
                 <h3 class="rtl-align-right">Hotel Details</h3>
                 <p><?php echo $hotel->response->description; ?></p>
                </div>
              </div>
              <div class="c3">
                <div class="hotel-amenities">
                  <div>
                    <span class="amenities-header rtl-align-right">amenities</span>
                    <ul>
                    <?php
                    foreach($hotel->response->amenities as $amenity){ ?>
                    <li><i class="mr-10 mdi mdi-check"></i><?=$amenity->title;?></li>
                    <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
  </div>
</div>


<div class="hotels-feature">
    <div class="section-subtitle">
        <h2>Related Hotels</h2>
        <h3> Choose from the best related hotels worldwide offering the best price. Book your trip now!</h3>
        <h3>Find the best related hotels around the world with us</h3>
    </div>
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
            <div class="c4">
                <a href="<?=root;?>hotels/details">
                    <div class="hotels-feature-items">
                        <figure class="item-image">
                            <div
                                class="hotel-image"
                                style='background-image: url("<?=root;?>assets/img/hotel.jpg");'
                                ></div>
                        </figure>
                        <div class="item-info rtl-align-right">
                            <div class="item-info-title">
                                <h4>Shangri La Hotel Dubai</h4>
                            </div>
                            <div class="item-rating">
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                                <span>&#10029;</span>
                            </div>
                            <div class="item-location my-10">
                                <i class="icon-location"></i>
                                <p>Dubai, United Arab Emarates</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<script>
var tabs = document.getElementsByClassName("tabs")[0];
tabs.addEventListener('click',function(e){
  let activeTab = document.querySelectorAll(".active");
  for (var i = 0; i < activeTab.length; i++) {
    activeTab[i].classList.remove("active");
  }
  e.target.classList.add("active");
})
</script>