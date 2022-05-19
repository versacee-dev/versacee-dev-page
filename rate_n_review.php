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
	//receive  values from task form

	$tname=$_POST['tname'];
    $Aname=$_POST['Aname'];
    $rate=$_POST['rate'];
    $trev=$_POST['trev'];

   
                    if(!empty($tname) && !empty($Aname) && !empty($rate) && !empty($trev))
                    {
                        $sqli ="UPDATE $Aname SET rating='$rate' , review ='$trev' WHERE tname ='$tname' ";
                                
                    }
                    else
                    {
                        echo "Please make sure you fill in the required sections correctly!";
                    }
          
        
	}


if ($con->query($sqli) === TRUE)
{
    echo "Task rated and reviewed successfully";
} 
else 
{
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
    <title>task creation</title>


</head>
<body>
	<br><br>
	<h3>To go back click on the link below:</h3>
	<br><br>
<a href="rate_n_review.html" class="button">Back </a>
</body>
</html>