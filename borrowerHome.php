<!DOCTYPE html>
<html lang="en">
<head>
	<title>PLTCI Home</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/index.css">
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
						if($_SESSION['accountType']== "STUDENT"||$_SESSION['accountType']== "FACULTY"||$_SESSION['accountType']== "ADMIN"){}
							else{
							header('location:processLogin.php');
							}

					?>
					!</b><abbr title="Account Settings"><a href="#"><span style="font-size:19px; padding:0px 1px;" class="pull-right showopacity glyphicon glyphicon-cog"></span></a></abbr></div>
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
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">OPAC</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="processLogout.php"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
				</ul>
				</div>
			</div>
		</div>
	</nav>
	
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="pictures/Library1.jpg" alt="Pltci" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="pictures/Library2.jpg" alt="Library" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="pictures/Library3.jpg" alt="school" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
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
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align:center;font-weight:bold;">Mission</div>
			<div class="panel-body">
				<input type="checkbox" class="read-more-state" id="post-1" />
				<ul class="read-more-wrap"><li><p>The college library is the repository and gateway for information required to advance the academic and research programs at all levels. It is an integral component of a campus of importance, actively pursuing institutional and external support to provide leading edge information services. In collaboration with the diverse academic community, the library anticipates campus information needs and provides resources through critical selection and efficient delivery systems. The library participates in the educational process, providing instruction for information literacy and life-long learning.</p></li>
			<li><p>The library is also a partner within the institutional system, developing a world class information access <span class="read-more-target">program to meet the expanding need of all.The library is a major contributor to the PLT College System through its unique collectios and services. It also shares in the resources of other libraries through coordinated programs for access and collections development.</span></p></li></ul><label for="post-1" class="read-more-trigger"></label>
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align:center;font-weight:bold;">Vision</div>
			<div class="panel-body">
					<p>The library is a full partnerin the educational mission of the institution. As modes of information availability and delivery evolve, the library provides access to these through on-site and remote collections. The library's instructional activities include greater collaboration with acadenmic departments to integrate information resources directly into the learning process.</p>
	
	<p>This vision will require intensified sharing of print resources, databases, and technology with cooperation and partnerships among libraries, publishersand users. Library personnel will offer flexible responses to the rapid and dramatic changes in patterns of information access. Library facilities will be expanded and upgraded to provide space and equipment for efficient access to all information resources, regardless of location.</p>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align:center; font-weight:bold;">History</div>
			<div class="panel-body">
	<input type="checkbox" class="read-more-state" id="post-2" />
	<ul class="read-more-wrap"><li><p>PLT College, Inc. is a non-stock, non-profit and non-sectarian educational institution administered by its Board of Trustees.</p>
	
	<li><p>PLT College, Inc. started as PLT Computer and Technical Services on September 1989. The founder and the first chairman of the Board of Trustees was Engr. Purisimo L. Tiam, a visionary man and a computer enthusiast. Mrs. Maria Nonette O. Tiam, his very supportive wife became the first President.
	</p>
	
	<li><p>Barely nine (9) months after it was granted by the Department of Education, Culture, and Sports (DECS) permit to operate as a school and was named PLT Computer Technical School, it offered <span class="read-more-target">two-year courses, namely, Management Information System Analysis and Design (MISAD) and the Computer Operation Specialist Course (COSC). Gradually, more courses were introduced: two–year Software Development Course (SDC) on June 1991 and two–year Computer Secretarial Course (ECSC) on October 1991.</p></li>
	
	<li class="read-more-target"><p>The following year, it was granted by the DECS the authority to operate as a College by the Technical Team composed of Dr. Roger Perez, CHED Commissioner, Dr. Liduvina Reyes, CHED Director, Dr. Evelyn Pascua, Chief, Education Supervisor, Dr. Antonio Pascual, and Dr. Antonio Talamayan. On October 1991, the college was duly registered with the Securities and Exchange Commission (SEC) as PLT College, Inc. and was approved on January 27, 1992.</p></li>
	
	<li class="read-more-target"><p>Several programs were offered thereafter: Associate in Police Science Course (APSC) from 1994 up to 1998, BS in Computer Science (BSCS) in 1994, BS in Hotel and Restaurant Management (BSHRM) in1995, BS in Criminology (BS Crim) in1996; BS in Commerce (BSC) in 1998, BS in Office Administration (BSOA) in 1999, Bachelor in Secondary Education (BSEd) and Bachelor in Elementary Education (BEEd) in 2000, BS in Business Administration (BSBA) in 2001, BS in Nursing (BSN) in 2003, Graduate in Midwifery in 2005, Bachelor of Science in Radiologic Technology (BSRT), Nursing Attendant and Caregiver Program in 2006.</p></li>
	
	<li class="read-more-target"><p>In SY 2010-2011, the Board of Trustees with the endorsement of the President approved the recommendation to offer the following degree programs: Bachelor of Science in Biology (BSBio), Bachelor of Science in Pharmacy (BSPh), Bachelor of Science in Medical Technology (BSMT), Bachelor of Science in Entrepreneurship (BS Entrep), Bachelor of Science in Midwifery (BSMid), Bachelor of Science in Tourism Management (BSTM), and Bachelor of Arts (AB) in Political Science with specialization in International Relations. Permit to offer AB Mass Com. was granted in SY 2011-2012. All these programs were granted Government Recognition in 2013. The Accountancy and Accounting Technology Programs were given Levels I and II Government Permit to operate in the same year.</span></p></li></ul><label for="post-2" class="read-more-trigger"></label>
			</div>
		</div>
	</div>
	
	


<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>