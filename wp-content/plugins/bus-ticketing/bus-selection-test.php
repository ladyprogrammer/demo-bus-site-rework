<?php
session_start();
if (isset($_POST['submit'])) {
	$_SESSION = $_POST;
}


function bus_selection_test() {
	ob_start();

	print_r($_SESSION);
?>
	<div>bus selection test</div>


<?php
	$content = ob_get_clean();
	return $content;
}
add_shortcode('bus_selection', 'bus_selection_test');