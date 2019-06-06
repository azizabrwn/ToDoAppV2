    <!DOCTYPE html>
    <?php include 'db.php'; 
    
    $sql="SELECT * FROM tasks ORDER BY name ASC";

    $rows = $db->query($sql);


    $data = mysqli_fetch_all($rows, MYSQLI_ASSOC);
    //var_dump($data);
    ?>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="main.css">
    <title>CRUD App</title>
    </head>
    <body>
    <div class="container">
    <div class="row">

    <h1>Todo List</h1>

    <div class= "col-md-10 offset-md-1">
    <table>
    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success "> Add Task </button>     
    <button type="button" class="btn btn-default float-right"> Print </button>
    <hr> <br>
    
    <!--Modal-->
    <div class="modal-dialog">
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog"> 
        <!--Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
                &times;</button>
                <h4 class="modal-title">Add Task</h4>
</div>
<div class="modal-body">
    <form method="post" action="insert.php">
        <div class="form-group">
            <label>Task Name</label>
            <input type="text" name="task" class="form control" required>
            <input type="date" name="date" class="form control" min="2019/06/10" required>
</div>    

<input type="submit" name="send" value="Add Task" class="btn btn-success">
</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
</div>
</div>
</div>
</div>

    <table class="table">
  <thead>
 
    <tr>
      <th>Id</th>
      <th>Task</th>
      <th>Due Date</th>
      
    </tr>
  </thead>
    
    <tr>
         <!--   1. Create new variable caled row. 2. Pass it the value of $rows, which contains the database information as well as the query
                to select data from table Tasks. 3. Turn the contents of the database into an associative array, making the rows easy to access.-->
        <?php foreach($data as $tasks) : ?>
        
        


      <th><?php echo $tasks['id'] ?></th>
      <td><?php echo $tasks['name']?></td>
      <td><?php echo $tasks['due_date']?></td >

      <td><a href="update.php?id=<?php echo $tasks['id']; ?>">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $tasks['id']; ?>">Delete</a></td>
      </tr>
     
    
  <?php endforeach;?>
    
    
  </tbody>
</table>

    </div>
    </div>
    </div>
    </table>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
    </html>