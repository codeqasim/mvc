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
                                <li><a href="<?=$root;?>faqs">FAQs</a></li>
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
                    <span><?php copyright(); ?></span>
                    <!--<span class="reserved">  All rights reserved.</span>-->
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?=$root.js;?>jquery.lazy.min.js"></script>
<script src="<?=$root.js;?>app.js"></script>
<script src="<?=$root.js;?>datepicker.js"></script>
<script src="<?=$root.js;?>select2.js"></script>

<script>
$.ajax({
    url: "<?=$geo_url;?>",
    jsonpCallback: "callback",
    dataType: "jsonp",
    success: function(location) {
        $('#country').html(location.country_name);
        $('#state').html(location.state);
        $('#city_name').html(location.city);
        $('#latitude').html(location.latitude);
        $('#longitude').html(location.longitude);
        $('#ip').html(location.IPv4);
    }
});


</script>

<!-- lazyload -->
<script>
$(function() {
$('.lazy').lazy({
effect: "fadeIn",
effectTime: 200,
threshold: 0
});
});
</script>

<script>
    var $ajax = $("#city");

    function formatRepo (repo) {

        if (repo.loading) return repo.text;
        console.log(repo);
        var markup = "<div class='select2-result-repository clearfix'>" +
            "<div class='select2-result-repository__avatar'><span><i class=\"flag " + repo.icon.toLowerCase() + "\"></i>  </span></div>" +
            "<div class='select2-result-repository__meta'>" +
            "<div class='select2-result-repository__title'>" + repo.text + "</div>";

        return markup;
    }

    function formatRepoSelection (repo) {
        return repo.text;
    }

    $ajax.select2({
        ajax: {
            url: "<?php echo $root; ?>//app/functions.php",
            dataType: 'json',
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (data) {
                var result = [];
                data.forEach(function (dataObj) {
                    result.push({
                        id: dataObj.id,
                        text: dataObj.text,
                        icon: dataObj.icon,
                    })
                });
                console.log(result);
                return {
                    results: result
                };
            },
            cache: false
        },
        escapeMarkup: function (markup) { return markup; },
        minimumInputLength: 3,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection,
        theme: 'adwitt'
    });
</script>


<script>
$('#category').select2({
    placeholder: {
        id: '1',
        text: 'Select Category'
    }
});
$('.select2-container').css('width','100%')
</script>

<script>

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

  $("#hotels-list").submit(function() {
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
  var finelURL = actionURL +language+'/'+currceny+'/'+city_trims+'/'+ checkin+'/'+checkout+'/'+adults+'/'+child;
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

<script>

    var flight_type = 'oneway';
    $("#submit").click(function(){
    var origin = $("#autocomplete").val();
    var destination = $("#autocomplete2").val();
    var cdeparture = $("#departure").val();
    var returnn = $("#return").val();
    var adult = $("#fadult").text();
    var children  = $("#fchildren").text();
    var infant  = $("#finfant").text();

    /*origin & destination validation*/
    if(origin == ''){
    alert('Please fill out origin');
    $('#autocomplete').focus();
    }else if(destination == ''){
    alert('Please fill out destination');
    $('#autocomplete2').focus();
    }else{

    /*(from origin) url settings*/
    var origin_res1 = origin.split(" ",1)[0];

    /*(to destination) url settings*/
    var destination_res1 = destination.split(" ",1)[0];

    /*cdeparture change data format (like 23/03/2020 to 23-03-2020)*/
    var parts = cdeparture.split('/');
    var departur = parts[0] + '-' + parts[1] + '-' + parts[2];

    /*return change data format (like 23/03/2020 to 23-03-2020)*/
    var partss = returnn.split('/');
    var re_turn = partss[0] + '-' + partss[1] + '-' + partss[2];

    /* finally url*/
    var base_url = "<?=root;?>/flights";

    var url = base_url+"flights/"+origin_res1.toLowerCase()+"/"+destination_res1.toLowerCase()+"/"+flight_type+"/"+departur+"/"+re_turn+"/"+adult+"/"+children+"/"+infant;

    window.location.href = url;

    // $.ajax({
    // type: 'ajax',
    // method: 'get',
    // async: false,
    // url: '<?php echo base_url() ?>Flights/flight',
    // data:{
    //     origin_res1:origin_res1,
    //     origin_res2:origin_res2,
    //     destination_res1:destination_res1,
    //     destination_res2:destination_res2,
    //     departur:departur,
    //     re_turn:re_turn,
    //     adult:adult,
    //     children:children
    // },
    // dataType: 'json',
    // success: function(response){
    // alert('Status update successfully');
    // },
    // error: function(){
    // alert('Status update Error');
    // }
    // });
    }

    });

    function FlighType(value){
    flight_type = value;
    }

</script>

	</body>
</html>