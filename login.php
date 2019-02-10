<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>Masahe | Login</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link href="assets/style.css" rel="stylesheet">
	<!-- Navigation Bar -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
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
		  <li><a href="login.php" class="active">Login</a></li>
		  <li><a href="register.php">Register</a></li>
		</ul>
	</h1>
</div>
	<br>
	<form method="POST" action="login-process.php">
			<div class="panel panel-default">
				<div class="panel-body">
					<center>
						<legend><b>Login Form</b></legend>
						<?php include_once 'login-error.php'; ?>
					</center>
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" required="required">

						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required="required">
						<br>
						<button type="submit" class="btn btn">Login</button>
						<label>Not yet a member? Click <a href="register.php">here</a></label>
				</div>
			</div>
	</form>
</body>
</html>