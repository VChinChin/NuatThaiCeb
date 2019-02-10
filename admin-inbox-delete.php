<?php 
require("header.php");

$messages_id = $_GET['messages_id'];
$sql = "DELETE FROM messages WHERE messages_id='{$_GET['messages_id']}' ";
$result = mysqli_query($conn, $sql);

	header("location: admin-inbox.php".$_POST['messages_id']);
?>