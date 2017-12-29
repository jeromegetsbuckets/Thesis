<!DOCTYPE html>
<html lang="en">
<?php session_start();
		if($_SESSION['accountType']!="LIBRARIAN"){
			header('location:processLogin.php');
			}
?>
<head>
	<title>PLTCI Student Account Registration</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/admin.css">
	<link rel="stylesheet" href="assets/css/navbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.card-container.card {
		width: 500px;
		padding: 40px 40px;
		margin-left:-200px;
		margin-top:-30px;
	}
</style>
<body class="sbody">
	<div class="container">
		<img src="pictures/PLTlogo.png" align="left"/>
		<div class="container"><br />
			<b style="padding:5px; font-size:1.125em;">PLT College</b>
			<i>Library</i>
			<div class="pull-right" style="padding-top:30px;">
				<b>Welcome 
				<?php 
				echo ucfirst(strtolower($_SESSION['user']));
				?>
						</b><abbr title="Account Settings"><a href="#"><span style="font-size:19px; padding:0px 1px;" class="pull-right showopacity glyphicon glyphicon-cog"></span></a></abbr></div>
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
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="processLogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Settings and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<b class="navbar-brand" style="color:#FFFFFF;"><em>PLT College Inc.</em></b>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="librarianHome.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li><b class="navbar-brand" style="color:#FFFFFF;"><em>Settings </em><span style="font-size:16px;" class=" hidden-xs showopacity glyphicon glyphicon-cog"></span></b></li>
				<li><a href="#">Borrowing Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
				<li><a href="#">Penalty Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-exclamation-sign"></span></a></li>
				<li><a href="#">Edit or Remove Book<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>
				<li class="active" class="dropdown" >
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Create Account <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="librarianRegistration.php">Librarian</a></li>
						<li><a href="studentRegistration.php">Student</a></li>
					</ul>
			</ul>
		</div>
	</div>
</nav> 

<div class="main">
<div align="center">
	<div class="container"><!--<div class="vertical-line" style="height:628.5px;"></div>-->
		<div class="row">
			<div class="card card-container">
				<div class="panel panel-primary">
					<div class="panel-heading" style="text-align:center;font-weight:bold;font-size:1.125em;">Librarian Registration</div>
						<div class="panel-body">
						<form class="sign-in"  method="POST" action="processLibrarianRegistration.php">
							<input type="text" name="username" class="form-control input-lg" placeholder="Username" Autofocus Required style="margin-bottom:10px;"/>
							<input type="password" name="password" class="form-control input-lg" placeholder="Password"  Required><br>
							<input type="text" name="firstname" class="form-control input-lg" placeholder="First Name"  Required><br>
							<input type="text" name="lastname" class="form-control input-lg" placeholder="Last Name"  Required><br>
							<b style="color:red;"><?php
							if(isset($_SESSION['message'])){
							echo $_SESSION['message'];
							unset($_SESSION['message']);
							}
							?></b><br>
							<button class="btn btn-success">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	
<!-- Content Here -->
</div>



<script type="text/javascript">
    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
</script>
<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>