<?php
	include 'connect.php';
	$name=$_REQUEST['name'];
	$type=$_REQUEST['type'];
	$brand=$_REQUEST['brand'];
	$descr=$_REQUEST['descr'];
	$cost=$_REQUEST['cost'];
	$image=$_FILES['image']['name'];
	//echo $name.$type.$image;
	$query="INSERT INTO p_info(name,type,brand,descr,cost,image) values('$name','$type','$brand','$descr','$cost','$image');";
	if(!mysqli_query($conn,$query))
	{
		echo "failed";
	}
	else
	{
		echo "success";
	}
	include 'panel.php';


?>