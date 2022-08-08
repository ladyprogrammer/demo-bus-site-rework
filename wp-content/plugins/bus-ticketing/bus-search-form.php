<?php
function bus_search_form() {
	ob_start();

	?>
		<form method="post" action="http://victoryliner.com:8080/bus-search/select-bus/">
			<label>
				<input type="radio" name="trip-type" id="one-way">One-way
				<input type="radio" name="trip-type" id="roundtrip" checked>Roundtrip
			</label>
			<select name="origin-place">
				<option>Cubao</option>
				<option selected>Baguio</option>
				<option>Pasay</option>
				<option>Caloocan</option>
				<option>Sampaloc</option>
			</select>
			<select name="destination-place">
				<option>Cubao</option>
				<option>Baguio</option>
				<option selected>Pasay</option>
				<option>Caloocan</option>
				<option>Sampaloc</option>
			</select>
			<label>
				<input type="date" name="depart-date" value="2022-08-01">
			</label>
			<label>
				<input type="date" name="return-date" value="2022-08-02">
			</label>			
			<label>
				Passengers: 
				<input type="number" name="no-passengers" value="1">
			</label>
			<button type="submit" name="submit">Submit</button>
		</form>
	<?php $form = ob_get_clean();
	return $form;
}
add_shortcode('bus_search_form', 'bus_search_form');