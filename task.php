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


	$tname=$_POST['tname'];
    $Aname=$_POST['Aname'];
    $datepick=$_POST['datepick'];
    $tinfo=$_POST['tinfo'];
	

		if(!empty($tname) && !empty($Aname) && !empty($datepick) && !empty($tinfo))
		{

			$sqli ="INSERT INTO task(tname,Aname,duedate,tinfo) VALUES ('$tname','$Aname','$datepick','$tinfo')";
          
		}else
		{
			echo "Please enter some valid information!";
		}
	}

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{

	$tname=$_POST['tname'];
    $Aname=$_POST['Aname'];
    $datepick=$_POST['datepick'];
    $tinfo=$_POST['tinfo'];
	

		if(!empty($tname) && !empty($Aname) && !empty($datepick) && !empty($tinfo))
		{

			//$sqli ="INSERT INTO task(tname,Aname,duedate,tinfo) VALUES ('$tname','$Aname','$duedate','$tinfo')";
            $query ="INSERT INTO $Aname(tname,tstatus) VALUES ('$tname','assigned')";
			mysqli_query($con, $query);
          
		}else
		{
			echo "Please enter some valid information!";
		}
	}

if ($con->query($sqli) === TRUE) {
    echo "New task created successfully";
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
    <title>task creation</title>


</head>
<body>
	<br><br>
	<h3>To go back click on the link below:</h3>
	<br><br>
<a href="new_task.php" class="button">Back </a>
</body>
</html>
