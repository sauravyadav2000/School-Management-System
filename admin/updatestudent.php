<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<body style="background: url('../images/img8.jpg') ;background-size: cover;">

	<h1 class="head4">SEARCH  FOR THE STUDENT</h1>
<div class="box1">

<form action="updatestudent.php" method="post" >

	<div >
		<div>
			<div style="">Enter Standard</div>
			<input type="number" name="std" placeholder="Enter Standard" required>
		</div>
		<div>
		    <br><div class="sta">Enter Student Name</div>
			<input type="text" name="stuname" placeholder="Enter Student Name" required>
		</div>
		<div>
			<input type="submit" name="submit" value="Search">
		</div>
	</div>
	</div>
</form>
</body>

<table align="center" width="80%" border="1" style="margin-top: 10px; margin-top:5%">
	<tr style="background-color: #b1f9bc;">
		<td>No</td>
		<td>Image</td>
		<td>Name</td>
		<td>Rollno</td>
		<td>Edit</td>
	</tr>
	<?php

if (isset($_POST['submit'])) 
{
	include('../dbcon.php');

	$std = $_POST['std'];
	$name = $_POST['stuname'];

        /* Fetching data of student by name and standered*/
	$sql = "SELECT * FROM `student` WHERE `std`='$std' AND `name` LIKE '%$name%'";
     
	$run = mysqli_query($con,$sql);

	if (mysqli_num_rows($run)<1) 
	{
		echo "<tr><td colspan='5'>No records found.</td></tr>";
	}
	else
	{
		$count = 0;
		while ($data=mysqli_fetch_assoc($run))
		 {
		 	$count++;
			?>
            <tr style="background-color: #e3f9e6">
		       <td><?php echo $count; ?></td>
		       <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;" /></td>
		       <td><?php echo $data['name']; ?></td>
		       <td><?php echo $data['rollno']; ?></td>
		       <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td><!--on the left side of"?" link and on the right side variable-->
	        </tr>


			<?php
		}
	}

}
            ?>
</table>


