<?php require("header.php"); 

$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);

if(!$result){
	echo mysqli_error($conn);
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Inbox</title>
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
			<h1>Inbox</h1>
		</div>
					<div class="admin-panel-body">
							<table width='100%' border='2'>
								<tr>
									<th>Users ID</th>
									<th>Email Address</th>
									<th>Messages</th>
									<th>Option</th>
								</tr>
								<?php 
								while($data = mysqli_fetch_assoc($result)){
									echo "<tr>";
									
									echo "<td>{$data['users_id']}</td>";
									echo "<td>{$data['email']}</td>";
									echo "<td>{$data['message']}</td>";
									echo "<td><a href='admin-inbox-delete.php?messages_id={$data['messages_id']}' class='btn btn-danger'>Delete</a></td>";
									echo "</tr>";
								 }
								 ?>
							</table>
					</div>
				</div>
	</div>	
</body>
</html>
