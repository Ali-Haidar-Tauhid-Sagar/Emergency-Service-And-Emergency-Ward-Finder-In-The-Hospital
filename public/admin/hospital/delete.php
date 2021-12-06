<?php
require_once('db.php');

$get_id=$_GET['id'];

// sql to delete a record
$sql = "Delete from booking where booking_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:patient_section.php');
?>