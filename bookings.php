<?php 
require("header.php");

$sql= "SELECT * FROM services";
$result_s = mysqli_query($conn, $sql);

$sql= "SELECT * FROM therapists";
$result_t = mysqli_query($conn, $sql);


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?= $_SESSION['profile']['firstname']?>!</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="./bootstrap/css/pikaday.css">
	<link rel="stylesheet" href="./plug in/wickedP/stylesheets/wickedpicker.css">

	<!-- Navigation Bar -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/w3schools.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body id="admin-font-used">

<!-- Sidebar -->

	<div class="w3-sidebar w3-light-grey w3-bar-block">
	  <h3 class="w3-bar-item"><img src="images/icon-negative.png"></h3>
	
	  <a href="customers.php" class="w3-bar-item w3-button">My Profile</a>
   	  <a href="bookings.php" class="w3-bar-item w3-button">Bookings</a>
	  <a href="schedules.php" class="w3-bar-item w3-button">Schedules</a>
   	  <a href="therapists.php" class="w3-bar-item w3-button">Therapists</a>
	  <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
	  <button class="btn btn-success"><a href="logout.php">Logout</a></button>
	</div>

<!-- Page Content -->
	<div style="margin-left:15%">

		<div class="w3-container w3-teal">
			<h1>Book a Schedule </h1>
		</div>
	</div>

	<form method="POST" action="bookings-process.php">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">

					<center>
						<legend>Booking Form</legend>
					</center>

						<label>Massage Type:</label>
						<select name="services_id" class="form-control" required="required">
							<option value="" selected disabled>----Select Massage----</option>
							<?php 
								while($data = mysqli_fetch_assoc($result_s)){
									echo "<option value='{$data['services_id']}'>{$data['services_desc']} {$data['services_dur']}| Php {$data['price']}.00</option>";
							}?>				
						</select>

						<br>

						<label>Therapist: <!-- <i>(optional)</i> --></label>
						<select name="therapists_id" class="form-control">
							<option value="" selected disabled>----Select Therapist----</option>
							<?php 
								while($data = mysqli_fetch_assoc($result_t)){
									echo "<option value='{$data['therapists_id']}'>{$data['firstname']} {$data['lastname']} | {$data['gender']}</option>";
							}?>
						</select>

						<br>
						
						<label>Date</label>
						<input name="dor" type="date" id="datepicker" class="form-control" placeholder="Date of Reservation" required="required">

						<br>
						
						<label>Time In</i></label>
						<select name="timein" class="form-control" required="required">
							<option value="" selected disabled>----Select Time Reservation----</option>
							<option value="13:30:00">1:30 PM</option>
							<option value="14:00:00">2:00 PM</option>
							<option value="14:30:00">2:30 PM</option>
							<option value="15:00:00">3:00 PM</option>
							<option value="15:30:00">3:30 PM</option>
							<option value="16:00:00">4:00 PM</option>
							<option value="16:30:00">4:30 PM</option>
							<option value="17:00:00">5:00 PM</option>
							<option value="17:30:00">5:30 PM</option>
							<option value="18:00:00">6:00 PM</option>
							<option value="18:30:00">6:30 PM</option>
							<option value="19:00:00">7:00 PM</option>
							<option value="19:30:00">7:30 PM</option>
							<option value="20:00:00">8:00 PM</option>
							<option value="20:30:00">8:30 PM</option>
							<option value="21:00:00">9:00 PM</option>
							<option value="21:30:00">9:30 PM</option>
							<option value="22:00:00">10:00 PM</option>
							<option value="22:30:00">10:30 PM</option>
							<option value="23:00:00">11:00 PM</option>
						</select>

						<br>

						<label>Mobile Number</label>
						<input type="number" name="active_no" class="form-control" placeholder="Must Input Active Mobile Number" required="required">
						
						<br>
						
						<p><button type="submit" class="btn btn-success" onclick="myBooking()">Book</button></p>
						<p><button class="btn btn-danger"()">Cancel</button></p>
											
				</div>	
			</div>		
		</div>
	</div>

</body>
</html>

<!-- Javascripts -->

<script type="text/javascript" src="./bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="./plug in/wickedP/src/wickedpicker.js"></script>
<script src="./bootstrap/js/pikaday.js" ></script>
<script>
	var picker = new Pikaday(
	{
		field: document.getElementById('datepicker'),
		firstDay: 1,
		minDate: new Date(),
		maxDate: new Date(2050, 12, 31),
		yearRange: [2018,2050]

		$('.timepicker').wickedpicker();
	});

	function myBooking() {
    alert("Are You Sure You Wanna Book This?");
	}

	function myCancel() {
    alert("Are You Sure You Wanna Cancel?");

}
</script>
