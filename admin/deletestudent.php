<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>
<form action="deletestudent.php" method="post">
	<div class="upstu">
		<div>
			<div class="sta">Enter Standard</div>
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
</form>
</body>

<table align="center" width="80%" border="1" style="margin-top: 10px;">
	<tr style="background-color: #b1f9bc">
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
		while ($data=mysqli_fetch_assoc($run))/*to fetch the data*/
		 {
		 	$count++;
			?>
            <tr style="background-color: #e3f9e6">
		       <td><?php echo $count; ?></td>
		       <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;" /></td>
		       <td><?php echo $data['name']; ?></td>
		       <td><?php echo $data['rollno']; ?></td>
		       <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td><!--on the left side of"?" link and on the right side variable-->
	        </tr>


			<?php
		}
	}

}
            ?>
</table>

 