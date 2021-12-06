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
if(isset($_POST['sign_up'])) {
    $hospital_id = $_POST['hospital_id'];
	$icu_aval = $_POST['icu_aval'];
    $icu_rate = $_POST['icu_rate'];
    $icu_quantity = $_POST['icu_quantity'];
	$ccu_aval = $_POST['ccu_aval'];
    $ccu_rate = $_POST['ccu_rate'];
    $ccu_quantity = $_POST['ccu_quantity'];
	$single_aval = $_POST['single_aval'];
    $single_rate = $_POST['single_rate'];
    $single_quantity = $_POST['single_quantity'];
   

    


    $check_email = $connection->query("SELECT single_quantity FROM hospitals_room WHERE single_quantity='$single_quantity'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO hospitals_room (hospital_id,icu_aval,icu_rate,icu_quantity,ccu_aval,ccu_rate,ccu_quantity,single_aval,single_rate,single_quantity,) VALUES('$hospital_id','$icu_aval','$icu_rate','$icu_quantity','$ccu_aval','$ccu_rate','$ccu_quantity','$single_aval','$single_rate','$single_quantity')");
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
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Your Room already registered...Try with new!
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
					<input type="hidden" name="hospital_id" value="<?php echo $hospital_id ?> ">
                    </div>


                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Am</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="icu_aval" id="name" placeholder="Name" class="form-control"  type="text">

                    </div>


                </div>
            </div>

            <!-- Text input last-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Location</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="icu_rate" placeholder="Location" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input email -->
            <div class="form-group">
                <label class="col-md-4 control-label">Mobile</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="icu_quantity" placeholder="Mobile" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!-- Text input passwd -->
            <div class="form-group">
                <label class="col-md-4 control-label" >AV</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="ccu_aval"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
                </div>
            </div>
				
            <div class="form-group">
                <label class="col-md-4 control-label" >Quantity</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="ccu_rate"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label" >Quantity</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="ccu_quantity"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
                </div>
            </div>
				<!-- Text input passwd -->
            <div class="form-group">
                <label class="col-md-4 control-label" >Av</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="single_aval"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
                </div>
            </div>
				
            <div class="form-group">
                <label class="col-md-4 control-label" >Quantity</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="single_rate"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label" >Quantity</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></i></span>
                        <input name="single_quantity"  placeholder="Quantity" class="form-control"  type="text">
                    </div>
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

