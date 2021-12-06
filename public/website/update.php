<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$last_donated=$_POST['last_donated'];
	
	mysqli_query($conn,"update `donor` set last_donated='$last_donated' where user_id='$id'");
	header('location:donor.php');
?>