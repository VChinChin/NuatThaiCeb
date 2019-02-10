<?php 
session_start();

require('header.php');

if($_POST){
	$username = $_POST['username'];
	$password = $_POST['password'];

		$result = $conn->query("SELECT * FROM users WHERE username ='{$username}' AND password = '{$password}'");

		if ($result->num_rows > 0){
	
		$users = $result->fetch_assoc();

		$_SESSION['profile'] = $users;

		if($users['user_type'] == 'admin'){
			header('Location: admin-profile.php');
		}else{
		   	header("Location: customers.php?id={$users['id']}");
		}

		}else{
		$_SESSION['loginError'] = 'Invalid username or password';
		header('location: login.php');
}}
 ?>