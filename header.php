<?php
session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
<style type="text/css">
  ul li{
      font-size: 20px;
    }
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span><img src="images/go.jpg" height="50px" width="90px"></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mobile.php">MOBILES</a></li>
            <li><a href="camera.php">CAMERA</a></li>
          </ul>
        </li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION['uid'])){
            $str=$_SESSION['username'];
            echo "<li><a>Welcome $str</a>";
            echo "<li><a href='logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a></li>";
          }
        else
            echo "<li><a href='userlogintest.html'><span class='glyphicon glyphicon-user'></span> Login</a></li>";
          ?>
        <li><a href="adminlogin.html"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      </ul>
    </div>
  </div>
</nav>