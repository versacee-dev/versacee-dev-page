<?php
session_start();

	include("connect.php");


//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}


if($_SERVER['REQUEST_METHOD'] == "POST")
	{

	$fname=trim($_POST['fname']);
	$jobdes=trim($_POST['jobdes']);
	$email=trim($_POST['email']);
	$fpassword=trim($_POST['fpassword']);

		if(!empty($fname) && !empty($jobdes) && !empty($email) && !empty($fpassword) && ($fpassword)>3 && !is_numeric($fname))
		{

			$query ="INSERT INTO users(fname,jobdes,email,fpassword) VALUES ('$fname','$jobdes','$email','$fpassword')";
			mysqli_query($con, $query);
		}else
		{
			echo "Please enter some valid information!";
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

	$fname=trim($_POST['fname']);
	$jobdes=trim($_POST['jobdes']);
	$email=trim($_POST['email']);
	$fpassword=trim($_POST['fpassword']);


		if(!empty($fname) && !empty($jobdes) && !empty($email) && !empty($fpassword) && ($fpassword)>3 && !is_numeric($fname))
		{

			$sqli ="CREATE TABLE IF NOT EXISTS $fname (`task_id` PRIMARY KEY SERIAL FOREIGN KEY NOT NULL,`tname` text NOT NULL,`tstatus` text NOT NULL,`comments` text NOT NULL,`review` text NOT NULL,`rating` DECIMAL UNSIGNED NULL DEFAULT NULL)";
			
		}
		else
		{
			echo "Please enter some valid information!";
		}
	}
	

	


if ($con->query($sqli) === TRUE) {
    echo "New account created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); 



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>


</head>
<body>
	<br><br>
	<h3>To go back and login click on the link below:</h3>
	<br><br>
<a href="login.html" class="login">Login </a>
</body>
</html>
