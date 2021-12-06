

<?php
include ('header.php');
include '../../../includes/db_connection.php';
$bb_id=(int)$_SESSION['bank_id'];
$admin_id=(int)$_SESSION['admin_id'];
$sql="SELECT * FROM blood_bank WHERE blood_bank_id={$bb_id} AND admin_id={$admin_id}";
$result=mysqli_query($connection,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    //print_r($row);
}
else{
    ?>
    <script type="text/javascript">
        alert("Ops, Your Blood Bank information is not given yet");
    </script>
    <?php
}

?>

<?php


?>
<?php
if(isset($_POST['sign_up'])) {
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
	$email = $_POST['email'];
	

    


    $check_email = $connection->query("SELECT email FROM blood_bank WHERE email='$email'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO blood_bank (admin_id,name,address,phone,email) VALUES('$admin_id','$name','$address','$phone','$email')");
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
<input type="hidden" id="bank_id" name="bank_id" value="<?php echo $bb_id ?>">
		
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
                                                <label>Blood Bank Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name of Your Blood Bank" >
                                            </div>
                                        </div>


                                    </div>

                                    
								     <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="House no Road no" >
                                            </div>
                                        </div>
                                    </div>

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
		
