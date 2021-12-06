<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("location:/project/public/admin/login/login.php");

}
echo $_SESSION['org_id']." ".$_SESSION['admin_id']." ".$_SESSION['admin_name']." ".$_SESSION['owner'];
$current_file = basename($_SERVER['PHP_SELF']);
include('header.php');
?>
<?php
include '../../../includes/db_connection.php';
$admin_id=(int)$_SESSION['admin_id'];
$sql="SELECT * FROM admin WHERE admin_id={$admin_id}";
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
<input type="hidden" id="admin_id" name="admin_id" value="<?php echo $admin_id ?>">
		
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User Information</h4>
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
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="House no Road no" value="<?php echo  $row['email'] ?>">
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
                                                <label>Password</label>
                                                <input type="text" name="passwd" class="form-control" placeholder="passwd" value="<?php echo $row['passwd'] ?>">
                                            </div>
                                        </div>
                                    </div>

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
                url: "action2.php",
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

<?php

include "footer.php";
?>
		
