<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task creation</title>


    <link type="text/css" rel="stylesheet" href="new_task.css">

</head>
<body>
    <div class="page">

    <section class="header">
		<nav>
			<a href="index.html"><img src="Hospital logo pic.jpg" width="130" height="110"></a>
			<div class="nav_links">
				<ul>
					
					<li> <a href ="index.html"> Home </a> </li>
					<li> <a href ="Management.html">Management page</a> </li>
					
				</ul>
			</div>
		</nav>

        

	  </section>

     <section class="c-form">
            <form method="post" action ="task.php">

                <div class="form_title">
                <h1>Please enter all the information about the task below:</h1>
                </div>

                <div class="input-box">
                <label for="tname">Task name:</label><br>
                <input type="text" class="input-box" id="tname" name="tname" required><br>
                </div>

                <div class="input-box">
                <label for="Aname">Assigned to:</label><br>
                <input type="text" class="input-box" id="Aname" name="Aname" required><br>
                </div>

                <div class="input-box">
                <label for="datepick">Due before:</label><br>
                <input type="date" class="input-box" id="datepick" name="datepick"><br>
                </div>

                <div class="input-box">
                <label for="tinfo">Task Information:</label><br>
                <textarea rows="6" columns="80" id="tinfo" name="tinfo" required></textarea><br><br>
                </div>

                <input type="submit" value="Submit">
        </form>
     </section>
    </div>
</body>
</html>