<!DOCTYPE html>
<html lang="en">
<head>
	<title>PLTCI Home</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<style>
	.sbody{
		background-image:url("assets/css/background.jpg");
	}
	
	    body,html{
		height: 100%;
	}

		/* remove outer padding */
	.main .row{
		padding: 0px;
		margin: 0px;
	}

	/*Remove rounded coners*/

	nav.sidebar.navbar {
		border-radius: 0px;
	}

	nav.sidebar, .main{
		-webkit-transition: margin 200ms ease-out;
	    -moz-transition: margin 200ms ease-out;
	    -o-transition: margin 200ms ease-out;
	    transition: margin 200ms ease-out;
	}

	/* Add gap to nav and right windows.*/
	.main{
		padding: 10px 10px 0 10px;
	}

	/* .....NavBar: Icon only with coloring/layout.....*/

	/*small/medium side display*/
	@media (min-width: 768px) {

		/*Allow main to be next to Nav*/
		.main{
			position: absolute;
			width: calc(100% - 40px); /*keeps 100% minus nav size*/
			margin-left: 40px;
			float: right;
			
		}

		/*lets nav bar to be showed on mouseover*/
		nav.sidebar:hover + .main{
			margin-left: 200px;
		}

		/*Center Brand*/
		nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			margin-left: 0px;
		}
		/*Center Brand*/
		nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
			text-align: center;
			width: 100%;
			margin-left: 0px;
		}

		/*Center Icons*/
		nav.sidebar a{
			padding-right: 13px;
		}

		/*adds border top to first nav box */
		nav.sidebar .navbar-nav > li:first-child{
			border-top: 1px #e5e5e5 solid;
		}

		/*adds border to bottom nav boxes*/
		nav.sidebar .navbar-nav > li{
			border-bottom: 1px #e5e5e5 solid;
		}

		/* Colors/style dropdown box*/
		nav.sidebar .navbar-nav .open .dropdown-menu {
			position: static;
			float: none;
			width: auto;
			margin-top: 0;
			background-color: transparent;
			border: 0;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		/*allows nav box to use 100% width*/
		nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
			padding: 0 0px 0 0px;
		}

		/*colors dropdown box text */
		.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
			color: #777;
		}

		/*gives sidebar width/height*/
		nav.sidebar{
			width: 200px;
			height: 100%;
			margin-left: -160px;
			float: left;
			z-index: 8000;
			margin-bottom: 0px;
		}

		/*give sidebar 100% width;*/
		nav.sidebar li {
			width: 100%;
		}

		/* Move nav to full on mouse over*/
		nav.sidebar:hover{
			margin-left: 0px;
		}
		/*for hiden things when navbar hidden*/
		.forAnimate{
			opacity: 0;
		}
	}

	@media (min-width: 1330px) {

		/*Allow main to be next to Nav*/
		.main{
			width: calc(100% - 200px); /*keeps 100% minus nav size*/
			margin-left: 200px;
		}

		/*Show all nav*/
		nav.sidebar{
			margin-left: 0px;
			float: left;
		}
		/*Show hidden items on nav*/
		nav.sidebar .forAnimate{
			opacity: 1;
		}
	}

	nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
		color: #CCC;
		background-color: transparent;
	}

	nav:hover .forAnimate{
		opacity: 1;
	}
	section{
		padding-left: 15px;
	}
	
	.notif-icon {
    position:relative;
    padding-top:20px;
    display:inline-block;
	padding-left:40px;
}
.notify-badge{
    position: absolute;
    right:-20px;
    top:10px;
    background:red;
    text-align: center;
    border-radius: 10px 10px 160px 160px;
    color:white;
    padding:10px 11px;
    font-size:25px;
}
	
.imagesize{
	height:120px;
	width:120px;
	text-align:center;
}	
	
</style>
<body class="sbody">
	<div class="container">
		<img src="PLTlogo.png" align="left"/>
		<div class="container"><br />
			<b style="padding:5px; font-size:1.125em;">PLT College</b>
			<i>Library</i>
		</div>
	</div>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<b class="navbar-brand">PLT College Inc.</b>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav" style="font-weight:bold;">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">OPAC</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
			<div class="navbar-brand" style="color:#FFFFFF;">Settings <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></div>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#">Borrowing Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
				<li><a href="#">Penalty Settings<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-exclamation-sign"></span></a></li>
				<li><a href="#">Edit or Remove Book<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Create Account <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">Admin</a></li>
						<li><a href="#">Student</a></li>
					</ul>
			</ul>
		</div>
	</div>
</nav>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">1</span>
							<img src="reserved.jpg"  alt="" class="imagesize" />
						</a>
						
					</div>
				</div>
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">2</span>
							<img src="borrowed.png"  alt="" class="imagesize" />
						</a>
					</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">3</span>
							<img src="return.png"  alt="" class="imagesize" />
						</a>
					</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">4</span>
							<img src="acquire.jpg"  alt="" class="imagesize" />
						</a>
					</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">5</span>
							<img src="report.png"  alt="" class="imagesize" />
						</a>
					</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">6</span>
							<img src="Weeding.jpg"  alt="" class="imagesize" />
						</a>
					</div>
				</div>
				
				<div class="notif-icon">
					<div class="panel panel-primary">
						<a href="#">
							<span class="notify-badge">7</span>
							<img src="penalty.png"  alt="" class="imagesize" />
						</a>
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