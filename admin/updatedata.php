<?php

include('../dbcon.php');
    
    $rollno= $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $id = $_POST['sid'];
    $imagename = $_FILES['simg'] ['name'];
    $tempname = $_FILES['simg'] ['tmp_name'];

    move_uploaded_file($tempname, "../dataimg/$imagename");

	$qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `std` = '$std',`image` = '$imagename' WHERE `student`.`id` = $id;";

	$run = mysqli_query($con,$qry);

	if ($run==TRUE) 
	{
		?>

		<script>
			alert('Data updated Successfully.');
		    window.open('updateform.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}

else{
			 ?>
			 <script>
			alert('data not inserted')
		</script>


		}

		
<?php 		
	}

?>
