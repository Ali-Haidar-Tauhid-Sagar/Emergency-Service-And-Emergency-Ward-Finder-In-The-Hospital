<?php
include "header.php";
?>
<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body><br><br>
	<center><h2>Add Your New Password</h2>
	<form method="POST" action="update1.php?id=<?php echo $id; ?>"><br>
		<input type="text" placeholder="At least 5 characters" name="passwd"><br>
		<button type="submit" id="button" class="btn" name="submit" >SAVE NOW</span></button>
		</center>
	</form>
</body>
</html>
<?php

include('footer.php');
?>