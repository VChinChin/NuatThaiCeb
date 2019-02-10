<?php 

$filename = NULL;
if(isset($_FILES['ePhoto']) && count($_FILES['ePhoto'] > 3)){
if($_FILES['ePhoto']['type']=="image/png" || $_FILES['ePhoto']['type'] == "image/jpeg"){
	if($_FILES['ePhoto']['size'] <= 1000000){
		$filename = $_POST['id']."_".$_FILES['ePhoto']['name'];
		move_uploaded_file($_FILES['ePhoto']['tmp_name'],"images/".$filename);
	}else{
		echo "IMAGE TOO LARGE!";
	}
}
}

require("header.php");

$sql = "UPDATE users SET firstname='{$_POST['firstname']}', 
							lastname='{$_POST['lastname']}',
							address='{$_POST['address']}',
							mobile_no='{$_POST['mobile_no']}',
							email='{$_POST['email']}' ";							

if($filename != NULL){
	$sql .= " ,photo='{$filename}' "; //optional for inserting image
}


$sql .= " WHERE id={$_POST['id']} ";

$result = mysqli_query($conn, $sql);

if($result){
	header("location: customers.php?id={$_POST['id']}");
}else{
	echo mysqli_error($conn);
}