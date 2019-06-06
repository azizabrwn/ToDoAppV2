<?php  

include "db.php";

if(isset($_POST['send']))
{
    $task=$_POST["task"];
    $date=$_POST["date"];

    $sql = "INSERT into tasks (name, due_date) values ('$task', '$date')";
    $val = $db->query($sql);

    if($val)
    {
        header('location: index.php');
    }
}




?>