<?php
require("header.php");

$sql = "SELECT * FROM users WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if(!$result){
	echo mysqli_error($conn);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Update Customers</title>
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
	  <button class="btn btn"><a href="logout.php">Logout</a></button>
	</div>

<!-- Page Content -->
	<div style="margin-left:15%">
		<div class="w3-container w3-teal">
			<h1>Update Customer <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success">Edit Profile</a></h1>
		</div>

			<div class="admin-panel-body">
				<div class="card">
				  <img src="<?php echo "images/{$data['photo']}" ?>" alt="<?= $data['firstname']?>">
				  <h1><?= $data['firstname']?> <?= $data['lastname']?></h1>
				  	<table width='100%'>
								<tbody>

									<tr>
										<td></td>
										<td>Username:	<strong><?= $data['username']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Address: <strong><?= $data['address']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Date of Birth: <strong><?= $data['dob']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Gender: <strong><?= $data['gender']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Mobile Number: <strong><?= $data['mobile_no']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Email Address: <strong><?= $data['email']?></strong></td>
									</tr>
								</tbody>
							</table>
				</div>	

			</div>							
	</div>

      <!-- Modal for edting a Customer -->			
			<div id="id01" class="modal">

			    <form class="modal-content animate" method="POST" action="admin-customers-update-process.php">
			      	<div class="imgcontainer">
			        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					    <div class="panel panel-default">
							<div class="panel-body">
								<input type='hidden' value='<?php echo $data['id'];?>' name='id'>
										
										<?php include_once 'login-error.php';?>
										<label>Photo</label>
										<label>Username</label>
											<input type="text" class="form-control" name="username" value="<?= $data['username']?>">
										<label>First Name</label>
											<input type="text" class="form-control" name="firstname" value="<?= $data['firstname']?>">	
										<label>Last Name</label>
											<input type="text" class="form-control" name="lastname" value="<?= $data['lastname']?>">
										<label>Address</label>
											<input type="text" class="form-control" name="address" value="<?= $data['address']?>">	
										<label>Date of Birth</label>
											<input type="date" class="form-control" name="dob" value="<?= $data['dob']?>">
										<label>Gender</label>
											<input type="text" class="form-control" name="gender" value="<?= $data['gender']?>">
										<label>Mobile Number</label>
											<input type="number" class="form-control" name="mobile_no" value="<?= $data['mobile_no']?>">
										<label>Email Address</label>
											<input type="email" class="form-control" name="email" value="<?= $data['email']?>">
										<label></label>
										<button type="submit" class="btn btn-success" onclick="updateProfile()">Update</button>
							</div>
						</div>
					</div>
			    </form>
			</div>


	</div>	
	</body>
</html>


<script>
	
function updateProfile() {
    alert("The profile has been successfully updated!");
	}

</script>