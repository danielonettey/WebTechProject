<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile - Ashesi Admission</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
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
		header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views/log_in.php");
		die();
	}
	include_once("../controller/mydatabase.php");
	include_once('../controller/profilecrud.php'); 
	

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
				<img src="img/admin.png" class="img-responsive" alt="">
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
			<li class="active"><a href="contact.php"><em class="fa fa-phone">&nbsp;</em> Contact Us</a></li>
			<li><a href="../controller/Users/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">My Application</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">My Profile</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-heading">
						Basic Information
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="../controller/profilecrud.php?id=<?php echo $result[0] ?>" method="POST">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">First Name</label>
											<div class="col-md-12">
												<input id="fname" name="fname" type="text" value="<?php echo $result[1] ?>"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Last Name</label>
											<div class="col-md-12">
												<input id="lname" name="lname" type="text" value="<?php echo $result[2] ?>"
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
											<label class="col-md-12 control-label" for="name">Gender</label>
											<div class="col-md-12">
												<select class="form-control" name="gender">
													<option><?php echo $result[7] ?></option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Email</label>
											<div class="col-md-12">
												<input id="email" name="email" type="email" value=<?php echo $result[3] ?>
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
													value=<?php echo $result[4] ?>  class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Date of Birth</label>
											<div class="col-md-12">
												<input id="dob" name="dob" value=<?php echo $result[6] ?> type="date" placeholder=""
													class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<label class="control-label" for="name" style="padding-bottom:10px;">Country</label>
										<select class="selectpicker countrypicker form-control" data-flag="true" data-default="GH"></select>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
									<div style="display: flex;justify-content: flex-end;width:100%;margin-top:4	0px;">
										<button type="submit" name="updateprofile" class="btn btn-md btn-primary buttonCont"
											style="margin-right: 10px;">
											Update</button>
									</div>
								</fieldset>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="padding-bottom: 30px;">
					<div class="panel-heading">
						Change Password
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em
								class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="name">Current Password</label>
											<div class="col-md-12">
												<input id="pass" name="pass" type="password" placeholder="************"
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
											<label class="col-md-12 control-label" for="password">New Password</label>
											<div class="col-md-12">
												<input id="npass" name="npass" type="password"
													placeholder="************" class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>

							<div class="col-lg-12">
								<fieldset>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="col-md-12 control-label" for="password">Re-type New
												Password</label>
											<div class="col-md-12">
												<input id="rnpass" name="rnpass" type="password"
													placeholder="************" class="form-control">
											</div>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<div style="display: flex;justify-content: flex-end;width:100%;margin-top:10px;">
									<button type="submit" name="updateprofile" class="btn btn-md btn-primary buttonCont">
										Apply Changes</button>
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