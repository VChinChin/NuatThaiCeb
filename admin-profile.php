<?php require("header.php"); 
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
			<h1>My Admin Profile <!-- <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success">Edit Profile</a> --></h1>
		</div>
			<div class="admin-panel-body">
				<div class="card">
				  <img src="<?php echo "images/{$_SESSION['profile']['photo']}" ?>" alt="<?= $_SESSION['profile']['firstname']?>">
				  <h1><?= $_SESSION['profile']['firstname']?> <?= $_SESSION['profile']['lastname']?></h1>
				  	<table width='100%'>
								<tbody>

									<tr>
										<td></td>
										<td>Username:	<strong><?= $_SESSION['profile']['username']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Address: <strong><?= $_SESSION['profile']['address']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Date of Birth: <strong><?= $_SESSION['profile']['dob']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Gender: <strong><?= $_SESSION['profile']['gender']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Mobile Number: <strong><?= $_SESSION['profile']['mobile_no']?></strong></td>
									</tr>
									<tr>
										<td></td>
										<td>Email Address: <strong><?= $_SESSION['profile']['email']?></strong></td>
									</tr>
								</tbody>
							</table>
				</div>						
			</div>	
	</div>


      <!-- Modal for Edit Profile -->			
<!-- 			<div id="id01" class="modal">
			    <form class="modal-content animate" method="POST" action="admin-profile-process.php" enctype="multipart/form-data">
			      <div class="imgcontainer">
			        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								<div class="panel panel-default">
									<div class="panel-body">
										<input type='hidden' value='<?php echo $_SESSION['profile']['id'];?>' name='id'>

										<label>Profile Photo</label>
										<input type='file' name='ePhoto'>
										<br>
										<label>Username</label>
										<label class="form-control"><?= $_SESSION['profile']['username']?></label>

										<label>First Name</label>
										<input type="text" name="firstname" class="form-control" value="<?= $_SESSION['profile']['firstname']?>" required="required">

										<label>Last Name</label>
										<input type="text" name="lastname" class="form-control" value="<?= $_SESSION['profile']['lastname']?>" required="required">
										
										<label>Address</label>
										<input type="text" name="address" class="form-control" value="<?= $_SESSION['profile']['address']?>" required="required">
										
										<label>Date of Birth</label>
										<label class="form-control"><?= $_SESSION['profile']['dob']?></label>
										
										<label>Gender</label>
										<label class="form-control"><?= $_SESSION['profile']['gender']?></label>

										<label>Mobile Number</label>
										<input type="number" name="mobile_no" class="form-control" value="<?= $_SESSION['profile']['mobile_no']?>" required="required">
										
										<label>Email Address</label>
										<input type="email" name="email" class="form-control" value="<?= $_SESSION['profile']['email']?>" required="required">
										<br>
										<button type="submit" class="btn btn">Update</button>
									</div>
								</div>
					</div>
			    </form>
			  </div>
 -->
</body>
</html>
