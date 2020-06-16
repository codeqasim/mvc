<div class="containerer">
	<div class="row">
		<div class="col-12">
			<form id="hotels-api" method="post" class="row">


			<div class="col-3">
            	<fieldset class="form-group">
					<label for="exampleInputPassword1">language</label>
					<input type="text" class="form-control" name="language" placeholder="language" value="en">
				</fieldset>
				<fieldset class="form-group">
					<label for="exampleInputPassword1">currceny code</label>
					<input type="text" class="form-control" name="currceny" placeholder="currceny" value="usd">
				</fieldset>
         	</div>
            <div class="col-3">
				<fieldset class="form-group">
					<label for="exampleInputPassword1">CIty</label>
					<input type="text" class="form-control" name="country" id="country" value="lahore">
				</fieldset>

                <fieldset class="form-group">
					<label for="exampleInputPassword1">Pagination</label>
					<input type="text" class="form-control" name="city" placeholder="Pagination" value="1">
				</fieldset>

            </div>

            <div class="col-3">
				<fieldset class="form-group">
					<label for="exampleInputPassword1">check in</label>
					<input type="text" class="form-control" name="checkin" id="checkin" value="23-06-2020">
				</fieldset>

				<fieldset class="form-group">
					<label for="exampleInputPassword1">checkout</label>
					<input type="text" class="form-control" name="checkout" id="checkout" value="28-06-2020">
				</fieldset>
            </div>

            <div class="col-3">
			  <fieldset class="form-group">
					<label for="exampleInputPassword1">adults</label>
					<input type="text" class="form-control" name="adults" placeholder="adults" value="2">
				</fieldset> 

				<fieldset class="form-group">
					<label for="exampleInputPassword1">children</label>
					<input type="text" class="form-control" name="children" placeholder="children" value="0">
				</fieldset>
               </div>

                

                <div class="col-12">
				<button type="submit" class="btn btn-primary btn-block btn-lg">Search</button>
                </div>
			</form>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-12">
			<form id="hotels-detail"  method="post" class="row">

            <div class="col-3">
                <fieldset class="form-group">
					<label for="exampleInputPassword1">ID</label>
					<input type="text" class="form-control" name="id" id="id" placeholder="Pagination" value="546120">
				</fieldset>

			<fieldset class="form-group">
					<label for="exampleInputPassword1">Title</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Pagination" value="Pearl Continental Lahore">
				</fieldset>

            </div>

            <div class="col-3">
				<fieldset class="form-group">
					<label for="exampleInputPassword1">check in</label>
					<input type="text" class="form-control" name="checkin" id="checkindetail" value="06/21/2020">
				</fieldset>

				<fieldset class="form-group">
					<label for="exampleInputPassword1">checkout</label>
					<input type="text" class="form-control" name="checkout" id="checkoutdetail" value="06/28/2020">
				</fieldset>
            </div>

            <div class="col-3">
				<fieldset class="form-group">
					<label for="exampleInputPassword1">adults</label>
					<input type="text" class="form-control" name="adults" id="dadults" placeholder="adults" value="2">
				</fieldset>
				<fieldset class="form-group">
					<label for="exampleInputPassword1">children</label>
					<input type="text" class="form-control" name="children" id="dchildren" placeholder="children" value="1">
				</fieldset>
            </div>

            <div class="col-3">
				<fieldset class="form-group">
					<label for="exampleInputPassword1">currceny code</label>
					<input type="text" class="form-control" name="currceny" id="dcurrceny" placeholder="currceny" value="usd">
				</fieldset>

                <fieldset class="form-group">
					<label for="exampleInputPassword1">language</label>
					<input type="text" class="form-control" name="dlanguage" id="dlanguage" placeholder="language" value="en">
				</fieldset>
                 </div>

                <div class="col-12">
				<button type="submit" value="submit" id="detail-button" formaction="" class="btn btn-primary btn-block btn-lg">Search</button>
                </div>
			</form>
		</div>
	</div>
</div>