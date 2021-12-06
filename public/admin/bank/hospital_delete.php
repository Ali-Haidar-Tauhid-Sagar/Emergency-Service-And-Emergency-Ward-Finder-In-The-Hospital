<?php
require_once('db.php');

$get_id=$_GET['hospital_id'];

// sql to delete a record
$sql = "Delete from hospital where hospital_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:hospital_list.php');
?>