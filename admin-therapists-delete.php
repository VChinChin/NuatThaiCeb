<?php 
require("header.php");

$therapists_id = $_GET['therapists_id'];
$sql = "DELETE FROM therapists WHERE therapists_id='{$_GET['therapists_id']}' ";
$result = mysqli_query($conn, $sql);

	header("location: admin-therapists.php".$_POST['therapists_id']);
?>