<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$connection = mysql_connect($hostname,$username,$password) or die('Could not Connect DB');
	mysql_select_db('student',$connection) or die('Could not Select DB');
?>