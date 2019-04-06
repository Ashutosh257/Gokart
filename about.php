<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style type="text/css">
		img{
			max-height:250px;
			max-width: 250px;
			box-shadow: 5px 5px 5px;
		}
		
	</style>
</head>
<body>
<?php
	include 'header.php';
?>

<!--script>
		
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        myFunction(this);
		    }
		};
		xmlhttp.open("GET", "about.xml", true);
		xmlhttp.send();

	function myFunction(xml) {
	  var i;
	  var xmlDoc = xml.responseXML;
	  var table="<table class='table' border='1'><tr class='active'><th>Roll Num.</th><th>Name</th><th>Sr.No.</th><th>Faculty</th></tr>";
	  var x = xmlDoc.getElementsByTagName("student");
	  for (i = 0; i <x.length; i++) { 
	    table += "<tr><td>" +
	    x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue +
	    "</td><td>" +
	    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
	    "</td><td>" +
	    x[i].getElementsByTagName("Sr_No")[0].childNodes[0].nodeValue +
	    "</td><td>" +
	    x[i].getElementsByTagName("faculty")[0].childNodes[0].nodeValue +
	    "</td></tr>";
	  }
	  table+="</table>";
	  document.getElementById("demo").innerHTML = table;
	}
</script-->
<div class="container-fluid">
<div class="row">

	<div class="col-md-4 w3-animate-left" style="text-align: center;">
		<img src="images/vakky.jpeg" class="img-circle"><br><br>
		<button data-toggle="collapse" class="btn btn-info btn-lg" data-target="#demo1">DBA</button>
		<div id="demo1" class="collapse">
		  <h1>Vaibhav Dholam</h1>
		  <p>Vaibhav aka Vakky, Database administrator of GoKart is well known for his skills 
		</div>
	</div>

	<div class="col-md-4 w3-animate-top" style="text-align: center;">
		<img src="images/cj.jpeg" class="img-circle"><br><br>
		<button data-toggle="collapse" class="btn btn-info btn-lg" data-target="#demo2">CEO</button>
		<div id="demo2" class="collapse">
		    <h1>Jayesh Chavan</h1>
		    <p>CEO of GoKart Jayesh aka CJ is the brain behind this project</p>
		</div>
	</div>
	
	<div class="col-md-4  w3-animate-right" style="text-align: center;">
		<img src="images/ashu.jpeg" class="img-circle"><br><br>
		<button data-toggle="collapse" class="btn btn-info btn-lg" data-target="#demo3">CTO</button>
		<div id="demo3" class="collapse">
		    <h1>Ashutosh Bhujbal</h1>
		    <p>Implementaion done by the Ashutosh is remarkable</p>
		</div>
	</div>

</div>
<br><hr><br>

<div class="row container-fluid" style="margin-bottom: 30px">
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Our Aim:<span class="	glyphicon glyphicon-zoom-in"></span></button>
<div id="demo" class="container-fluid collapse">
	<script>
		
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        myFunction(this);
		    }
		};
		xmlhttp.open("GET", "about.xml", true);
		xmlhttp.send();

	function myFunction(xml) {
	  
	  var xmlDoc = xml.responseXML;
	  
	  var x = xmlDoc.getElementsByTagName("student");
	  var i=0;
	  document.getElementById("demo").innerHTML = "<h3 class='w3-serif'><span class='glyphicon glyphicon-ok'></span>" + x[i].getElementsByTagName("desc")[0].childNodes[0].nodeValue+"<br><span class='glyphicon glyphicon-ok'></span>"+x[0].getElementsByTagName("aim")[0].childNodes[0].nodeValue+"</h3>";
	}
	</script>
</div>

</div>

<div class="row" style="margin-bottom: 100px">
	<div class="col-md-4 w3-card-4">

	<header class="w3-container w3-blue">
	  <h1>Contact Us:</h1>
	</header>

	<div class="w3-container">
	  <p>Email:chavanjayesh63@gmail.com</p>
	</div>
	</div>
</div>

<div class="footer">
  <p>© cJ☺</p>
</div>
</div>
</body>
</html>
