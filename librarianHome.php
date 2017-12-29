<!DOCTYPE html>
<html lang="en">
<head>
	<title>PLTCI Admin</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/admin.css">
	<link rel="stylesheet" href="assets/css/navbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="sbody">
	<div class="container">
		<img src="pictures/PLTlogo.png" align="left"/>
		<div class="container"><br />
			<b style="padding:5px; font-size:1.125em;">PLT College</b>
			<i>Library</i>
			<div class="pull-right" style="margin-top:30px;">
				<b>Welcome <?php session_start(); echo ucfirst(strtolower($_SESSION['user']));
						if($_SESSION['accountType']!="LIBRARIAN"){
							header('location:processLogin.php');
							}

					?> !</b><abbr title="Account Settings"><a href="#"><span style="font-size:19px; padding:0px 1px;" class="pull-right showopacity glyphicon glyphicon-cog"></span></a></abbr></div>
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
				<li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li><b class="navbar-brand" style="color:#FFFFFF;"><em>Settings </em><span style="font-size:16px;" class=" hidden-xs showopacity glyphicon glyphicon-cog"></span></b></li>
				<li><a href="#">Borrowing Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
				<li><a href="#">Penalty Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-exclamation-sign"></span></a></li>
				<li><a href="#">Edit or Remove Book<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>
				<li class="dropdown">
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
	<div class="container"><!--<div class="vertical-line" style="height:628.5px;"></div>-->
		<div class="row">
			<div class="col-sm-8">
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">1</span>
							<img src="pictures/reserved.jpg" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Reserved Books</div>
				</div>
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">2</span>
							<img src="pictures/borrowed.png"  alt="" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Borrowed Book</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">3</span>
							<img src="pictures/return.png"  alt="" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Return Book</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">4</span>
							<img src="pictures/acquire.jpg"  alt="" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Acquire Book</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">5</span>
							<img src="pictures/report.png"  alt="" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Reports</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">6</span>
							<img src="pictures/Weeding.jpg"  alt="" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Weed</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">7</span>
							<img src="pictures/Penalty.png"  alt="" class="imagesize" />
						</a>
					</div>
					<div class="pictureTitle">Penalty</div>
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