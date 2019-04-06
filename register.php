<?php
	include 'connect.php';
	$name=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

	$query="INSERT INTO user_info (name,email,password) VALUES ('$name','$email','$password');";
	if(!mysqli_query($conn,$query))
	{
		echo "failed";
	}
	else
	{
		echo "success";
		header("Location:userlogintest.html");
	}
?>