<?php require("header.php");

$sql = "SELECT * FROM users
        JOIN bookings ON users.id = bookings.users_id
        JOIN therapists ON bookings.therapists_id = therapists.therapists_id
        JOIN services ON bookings.services_id = services.services_id
        WHERE users_id = {$_SESSION['profile']['id']}
        ";

$result = mysqli_query($conn, $sql);

if(!$result){
      echo mysqli_error($conn);
      exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Appointments</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link href="assets/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
  <link rel="stylesheet" type="text/css" href="./assets/w3schools.css">
  <link rel="stylesheet" type="text/css" href="./assets/w3schools.css">
</head>
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
                  <h1>Your Schedule Booked </h1>
            </div>
                              <div class="admin-panel-body">
                                    <table width='100%' border='2'>
                                          <tr>
                                                <th>Date</th>
                                                <th>Type of Massage</th>
                                                <th>Duration</th>
                                                <th>Therapist</th>
                                                <th>Time-In</th>
                                                <th>Price (Php)</th>
                                          </tr>
                                          <?php 
                                          while($data = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$data['dor']}</td>";
                                                echo "<td>{$data['services_desc']}</td>";
                                                echo "<td>{$data['services_dur']}</td>";
                                                echo "<td>{$data['firstname']} {$data['lastname']}</td>";
                                                echo "<td>{$data['timein']} PM</td>";
                                                echo "<td>{$data['price']}.00</td>";
                                                echo "</tr>";
                                           }
                                           ?>
                                    </table>
                              </div>
      </div>
</body>
</html>