<?php
session_start();
if (isset($_POST['submit'])) {
	$_SESSION = $_POST;
	unset($_SESSION['submit']);
}

function bus_selection() {
	ob_start();

	global $wpdb;
	$sql_query = "SELECT * FROM wp_bus_buses WHERE route_origin = '${_SESSION["origin-place"]}' AND route_destination = '${_SESSION["destination-place"]}' AND date_departure = '${_SESSION["depart-date"]}'";
	$result = $wpdb->get_results($sql_query);
?>

		<h3><?php echo $_SESSION['origin-place'] ?> to <?php echo $_SESSION['destination-place'] ?></h3>
		<table>
			<tr>
				<th>Bus No</th>
				<th>Departure Time</th>
				<th>&nbsp;</th>
			</tr>
			<?php foreach($result as $bus) { ?>
				<tr>
					<td><?php echo $bus->bus_no; ?></td>
					<td><?php echo $bus->date_departure; ?></td>
					<td><a href="http://victoryliner.com:8080/bus-search/pick-seat/?selected-bus=<?= $bus->id ?>">Book</a></td>
				</tr>
			<?php } ?>
		</table>

<?php 
		$available_buses = ob_get_clean();
		return $available_buses;
}
add_shortcode('bus_selection', 'bus_selection');
