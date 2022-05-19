<?php 

session_start();

	include("connect.php");

    //enables error reporting
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
		//info posted on the change password form
		$cemail=trim($_POST['cemail']);
		$npassword=trim($_POST['npassword']);
        $cpassword=trim($_POST['cpassword']);

            if(($npassword = $cpassword))        
                {
                    if(!empty($cemail) && !empty($npassword))
                    {
                        $sqli ="UPDATE users SET fpassword='1234' WHERE email='$cemail' limit 1";                                    
                                   
                    } 
                    
                    else
                    {
                        echo "please enter the correct  email or password!";
                    }
                }
                else
                {
                    echo "the passwords entered are not the same";
                }
	}

    if ($con->query($sqli) === TRUE) {
        echo "Password changed successfully";
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