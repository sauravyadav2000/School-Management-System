<?php

include('../dbcon.php');
    
   $id=$_REQUEST['sid'];

	$qry = "DELETE FROM `student` WHERE `id`='$id';";

	$run = mysqli_query($con,$qry);

	if ($run==TRUE) 
	{
		?>

		<script>
			alert('Data deleted Successfully.');
		    window.open('deletestudent.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}

else{
			 ?>
			 <script>
			alert('Something wrong in the code')
		</script>


		}

		

