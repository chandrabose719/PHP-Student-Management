<?php
	session_start();
	include_once('studentDB.php');
	if (isset($_POST['submit'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		if ($username!='' && $password!='') {
			$query = "SELECT username, password FROM student_login WHERE username = '$username' && password = '$password'";
			$res = mysql_query($query);
			$count = mysql_num_rows($res);
			if ($count==1) {
				$_SESSION['username']=$username;
				header('location:home.php');
			}
			else{	
				$error = true;
				echo "<script>alert('UserName, password Does Not Exist');</script>";
			}	
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home || Student Cell</title>
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
					<a href="index.php">STUDENT CELL</a>
				</div>
				<div class="navbar-menu">
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Click Here!<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Login</a></li>
								<li><a href="">Contact Admin</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="loginPart">
		<div class="container">
			<div class="login-form pull-right">
				<h1>Student Login</h1>
				<div class="divider"></div>
				<form method="post" action="">
					<div class="form-group">
						<label for name="name">user Name:</label>
						<input class="form-control" type="text" name="username">
					</div>
					<div class="form-group">
						<label for name="name">Password:</label>
						<input class="form-control" type="password" name="password">
					</div>
					<div class="form-group btn-submission">
						<input class="btn btn-success" type="submit" name="submit" value="Submit">
					</div>
				</form>
				<p>If You are New? Click Here to  <a href="index.php"> REGISTER</a></p>
			</div>
		</div>
	</div>
	<!-- Footer Part -->
	<div id="footerPart">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
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