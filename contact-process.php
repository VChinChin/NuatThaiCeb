<?php 
require("header.php");

    if($_POST){

    	$users_id = $_SESSION['profile']['id'];
        $message = $_POST['message'];
        $email = $_SESSION['profile']['email'];
        // die($message);

        $result = $conn->query("INSERT INTO messages (users_id, email, message) values ('{$users_id}', '{$email}', '{$message}')");
    }

    header("location: contact.php");
 ?>