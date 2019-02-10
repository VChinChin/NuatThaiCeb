<?php 
require("header.php");

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='{$_GET['id']}' ";
$result = mysqli_query($conn, $sql);

	header("location: admin-customers.php".$_POST['id']);
?>