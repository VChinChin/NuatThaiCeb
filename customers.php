<?php
require("header.php");

$sql = "SELECT * FROM users WHERE id ={$_GET['id']}";

$result = mysqli_query($conn, $sql);

if(!$result){
	echo mysqli_error($conn);
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?= $_SESSION['profile']['firstname']?>!</title>
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
			<h1>My Profile <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success">Edit Profile</a></h1>
		</div>
			<div class="admin-panel-body">
				<div class="card">
				  <img src="<?php echo "images/{$_SESSION['profile']['photo']}" ?>" alt="<?= $_SESSION['profile']['firstname']?>">
					<?php while ($data = mysqli_fetch_assoc($result)){

						echo"

				  <h1>{$data['firstname']} {$data['lastname']}</h1>
				  	<table width='100%'>
								<tbody>

									<tr>
										<td></td>
										<td>Username:{$data['username']}</strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Address: <strong>{$data['address']}</strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Date of Birth: <strong>{$data['dob']}</strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Gender: <strong>{$data['gender']}</strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Mobile Number: <strong>{$data['mobile_no']}</strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Email Address: <strong>{$data['email']}</strong></td>
									</tr>
								</tbody>
							</table>
						";
					}
					?>
				</div>						
			</div>	
	</div>	


      <!-- Modal for Edit Profile -->			
			<div id="id01" class="modal">
			    <form class="modal-content animate" method="POST" action="customers-update.php" enctype="multipart/form-data">
			      <div class="imgcontainer">
			        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								<div class="panel panel-default">
									<div class="panel-body">

										<?php 

										$sql = "SELECT * FROM users WHERE id ={$_GET['id']}";
										$result = mysqli_query($conn, $sql);
										while($row = mysqli_fetch_assoc($result)){
										echo"

										<input type='hidden' value={$row['id']} name='id'>

										<label>Profile Photo</label>
										<input type='file' name='ePhoto'>
										<br>
										<label>Username</label>
										<label class='form-control'>{$row['username']}</label>

										<label>First Name</label>
										<input type='text' name='firstname' class='form-control' value={$row['firstname']} required='required'>

										<label>Last Name</label>
										<input type='text' name='lastname' class='form-control' value={$row['lastname']} required='required'>
										
										<label>Address</label>
										<input type='text' name='address' class='form-control' value={$row['address']} required='required'>
										
										<label>Date of Birth</label>
										<label class='form-control'>{$row['dob']}</label>
										
										<label>Gender</label>
										<label class='form-control'>{$row['gender']}</label>

										<label>Mobile Number</label>
										<input type='number' name='mobile_no' class='form-control' value={$row['mobile_no']} required='required'>
										
										<label>Email Address</label>
										<input type='email' name='email' class='form-control' value={$row['email']} required='required'>
										<br>
										<button type='submit' class='btn btn'>Update</button>
										";
									}
									?>
									
									</div>
								</div>
					</div>
			    </form>
			  </div>


</body>
</html>