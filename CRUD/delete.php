<?php

include 'db.php';
 $id = $_GET['id']; 

 $sql = "DELETE from tasks WHERE id = '$id'";

 $val = $db->query($sql);
 {
     header('location: index.php');
 };





?>