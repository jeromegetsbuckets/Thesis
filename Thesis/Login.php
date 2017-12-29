<!DOCTYPE html>
<html lang="en">
<head>
	<title>PLTCI Log-in</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="assets/css/navbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body class="sbody">
	<div class="container">
		<img src="pictures/PLTlogo.png" align="left"/>
		<div class="container"><br /	>
			<b style="padding:5px; font-size:1.125em;">PLT College</b>
			<i>Library</i>
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
						<li><a href="home.html">Home</a></li>
						<li><a href="#">OPAC</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li  class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				</div>
			</div>
		</div>
	</nav>
	


    
	<div class="container">
		<div class="row">
			<div class="card card-container">
			<img id="profile-img" class="profile-img-card" src="pictures/loginavatar.png" />
			<p id="profile-name" class="profile-name-card"></p>
			<form class="form-signin" method="POST" action="processLogin.php">
				<input type="username" id="inputUsername" class="form-control" name="username" placeholder="Username" required autofocus>
				<input type="password" id="inputPassword" class="form-control" name="password"placeholder="Password" required>
				<button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Log-in</button>
			</form><!-- /form -->
			</div>
		</div><!-- /card-container -->
	</div><!-- /container -->

<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>