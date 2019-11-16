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

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
				<img src="img/caleb.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $result[1] ?></div>
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
			<li class="active"><a href="contact.html"><em class="fa fa-phone">&nbsp;</em> Contact Us</a></li>
			<li><a href="../backend/Users/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>


	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome Wuremu</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Applications
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span>
					</div>

					<div class="panel-body">
						<div class="col-md-12 no-padding">
							<div class="row progress-labels">
								<div class="col-sm-6">
									<h3><?php echo $result[1] ?></h3>
								</div>
								<div class="col-sm-6" style="text-align: right;">
									<h3>20%</h3>
								</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 20%;" class="progress-bar progress-bar-blue"
									role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row" style="margin-top: 60px;">
								<div class="col-md-12 buttonCont">
									<a href="application.php">Start New Application</a>
									<a href="application.php">Continue Application</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Application Checklist -->

			<div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Application Checklist
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
						<div>
							<div class="col-xs-12">
								<div class="row">
									<h5>Use the following checklist to ensure that your application is complete. Please
										note that you will not
										be considered for admission if your application is incomplete. Kindly tick the
										checkboxes of all
										documents you are submitting.</h5>

									<div class="col-md-12">
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Completed and signed Application Form
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Official result slip(s) of the final
												examination(s) you have completed
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Term reports or transcript for all terms
												completed in High School
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">One (1) typed personal essay
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">One (1) passport photograph
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">Completed and signed Scholarship
												Application Form (if applicable)
											</label><br><br><br><br>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Upcoming Deadlines -->

			<div class="col-md-6">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-heading">
						Upcoming Deadlines
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">28</div>
										<div class="text-muted">March</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Early Admissions</a></h4>
										<p>We accept scholarship and international applications for the Early Admissions
											period.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End .article-->

						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">27</div>
										<div class="text-muted">Jun</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Regular Admissions</a></h4>
										<p>We accept scholarship and international applications for the Regular Admissions
											period.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End .article-->

						<div class="article">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">22</div>
										<div class="text-muted">August</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Late Admission</a></h4>
										<p>The Late Admissions period attracts an extra GHs50. We also do not accept
											scholarship and international applications for the Late Admissions period.
										</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End .article-->
					</div>
				</div>

			</div>

			<div class="col-md-12">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Latest News
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">18</div>
										<div class="text-muted">Mar</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">2019 ASHESI CAREER FAIR</a></h4>
										<p>
											For many employers, recruiting from Ashesi has provided some of the best
											returns on investment. Across the continent, many organisations have
											recruited students and alumni to join their teams, from internships to
											full-time work roles.
										</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End .article-->

						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">10</div>
										<div class="text-muted">Mar</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Ashesi New Sports Centre</a></h4>
										<p>To mark the opening of Ashesi’s new sports centre, the Ashesi Student Council
											held a series of games and activities on camps this past weekend. The
											tournament featured games between Ashesi’s men’s football team and the
											Multimedia Group men’s football team, and Ashesi’s women’s team versus the
											Nimobi Warriors (a combined women’s team from Nima and Mamobi). </p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End .article-->

						<div class="article">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">18</div>
										<div class="text-muted">Dec</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">2019 ADMISSIONS OPEN</a></h4>
										<p>Our 2019 Admissions season has officially begun! You may visit the admissions
											website to access either the online application portal (preferred) or
											download the paper forms. We will encourage all interested applicants to
											read the instructions carefully before proceeding with their applications.
										</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End .article-->
					</div>
				</div>
			</div>
			<!--/.col-->

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