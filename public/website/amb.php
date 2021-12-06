<?php
include("../../includes/db_connection.php");

//include 'includes/navigation.php';
$sql = "SELECT * FROM abulance ";
$result = mysqli_query($connection,$sql);
if(isset($_GET['search_abulance'])){
	$h_sp=$_GET['abulance'];
	$h_name= preg_replace("/\([^)]+\)/","",$h_sp);
	$sql = "SELECT * FROM abulance where address='{$h_name}' ";
	$result=mysqli_query($connection,$sql);
}

if(isset($_SESSION['hid_seeing'])){
	unset($_SESSION['hid_seeing']);
}
?>




<?php
include("header.php");
?>




<br>
<div class="container-fluid" >


	<div class="col-md-2"></div>

	<div class="col-md-8" style="background-color: #e5e5e5">
		<br>
		<div class="col-md-3"></div>
		<form method="get" action="amb.php">
		<div class="row">
			<div class="col-md-4 " >
			
		
				<label for="sel1">Select Ambulance Area</label>
				<select class="form-control" id="sel1" name="abulance">
					<option value=" " ></option>
					<?php
					$sql="select name,address from abulance ORDER by address";
					$abulance=mysqli_query($connection,$sql);

					while($name=mysqli_fetch_assoc($abulance)){
						echo '<option>'.$name['address'].'</option>';
					}
					?>
				</select>
			</div>
			
			<div class="col-md-2"> <br>
				<button type="submit" style= "padding: 8.5px 32px;" class="btn" name="search_abulance">Search</button>
			</div>


		</div>
		</form>

		<br><br>
		
		<?php while($row =mysqli_fetch_assoc($result)) :?>
			<div class="row">
				<div class="col-md-3 text-left" style="border-right: 1px solid #404040;height: 160px;">
					<img style="width:250px;height:150px;border-square: 100%;" src="images/amb.jpg">
				</div>
				<div class="col-md-4 text-left" style="border-right: 1px solid #404040;height: 160px;">
					<p id='a' class="u-amount" style="color:#001a00;font-size: 23px;" ><b><?php echo $row['name']; ?></b></p>
					<p class="u-amount " style="font-size=6px; "><span class="glyphicon glyphicon-map-marker "></span> <b><?php echo $row['address']; ?></p>
					<p class="u-amount " style="font-size=6px; "><span class="glyphicon glyphicon-earphone "></span> <?php echo $row['phone']; ?></p> <br>
						
				</div> <br>



				<div class="col-md-5 text-left">
					<td><center><p class="alert alert-primary" role="alert"><b><?php echo $row['emergency']; ?></b></center></p></td>
					<td><?php if($row['fax']=="0") { 
                                echo '<p class="alert alert-danger" role="alert"><b>Not Available</b></p>';
                              }else{
                                echo '<p class="alert alert-success" role="alert"><b>Available</b></p>';
                              }  ?></td>
							  



					<div class="btn-group-vertical pull-right">
						<button   type="button" style= "padding: 8.5px 25px;" class="btn btn-sm btn-primary pull-right" onclick=window.open('detail_hospital.php?<?php echo "hid=".$row['hospital_id']; ?>','_self') >See Hospital</button> <br><br> <br>
					</div>
				</div>
			</div>
			<hr style="height:2px;border:none;color:#cccccc;background-color:#cccccc;">
			<br>
		<?php endwhile; ?>
	</div>
	<div class="col-md-2"></div>
</div>

<?php
include("footer.php");
?>

