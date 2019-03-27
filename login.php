<?phpm

session_start();
if (isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	

	<title>STUDENT MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" types="text/css" href="style.css">
</head>
<body style="background: url('images/img9.jpg'); background-size: cover;">

	<div class="head1">
	<h1>Admin Login Page</h1>
	</div>
	<div class="loginBox">

		<h2>Admin Login</h2>
		  <form method="post" action="login.php">

		  	<P>Username</P>
		  	<input type="text" name="uname" placeholder="Username">

		  	<P>Password</P>
		  	<input type="Password" name="pass" placeholder="........" >
		  	<input type="submit" name="login" value="Login"><br>
		  	

		
	</div>
</body>
</html>


<?php

include('dbcon.php');

/* Getting login details from the user*/
if (isset($_POST['login'])) 
{
	
	$username = $_POST['uname'];
	$password = $_POST['pass'];
    
    /* Receiving details from our database and comparing with details entered by user*/
	$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    

    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if ($row<1) 
    {

    	?>
    	<script>
    		alert('Username or Password not match !!');
    		window.open('login.php','_self');
    	</script>

    	<?php
    }
    else
    {
    	$data = mysqli_fetch_assoc($run);
        
        // Setting session of different users as per their unique id 
    	$id = $data['id'];
    	//echo "id = .$id;
    	session_start();

    	$_SESSION['uid'] = $id;/*uid is the name of the session*/

    	header('location:admin/admindash.php');
    }
}
?>
