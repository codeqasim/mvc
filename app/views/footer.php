<footer>
    <div class="apps"> 
        <div class="container">
            <div class="row row-rtl">
                <div class="c3 o2-sm">
                    <div class="apps-image">
                        <img class="img-fluid" src="<?=$root;?>assets/img/phones.png">
                    </div>
                </div>
                <div class="c9 o1-sm">
                    <div class="section-info mt-50 rtl-align-right">
                        <h2>Download App &amp; Get the latest offers</h2>
                        <h3>Download app now for easier hotel &amp; flights bookings. Enjoy the best booking experience.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row row-rtl">
                <div class="c6">
                    <h3><strong>B2B</strong> Booking Engine</h3>
                    <div class="row links row-rtl">
                        <div class="c4">
                            <ul>
                                <li><a href="<?=$root;?>about">about us</a></li>
                                <li><a  href="<?=$root;?>careers">careers</a></li>
                            </ul>
                        </div>
                        <div class="c4">
                            <ul>
                                <li><a href="<?=$root;?>policy">privacy policy</a></li>
                                <li><a href="<?=$root;?>faq">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="c4">
                            <ul>
                                <li><a href="<?=$root;?>contact">contact us</a></li>
                                <li><a  href="<?=$root;?>account"><span >register </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="c3">
                    <div class="contact">
                        <h3>Need help ?</h3>
                        <ul class="rtl-align-right">
                            <li><span class="phone_number">( +123 ) 1122 33 4444</span></li>
                            <li><a class="footer-email" href="">support@travel.com</a></li>
                        </ul>
                        <ul>
                            <li><a href="">FB</a></li>
                            <li><a href="">TW</a></li>
                            <li><a href="">LI</a></li>
                            <li><a href="">YT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c3">
                    <h3>Download our app now!</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sub-footer">
            <div class="flex items-center row-rtl">
                <a  href="<?=$root;?>" class="mr-10 d-block">
                <img alt="" width="100px" src="<?=$root;?>assets/img/logo.png">
                </a>
                <p class="coy_right">
                    <span>&copy; 2020 Appname</span>
                    <span class="reserved">  All rights reserved.</span>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?=$root;?>assets/js/jquery.lazy.min.js"></script>
<script src="<?=$root;?>assets/js/app.js"></script>
<script src="<?=$root;?>assets/js/datepicker.js"></script>

<!-- lazyload -->
<script>
$(function() {
$('.lazy').lazy({
effect: "fadeIn",
effectTime: 400,
threshold: 0
});
});
</script>




</body>
</html>


<script>

$(document).ready(function(){
	$('#checkin').datepicker({
		dateFormat: "dd-mm-yy",
		changeMonth: true,
		changeYear: true
	});
})

$(document).ready(function(){
	$('#checkout').datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth: true,
		changeYear: true
	});
})

$(document).ready(function(){
  $('#checkindetail').datepicker({
    dateFormat: "dd-mm-yy",
    changeMonth: true,
    changeYear: true
  });
})

$(document).ready(function(){
  $('#checkoutdetail').datepicker({
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true
  });
})

  $("#hotels-api").submit(function() {
  event.preventDefault();
  var city = $('#city').val(); 
  var checkin = $('#checkin').val(); 
  var checkout = $('#checkout').val(); 
  var language = $('#language').val(); 
  var currceny = $('#currceny').val(); 
  var pagination = $('#pagination').val(); 
  var adults = $('#adults').val(); 
  var child = $('#childs').val(); 
  var room = $('#room').val();
  var city_trims = city.replace(/\/?,/g, '/').replace(/-+/g, '-').replace(/^-|-$/g, '').split(' ').join('-').replace('%40', '@');
  var actionURL = 'hotels/';
  var finelURL = actionURL +language+'/'+currceny+'/'+city_trims+'/'+ checkin+'/'+checkout+'/'+adults+'/'+child+'/'+pagination;
  // alert(finelURL);
  window.location.href = finelURL;

 });

  $("#detail-button").click(function() {

  var form = $('#title').val().toLowerCase();
  var id = $('#id').val();
  var checkindetail = $('#checkindetail').val();
  var checkoutdetail = $('#checkoutdetail').val();
  var children = $('#dchildren').val();
  var dadults = $('#dadults').val();
  var dcurrceny = $('#dcurrceny').val();
  var dlanguage = $('#dlanguage').val();

  var slug = form.replace(/\/?,/g, '/').replace(/-+/g, '-').replace(/^-|-$/g, '').split(' ').join('-').replace('%40', '@');
  var actionURL = 'hotel/';
  var finelURL = actionURL +dlanguage+'/'+dcurrceny+'/'+id+'/'+ slug+'/'+checkindetail+'/'+checkoutdetail+'/'+dadults+'/'+children;
  // alert(finelURL);
   formsubmit(finelURL);

 });

  function formsubmit(finelURL){
document.getElementById("detail-button").formAction = finelURL;
 }
</script>

	</body>
</html>