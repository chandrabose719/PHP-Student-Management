<!DOCTYPE html>
<html>
<head>
	<title>Marks || Student Cell</title>
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
	<div id="markPart">
		<div class="container">
			<div class="well well-sm">
				<a href="home.php">Home</a> // Exam Wise /
			</div>
			<div class="student-mark">
				<h1> Mark Details </h1>
				<?php
				session_start();
				include_once('studentDB.php');
				if ($_SESSION['username']) {
					$username = $_SESSION['username'];
					$query = "SELECT year, exam_type, percentage FROM student_mark WHERE student_name = '$username'";
					// $query = "SELECT year, exam_type, percentage FROM student_mark WHERE student_name = 'Bose'";
					$res = mysql_query($query);
					if (!$res) {
						echo "<script> alert 'There is NO Data for User!'</script>";
					}else{
						echo "<div class='view-table'><table class='table table-striped table-bordered table-hover'>
							<tr>
							<th>Year</th>
							<th>Exam</th>
							<th>Percentage</th>
							<th></th>
							</tr> ";
						while ($row=mysql_fetch_array($res)) {
							echo "<tr>";
							echo "<td>" .$row['year']. "</td>";
							echo "<td>" .$row['exam_type']. "</td>";
							echo "<td>" .$row['percentage']. "</td>";
							echo "<td><a href='subject.php?year='".$row['year'].">Subject Wise</a></td>";
							echo "</tr>";
						}
						echo"</table></div>";	
					}
				}
				?>
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
