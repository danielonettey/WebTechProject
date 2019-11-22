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
	$essay = readAdditionalInfo($db);
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


	<!-- Academic History Form Page  -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="academic_history">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Academic History</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Academic History</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<p>Complete the section below with your qualifications and attach trancripts or report cards and
							results slips where appropriate.</p>
						<form class="form-horizontal" action="" method="post">

							<div class="col-lg-12">
								<div style="padding-left:15px ;">
									<h4>Most Recent University</h4>
									<p>List any universities that you have you have attended starting with the most
										recent first. Kindly include a letter stating reasons why you discontinued</p>
								</div>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name of University</label>
											<div class="col-md-12">
												<input id="sname" name="sname" value="<?php echo $history[1] ?>" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Country</label>
											<div class="col-md-12">
											<select class="selectpicker countrypicker form-control" id="scountry" name="scountry" data-default="GH" ></select>
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Start Date of
												University</label>
											<div class="col-md-12">
												<input id="usdate" name="usdate" value="<?php echo $history[3] ?>" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">End Date of
												University</label>
											<div class="col-md-12">
												<input id="uedate" name="uedate" value="<?php echo $history[4] ?>" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<div style="padding-left:15px;">
									<h4>Most Recent High Schools</h4>
									<p>List high schools you have attended, starting with the most recent:</p>
								</div>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name of High
												School</label>
											<div class="col-md-12">
												<input id="hname" name="hname" value="<?php echo $history[5] ?>" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Start Date of High
												School</label>
											<div class="col-md-12">
												<input id="hsdate" name="hsdate" value="<?php echo $history[6] ?>" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>

								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">End Date of High
												School</label>
											<div class="col-md-12">
												<input id="hedate" name="hedate" value="<?php echo $history[7] ?>" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name & Title of
												Principal/Counsellor</label>
											<div class="col-md-12">
												<input id="hpname" name="hpname" value="<?php echo $history[8] ?>" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>

								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
									
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Email of
												Principal/Counsellor</label>
											<div class="col-md-12">
												<input id="hpemail" name="hpemail" value="<?php echo $history[9] ?>" type="email" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" id="" class="btn btn-md btn-primary"
										style="margin-right: 10px;">
										Save</button>
									<button type="button" id="extracurricular_btn" class="btn btn-md btn-primary">
										Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-12">
				<p class="back-link">Ashesi Admissions by <a href="https://nadeemsfirstchildren.wordpress.com">Nadeem's
						First Children</a></p>
			</div>
		</div>
	</div>

	<!-- Examination Details -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="exam_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Additional Information </li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Additional Information</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="../controller/application.php?id=<?php echo $result1[0] ?>" method="POST">
							<div class="col-lg-12">
								<h3 style="padding-left: 15px;">Examination Results </h3>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Type of Exams</label>
											<div class="col-md-12">
												<input id="sname" name="sname" value="<?php echo $essay[1] ?>" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Exams Center</label>
											<div class="col-md-12">
												<input id="scenter" value="<?php echo $essay[2] ?>" name="scenter" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Index Number</label>
											<div class="col-md-12">
												<input id="inumber" name="inumber" value="<?php echo $essay[3] ?>" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Exams Date</label>
											<div class="col-md-12">
												<input id="edate" value="<?php echo $essay[4] ?>" name="edate" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<p style="padding-left:15px;">If you have recently taken/retaken an exam, kindly attach
									a copy of your results as
									part of the required documents(eg. WASSCE, Nov-Dec, ‘O’ Levels)</p>
								<fieldset style="padding-left:15px;">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Click here to upload a copy of results (.pdf)</label>
											<input type="file">
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12" style="padding-left:30px;">
								<h3>Personal Essay</h3>
								<p>Choose one of the following essay subjects, complete it (a maximum of 500 words), and
									submit along with
									your application(s).</p>
								<p>a. What defines and inspires you?</p>
								<p>b. What outrages you? What are you doing about it?</p>
								<p>c. How has the high school you attended moulded you into the person you are
									today?
								</p>
								<p>d. Reflect on your engagement with a community to which you belong. How do you
									feel
									you have contributed to this community?</p>

								<fieldset>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Input your personal essay</label>
											<textarea class="form-control" id="essay" name="essay"
														placeholder=""
														rows="9" ><?php echo $essay[5] ?></textarea>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" id="" class="btn btn-md btn-primary"
										style="margin-right: 10px;">
										Save</button>
									<button id="essay_info_btn" name= "essay_info_btn" class="btn btn-md btn-primary">
										Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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