<?php
require_once('db.php');

$get_id=$_GET['blood_bank_id'];

// sql to delete a record
$sql = "Delete from blood_bank where blood_bank_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:Bank_list.php');
?>