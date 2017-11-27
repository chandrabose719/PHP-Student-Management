<?php
	session_start();
	include_once('studentDB.php');
	if (isset($_POST['submit'])) {
		$username = $_SESSION['username'];
		$fullname = mysql_real_escape_string($_POST['fullname']);
		$address = mysql_real_escape_string($_POST['address']);
		$mobile = mysql_real_escape_string($_POST['mobile']);
		$query = "UPDATE student_login SET fullname='$fullname',address='$address',mobile='$mobile' WHERE username = '$username'";
		$res = mysql_query($query);
		if (!$res) {
			echo "<script> alert 'There is NO Data for User!'</script>";
		}else{
			header('location:home.php');
		}
	}		
?>				
<!DOCTYPE html>
<html>
<head>
	<title>Profile || Student Cell</title>
	<meta charset="utf-8">
	<meta name="Student Cell" content="This is the website for watching Student's Educational Performance,  Subjects, Marks with exam wise and etc. ">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/maincss.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<!-- Header -->
	<div id="headerPart">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-brand pull-left">
					<a href="home.php">STUDENT CELL</a>
				</div>
				<div class="navbar-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="mark.php">Mark Details</a></li>
						<li><a href="home.php">Performance Details</a></li>
						<li><a href="fees.php">Fee Details</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Click Here!<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="profile.php">Student Profile</a></li>
								<li><a href="index.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="feePart">
		<div class="container">
			<div class="well well-sm">
				<a href="home.php">Home</a> // Profile Details // Edit
			</div>
			<div class="student-mark">
				<h1>Student Particulers </h1>
				<div class='view-table'>
					<form method="post" action="">
					<table class='table table-striped table-bordered table-hover'>
						<tr>
							<th colspan='2'>Student Profile </th>
						</tr>
						<tr>
							<td>Student Name :</td><td><input class="form-control" type="text" name="fullname"></td>
						</tr>
						<tr>
							<td>Address :</td><td><input class="form-control" type="text" name="address"></td>
						</tr>
						<tr>
							<td>Mobile Number :</td><td><input class="form-control" type="number" name="mobile"></td>
						</tr>
						<tr>
							<td colspan='2'><input class="btn btn-success" type="submit" name="submit" value="Edit Details"></td>
						</tr>
					</table>
					</form>	
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Part -->
	<div id="footerPart">
		<div class="container">
			<div class="row">
				<div class="col-md-12">s
					<div class="copyright">&copy; <strong> Student Cell </strong> All Rights Reserved.</div>
					<div class="credit"> Student Cell By <a href="#">examples@gmail.com</a></div>
				</div>
			</div>
		</div>
	</div>	
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/MyJS.js"></script>
</body>
</html>
