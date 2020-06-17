<?php echo "<script>document.title = '".$hotel->response->company_name."';</script>"; ?>
<div class="hotels-detail-page pt-20">
  <div class="container">
    <div class="crumb">
     <a href="<?=root?>">Home</a> <i class="icon mdi mdi-chevron-right"></i> Hotels <i class="icon mdi mdi-chevron-right"></i> Lahore <i class="icon mdi mdi-chevron-right"></i> <strong><?php echo $hotel->response->company_name; ?></strong> <i class="icon mdi mdi-chevron-right"></i> Booking <i class="icon mdi mdi-chevron-right"></i> Payment
    </div>
      <div class="sticky">
        <div class="list-wrapper">
          <div class="row row-rtl">
            <div class="c1 p-10">
              <img class="main-img" src="<?php echo $hotel->response->thumb; ?>" alt="<?php echo $hotel->response->company_name; ?>" />
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
        <div class="c3">
          <div style="overflow:hidden;max-width:100%;width:500px;height:300px;">
            <div id="embeddedmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://maps.google.com/maps?q=<?php echo $hotel->response->latitude; ?>,<?php echo $hotel->response->longitude; ?>&hl=es;z=14&amp;output=embed"></iframe></div>
            <a class="embedded-maphtml" href="https://www.embed-map.com" id="enable-mapdata">https://www.embed-map.com</a>
            <style>#embeddedmap-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
          </div>
        </div>
        <div class="c9">
          <div class="grid-img">
            <div class="row">
              <div class="c8 pr-0">
                <img class="main-img"
                  src="<?php echo $hotel->response->thumb; ?>"
                  title="Holiday Inn Citystars"
                  alt="Holiday Inn Citystars"
                  />
              </div>
              <div class="c4">
                <ul class="other-img">
                <?php
                $i = 1;
                foreach($hotel->response->images as $img){ ?>
                <li><img src="<?=$img;?>" alt="<?php echo $hotel->response->company_name; ?>" /></li>
                <?php if ($i++ == 3) break; ?>
                <?php } ?>
                </ul>
              </div>
            </div>
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
                <div class="c3">
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
                <div class="c9">
                <?php foreach($hotel->response->rooms as $room){ ?>

                  <div class="room-cart">
                    <div class="room-header rtl-align-right">
                      <h3><?=$room->room_name;?>
                        <span> 1  nights ,  Rooms </span>
                      </h3>
                    </div>
                    <div class="room-wrapper-inner">
                      <div class="row row-rtl">

                      <div class="c2">
                      <img src="<?=$room->image[0];?>" alt="" />
                      </div>

                        <div class="c7">
                          <div class="single-room-header rtl-align-right">
                            <h3>Standard / Single Standard Room</h3>
                          </div>
                          <ul>
                            <li>max number of guests 1</li>
                            <li>Room only</li>
                            <li>Non-refundable</li>
                          </ul>
                        </div>
                        <div class="c3">
                          <div class="price-sec">
                            <h6 >Total stay for <span><span> 1 </span>nights </span></h6>
                            <!--<small><h4 class="price-before-discount"><span>433</span><span class="currency"> SAR</span></h4></small>-->
                            <h3  class="price">
                              <span><?=$room->price;?></span>
                              <span  class="currency">USD</span>
                            </h3>
                            <!--<h6 class="text-success mt-10">(incl.tax)</h6>-->
                            <a  class="btn success" href="hotels/booking">Book now</a>
                          </div>
                        </div>
                      </div>
                      <button class="load_more">Load More</button>
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
                    <li><i class="mr-10">&#10003;</i><?=$amenity->title;?></li>
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