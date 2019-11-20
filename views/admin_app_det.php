<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ashesi Admission</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
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

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome Admin</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Daniel's Applications
					</div>

					<div class="panel-body">
					<h3>Personal Information</h3>
						<div class="col-md-12 no-padding">
							<div class="row">
								<div class="col-sm-6">
									<h5>First Name</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Last Name</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Email</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Gender</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-12 no-padding">
							<div class="row">
								<div class="col-sm-6">
									<h5>Mobile Phone</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Other Mobile Phone</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Date of Birth</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Country</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>City</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Full Mailing Address</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Where do you live</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Have you applied to Ashesi before?</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Desired Major</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Do you have a disability or learning diffculty that may affect your learning while at Ashesi?</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h5>If yes, please provide further information.</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
							<h3 style="padding-left:15px;">Academic History</h3>
								<div class="col-sm-6">
									<h5>Name of University</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Town of University</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Region/State/Province of University</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Country</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Start Date of University</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>End Date of University</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Name of High School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Town of High School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Region/State/Province of High School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Start Date of High School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>End Date of High School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Certificate Acquired</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Primary Language</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>If Other, please provide the language</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Name & Title of Principal/Counsellor</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Address of Principal/Counsellor</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Email of Principal/Counsellor</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Phone number of Principal/Counsellor</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Phone number of Contact Person</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Name of Basic School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Is the basic school a private school</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Town of Basic School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Region/State/Province of Basic School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Country</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Start date of Basic School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>End date of Basic School</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Describe any scholastic distinctions or honours you have won in the space below:</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Have you ever been dismissed or suspended from an academic institution?</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>If yes, provide the name and location of the institution</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h5>If you answered yes to the question above, explain the circumstances surrounding your dismissal or suspension in a letter addressed to the Admissions Committee.</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<h3 style="padding-left:15px;">Examination Results</h3>
								<div class="col-sm-6">
									<h5>Type of Exams</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Exams Center</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h5>Index Number</h5>
									<p><?php echo $result[1] ?></p>
								</div>
								<div class="col-sm-6">
									<h5>Exams Date</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h5>Copy of Exams Results</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h5>Personal Essay</h5>
									<p><?php echo $result[1] ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-12 no-padding">
							<form class="form-horizontal" action="" method="post">
								<fieldset>
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">Comments</label>
										<div class="col-md-12">
											<textarea class="form-control" id="message" name="message"
												placeholder=""
												rows="5"></textarea>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="col-lg-12" style="padding-right:0;">
							<div style="display: flex;justify-content: flex-end;width:100%;">
								<button type="button" id="admin_comment_btn" class="btn btn-md btn-primary">
									Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>

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

</body>

</html>