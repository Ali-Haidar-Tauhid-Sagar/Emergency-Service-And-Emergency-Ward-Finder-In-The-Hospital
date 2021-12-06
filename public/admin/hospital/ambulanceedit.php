<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
header("location:/project/public/admin/login/login.php");

}
echo $_SESSION['org_id'] . " " . $_SESSION['admin_id'] . " " . $_SESSION['admin_name'] . " " . $_SESSION['owner'];


$current_file = basename($_SERVER['PHP_SELF']);
include('header.php');
include('../../../includes/db_connection.php');
?>
<?php
$org_id=(int)$_SESSION['org_id'];
$sql="SELECT
name,
address,
phone,
emergency,
fax
FROM abulance
WHERE hospital_id={$org_id}";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);

?>

<?php


?>
		
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User Information</h4><br>
                            </div>
                            <div class="content">
                                <form id="admin_info" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name of Your Blood Bank" value="<?php echo $row['name']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    
								     <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <select style="height: 40px" name="address" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="<?php echo $row['address']; ?>" ><?php echo $row['address']; ?></option>

															<option value="Hazaribagh">Hazaribagh</option>
															<option value="Dhanmondi">Dhanmondi</option>
															<option value="Ramna">Ramna</option>
															<option value="Motijheel">Motijheel</option>
															<option value="Sabujbagh">Sabujbagh</option>
															<option value="Lalbagh">Lalbagh</option>
															<option value="Kamalapur">Kamalapur</option>
															<option value="Kamrangirchar">Kamrangirchar</option>
															<option value="Islampur">Islampur</option>
															<option value="Sadarghat">Sadarghat</option>
															<option value="Wari">Wari</option>
															<option value="Kotwali">Kotwali</option>
															<option value="Sutrapur">Sutrapur</option>
															<option value="Jurain">Jurain</option>
															<option value="Dania">Dania</option>
															<option value="Demra">Demra</option>
															<option value="Shyampur">Shyampur</option>
															<option value="Nimtoli">Nimtoli</option>
															<option value="Matuail">Matuail</option>
															<option value="Shahbagh">Shahbagh</option>
															<option value="Paltan">Paltan</option>
															<option value="Abdullahpur">Abdullahpur</option>

												</select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="phone no" value="<?php echo $row['phone'] ?>">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" name="emergency" class="form-control" placeholder="emergency" value="<?php echo $row['emergency'] ?>">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Availability</label>
                                               <select style="height: 40px" name="fax" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="<?php echo $row['fax']; ?>" ><?php if($row['fax']=="0") { 
											echo '<p class="alert alert-danger" role="alert"><b>Not Available</b></p>';
												}else{
											echo '<p class="alert alert-success" role="alert"><b>Available</b></p>';
												}  ?></option>

															<option value="1">Available</option>
															<option value="0">Not Available</option>

												</select>
                                            </div>
                                        </div>
                                    </div>
									<td><?php if($row['fax']=="0") { 
											echo '<p class="alert alert-danger" role="alert"><b>Not Available</b></p>';
												}else{
											echo '<p class="alert alert-success" role="alert"><b>Available</b></p>';
												}  ?></td>								
											
										<div class="registrationFormAlert" style="color: green" id="divCheckPasswordMatch">

										</div>
										<td><center><p class="alert alert-primary" role="alert"><b><?php echo $row['emergency']; ?></b></center></p></td>
										
										
                                    <span style="color: #000099;" id="update"></span>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                     <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>




                </div>


            </div>
        </div>


<script type="text/javascript">



    $( "#admin_info" ).on( "submit", function( event ) {
        event.preventDefault();



            var data = $("#admin_info").serializeArray();
            data.push({name: 'update', value: 'true'});
            data.push({name: 'admin_id', value: $('#admin_id').val()});


            console.log(data);


          $.ajax({
                type: "POST",
                url: "action3.php",
                data: data,
                dataType: "json",
                success: function(data) {
                    if(data=="updated"){
                        document.getElementById('update').innerHTML="<b><span class='success'>Your Information successfully Updated</span></b>";
                    }
                    else{
                        document.getElementById('update').innerHTML="!!Error!! Failed to update";
                    }


                }
            });






    });




</script>


