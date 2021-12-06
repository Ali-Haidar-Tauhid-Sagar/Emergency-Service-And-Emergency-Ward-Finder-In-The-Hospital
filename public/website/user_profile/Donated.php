<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `donor` where user_id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body><br><br><br><br><br>
	<center><h2>Add Last Donated</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label> Your Last Donated :</label><input type="text" value="<?php echo $row['last_donated']; ?>" name="last_donated">
		<input type="submit" name="submit"></center>
	</form>
</body>
</html>