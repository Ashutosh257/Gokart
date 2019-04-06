<?php
	session_start();
	include 'connect.php';
	//session_start();
	$user=$_POST['username'];
	$pass=$_POST['password'];
	//$con=mysqli_connect('localhost','root','','review');
	if(!$conn)
		die(mysqli_error($conn));
	else
	{
		$res=mysqli_query($conn,"select * from user_info where name='$user' AND password='$pass';");
		$rows=mysqli_fetch_array($res);
		$count=mysqli_num_rows($res);
		if($count==1)
		{	
			//session_start();
			$_SESSION['uid']=$rows['uid'];
			$_SESSION['username']=$rows['name'];
			$_SESSION['password']=$rows['password'];
			header("Location:index.php");
		}
		else
		{
			//session_start();	
			echo "INVALID!";
			session_destroy();
		}
	}
?>