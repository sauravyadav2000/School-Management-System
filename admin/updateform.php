<!DOCTYPE html>
<html>
<head>
	<title>Add student detail</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body  style="background: url('../images/img6.jpg'); background-size: cover;">
	
	<div class="head3">
	<h1>ADD STUDENT DETAILS</h1>
	</div>
	



	<!--starting of form-->

<?php
include '../dbcon.php';
	  $sid = $_GET['sid'];

  $sql = "SELECT * FROM `student` WHERE `id`='$sid'";

  $run = mysqli_query($con,$sql);

  $data = mysqli_fetch_assoc($run);

 ?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<div class="adstu">
	<div>
		<div class="roll">Roll No.</div>
		<input type="text" name="rollno" value=<?php echo $data['rollno']  ?> required>
	</div>
	<div>
		<br><div class="roll">Full Name</div>
		<input type="text" name="name" value=<?php echo $data['name'] ?> required>
	</div>
	<div>
		<br><div class="roll">City</div>
		<input type="text" name="city" value=<?php echo $data['city'] ?> required>
	</div>
	<div>
		<br><div class="roll">Parents Contact no</div>
		<input type="text" name="pcon" value=<?php echo $data['pcont'] ?> required>
	</div>
	<div>
		<br><div class="roll">Standard</div>
		<input type="number" name="std" value=<?php echo $data['std'] ?> required>
	</div>
	<div>
		<br><div class="roll">Image</div>
		<input type="file" name="simg" required>
	</div>
	<div>
        <input type="hidden" name="sid" value= "<?php echo $data['id']; ?>">

		<input type="submit" name="submit" value="Submit">
	</div>
</div>
</form>
</body>
</html>