<?php 
require("header.php");

if($_POST){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $mobile_no = $_POST['mobile_no'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $cpassword = $_POST['cpassword'];

            if($_POST['password'] != $_POST['cpassword']){
                
                 $_SESSION['loginError'] = 'Passwords do not match!';

                header('Location: register.php');
                exit;
            }

            $result = $conn->query("SELECT username from users where username = '{$username}'");

            if($result->num_rows){
                $_SESSION['loginError'] = 'Username already exist!';
                header('Location: register.php');
                exit;
			}

$sql = "INSERT INTO users
		(firstname, lastname, address, dob, gender, mobile_no, email, username, password)
		VALUES
		('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['address']}','{$_POST['dob']}','{$_POST['gender']}','{$_POST['mobile_no']}','{$_POST['email']}','{$_POST['username']}','{$_POST['password']}')";

		$result = mysqli_query($conn,$sql); //pass string to mysql

		if($result==true){
			header("location: login.php");
		}else{
			echo mysqli_error($conn);
		}
	}
 ?>