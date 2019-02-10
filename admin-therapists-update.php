<?php
require("header.php");

$sql = "SELECT * FROM therapists WHERE therapists_id={$_GET['therapists_id']}";
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
			<h1>Update Therapist</h1>
		</div>

			<form method="POST" action="admin-therapists-update-process.php" enctype="multipart/form-data">
				<div class="admin-panel-body">
				<input type='hidden' value='<?php echo $data['therapists_id'];?>' name='therapists_id'>

					<table width='50%'>
						<tr>	
							<td>First Name</td>
							<td>&ensp;&ensp;
								<input type="text" class="form-control" name="firstname" value="<?= $data['firstname']?>">
							</td>
						</tr>
						<tr>	
							<td>Last Name</td>
							<td>&ensp;&ensp;
								<input type="text" class="form-control" name="lastname" value="<?= $data['lastname']?>">
							</td>
						</tr>
						<tr>
							<td>Mobile Number</td>
							<td>&ensp;&ensp;
								<input type="text" class="form-control" name="mobile_no" value="<?= $data['mobile_no']?>">
							</td>
						</tr>
									<tr>	
										<td></td>
										<td>&ensp;&ensp;
											<button type="submit" class="btn btn-success">Update</button>
										</td>
									</tr>
					</table>
					<br>
			</form>