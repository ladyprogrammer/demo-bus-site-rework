<?php
function bus_submit_test() {
	ob_start();
	echo '<div>Yes I got the info</div>';
	print_r($_POST);

	$content = ob_get_clean();
	return $content;
}
add_shortcode('bus_submit_test', 'bus_submit_test');