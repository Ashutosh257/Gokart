<!DOCTYPE html>
<html>
<head>
	<title>Mobiles</title>
</head>
<body>

<?php
include "header.php";
include "connect.php";
    
    $query="SELECT * FROM p_info WHERE type='mobile';";
    $result=mysqli_query($conn,$query) or die('failed'.mysql_error($conn));
    $str="";
    while($rows=mysqli_fetch_assoc($result)){
     //echo $_SESSION['uid'];
      $str.="<div class='thumbnail w3-hover-shadow w3-animate-zoom' style='float:left;width:25%;text-align:center;margin-bottom:30px;padding-bottom:30px'>";
      $str.="<image src='images/".$rows['image']."'/>";
      $str.="<br><font size='5'><a href='descr.php?pid=".$rows['pid']."'/>".$rows['name'];
      $str.="</font></div>";
    }
    echo $str;
?>
<div class="footer">
  <p>© cJ☺</p>
</div>
</body>
</html>