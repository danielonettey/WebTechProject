<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Application - Ashesi Admission</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select-country.min.css" />
	<link href="css/styles.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
</head>
<?php
	session_start();
	if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == ''){
		header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views/log_in.php");
		die();
	}

	include_once("../controller/mydatabase.php");
	include_once('../controller/profilecrud.php'); 
	include_once("../controller/application.php");
	

	$database_connection = new Database();
	$db = $database_connection->getconnecion();
	

	$result1 = readall($db);
	$history = readhistory($db);
	?>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php"><span>Ashesi</span> Admission</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box" style="padding-left:10px;">No Message
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
										<em class="fa fa-inbox"></em> <strong>All Messages</strong>
									</a></div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="img/admin.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $result1[1] ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<br>
		<ul class="nav menu">
			<li class="active"><a href="profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
			<li class="active"><a href="application.php"><em class="fa fa-dashboard">&nbsp;</em> My Application</a>
			</li>
			<li class="active"><a href="deadlines.php"><em class="fa fa-calendar">&nbsp;</em> Deadlines & Info</a></li>
			<li class="active"><a href="https://www.ashesi.edu.gh/admissions/welcome.html"><em
						class="fa fa-info-circle">&nbsp;</em> About Us</a></li>
			<li class="active"><a href="https://www.ashesi.edu.gh/admissions/welcome.html"><em
						class="fa fa-comments">&nbsp;</em> FAQs</a></li>
			<li class="active"><a href="contact.php"><em class="fa fa-phone">&nbsp;</em> Contact Us</a></li>
			<li><a href="log_in.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>


	<!-- Success Alert -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="sucess_alert">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Submitted Application  </li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Your application has been submitted!!</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<p class="back-link">Ashesi Admissions by <a href="https://nadeemsfirstchildren.wordpress.com">Nadeem's
						First Children</a></p>
			</div>
		</div>
	</div>




	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
    <script src="js/bootstrap-select-country.min.js"></script>

</body>

</html>