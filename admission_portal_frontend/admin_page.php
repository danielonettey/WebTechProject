<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ashesi Admission</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

</head>

<body>
<?php
	session_start();
	if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == ''){
		header("Location: http://localhost/WebTechProject/admission_portal_frontend/log_in.php");
		die();
	}

	include_once("../backend/mydatabase.php");
	include_once('../backend/profilecrud.php'); 
	

	$database_connection = new Database();
	$db = $database_connection->getconnecion();
	

	
	$result = readall($db);

	?>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="admin_page.php"><span>Ashesi</span> Admission</a>
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
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<br>
		<ul class="nav menu">
			<li class="active"><a href="admin_page.php"><em class="fa fa-dashboard">&nbsp;</em>Applications </a></li>
			<li><a href="../backend/Users/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Applications</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome Admin</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Submitted applications
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span>
					</div>

					<div class="panel-body">
						<div class="col-md-12 no-padding">
							<div class="row progress-labels">
								<div class="col-sm-6">
									<h3><?php echo $result[1] ?>'s Application</h3>
								</div>
								<div class="col-sm-6" style="text-align: right;">
									<h3>40%</h3>
								</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 40%;" class="progress-bar progress-bar-blue"
									role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-12 buttonCont">
									<a href="admin_app_det.php">View Application</a>
								</div>
							</div>
						</div>
						<div class="row progress-labels">
								<div class="col-sm-6">
									<h3><?php echo $result[1] ?>'s Application</h3>
								</div>
								<div class="col-sm-6" style="text-align: right;">
									<h3>40%</h3>
								</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 40%;" class="progress-bar progress-bar-blue"
									role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-12 buttonCont">
									<a href="admin_app_det.php">View Application</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Ashesi Admissions by <a href="https://nadeemsfirstchildren.wordpress.com">Nadeem's
						First Children</a></p>
			</div>
		</div>
		<!--/.row-->
	</div>
	<!--/.main-->


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>