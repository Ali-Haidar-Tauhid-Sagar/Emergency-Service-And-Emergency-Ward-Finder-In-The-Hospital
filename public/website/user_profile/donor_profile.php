<?php



$uid= $_SESSION['uid'];

$sql="SELECT first_name AS fname,last_name AS lname,email,cell,pic FROM user WHERE userid={$uid} ";
$result=mysqli_query($connection,$sql);
$profile=mysqli_fetch_assoc($result);

//print_r($profile);




?>
<?php
if(isset($_POST['sign_up'])) {
    
    $name = $_POST['name'];
    $blood = $_POST['blood'];
    $district = $_POST['district'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$last_donated = $_POST['last_donated'];
	$user_id = $_POST['user_id'];
	

    $check_email = $connection->query("SELECT user_id FROM donor WHERE user_id='$user_id'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO donor (name,blood,district,city,phone,last_donated,user_id) VALUES('$name','$blood','$district','$city','$phone','$last_donated','$user_id')");
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
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; You is already registered...Find Blood Donor Page!
    </div>";

        //header( "refresh:4;url=user.php" );

    }


}



?>
    <br>
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">

                            <h4 style="text-align: center">Add Donor Profile</h4>
                        </div>
                            <div class="content">
                                <form id="donor_form" method="post">
                                    <div class="donor">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Blood group</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select name="blood" class="form-control selectpicker" required style="height: 40px">
                                                        <option value=" " >Select your Blood Group </option>
														<option value="O+"> O+</option>
                                                        <option value="O-"> O-</option>
                                                        <option value="A+"> A+</option>
                                                        <option value="A-"> A-</option>
                                                        <option value="B+"> B+</option>
                                                        <option value="B-"> B-</option>
                                                        <option value="AB+"> AB+</option>
                                                        <option value="AB-"> AB-</option>

                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

									<input type="hidden" name="user_id" readonly value="<?php echo $uid ?>">
                                    <div class="donor">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                     <input type="text" name="name" readonly class="form-control" value="<?php echo $profile['fname'] ?> <?php echo $profile['lname'] ?>" >
                                                </div>

                                            </div>



                                        </div>
                                    </div>
									<div class="donor">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                     <input type="text" name="phone" readonly class="form-control" value="<?php echo $profile['cell'] ?>" >
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                    <div class="donor">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Division</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select style="height: 40px" name="district" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your Division </option>



                                                        <?php




                                                            $query = "SELECT id,name FROM district ORDER BY NAME ASC ";
                                                            $result = mysqli_query($connection, $query);
                                                            while ($row = mysqli_fetch_assoc($result)) {

                                                                echo '<option>'.$row['name'].'</option>';

                                                            }


                                                        ?>


                                                    </select>
                                                </div>

                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sub-District/Thana</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select name="city" class="form-control selectpicker" id="sub_combo" required style="height: 40px">
                                                        <option value=" ">Select your Sub-District/Thana</option>
                                                        <?php

                                                        if($count>0){
                                                            echo '<option selected>'.$donor['area'].'</option>';
                                                        }
                                                        ?>




                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.getElementById('select_district_combo').value="<?php if($count>0)
                                                                echo $donor['district']; ?>";
                                        document.getElementById('sub_combo').value="<?php if($count>0)
                                                                echo $donor['area']; ?>";

                                    </script>


                                    <div class="row" style="padding-left: 15px">
                                        <div class="col-md-6">
                                            <label>Last Donated</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                <input value="<?php if($count>0) echo $donor['last_donated'] ?>"
                                                       max="<?php  $date = date('d-m-y');echo $date; ?>" name="last_donated"
                                                       placeholder="Date Of Birth" class="form-control"   type="Date" required style="height: 40px;" >


                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <span id="donor_notify" style="color: #000099;padding-left: 10px"><b></b></span>
                                    <button type="submit" name="sign_up" class="btn btn-sm btn-fill pull-right">Save</button>
									 <button type="submit" id="button" class="btn" ><a href="Donated.php?id=<?php echo $uid ?>">Add Last Donated</span></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>    
                    </div>

                    <br>

                </div>


            </div>
        </div>

    </div>
</div>



