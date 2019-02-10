<?php
session_start();
if(!isset($_SESSION['profile']) && $_SESSION['profile'] != 'users'){
	header("location: login.php");
}
$conn = mysqli_connect("localhost", "root", "", "masahe");

/* check connection */
if(!$conn){
	echo "Failed to connect to database or mysql!";
	exit();
}