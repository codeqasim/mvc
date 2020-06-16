        <footer class="footer mt-5">
        <div class="container">
        <span class="text-muted"><p>Footer</p></span>
        </div>
        </footer>

        <script src="<?php echo $root; ?>assets/js/jquery-3.3.1.js"></script>
        <script src="<?php echo $root; ?>assets/js/popper.min.js"></script>
        <script src="<?php echo $root; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $root; ?>assets/js/jquery-ui.min.js"></script>

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
  var $form = $('#hotels-api');
  var data = $form.serialize();
  var vars = [];
  datasplit = data.split('&');
  for (var i = 0; i < datasplit.length; i++) {
   hash = datasplit[i].split('=');
   vars.push(hash[1]);
   // vars[hash[0]] = hash[1];
  }
  var trims = $.trim(vars);
  var slug = trims.replace(/\/?,/g, '/').replace(/-+/g, '-').replace(/^-|-$/g, '').replace('%20', '-').replace('%20', '-').replace('%40', '@');
  // alert(slug);

    var actionURL = 'hotels/';
  var finelURL = actionURL + slug;
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