<?php
require_once('db.php');

$get_id=$_GET['doctor_id'];

// sql to delete a record
$sql = "Delete from doctor where doctor_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:doctor_list.php');
?>