<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from booking where booking_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $status = $_POST['status'];
    
	
    $edit = mysqli_query($db,"update booking set status='$status' where booking_id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:patient_section.php?cat=ICU&search_in=All&date=&search_booking="); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>

<table id="customers">
<br><br>
  <tr>
	<th>Time of Booking</th>
    <th>Patient Name</th>
    <th>Age</th>
    <th>Reason</th>
  </tr>
  <tr>
    <td><?php echo $data['time_of_booking']; ?></td>
    <td><?php echo $data['patient_name']; ?></td>
    <td><?php echo $data['age']; ?></td>
    <td><?php echo $data['reason_of_booking']; ?></td>
  </tr>
</table>

</body>
</html>

<center><tr>
	<td></td>
	<br><br>
<form method="POST">
  <input type="hidden" name="status" value="Booked" placeholder="Enter Full Name" Required>
  <button class="button button1" type="submit" name="update" value="Update" >Confirm booking</button>
  </center>
</form>
