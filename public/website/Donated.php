<?php
include "header.php";
?>
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
<body><br><br>
	<center><h2>Add Last Donated</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>"><br>
		<label> Your Last Donated :</label><input type="text" placeholder="00-00-0000" value="<?php echo $row['last_donated']; ?>" name="last_donated"><br>
		<button type="submit" id="button" class="btn" name="submit" >SAVE NOW</span></button>
		</center>
	</form>
</body>
</html>
<?php

include('footer.php');
?>