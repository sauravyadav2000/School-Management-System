<?php

session_start();

if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location:../login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<!-- <style type="text/css">
		.admintitle

		{

			background-color: red;
			color: white;
		}
	</style>   -->
	
</head>
<body style="background: url('../images/img5.jpg'); background-size: cover;">

<div class="admintitle">
	<h1>WELCOME TO ADMIN DASHBOARD</h1>
</div>
	<div><a href="logout.php"class="log2" >Logout</a></div>

	<div class="stu1">
		<br><div><a href="addstudent.php" class="dat1">Add Student Details</a></div><br>
		<br><div><a href="updatestudent.php" class="dat1">Update Student Details</a></div><br>
		<br><div><a href="deletestudent.php" class="dat1">Delete Student Details</a></div><br>
	</div>
</body>
</html>    