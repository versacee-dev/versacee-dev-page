<?php
session_start();

	include("connect.php");


// Enable FULL Error Reporting on the screen
// ONLY USE IN DEVELOPMENT
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}


if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	

	$tname=$_POST['tname'];
    $Aname=$_POST['Aname'];
    $tcomm=$_POST['tcomm'];


	

		if(!empty($tname) && !empty($Aname) && !empty($tcomm))
		{

            $query ="UPDATE $Aname SET comments='$tcomm' WHERE tname ='$tname' limit 1";          
		    mysqli_query($con,$query);
            echo "Comment addition successfull!";
        }else
		{
			echo "Please enter valid information!";
		}
	}

    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add comment</title>


</head>
<body>
	<br><br>
	<h3>To go back click on the link below:</h3>
	<br><br>
<a href="Add_comment.html" class="button">Back </a>
</body>
</html>