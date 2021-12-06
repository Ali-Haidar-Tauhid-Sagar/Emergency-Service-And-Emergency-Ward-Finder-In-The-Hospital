<?php
require('header.php');
include('../../../includes/db_connection.php');
?>


<div class="container">

<?php
if(isset($_POST['sign_up'])) {
    $admin_id = $_POST['admin_id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$map = $_POST['map'];
	$speciality = $_POST['speciality'];
	$description = $_POST['description'];
	$phone = $_POST['phone'];
	$emergency = $_POST['emergency'];
	$fax = $_POST['fax'];
    $email = $_POST['email'];





    $check_email = $connection->query("SELECT admin_id FROM hospital WHERE admin_id='$admin_id'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO hospital (admin_id,name,address,map,speciality,description,phone,emergency,fax,email) VALUES('$admin_id','$name','$address','$map','$speciality','$description','$phone','$emergency','$fax','$email')");
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
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Select Hospital Owner is already registered...Try with new!
    </div>";

        //header( "refresh:4;url=user.php" );

    }


}



?>


    <form class="well form-horizontal" method="post"  id="user_form">
        <fieldset>

            <!-- Form Name -->
            <h3 style="text-align: center">Create Your New Hospital Services</h3>

            <!-- Text input first name-->
<br>

			<div class="form-group">
                <label class="col-md-4 control-label">Select Hospital Owner</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <select style="height: 40px" name="admin_id" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your Hospital Owner </option>



                                                        <?php




                                                            $query = "SELECT admin_id,name FROM admin ORDER BY NAME ASC ";
                                                            $result = mysqli_query($connection, $query);
                                                            while ($row = mysqli_fetch_assoc($result)) {


																echo '<option value=" '.$row['admin_id'].'"  >'.$row['name'].'</option>';

                                                            }


                                                        ?>


                                                    </select>

                    </div>


                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Hospital Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                        <input name="name" id="name" placeholder="Hospital Name" class="form-control"  type="text">

                    </div>


                </div>
            </div>

            <!-- Text input last-->
			<div class="form-group">
                <label class="col-md-4 control-label" > Hospital Area</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                        <input name="fax"  placeholder=" Hospital Location" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" >Location</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></i></span>
                        <select style="height: 40px" name="address" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your Division </option>

															<option value="Dhaka">Dhaka</option>
															<option value="Chittagong">Chittagong</option>
															<option value="Rajshahi">Rajshahi</option>
															<option value="Barisha">Barisha</option>
															<option value="Mymensingh">Mymensingh</option>
															<option value="Khulna">Khulna</option>
															<option value="Rangpur ">Rangpur </option>
															<option value="Sylhet">Sylhet</option>
                          </select>
                    </div>
                </div>
            </div>

            <!-- Text input email -->
            <div class="form-group">
                <label class="col-md-4 control-label">Google Map</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <input name="map" placeholder="Google Map" class="form-control"  type="text">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label" > Hospital Speciality</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <input name="speciality"  placeholder="Hospital Speciality" class="form-control"  type="text">
                    </div>
                </div>
            </div>

			<div class="form-group">
                <label class="col-md-4 control-label" > Description</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="description"  placeholder="Description" class="form-control"  type="text">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label" > Mobile Number</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="phone"  placeholder="Mobile Number " class="form-control"  type="text">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label" > Emergency Number</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="emergency"  placeholder="Emergency Number" class="form-control"  type="text">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label" > Email</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="email"  placeholder="Email" class="form-control"  type="text">
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
