<?php

session_start();

if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location: ../login.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Add student detail</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body  style="background: url('../images/img6.jpg'); background-size: cover;">
	
	<div class="head3" >
	<h1>ADD STUDENT DETAILS</h1>
	</div>
	

<div class="box">


	<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<div class="adstu">
		<div>
	
		<div class="roll">Roll No.</div>
		<input type="text" name="rollno" placeholder="Enter Rollno" required>
	</div>
	<div>
		<br><div class="roll">Full Name</div>
		<input type="text" name="name" placeholder="Enter full name" required>
	</div>
	<div>
		<br><div class="roll">City</div>
		<input type="text" name="city" placeholder="Enter city" required>
	</div>
	<div>
		<br><div class="roll">Parents Contact no</div>
		<input type="text" name="pcon" placeholder="Enter the contact of parents" required>
	</div>
	<div>
		<br><div class="roll">Standard</div>
		<input type="number" name="std" placeholder="Enter Standerd" required>
	</div>
	<div>
		<br><div class="roll">Image</div>
		<input type="file" name="simg" required>
	</div>
	<div>
		<input type="submit" name="submit" value="Submit">
	</div>
</div>
</div>
</form>

</body>
</html>

<?php

if (isset($_POST['submit'])) 
{
	include('../dbcon.php');
    
    $rollno= $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $imagename = $_FILES['simg'] ['name'];
    $tempname = $_FILES['simg'] ['tmp_name'];

    move_uploaded_file($tempname, "../dataimg/$imagename");

	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `std`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";

	$run = mysqli_query($con,$qry);

	if ($run==TRUE) 
	{
		?>

		<script>
			alert('Data inserted Successfully.');
		</script>

		<?php
	}
}

?>