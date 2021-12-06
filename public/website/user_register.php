


<?php
require_once("../../includes/db_connection.php");
require("header.php");
?>
<?php
if(isset($_POST['sign_up'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $hashed_password = password_hash($passwd, PASSWORD_DEFAULT);
    $mobile = $_POST['mobile'];

    


    $check_email = $connection->query("SELECT email FROM user WHERE email='$email'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO user (first_name,last_name,email,cell,passwd) VALUES('$first_name','$last_name','$email','$mobile','$hashed_password')");
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

            header( "refresh:4;url=user.php" );
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

<div class="container">



    <form class="well form-horizontal" method="post"  id="user_form">
        <fieldset>

            <!-- Form Name -->
            <h3 style="text-align: center">Create Your Account</h3>

            <!-- Text input first name-->

            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="first_name" id="first_name" placeholder="First Name" class="form-control"  type="text">

                    </div>


                </div>
            </div>

            <!-- Text input last-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input email -->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!-- Text input passwd -->
            <div class="form-group">
                <label class="col-md-4 control-label" >Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="passwd" id="txt_passwd" placeholder="Create Password" class="form-control"  type="password">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Confirm Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input name="psw"  id="txt_confirm_passwd" placeholder="Confirm Password" class="form-control"   type="password" onkeyup="checkpassmatch();">
                    </div>
                    <div class="registrationFormAlert" style="color: green" id="divCheckPasswordMatch">
                    </div>
                </div>

            </div>


            <!-- Text input mobile-->

            <div class="form-group">
                <label class="col-md-4 control-label">Mobile #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="mobile" placeholder="01XXXXXXXXX" id="mobile" class="form-control" type="text" onkeyup="validatenumber();">
                    </div>
                    <div class="registrationFormAlert" style="color: green" id="divChecknumber">
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group" >
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" id="button" class="btn" name="sign_up" >Sign-Up<span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>



        </fieldset>

    </form>
</div>
<!-- /.container -->
<!-- /.container -->



<?php
include "footer.php";
?>
