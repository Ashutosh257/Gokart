<!DOCTYPE html>
<html>
<head>
	<title>GoReviews</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
	
		$(window).ready(function(){
			setTimeout(function(){
				$('#myModal').modal('show');
			},5000);
			});
	
	</script>
	<style type="text/css">
		.item{
			height: 80vh;
			width: 100%;
		}
	</style>
</head>
<body>
	<!--modal-->
	<div class="container">  
	<!-- Modal --> 
	<div class="modal fade" id="myModal" role="dialog"> 
		<div class="modal-dialog"> 
	<!-- Modal content--> 
	<div class="modal-content"> 
		<div class="modal-header"> 
			<button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Subscribe Us</h4> </div> 
			<div class="modal-body">
			<form action='subscribe.php' method="GET">
			<input type="text" placeholder="email" name='email' id="email" class="form-control" />
			<br>
			<button class="btn btn-success" class="form-control">Subscribe</button>
			 
			 </form> 
                </div>
			 <div class="modal-footer"> 
			 	<button type="button" class="btn btn-default" data-dismiss="modal">Close
			 	</button> </div>
			 	 </div> 
	 
	</div> 
</div> 
</div>
	<!---->
	<!--Navbar-->
		<?php
			include 'header.php';
		?>
	<!--navbar-->
<!--corousel-->
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="parallax/og.png" alt="Mobiles" style="width:100%;">
        <div class="carousel-caption">
          <h3>MOBILES</h3>
        </div>
      </div>

      <div class="item">
        <img src="parallax/Camera.jpg" alt="Camera" style="width:100%;">
        <div class="carousel-caption">
          <h3>CAMERA</h3>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
    
</div>
    
    
    
<!--corousel-->
<div class="footer">
  <p>© cJ☺</p>
</div>
</body>
</html>