<?php

function showdetails($std,$rollno)
{
	include 'dbcon.php';
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `std`='$std'";
	$run = mysqli_query($con,$sql);/*To run the query*/

	if (mysqli_num_rows($run)>0) 
	{
		$data = mysqli_fetch_assoc($run);
		?>
			<table border="2" style="background-color: white; text-align: center; margin-top: 40%; margin-left: 20%;
			width: 800px;>
				
				<tr>
					<th> colspan="3">	STUDENTS DETAILS	</th>

				</tr>
				<tr>
					<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>"></td>
					<th>Roll No.</th>
					<td><?php echo $data['rollno']; ?></td>

				</tr>
				<tr>
					
					<th>Name</th>
					<td><?php echo $data['name']; ?></td>

				</tr>
				<tr>
					
					<th>Standard</th>
					<td><?php echo $data['std']; ?></td>

				</tr>
				<tr>
					
					<th>Parents contact</th>
					<td><?php echo $data['pcont']; ?></td>

				</tr>
				<tr>
					
					<th>city</th>
					<td><?php echo $data['city']; ?></td>

				</tr>
			</table>

		<?php
	}

	else
	{
		echo "<script> alert";

	}
}


?>