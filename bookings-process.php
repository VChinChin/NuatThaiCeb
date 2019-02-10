<?php 
require("header.php");

if ($_POST){
 
	$users_id = $_SESSION['profile']['id'];
	$services_id = $_POST['services_id'];
	$therapists_id = $_POST['therapists_id'];
	$dor = $_POST['dor'];
	$timein = $_POST['timein'];
	$active_no = $_POST['active_no'];

	
	$check_sql = "SELECT * FROM bookings WHERE dor ='{$dor}' AND therapists_id ='{$therapists_id}' order by bookings_id desc";
	if($result = mysqli_query($conn, $check_sql)){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		// print_r(strtotime($timein));
		// die();
		if($row['therapists_id'] == $therapists_id AND $row['dor'] == $dor AND strtotime($timein) <= strtotime($row['timeout']) AND strtotime($row['timeout']) >= strtotime($timein) ){
			echo "<script language='javascript'>";
			echo "alert('Booking conflict! pangita ug lain time ug date'); location.href='bookings.php'";
			echo "</script>";

		}else{
			$getTimeout = "SELECT ADDTIME('{$timein}', services_dur) as timeout FROM services WHERE services_id = '{$services_id}'";
			$result = mysqli_query($conn, $getTimeout);
			$bookingTimeout=mysqli_fetch_array($result,MYSQLI_ASSOC);
			// print_r($bookingTimeout);
			// die();

		$timeout = $bookingTimeout['timeout'];
		$sql = "INSERT INTO bookings (users_id, services_id, therapists_id, dor, timein, timeout, active_no) 
			VALUES ('{$users_id}', '{$services_id}', '{$therapists_id}', '{$dor}', '{$timein}', '{$timeout}', '{$active_no}')";
			
			$result2 = mysqli_query($conn,$sql);

			if(!$result2) {
				echo 'asd';
			}
			
			echo "<script language='javascript'>";
			echo "alert('Successful reservation!!'); location.href='bookings.php'";
			echo "</script>";
		}
	}
}

?>