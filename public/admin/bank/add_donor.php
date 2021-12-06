
<?php
include ('header.php');
include '../../../includes/db_connection.php';
$admin_id=(int)$_SESSION['admin_id'];
?>

<?php


?>
<?php
if(isset($_POST['sign_up'])) {
    
    $name = $_POST['name'];
    $blood = $_POST['blood'];
    $district = $_POST['district'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$last_donated = $_POST['last_donated'];

    $check_email = $connection->query("SELECT phone FROM donor WHERE phone='$phone'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO donor (name,blood,district,city,phone,last_donated) VALUES('$name','$blood','$district','$city','$phone','$last_donated')");
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
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Email is already registered...Try with new!
    </div>";

        //header( "refresh:4;url=user.php" );

    }


}



?>
		
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Your Blood Bank Information</h4>
                            </div>
                            <div class="content">
                                <form class="well form-horizontal" method="post"  id="user_form">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Donor Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name of Donor" >
                                            </div>
                                        </div>


                                    </div>
								     <div class="donor">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>District</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select style="height: 40px" name="district" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your District </option>



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
                                                    <select name="sub_district" class="form-control selectpicker" id="sub_combo" required style="height: 40px">
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

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Contacts</label>
                                                <input type="text" name="phone" class="form-control" placeholder="phone no" >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="email" >
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <span style="color: #000099;" id="update"></span>

                                    
									<button type="submit" id="button" class="btn btn-info btn-fill pull-right" name="sign_up" >Sign-Up<span class="glyphicon glyphicon-send"></span></button>
                                     <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>




                </div>


            </div>
        </div>



<?php

include "footer.php";
?>
		
