<?php 
// session_start();

function bus_test() {
	ob_start();
	if (isset($_GET['selected-bus'])) {
		$_SESSION['selected-bus'] = $_GET['selected-bus'];
	}
	print_r($_SESSION);
?>

		<style>
			.seat-cell {
				display: inline-block;
				padding: 10px 25px;
				border:  1px solid grey;
				margin: 10px;
				cursor: pointer;
			}
		</style>
		<script>
			function saveSeat(selectedSeat) {
				localStorage.setItem('passenger', selectedSeat);
			}
		</script>
		<div>
			<h3>
				Pick seat in <?php echo $_SESSION['selected-bus'] ?>
			</h3>
		</div>
		<?php for($i = 1; $i <=20; $i++) {
			if (($i % 4) === 1) {
				echo '<div class="seat-row">';
			}

			echo "<div class='seat-cell' onclick=\"saveSeat($i)\">$i</div>";
			
			if ($i % 4 === 0) {
				echo '</div>';
			}
		}
		 ?>
		 <button onclick="window.location.href='http://victoryliner.com:8080/bus-search/payment/'">Next</button>

<?php
	$content = ob_get_clean();
	echo $content;
}
add_shortcode('bus_pick_seat', 'bus_test');


function bus_pick_seat() {
	if( isset($_GET) ) {
		session_start();
		$selected_bus = $_GET['bus-id'];
		$_SESSION['selected_bus'] = $selected_bus;
		$seats = [];
		$_SESSION['seats'] = $seats;
	}
}


	// function save_seat(seat) {
	// 	array_push($seats, seat);
	// }

function bus_content() {
	ob_start(); ?>
		<style>
			.seat-cell {
				display: inline-block;
				padding: 10px 25px;
				border:  1px solid grey;
				margin: 10px;
				cursor: pointer;
			}
		</style>
		<script>
			let seats = [];

			function saveSeat(selectedSeat) {
				seats.push(selectedSeat);
				alert(seats);
			}
		</script>
		<div>
			<h3>
				Pick seat in <?php echo $selected_bus ?>
			</h3>
		</div>
		<div>
			<div class="seat-cell" onclick="saveSeat(1)">1</div>
			<div class="seat-cell" onclick="">2</div>
			<div class="seat-cell" onclick="">3</div>
			<div class="seat-cell" onclick="">4</div>
		</div>
		<div>
			<div class="seat-cell">5</div><div class="seat-cell">6</div><div class="seat-cell">7</div><div class="seat-cell">8</div>
		</div>
<?php 
	print_r($_SESSION);
	$content = ob_get_clean();
	return $content;
}
// add_shortcode('bus_pick_seat', 'bus_pick_seat');