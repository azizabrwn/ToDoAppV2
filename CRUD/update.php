<!DOCTYPE html>
    <?php include 'db.php';
    
    
    if(isset($_POST['send']))
    {

        $id = $_GET['id'];
    
       // $sql="SELECT * FROM tasks where id='$id'";

        // $rows = $db->query($sql);

        // $row= $rows->fetch_assoc();

        $task = $_POST['task'];
        $sql2 = "UPDATE  tasks SET name='$task' WHERE id =" . $id;

        $testUpdate = $db->query($sql2);
        if($testUpdate)
        {
            echo "updated";
            header('location:index.php');
        }else{
            echo "error";
        }
         
    }

    
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

        <h1>Update Todo List</h1>

        <div class= "col-md-10 offset-md-1">
        <table>
        <hr> <br>
        
        
        <form method="post">
            <div class="form-group">
                <label>Task Name</label>
                <input type="text" name="task" class="form control" required>
                <input type="date" name="date" class="form control" min="2019/06/10" required>
            </div>    

            <input type="submit" name="send" value="Add Task" class="btn btn-success">
        </form>


        </div>
        </div>
        </div>
    </table>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
    </html>