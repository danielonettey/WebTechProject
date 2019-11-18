<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Application - Ashesi Admission</title>
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
<?php
	session_start();
	if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == ''){
		header("Location: http://localhost/WebTechProject/admission_portal_frontend/log_in.php");
		die();
	}
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
				<img src="img/caleb.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Wuremu</div>
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
			<li><a href="log_in.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
	<!--/.sidebar-->
	<div id="personal_info">
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
							<em class="fa fa-home"></em>
						</a></li>
					<li class="active">Application</li>
					<li class="active">Personal Information</li>
				</ol>
			</div>
			<!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Personal Information</h1>
				</div>
			</div>
			<!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default" style="padding-bottom: 30px;">

						<div class="panel-body">
							<form class="form-horizontal" action="" method="post">
								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">First Name</label>
												<div class="col-md-12">
													<input id="fname" name="fname" type="text"
														placeholder="Your first name" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Last Name</label>
												<div class="col-md-12">
													<input id="lname" name="lname" type="text"
														placeholder="Your last name" class="form-control">
												</div>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Email</label>
												<div class="col-md-12">
													<input id="email" name="email" type="email" placeholder="Your email"
														class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Gender</label>
												<div class="col-md-12">
													<select class="form-control">
														<option>Select a gender</option>
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Mobile Phone</label>
												<div class="col-md-12">
													<input id="phone" name="phone" type="tel"
														placeholder="Your mobile phone" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Other Mobile
													Phone</label>
												<div class="col-md-12">
													<input id="ophone" name="ophone" type="tel"
														placeholder="Your mobile phone" class="form-control">
												</div>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Date of Birth</label>
												<div class="col-md-12">
													<input id="dob" name="dob" type="date" placeholder=""
														class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Citizenship</label>
												<div class="col-md-12">
													<select class="form-control">
														<option>Select your Citizenship</option>
														<option>Ghana</option>
														<option>Canada</option>
														<option>Congo</option>
														<option>Many more</option>
													</select>
												</div>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">City</label>
												<div class="col-md-12">
													<input id="city" name="city" type="text" placeholder="Your city"
														class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Full Mailing
													Address</label>
												<div class="col-md-12">
													<input id="city" name="city" type="text"
														placeholder="123 Abc, Town, Country" class="form-control">
												</div>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Where do you
													live?</label>
												<div class="col-md-12">
													<div class="radio">
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios1"
																value="option1">With parents
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios2"
																value="option2">By yourself
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios3"
																value="option3">In orphanage
														</label>
													</div>
												</div>

											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Have you applied to
													Ashesi
													before?</label>
												<div class="col-md-12">
													<div class="radio">
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios1"
																value="option1">Yes
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios3"
																value="option2">No
														</label>
													</div>
												</div>

											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Desired Major</label>
												<div class="col-md-12">
													<div class="radio" style="flex-direction:column">
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios1"
																value="option1">B.Sc. BUSINESS ADMINISTATION
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios2"
																value="option2">B.Sc. MANAGEMENT INFORMATION SYSTEMS
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios3"
																value="option3">B.Sc. COMPUTER SCIENCE
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios4"
																value="option4">B.Sc. COMPUTER ENGINEERING
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios5"
																value="option5">B.Sc. MECHANICAL ENGINEERING
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios6"
																value="option6">B.Sc. ELECTRICAL/ELECTRONIC ENGINEERING
														</label>
													</div>
												</div>

											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">Do you have a
													disability
													or learning diffculty that may affect your learning while at
													Ashesi?</label>
												<div class="col-md-12">
													<div class="radio">
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios1"
																value="option1">Yes
														</label>
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios2"
																value="option2">No
														</label>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-lg-12">
									<fieldset>
										<div class="col-lg-12">
											<div class="form-group">
												<label class="col-md-12 control-label" for="name">If yes, please provide
													further information.</label>
												<div class="col-md-12">
													<textarea class="form-control" id="message" name="message"
														placeholder="Please enter your message here..."
														rows="5"></textarea>
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
										<button type="button" id="scholarship_btn" class="btn btn-md btn-primary">
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
					<p class="back-link">Ashesi Admissions by <a
							href="https://nadeemsfirstchildren.wordpress.com">Nadeem's
							First Children</a></p>
				</div>
			</div>
			<!--/.row-->
		</div>
	</div>

	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>
<script>


		$("#scholarship_btn").click(function () {
			$("#personal_info").load("forms.html #academic_history", function () {
				//Lead to Extra curriculum page when clicked 
				$("#extracurricular_btn").click(function () {
					$("#personal_info").load("forms.html #exam_info", function () {});
				});
			});
		});
</script>

</html>