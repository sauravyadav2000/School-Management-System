<!DOCTYPE html>
<html>
<head>
	<title>STUDENT MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="head1">
	<h1>STUDENT MANAGEMENT SYSYTEM</h1>
	</div>
	<div class="loginBox">

		<h2>Student information</h2>
		  <form method="post" action="index.php">

		  	<P>Choose standard</P>
		  	<input type="text" name="std" placeholder="Enter standard">

		  	<P>Roll no.</P>
		  	<input type="text" name="rollno" placeholder="Enter the roll no. of the student" >
		  	

		  	<input type="submit" name="submit" value="show info"><br>
		  	<a href="login.php" class="Admin">Admin Login</a>

		  </form>
		
	</div>

</body>
</html>  
<?php

if (isset($_POST['submit']))
 
{
	$std=$_POST['std'];
	$rollno=$_POST['rollno'];

	include 'dbcon.php';
	include 'function.php';

	showdetails($std,$rollno);
}


?>

