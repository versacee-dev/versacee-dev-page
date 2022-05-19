<?php 

session_start();

	include("connect.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//info posted on the login form
		$email=trim($_POST['email']);
		$fpassword=trim($_POST['fpassword']);

		if(!empty($email) && !empty($fpassword))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['fpassword'] === $fpassword)
					{

						if($user_data['jobdes'] === 'manager')
						{
							header("Location: Management.html");
							die;
						}
						else
						{
							header("Location: Workpage.html");
							die;
						}
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login error</title>


</head>
<body>
	<br><br>
	<h3>To go back and try again click on the link below:</h3>
	<br><br>
<a href="login.html" class="login">Try again</a>
</body>
</html>