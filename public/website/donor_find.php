<?php
include "header.php";
?>
<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'project');
?>

<div class="container-fluid" style="min-height: 350px">


    <div class="col-md-2"></div>

    <div class="col-md-8" style="background-color: #e5e5e5">
        <br>

        <h2 style="text-align: center">Find Blood Donor</h2>
        <br>

        <form action="donor_find.php" method="POST">
            <div class="col-md-1"></div>
            <div class="row">
                <div class="col-md-4 ">
                    <label>Blood Group</label>
                    <select class="form-control" id="blood" name="blood">
                        <option>Select Blood Group</option>
                        <option>A+</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>A-</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>


                <div class="col-md-4">

                    <label for="sel1">Area</label>
					<?php
			$qqq="select distinct city from donor";
			$rr=mysqli_query($con,$qqq);
			?>
                    <select class="form-control" id="blood" name="city">
			<option>Select City</option>
				<?php while($aa=mysqli_fetch_assoc($rr)){?> 
						<option value="<?php echo $aa['city'];?>"><?php echo $aa['city'];?></option>
				<?php }?>
					</select>
                </div>

                <div class="col-md-2 "><br>
                     <input id="button1" name="findgroup" type="submit" value="Find Blood" class="btn btn-success btn-block"/>
                </div>


            </div>
        </form>

        <br>
        <br>
			<div class="col-md-9 col-sm-12 col-xs-12" style="background:lightgray;">
			<?php
			include('connection.php');
				if(isset($_POST['findgroup'])){
					$c=$_POST['city'];
					$b=$_POST['blood'];
							
					if(isset($_POST['blood']) && isset($_POST['city'])){
						$g=$_POST['blood'];
						$c=$_POST['city'];
						$q="select * from donor where city='$c' and blood='$g'";
					}

				}else{
					$q="select * from donor";
				}
	
				$r=mysqli_query($con,$q);
				if($r){
					$n=mysqli_num_rows($r);
					if($n>0){
						while($arr=mysqli_fetch_assoc($r))
						{
						?>
						<div class="col-md-6 col-sm-12 col-cs-12">
											
						<table class="table table-hover">
							<thead>
							  <tr>
							  <th>Donor Detail</th>
							  </tr>
							</thead>
							<tbody>
							<tr>
								<td>Blood Group</td>
								<td><font color="blue"><b><?php echo $arr['blood'];?></b></td>
							 </tr>
							  <tr>
								<td>Name</td>
								<td><?php echo $arr['name'];?></td>
							  </tr>
							  <tr>
								<td>Area</td>
								<td><?php 
									echo $arr['city'].", ".$arr['district'];
									?>
									</td>
							  </tr>
							  <tr>
								<td>Contact Number</td>
								<td><font color="green"><?php echo $arr['phone'];?></td>
							  </tr>
							<tr>
								<td>Date of Donation</td>
								<td><font color="Red"><?php echo $arr['last_donated'];?></td>
							  </tr>
							</tbody>
						  </table>
						</div><?php
							}
					}
					}
				
				?>
				
				
				
			
		</div>
            <hr style="height:2px;border:none;color:#cccccc;background-color:#cccccc;">
            <br>
       

    </div>


</div>


<script type="text/javascript">


    document.getElementById('group').value = "<?php if(isset($_GET['search_donor'])) echo $_GET['group'] ;?>";
    document.getElementById('area').value = "<?php if(isset($_GET['search_donor'])) echo $_GET['area'] ;?>";

</script>



<?php

include('footer.php');
?>
