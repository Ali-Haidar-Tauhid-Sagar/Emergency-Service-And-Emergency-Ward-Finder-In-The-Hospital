<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Age</td>
	<td>Age</td>
	<td>Age</td>
	<td>Age</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php
header("location:all_records.php"); // redirects to all records page
include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from booking"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['booking_id']; ?></td>
    <td><?php echo $data['patient_name']; ?></td>
	<td><?php echo $data['age']; ?></td> 
	<td><?php echo $data['time_of_booking']; ?></td> 
	<td><?php echo $data['reason_of_booking']; ?></td>     
    <td><a href="edit.php?id=<?php echo $data['booking_id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['booking_id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>