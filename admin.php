<?php
	include 'connect.php';
	session_start();
	$user=$_POST['username'];
	$pass=$_POST['password'];
	//$con=mysqli_connect('localhost','root','','review');
	if(!$conn)
		die(mysqli_error($conn));
	else
	{
		$res=mysqli_query($conn,"select name,password from admin_info where name='$user' AND password='$pass';");
		$rows=mysqli_fetch_array($res);
		$count=mysqli_num_rows($res);
		if($count==1)
		{	
			header("Location:panel.php");
		}
		else
		{	
			echo "<a href='adminlogin.html'>U r not admin!!</a>";
			//sleep(5);
		}
	}
?>