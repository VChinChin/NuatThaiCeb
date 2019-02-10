<?php 
require("header.php");

if($_POST){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $mobile_no = $_POST['mobile_no'];

            header('Location: admin-staffs.php');

$sql = "INSERT INTO therapists
		(firstname, lastname, gender, mobile_no)
		VALUES
		('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['gender']}','{$_POST['mobile_no']}')";

		$result = mysqli_query($conn,$sql); //pass string to mysql

		if($result==true){
			header("location: admin-therapists.php");
		}else{
			echo mysqli_error($conn);
		}
    }
 ?>