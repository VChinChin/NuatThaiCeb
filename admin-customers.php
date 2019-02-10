<?php
require("header.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if(!$result){
	echo mysqli_error($conn);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Customers</title>
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
	 
	  <a href="admin-profile.php" class="w3-bar-item w3-button">Administration</a>
	  <a href="admin-customers.php" class="w3-bar-item w3-button">Lists of Customers</a>
   	  <a href="admin-therapists.php" class="w3-bar-item w3-button">Lists of Therapists</a>
	  <a href="admin-appointments.php" class="w3-bar-item w3-button">Lists of Appointments</a>
	  <a href="admin-inbox.php" class="w3-bar-item w3-button">Inbox</a>
	  <button class="btn"><a href="logout.php">Logout</a></button>
	</div>

<!-- Page Content -->
	<div style="margin-left:15%">

		<div class="w3-container w3-teal">
			<h1>Lists of Customers <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success">Add Customer</a></h1>
		</div>
					<div class="admin-panel-body">
							<table width='100%' border='2'>
								<tr>
									<th>ID</th>
									<!-- <th>Photo</th> -->
									<th>Username</th>
									<th>Last Name</th>
									<th>First Name</th>
									<th>Option</th>
								</tr>
								<?php 
								while($data = mysqli_fetch_assoc($result)){
									echo "<tr>";
									echo "<td>{$data['id']}</td>";
									// echo "<td><img src='images/{$data['photo']}'></td>";
									echo "<td>{$data['username']}</td>";
									echo "<td>{$data['lastname']}</td>";
									echo "<td>{$data['firstname']}</td>";
									echo "<td><a href='admin-customers-update.php?id={$data['id']}' class='btn btn-primary'>View</a>";
									echo "<a href='admin-customers-delete.php?id={$data['id']}' class='btn btn-danger'>Delete</a></td>";
									echo "</tr>";
								 }
								 ?>
							</table>
					</div>
	</div>

      <!-- Modal for Adding a new Customer -->			
			<div id="id01" class="modal">

			    <form class="modal-content animate" method="POST" action="admin-register-process.php">
			      <div class="imgcontainer">
			        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					        <div class="panel panel-default">
								<div class="panel-body">
										<?php include_once 'login-error.php';?>
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
										<label></label>
										<button type="submit" class="btn btn">Add to the List</button>
								</div>
							</div>
			    </form>
			</div>

</body>
</html>