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
</script>

	</body>
</html>