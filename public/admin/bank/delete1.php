<?php
require_once('db.php');

$get_id=$_GET['userid'];

// sql to delete a record
$sql = "Delete from user where userid = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:user_list.php');
?>