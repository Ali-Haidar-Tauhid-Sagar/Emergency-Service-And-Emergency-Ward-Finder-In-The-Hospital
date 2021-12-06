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


<div class="container">

<?php
if(isset($_POST['sign_up'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $emergency = $_POST['emergency'];
    $fax = $_POST['fax'];
	$hospital_id = $_POST['hospital_id'];

    


    $check_email = $connection->query("SELECT phone FROM abulance WHERE phone='$phone'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO abulance (name,address,phone,emergency,fax,hospital_id) VALUES('$name','$address','$phone','$emergency','$fax','$hospital_id')");
        $result = mysqli_query($connection,$insert);


        if ($result) {

            echo "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered
     </div>";
            //header( "refresh:4;url=index.php" );

        } else {

            echo "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Something went wrong :(...Try again !
    </div>";

            //header( "refresh:4;url=user.php" );
        }



    }
    else
    {

        echo "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; already registered...Try with new!
    </div>";

        //header( "refresh:4;url=user.php" );

    }


}



?>
<?php

        //getting website hospital infromation

        $sql = "select * from hospital where hospital_id=".$_SESSION['org_id'];
        $run = mysqli_query($connection,$sql);
        confirm_query($run);
        $row = mysqli_fetch_array($run);
        $count = mysqli_num_rows($run);
        //var_dump($row);
        if($count==1){
			$hospital_id=$row['hospital_id'];
			$name=$row['name'];

        }

?>
    <form class="well form-horizontal" method="post"  id="user_form">
        <fieldset>

            <!-- Form Name -->
            <h3 style="text-align: center">Create Your Ambulance Services</h3>

            <!-- Text input first name-->
			<div class="form-group">
                <label class="col-md-4 control-label">Hospital Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
					<p style="color:#001a00 ;font-family: consolas;font-size: 16px;"><?php echo $row['name']; ?></p>
					<input type="hidden" name="hospital_id" readonly value="<?php echo $hospital_id ?> ">
                    </div>


                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Ambulance Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="name" id="name" placeholder="Name" class="form-control"  type="text">

                    </div>


                </div>
            </div>

            <!-- Text input last-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Location</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                       
                        <select style="height: 40px" name="address" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your Ambulance Area </option>

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
                                                            <option value="Joypurhat">Joypurhat</option>
                                                            <option value="Cumilla">Cumilla</option>
                                                            <option value="Gazipur">Gazipur</option>

                        </select>
                    </div>
                </div>
            </div>

            <!-- Text input email -->
            <div class="form-group">
                <label class="col-md-4 control-label">Mobile</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="phone" placeholder="Mobile" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!-- Text input passwd -->
            <div class="form-group">
                <label class="col-md-4 control-label" >Quantity</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="emergency"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
                </div>
            </div>
				
            <div class="form-group">
                <label class="col-md-4 control-label" >Available</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
						<select style="height: 40px" name="fax" class="form-control selectpicker" id="fax" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your Ambulance Available </option>

															<option value="1">Available</option>
															<option value="0">Not Available</option>

                        </select>
                    </div>
                    <div class="registrationFormAlert" style="color: green" id="divCheckPasswordMatch">
                    </div>
                </div>

            </div>
            </div>
            <!-- Button -->
            <div class="form-group" >
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" id="button" class="btn" name="sign_up" >Save<span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>



        </fieldset>

    </form>
</div>
