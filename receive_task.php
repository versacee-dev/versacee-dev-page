<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task recetion</title>


</head>
<body>


    <div class ="">
    <table>
        <thead>
  <tr>
  <th>Task_id</th>
  <th>Task name</th>
    <th>Employee name</th>
    <th>Due date</th>
    <th>Info</th>
  </tr>
</thead>

</table>

<tbody>

    <?php

	include("connect.php");

  
    $Aname=$_POST['Aname'];
    
    if(!empty($Aname))
    {
        $query ="SELECT * FROM  task 
        WHERE '$Aname' = Aname";  
        $data = mysqli_query($con,$query) OR die('error');     
        
        if(!empty($data))
				{

					while ($row= mysqli_fetch_assoc($data));
                    {
                        $task_id = $row ['task_id'];
                        $task_name = $row ['tname'];
                        $Bname = $row ['Aname'];
                        $due_date = $row ['duedate'];
                        $info = $row ['tinfo'];
                
                
                ?>

                <tr>
                    <td><?php echo $task_id ?></td>
                    <td><?php echo $task_name ?></td> 
                    <td><?php echo $Bname ?></td>
                    <td><?php echo $due_date ?></td>
                    <td><?php echo $info ?></td>
                </tr>


                <?php
                }
            }
        else
        {
            ?>
                <tr>
                    <td>Records not found!</td>
        </tr>
            <?php

        }
    }






    ?>

</tbody>

    </div>
	<br><br>
	<h3>To go back click on the link below:</h3>
	<br><br>
<a href="receive_task.html" class="Back">Back </a>
</body>
</html>