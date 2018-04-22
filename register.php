<?php

	include 'db_manage.php';

	$conn = OpenCon();

	//echo "Connected";

	$new_uid=$_POST['new_uid'];
	$new_password = $_POST['new_pwd'];


	$sql = "INSERT INTO login_details (userid,password) VALUES ('$new_uid','$new_password')";

	if(mysqli_query($conn,$sql)){
		include 'registration_complete.html';
	}

	else{
		include 'error_registration.html';
	}

	CloseCon($conn);

?>