<?php
	include 'connect.php';
	$email=$_REQUEST['email'];
	$feed=$_REQUEST['feed'];

	$query="INSERT INTO feedback(email,feed) values('$email','$feed');";
	if(!mysqli_query($conn,$query))
	{
		echo "failed";
	}
	else
	{
		header('location:feedback.php');
	}
	
?>