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
	$icu_aval = $_POST['icu_aval'];
	$icu_quantity = $_POST['icu_quantity'];
	$icu_rate = $_POST['icu_rate'];
	$ccu_aval = $_POST['ccu_aval'];
	$ccu_quantity = $_POST['ccu_quantity'];
	$ccu_rate = $_POST['ccu_rate'];
	$single_aval = $_POST['single_aval'];
	$single_quantity = $_POST['single_quantity'];
	$single_rate = $_POST['single_rate'];
	$hospital_id = $_POST['hospital_id'];

    


    $check_email = $connection->query("SELECT hospital_id FROM hospitals_room WHERE hospital_id='$hospital_id'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO hospitals_room (hospital_id,icu_aval,icu_quantity,icu_rate,ccu_aval,ccu_quantity,ccu_rate,single_aval,single_quantity,single_rate) VALUES('$hospital_id','$icu_aval','$icu_quantity','$icu_rate','$ccu_aval','$ccu_quantity','$ccu_rate','$single_aval','$single_quantity','$single_rate')");
        $result = mysqli_query($connection,$insert);


        if ($result) {

            echo "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully Generate Your Room Please Click To Manage Room
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
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Room is already Generate Please Click To Manage Room!
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
            <h3 style="text-align: center">Generate Hospital All Room </h3>

            <!-- Text input first name-->
			<div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
					<p style="color:#001a00 ;font-family: consolas;font-size: 16px;"><?php echo $row['name']; ?></p>
					<input  type="hidden" name="hospital_id" readonly value="<?php echo $hospital_id ?> ">
                    </div>
					

                </div>
            </div>
            <!-- Text input email -->
            <div class="form-group">
                <label class="col-md-4 control-label">Click To Generate Button</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="hidden" name="icu_aval" value="yes" class="form-control"  type="text">
						<input type="hidden" name="icu_quantity" value="0" class="form-control"  type="text">
						<input type="hidden" name="icu_rate" value="0" class="form-control"  type="text">
						<input type="hidden" name="ccu_aval" value="yes" class="form-control"  type="text">
						<input type="hidden" name="ccu_quantity" value="0" class="form-control"  type="text">
						<input type="hidden" name="ccu_rate" value="0" class="form-control"  type="text">
						<input type="hidden" name="single_aval" value="yes" class="form-control"  type="text">
						<input type="hidden" name="single_quantity" value="0" class="form-control"  type="text">
						<input type="hidden" name="single_rate" value="0" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group" >
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" id="button" class="btn" name="sign_up" >Generate<span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
        </fieldset>

    </form>
</div>
