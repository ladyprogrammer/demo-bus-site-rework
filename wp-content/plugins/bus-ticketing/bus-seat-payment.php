<?php

function bus_seat_payment() {
	ob_start();

	print_r($_SESSION);
	?>


	<div>Hello there</div>

	<div id="demo">
		<form id="my-form" method="post">
			<input type="text" name="toink" value="boom">
			<button id="submit-button">Click Me</button>
		</form>
	</div>

	<script>
		const submitButton = document.querySelector('#submit-button');

		submitButton.addEventListener('click', (e) => {
			e.preventDefault();

			const myForm = document.querySelector('#my-form');

			const xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'http://victoryliner.com:8080/ajax_test.php')
			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 || this.status === 200) {
					document.getElementById("demo").innerHTML = this.responseText;
				}
			}
			const formData = new FormData(myForm);

			xhttp.send(formData);
		});
	</script>

	<?php
	$content = ob_get_clean();
	return $content;
}
add_shortcode('bus_seat_payment', 'bus_seat_payment');

