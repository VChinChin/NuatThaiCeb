<?php 
require("header.php");

if ($_POST){

	$users_id = $_POST['users_id'];
	$services_id = $_POST['services_id'];
	$therapists_id = $_POST['therapists_id'];
	$dor = $_POST['dor'];
	$timein = $_POST['timein'];
	$active_no = $_POST['active_no'];

	$check_sql = "SELECT * FROM bookings WHERE dor ='{$dor}' AND therapists_id ='{$therapists_id}'";
	if($result = mysqli_query($conn, $check_sql)){
		$row=mysqli_fetch_assoc($result);
		if($row['timein'] === $timein){
			echo "<script language='javascript'>";
			echo "alert('Booking Already Exist! Try another reservation!'); location.href='admin-appointments.php'";
			echo "</script>";

		}else{

		$sql = "INSERT INTO bookings (users_id, services_id, therapists_id, dor, timein, active_no) 
			VALUES ('{$users_id}', '{$services_id}', '{$therapists_id}', '{$dor}', '{$timein}', '{$active_no}')";
			
			$result2 = mysqli_query($conn,$sql);
			
			echo "<script language='javascript'>";
			echo "alert('Successful reservation!!'); location.href='admin-appointments.php'";
			echo "</script>";
		}
	}
}

?>