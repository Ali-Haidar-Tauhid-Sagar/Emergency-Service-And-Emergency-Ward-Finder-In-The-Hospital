<?php
require('header.php');
?>
<?php
include('../../../includes/db_connection.php');
?>

<?php
if(isset($_POST['sign_up'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $phone = $_POST['phone'];
	$owner = $_POST['owner'];

    


    $check_email = $connection->query("SELECT email FROM admin WHERE email='$email'");
    $count = $check_email->num_rows;

    if ($count == 0) {

        $insert=("INSERT INTO admin (name,email,phone,passwd,owner) VALUES('$name','$email','$phone','$passwd','$owner')");
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

<div class="container">



    <form class="well form-horizontal" method="post"  id="user_form">
        <fieldset>

            <!-- Form Name -->
            <h3 style="text-align: center">Create User Account</h3>
<br>
            <!-- Text input first name-->

            <div class="form-group">
                <label class="col-md-4 control-label">Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="name" id="first_name" placeholder="First Name" class="form-control"  type="text">

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
                        <span class="input-group-addon"></span>
                        <input name="passwd" id="txt_passwd" placeholder="Create Password" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!-- Text input mobile-->

            <div class="form-group">
                <label class="col-md-4 control-label">Mobile #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input name="phone" placeholder="01XXXXXXXXX" id="mobile" class="form-control" type="text" onkeyup="validatenumber();">
                    </div>
                    <div class="registrationFormAlert" style="color: green" id="divChecknumber">
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-4 control-label">User Rule</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <select style="height: 40px" name="owner" class="form-control selectpicker" id="select_district_combo" onchange="fetch_select(this.value)" required   >
                                                        <option value="" >Select your User Rule </option>

															<option value="hospital">Hospital</option>
															<option value="admin">Admin</option>

                                                    </select>

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

<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Owner List</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Email</th>
                                    <th style="text-align:center;">Phone Number</th>
                                    <th style="text-align:center;">Owner</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM admin ORDER BY admin_id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$admin_id=$row['admin_id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['phone']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['owner']; ?></td>
								<td style="text-align:center; width:350px;">
								     <a href="user_delete.php<?php echo '?admin_id='.$admin_id; ?>" class="btn btn-danger">Delete</a>
								</td>
									
										
							
								</div>
								</div>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>
	</body>