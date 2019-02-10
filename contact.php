<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link href="assets/style.css" rel="stylesheet">
	<!-- Navigation Bar -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/w3schools.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
			<h1>Contact</h1>
		</div>


	<form method="POST" action="contact-process.php">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body">

					<center>
						<legend>Send us your Feedback</legend>
					</center>

					<textarea rows="9" name="message" class="form-control" placeholder="Compose a message" required="required"></textarea>
						
						<p><button type="submit" class="btn btn-success">Send</button></p>
				</div>	
			</div>		
		</div>
	</div>




</body>
</html>