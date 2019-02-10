<?php 

require("header.php");

$sql = "UPDATE therapists SET firstname='{$_POST['firstname']}', 
							lastname='{$_POST['lastname']}',
							mobile_no='{$_POST['mobile_no']}'
							WHERE therapists_id={$_POST['therapists_id']} ";

$result = mysqli_query($conn, $sql);

if($result){
	header("location: admin-therapists-update.php?therapists_id=".$_POST['therapists_id']);
}else{
	echo mysqli_error($conn);
}