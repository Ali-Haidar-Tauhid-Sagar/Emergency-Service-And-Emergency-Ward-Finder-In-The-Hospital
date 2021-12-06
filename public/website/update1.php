<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$passwd = $_POST['passwd'];
    $hashed_password = password_hash($passwd, PASSWORD_DEFAULT);
	
	mysqli_query($conn,"update `user` set passwd='$hashed_password' where userid='$id'");
	header('location:user_profile.php');
?>