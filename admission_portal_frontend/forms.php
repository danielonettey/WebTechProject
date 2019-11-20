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


	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
</head>
<?php
	session_start();
	if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == ''){
		header("Location: http://localhost/WebTechProject/admission_portal_frontend/log_in.php");
		die();
	}

	include_once("../backend/mydatabase.php");
	include_once('../backend/profilecrud.php'); 
	include_once("../backend/application.php");
	

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
				<img src="img/caleb.jpg" class="img-responsive" alt="">
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
	<!--/.sidebar-->

	<!-- Scholarship Form Page  -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="scholarships_page">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Scholarships & Housing</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Scholarships & Housing</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<p>
							Scholarships are awarded on the basis of demonstrated need and merit. Ashesi has limited
							resources and cannot
							provide assistance to all applicants. It is therefore very important that you do not request
							more assistance than
							you need. You cannot apply for a scholarship after you have been admitted. Ashesi cannot
							guarantee scholarships
							for everyone who applies for it.
						</p>
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Do you intend to apply for
												financial assistance from Ashesi?</label>
											<div class="col-md-12">
												<div class="radio">
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios1"
															value="option1">Yes (complete Scholarship Form)
													</label>
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios3"
															value="option2">No
													</label>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">If yes, click on the
												button below to apply for a scholoarship</label>
											<div class="col-md-12">
												<div>
													<a href="scholarships.html"
														style="text-decoration:none; color:white;">
														<button type="button" class="btn btn-md btn-primary">
															Save and Apply
															for a
															Scholarship
														</button>
													</a>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Do you seek on-campus
												housing?</label>
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
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" id="" class="btn btn-md btn-primary"
										style="margin-right: 10px;">
										Save</button>
									<button type="button" id="family_info_btn" class="btn btn-md btn-primary">
										Next</button>
									<!-- </a> -->
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

	<!-- Family Information Form Page  -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="family_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Family Information</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Family Information</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<p>Please provide the following information on your parent(s) or legal guardian(s)</p>
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">First Name</label>
											<div class="col-md-12">
												<input id="fname" name="fname" type="text" placeholder="Your first name"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Last Name</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder="Your last name"
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
											<label class="col-md-12 control-label" for="name">Relationship to you
											</label>
											<div class="col-md-12">
												<input id="relationship" name="relationship" type="text"
													placeholder="Relationship" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Level of Education
											</label>
											<div class="col-md-12">
												<input id="edu" name="edu" type="text" placeholder="Level of Education"
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
											<label class="col-md-12 control-label" for="name">Mobile Phone</label>
											<div class="col-md-12">
												<input id="phone" name="phone" type="tel"
													placeholder="Your mobile phone" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Email</label>
											<div class="col-md-12">
												<input id="email" name="email" type="email"
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
											<label class="col-md-12 control-label" for="name">Employer</label>
											<div class="col-md-12">
												<input id="employer" name="employer" type="text" placeholder="Employer"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Job Title </label>
											<div class="col-md-12">
												<input id="job" name="job" type="text" placeholder="Job Title"
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
											<label class="col-md-12 control-label" for="name">Is he/she alive?</label>
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
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Have any of your family
												members gained admission to Ashesi University?</label>
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
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">If yes, kindly provide
												information for any siblings that have been admitted to Ashesi below
												(Full name - Relationship - Year of Admission)</label>
											<div class="col-md-12">
												<textarea class="form-control" id="message" name="message"
													placeholder="Full name - Relationship - Year of Admission"
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
									<button type="button" id="sponsor_info_btn" class="btn btn-md btn-primary">
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
		<!--/.row-->
	</div>

	<!-- Sponsor Information Form Page  -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="sponsor_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Sponsor Information</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sponsor Information</h1>
			</div>
		</div>
		<!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<p>Only for applicants being sponsored by an organization</p>
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name of
												Organization</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder="Sponsor name"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name of Contact
												Person</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder="Full name"
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
											<label class="col-md-12 control-label" for="name">Title of Contact
												Person</label>
											<div class="col-md-12">
												<input id="title" name="title" type="text" placeholder="Title"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Email of Contact
												Person</label>
											<div class="col-md-12">
												<input id="email" name="email" type="email" placeholder="Email Address"
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
											<label class="col-md-12 control-label" for="name">Phone number of Contact
												Person</label>
											<div class="col-md-12">
												<input id="phone" name="phone" type="tel" placeholder="Phone number"
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
									<button type="button" id="academic_history_btn" class="btn btn-md btn-primary">
										Next</button>
									<!-- </a> -->
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
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Academic History</h1>
			</div>
		</div>
		<!--/.row-->



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

								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
			
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Country</label>
											<div class="col-md-12">
												<select id = "scountry" class="form-control" >
													<option><?php echo $history[2] ?></option>
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

								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>

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

								</fieldset>
							</div>
							<!-- <div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Primary Language</label>
											<div class="col-md-12">
												<div class="radio">
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios1"
															value="option1">English
													</label>
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios3"
															value="option2">Other
													</label>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">If Other, please provide
												the language</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div> -->
							<div class="col-lg-12">
								<fieldset>
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
		<!--/.row-->
	</div>

	<!-- Extra curricular Activities -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="extracurricular_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Extra Curricular Activities</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Extra Curricular Activities & Interests</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<p>List your hobbies, clubs, extracurricular activities and community service below.
									You may include specific events and/or major accomplishments such as prizes won,
									athletiic awards earned and certificates of recognition if applicable</p>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name of Activity</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Start Date of
												activity</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="date" placeholder=""
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
											<label class="col-md-12 control-label" for="name">End date of
												Activity</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Add any positions held,
												honours won, certificates received, etc. </label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
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
									<button type="button" id="travel_info_btn" class="btn btn-md btn-primary">
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

	<!-- Travel Information -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="travel_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Travel Information</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Travel Information</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<p>Complete the following information on at most 4 countries you have visited
									outside of your home country.</p>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Country Visited</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Year visted</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="number" placeholder=""
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
											<label class="col-md-12 control-label" for="name">Length of stay</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Purpose (e.g. visiting
												family, etc.)</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
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
									<button type="button" id="work_info_btn" class="btn btn-md btn-primary">
										Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Work Experience -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="work_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Work Experience</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Work Experience</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<p>List any job(s) you have held in the past three (3) years (paid, voluntary,
							family and unpaid employment)</p>
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Specific nature of
												work</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Employer</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
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
											<label class="col-md-12 control-label" for="name">Start Date of Enrollment
												Period</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">End Date of Enrollment
												Period</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="date" placeholder=""
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
											<label class="col-md-12 control-label" for="name">Number of hours per week
											</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="number" placeholder=""
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
									<button type="button" id="career_info_btn" class="btn btn-md btn-primary">
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

	<!-- Career Aspirations -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="career_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Career Aspirations</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Career Aspirations</h1>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">What career do you hope to
												pursue?</label>
											<div class="col-md-12">
												<textarea class="form-control" id="message" name="message"
													placeholder="" rows="5"></textarea>
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
									<button type="button" id="exam_info_btn" class="btn btn-md btn-primary">
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
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<h3 style="padding-left: 15px;">Examination Results </h3>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Type of Exams</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Exams Center</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="text" placeholder=""
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
												<input id="sname" name="sname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Exams Date</label>
											<div class="col-md-12">
												<input id="sname" name="sname" type="date" placeholder=""
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
											<label>Click here to upload your personal essay (.pdf)</label>
											<input type="file">
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
									<button type=" 	" id="essay_info_btn" class="btn btn-md btn-primary">
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

	<!-- Personal Essay  -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="essay_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Personal Essay </li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Personal Essay</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">

							<div class="col-lg-12">
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
											<label>Click here to upload your personal essay (.pdf)</label>
											<input type="file">
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
									<button type="button" id="additional_info_btn" class="btn btn-md btn-primary">
										Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>


				<div class="row">
					<div class="col-sm-12">
						<p class="back-link">Ashesi Admissions by <a
								href="https://nadeemsfirstchildren.wordpress.com">Nadeem's
								First Children</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Additional Information -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="additional_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application / Additional Information</li>
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
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<div style="padding-left:15px;">
									<p>Which other universities or colleges have you applied or intend to apply to
										(local and/or international)?</p>
								</div>

								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Major</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
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
											<label class="col-md-12 control-label" for="name">Name</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Major</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
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
											<label class="col-md-12 control-label" for="name">Name</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Major</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
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
											<label class="col-md-12 control-label" for="name">How did you hear about
												Ashesi? You can select all that apply to you:</label>
											<div style="display: flex; flex-direction: row;">
												<div class="col-md-6">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Newspaper
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Television
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Radio
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Ashesi website
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Friend
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Ashesi Staff / Faculty
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">School Visit
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Other:
														</label>
														<input type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Ashesi parent
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Teacher / Counsellor
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Ashesi Student / Alumni
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Campus tour
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Instagram
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Facebook
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">Twitter
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Have you ever attended
												any
												Ashesi sponsored high school event?</label>
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
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">If yes, please state
												event
												and year of attendance (event/year)</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<!-- End of Application -->

							<div class="col-lg-12">
								<div style="padding-left:15px;">
									<h4>By completing the details below this application, I certify that all of the
										information is true to
										the best of my knowledge.</h4>
									<p>I also understand that this information and my university records may be
										reported
										to Ashesi partners and used for evaluation and other program purposes</p>
								</div>

								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Applicant's
												Name</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Date</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<br><br>
							<div class="col-lg-12">
								<div style="padding-left:15px;">
									<p>Ashesi University committed to administering all educational policies and
										activities without
										discrimination on the basis of race, color, religion, national or ethnic
										origin,
										age, handicap or gender.
										However, any misrepresentation of information on your application will
										result in
										a rejection of your
										application; if misrepresentation is determined after you have been
										admitted,
										you will be dismissed.</p>

								</div>
							</div>
							<div class="col-lg-12">
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<a href="index.php" style="text-decoration:none; color:white;"><button type="button"
											class="btn btn-md btn-primary" style="margin-right: 10px;">
											Save</button></a>

									<a href="index.php" style="text-decoration:none; color:white;">
										<button type="button" class="btn btn-md btn-primary">
											Submit</button></a>
								</div>
							</div>

						</form>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p class="back-link">Ashesi Admissions by <a
								href="https://nadeemsfirstchildren.wordpress.com">Nadeem's
								First Children</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Guidelines for Scholarship -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="tuition">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Application / Scholarship</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tuition & Fees</h1>
			</div>
		</div>

		<!-- Tuition & Fees -->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<p>Indicate how much your family / sponsor /
									guardian can contribute per semester</p>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Tuition and Books</label>
											<div class="col-md-12">
												<input id="fname" name="fname" type="number" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">On campus housing
												(optional)</label>
											<div class="col-md-12">
												<input id="fname" name="fname" type="number" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Medical insurance ((fee is
												paid once for the year and can only be
												waived with proof of other private
												medical insurance))</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="number" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
								<div style="padding-left: 15px;">
									<p>All fees are subject to review each semester, and are payable in Ghana Cedi (GHs)
										equivalent.</p>
									<p>i. The expectation is that your family will pay approximately this same amount (
										adjusted for information) every semester over the next 4 years.</p>
									<p>ii. Applicants are considered on the basis of documented financial need and upon
										a
										thorough assessment by
										Ashesi Scholarship Committee of all information gathered during the admissions
										process for each candidate.</p>
									<p>iii. Most scholarship awards vary, based on demonstrated need, academic merit and
										availability of funds.
										Scholarships may be either full or partial to cover specific items as stated in
										the admissions offer letter.</p>
								</div>
							</div>
							<div class="col-lg-12">
								<h5>Please provide responses to the following questions</h5>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">1a. Who paid for your
												previous schooling?:</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">1b. Relationship to
												you:</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">2. Will you receive any
												scholarships that will contribute toward your Ashesi education? If yes,
												please state
												the name of the organization providing the scholarship, the amount and
												the duration of the
												scholarship (one-time scholarship, 2 year, etc.)</label>
											<div class="col-md-12">
												<textarea class="form-control" id="message" name="message"
													placeholder="" rows="5"></textarea>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" class="btn btn-md btn-primary" style="margin-right: 10px;">
										Save</button>
									<button type="button" id="household_btn" class="btn btn-md btn-primary">
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

	<!--Household Dependents -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="household">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Application / Scholarship</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Household Dependents</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">3. How many people,
												including yourself, depend on the income of your parents/guardians for
												their
												daily living?</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">4. How many people,
												including yourself, depend on the income of your parents/guardians for
												their
												educational costs?</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">5. Provide the full name,
												age, relation to you, school, year in school, annual tuition and amount
												parents pay below for all members of your family living in your
												parents’/guardians’ home,
												including yourself:</label>
											<div class="col-md-12">
												<textarea class="form-control" id="message" name="message"
													placeholder="full name - age - relation to you - school - year in school - annual tuition - amount parents pay"
													rows="5"></textarea>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" class="btn btn-md btn-primary" style="margin-right: 10px;">
										Save</button>
									<button type="button" id="family_income_btn" class="btn btn-md btn-primary">
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
		<!--/.row-->
	</div>

	<!-- Family Income  -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="family_income">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Application / Scholarship</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Family Income</h1>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<p>6. Please provide details for your family’s yearly income from all sources (in
									dollars).</p>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Yearly income from first
												head of household</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Yearly income from second
												head of household</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">Yearly income from family
											business(es)</label>
										<div class="col-md-12">
											<input id="email" name="email" type="number" placeholder="$"
												class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">Yearly income from
											investments</label>
										<div class="col-md-12">
											<input id="email" name="email" type="number" placeholder="$"
												class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">Yearly income from
											pension/retirement funds</label>
										<div class="col-md-12">
											<input id="email" name="email" type="number" placeholder="$"
												class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">Yearly income from
											relative(s)</label>
										<div class="col-md-12">
											<input id="email" name="email" type="number" placeholder="$"
												class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">Total Amount (in
											dollars)</label>
										<div class="col-md-12">
											<input id="email" name="email" type="number" placeholder="$"
												class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">State exchange rate used:
											$1 =__________)</label>
										<div class="col-md-12">
											<input id="email" name="email" type="number" placeholder="$"
												class="form-control">
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="col-md-12 control-label" for="name">7. Do you expect
											significant increases or decreases in your parents’/guardians’ income
											during 2019? If yes,
											please explain why:</label>
										<div class="col-md-12">
											<textarea class="form-control" id="message" name="message" placeholder=""
												rows="5"></textarea>
										</div>

									</div>
								</div>

								</fieldset>
							</div>
							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" class="btn btn-md btn-primary" style="margin-right: 10px;">
										Save</button>
									<button type="button" id="family_expense_btn" class="btn btn-md btn-primary">
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
		<!--/.row-->
	</div>

	<!-- Family Expenses -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="family_expense">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Application / Scholarship</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Family Expense</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<p>8. Tell us, to the best of your ability, how much your family spends per year to meet
									its household living
									expenses. Specific categories are provided below.</p>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for
												rent/mortgage</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for food</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for taxes</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for public
												transportation</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for fuel</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for utility
												bills</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for School
												fees</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for Medical
												bills</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for Health
												Insurance</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for House
												help</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for
												entertainment</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Amount for
												vacations</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Total Amount</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder="$"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">9. If family expenses
												exceed monthly income, please explain how expenses were met:</label>
											<div class="col-md-12">
												<textarea class="form-control" id="message" name="message"
													placeholder="" rows="5"></textarea>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" class="btn btn-md btn-primary" style="margin-right: 10px;">
										Save</button>
									<button type="button" id="assets_info_btn" class="btn btn-md btn-primary">
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

	<!-- Assests & Debts -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="assets_info">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Application / Scholarship</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Assest & Debts</h1>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">10. Does your family have
												deed to land or a land certificate at time of application?</label>
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
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">11. Does your family own
												its
												own home?</label>
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
											<label class="col-md-12 control-label" for="name">12. Is your family
												currently
												constructing a house?</label>
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

									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">13. What is your roof made
												up
												of? </label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">14. Does your household
												have
												electricity?</label>
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
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">15. How many vehicles do
												your parents/guardians own?</label>
											<div class="col-md-12">
												<input id="email" name="email" type="number" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset>
									<label class="control-label" for="name">16. Please tell us the make (e.g. Honda,
										Toyota, etc.), model (e.g. Civic, Prado, etc.) and year of each car you
										own in the space provided below:</label>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">First Vehicle</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Second Vehicle</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Third Vehicle</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Fourth Vehicle</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Other household
												assets</label>
											<div class="col-md-12">
												<div>
													<div class="col-md-6">
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">Mobile Phone(s)
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">Computer
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">Radio
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">Bicycle
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">Motorcycle
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" value="">Television
															</label>
														</div>
														<div class="checkbox"
															style="display: flex;flex-direction: row;">
															<label>
																<input type="checkbox" value="">Other:
															</label>
															<input type="text">
														</div>
													</div>
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
											<label class="col-md-12 control-label" for="name">17. Does your family have
												any
												debts? If yes, how much?</label>
											<div class="col-md-12">
												<input id="phone" name="number" type="tel" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">18. For what purpose was
												this
												debt incurred?</label>
											<div class="col-md-12">
												<input id="ophone" name="ophone" type="text"
													placeholder="Your mobile phone" class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<br>
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<button type="button" class="btn btn-md btn-primary" style="margin-right: 10px;">
										Save</button>
									<button type="button" id="reference_btn" class="btn btn-md btn-primary">
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
		<!--/.row-->
	</div>

	<!-- References -->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="reference">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Application / Scholarship</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">References</h1>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<p>Provide the name and contact details of two references. Do not include relatives.</p>
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Name</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Address</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Phone</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Email</label>
											<div class="col-md-12">
												<input id="email" name="email" type="email" placeholder=""
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
											<label class="col-md-12 control-label" for="name">Name</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Address</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Phone</label>
											<div class="col-md-12">
												<input id="email" name="email" type="text" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Email</label>
											<div class="col-md-12">
												<input id="email" name="email" type="email" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<div style="display: flex;justify-content: flex-end;width:100%;">
									<a href="index.php" style="text-decoration:none; color:white;"><button type="button"
											class="btn btn-md btn-primary" style="margin-right: 10px;">
											Save</button></a>

									<a href="index.php" style="text-decoration:none; color:white;">
										<button type="button" id="submit_btn" class="btn btn-md btn-primary">
											Submit</button></a>
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
		<!--/.row-->
	</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>