<?php
function bus_search_form() {
	ob_start();

	?>

		
		<form method="post" action="bus-search/select-bus/">
			<div class="container text-light">

				<div class="row justify-content-center gy-5">
					<div class="col-4 text-center align-middle" style="margin-bottom: 15px;">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="trip-type" id="one-way">
								<label class="form-check-label" for="one-way">One-way</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="trip-type" id="roundtrip">
								<label class="form-check-label" for="roundtrip">Roundtrip</label>
							</div>
					</div>
				</div>

				<div class="row justify-content-center gy-5">
					<div class="col-2">
						<div class="form-floating">
							<select class="form-select form-control-sm" name="origin-place" id='origin-place'>
								<option>Cubao</option>
								<option selected>Baguio</option>
								<option>Pasay</option>
								<option>Caloocan</option>
								<option>Sampaloc</option>
							</select>
							<label for="origin-place" style="color: #000">Origin</label>
						</div>
					</div>

					<div class="col-2">
						<div class="form-floating">
							<select class="form-select form-control-sm" name="destination-place" id="destination-place">
								<option>Cubao</option>
								<option>Baguio</option>
								<option selected>Pasay</option>
								<option>Caloocan</option>
								<option>Sampaloc</option>
							</select>
							<label for="destination-place" style="color: #000">Destination</label>
						</div>
					</div>

					<div class="col-2">
            <div class="form-floating">
              <input type="text" class="form-control form-control-sm" id="input-from" name="input-from" placeholder="Depart Date">
              <label for="input-from" style="color: #000;">From</label>
            </div>
          </div>

          <div class="col-2">
            <div class="form-floating">
              <input type="text" class="form-control form-control-sm" id="input-to" name="input-to" placeholder="Return Date">
              <label for="input-to" style="color: #000">To</label>
            </div>
          </div>

          <div class="col-2 text-start align-middle">
						<div class="form-floating">
							<input type="number" class="form-control form-control-sm" name="no-passengers" id="no-passengers" value="1">
							<label for="no-passengers" style="color: #000">Passengers</label>
						</div>
					</div>

					<div class="col-1">
						<button class="btn btn-primary" type="submit" name="submit">Submit</button>
					</div>
				</div>
		</div>
	</form>

	<?php $form = ob_get_clean();
	return $form;
}
add_shortcode('bus_search_form', 'bus_search_form');