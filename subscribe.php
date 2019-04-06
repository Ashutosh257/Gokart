<?php
	include 'connect.php';
	$email=$_REQUEST['email'];

	$query="INSERT INTO subscribe(email) values('$email');";
	
	if(!mysqli_query($conn,$query))
	{
		echo "failed";
	}
	else
	{
		header('location:index.php');
	}
?>