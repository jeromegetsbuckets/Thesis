<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	session_start();
	if($_SESSION['accountType']== "STUDENT"||$_SESSION['accountType']== "FACULTY"||$_SESSION['accountType']== "ADMIN"){}
	else{
		header('location:processLogin.php');
		}
?>
	<title>PLTCI Student Homepage</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" href="assets/css/navbar.css">
	<link rel="stylesheet" href="assets/css/OPAC.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body class="sbody">
	<div class="container">
		<img src="pictures/PLTlogo.png" align="left"/>
		<div class="container"><br />
			<b style="padding:5px; font-size:1.125em;">PLT College</b>
			<i>Library</i>
			<div class="pull-right" style="margin-top:30px;">
					<b>Welcome 
					<?php 
					echo ucfirst(strtolower($_SESSION['user']));
					?>!</b><abbr title="Account Settings"><a href="#"><span style="font-size:19px; padding:0px 1px;" class="pull-right showopacity glyphicon glyphicon-cog"></span></a></abbr></div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-inverse navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#"><b class="navbar-brand">PLT College Inc.</b></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav" style="font-weight:bold;">
						<li><a href="borrowerHome.php">Home</a></li>
						<li class="active"><a href="#">OPAC</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.html"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
				</ul>
				</div>
			</div>
		</div>
	</nav>
	
<div align="center">
	<div class="container"><!--<div class="vertical-line" style="height:628.5px;"></div>-->
		<div class="row">
			<div class="card card-container">
				<div class="panel panel-primary">
					<div class="panel-heading" style="text-align:center;font-weight:bold;font-size:1.125em;">Online Public Access Catalog</div>
						<div class="panel-body">
						<form type="post" action="#">
							 
							<input type="text" class="search form-control input-lg" placeholder="Book Title">
							<select style="height:35px;" name="course" class="andor form-control input-lg">
								<option value="or">Or</option>
  								<option value="and">And</option>
							
							</select>
               				<input type="text" class="author form-control input-lg" placeholder="Book Author" >
							
							<select style="height:35px;" name="materialtype" class="drpdwn form-control input-lg">
								<option selected disabled hidden style='display: none;' value=''>Material Type</option>
								<option value="book">Book</option>
  								<option value="magazine">Magazine</option>
							</select>
							
							<select style="height:35px;" name="section" class="drpdwn form-control input-lg">
								<option selected disabled hidden style='display: none;' value=''>Section</option>
  								<option value="circulation">Circulation</option>
								<option value="filipiniana">Filipiniana</option>
								<option value="reference">Reference</option>
								<option value="periodicals">Periodicals</option>
								<option value="thesis">Thesis</option>
							</select>
							<button class="pull-right btn btn-success">Search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	
	


<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>