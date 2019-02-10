<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>Masahe | Register</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link href="assets/style.css" rel="stylesheet">
	<!-- Navigation Bar -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/w3schools.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- Navigation Bar -->
</head>
<body id="font-used">
	<div class="w3-container w3-teal">
	<h1><img src="images/icon.png" alt="Masahe.icon">Masahe

		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="index-services.php">Services</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="register.php" class="active">Register</a></li>
		</ul>
	</h1>
</div>
	<br>
	<form method="POST" action="register-process.php">
			<div class="panel panel-default">
				<div class="panel-body">
					<center>
						<legend><b>Registration Form</b></legend>
						<?php include_once 'login-error.php';?>
					</center>
						<label>First Name</label>
						<input type="text" name="firstname" class="form-control" placeholder="First Name" required="required">

						<label>Last Name</label>
						<input type="text" name="lastname" class="form-control" placeholder="Last Name" required="required">
						
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Address" required="required">
						
						<label>Date of Birth</label>
						<input type="date" name="dob" class="form-control" placeholder="Date of Birth" required="required">
						
						<label>Gender</label>
						<select name="gender" class="form-control" required="required">
							<option value="" selected disabled>----Select----</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>

						<label>Mobile Number</label>
						<input type="number" name="mobile_no" class="form-control" placeholder="Mobile Number" required="required">
						
						<label>Email Address</label>
						<input type="email" name="email" class="form-control" placeholder="Email Address" required="required">

						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" required="required">

						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required="required">

						<label>Confirm Password</label>
						<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required="required">
						
						<br>
						
						<button type="submit" class="btn btn-success">Register</button>
						<label>Already a member? Click <a href="login.php">here</a></label>
				</div>
 </html>