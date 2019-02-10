<?php require("header.php");

$sql= "SELECT * FROM users";
$result_c = mysqli_query($conn, $sql);

$sql= "SELECT * FROM services";
$result_s = mysqli_query($conn, $sql);

$sql= "SELECT * FROM therapists";
$result_t = mysqli_query($conn, $sql);

$sql = "SELECT  users.lastname AS u_lastname, 
                users.firstname AS u_firstname, 
                bookings.dor, 
                bookings.timein, 
                services.services_desc,
                services.services_dur,
                therapists.lastname, 
                therapists.firstname, 
                bookings.active_no, 
                bookings.users_id

        FROM users
        JOIN bookings ON users.id = bookings.users_id
        JOIN therapists ON bookings.therapists_id = therapists.therapists_id
        JOIN services ON bookings.services_id = services.services_id";

$result = mysqli_query($conn, $sql);

if(!$result){
      echo mysqli_error($conn);
      exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Appointments</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link href="assets/style.css" rel="stylesheet">
	<!-- Navigation Bar -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/modal.css">
    <link rel="stylesheet" type="text/css" href="./assets/w3schools.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body id="admin-font-used">

<!-- Sidebar -->

	<div class="w3-sidebar w3-light-grey w3-bar-block">
	  <h3 class="w3-bar-item"><img src="images/icon-negative.png"></h3>
	 
	  <a href="admin-home.php" class="w3-bar-item w3-button active">Administration</a>
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
                                                <th>Date</th>
                                                <th>Customer</th>
                                                <th>Time-In</th>
                                                <th>Type of Massage</th>
                                                <th>Duration</th>
                                                <th>Therapist</th>
                                                <th>Mobile No.</th>
                                          </tr>
                                          <?php 
                                          while($data = mysqli_fetch_assoc($result)){
                                                echo "<tr>";
                                                echo "<td>{$data['dor']}</td>";
                                                echo "<td>{$data['u_firstname']} {$data['u_lastname']}</td>";
                                                echo "<td>{$data['timein']} PM</td>";
                                                echo "<td>{$data['services_desc']}</td>";
                                                echo "<td>{$data['services_dur']}</td>";
                                                echo "<td>{$data['firstname']} {$data['lastname']}</td>";
                                                echo "<td>{$data['active_no']}</td>";
                                                echo "</tr>";
                                           }
                                           ?>
                                    </table>
                      </div>
              </div>

<!-- Modal for adding an appointment -->

      <div id="id01" class="modal">

          <form class="modal-content animate" method="POST" action="admin-appointments-process.php">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <div class="panel panel-default">
                <div class="panel-body">

                    <label>Customer</label>
                    <select name="users_id" class="form-control" required="required">
                      <option value="" selected disabled>----Select Customer----</option>
                      <?php 
                        while($data = mysqli_fetch_assoc($result_c)){
                          echo "<option value='{$data['id']}'>{$data['lastname']} {$data['firstname']}</option>";
                      }?>       
                    </select>

                    <label>Massage Type:</label>
                    <select name="services_id" class="form-control" required="required">
                      <option value="" selected disabled>----Select Massage----</option>
                      <?php 
                        while($data = mysqli_fetch_assoc($result_s)){
                          echo "<option value='{$data['services_id']}'>{$data['services_desc']} {$data['services_dur']}| Php {$data['price']}.00</option>";
                      }?>       
                    </select>

                    <br>

                    <label>Therapist: <!-- <i>(optional)</i> --></label>
                    <select name="therapists_id" class="form-control">
                      <option value="" selected disabled>----Select Therapist----</option>
                      <?php 
                        while($data = mysqli_fetch_assoc($result_t)){
                          echo "<option value='{$data['therapists_id']}'>{$data['firstname']} {$data['lastname']} | {$data['gender']}</option>";
                      }?>
                    </select>

                    <br>
                    
                    <label>Date</label>
                    <input name="dor" type="date" min=<?php echo date("Y-m-d"); ?> id="datepicker" class="form-control" placeholder="Date of Reservation" required="required">

                    <br>
                    
                    <label>Time In</i></label>
                    <select name="timein" class="form-control" required="required">
                      <option value="" selected disabled>----Select Time Reservation----</option>
                      <option value="1:30">1:30 PM</option>
                      <option value="2:00">2:00 PM</option>
                      <option value="2:30">2:30 PM</option>
                      <option value="3:00">3:00 PM</option>
                      <option value="3:30">3:30 PM</option>
                      <option value="4:00">4:00 PM</option>
                      <option value="4:30">4:30 PM</option>
                      <option value="5:00">5:00 PM</option>
                      <option value="5:30">5:30 PM</option>
                      <option value="6:00">6:00 PM</option>
                      <option value="6:30">6:30 PM</option>
                      <option value="7:00">7:00 PM</option>
                      <option value="7:30">7:30 PM</option>
                      <option value="8:00">8:00 PM</option>
                      <option value="8:30">8:30 PM</option>
                      <option value="9:00">9:00 PM</option>
                      <option value="9:30">9:30 PM</option>
                      <option value="10:00">10:00 PM</option>
                      <option value="10:30">10:30 PM</option>
                      <option value="11:00">11:00 PM</option>
                    </select>

                    <br>

                    <label>Mobile Number</label>
                    <input type="number" name="active_no" class="form-control" placeholder="Must Input Active Mobile Number" required="required">
                    
                    <br>
                    
                    <p><button type="submit" class="btn btn-success" onclick="myBooking()">Book</button></p>
                    <p><button class="btn btn-danger"()">Cancel</button></p>

                </div>
              </div>
          </form>
      </div>


</body>
</html>