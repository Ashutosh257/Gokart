<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	
</head>
<body>
	<?php
	include "header.php"
	?>
	<div class="col-md-12" style="text-align: left">
		<div class="panel panel-default"> 
		<div class="panel-heading"><h3>Feedback Form</h3></div> 
		<div class="panel-body">
			<form role="form" action="feed.php"> <div class="form-group"> 
			<label for="email">Email:</label> 
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			</div> <div class="form-group"> <label for="pwd">Feedback:</label> 
			<input type="text" class="form-control" name="feed" id="feed" placeholder="tell us your experience" maxlength="100"> </div> 
			<div class="panel-footer"><button class="btn btn-info">Submit</button></div> 
			</form>  
		</div> 
		 
		</div>
	</div>
	<div class="footer">
  <p>© cJ☺</p>
</div>
</body>
</html>