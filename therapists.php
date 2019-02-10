<?php
require("header.php");

$sql = "SELECT * FROM therapists";
$result = mysqli_query($conn, $sql);

if(!$result){
	echo mysqli_error($conn);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>List of Therapists</title>
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
			<h1>Lists of Therapists</h1>
		</div>
					<div class="admin-panel-body">
							<table width='100%' border='2'>
								<tr>
									
									<th>Full Name</th>
									<th>Gender</th>
									
								</tr>
								<?php 
								while($data = mysqli_fetch_assoc($result)){
									echo "<tr>";
									
									echo "<td>".($data['firstname']." ".$data['lastname'])."</td>";
									echo "<td>{$data['gender']}</td>";
									
									echo "</tr>";
								 }
								 ?>
							</table>
					</div>
				</div>


				<!-- MODAL -->

			<div id="id01" class="modal">

			    <form class="modal-content animate" method="POST" action="admin-therapists-add.php">
			      <div class="imgcontainer">
			        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					        <div class="panel panel-default">
								<div class="panel-body">
										<?php include_once 'login-error.php';?>
										<label>First Name</label>
										<input type="text" name="firstname" class="form-control" placeholder="First Name" required="required">

										<label>Last Name</label>
										<input type="text" name="lastname" class="form-control" placeholder="Last Name" required="required">
										
										<label>Gender</label>
										<select name="gender" class="form-control" required="required">
											<option value="" selected disabled>----Select----</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>

										<label>Mobile Number</label>
										<input type="number" name="mobile_no" class="form-control" placeholder="Mobile Number" required="required">
										<br>
										<button type="submit" class="btn btn">Add to the List</button>
								</div>
							</div>
			    </form>
			  </div>

</body>
</html>