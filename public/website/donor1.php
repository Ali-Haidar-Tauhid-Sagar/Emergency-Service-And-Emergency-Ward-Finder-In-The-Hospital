
<?php
include("header.php");
include ("../../includes/db_connection.php");
if(!isset($_SESSION['uid'])){
    header("location:index.php");
}
?>



<br>
<div class="container-fluid" >


    <div class="col-md-2"></div>


    <div class="col-md-8" style="background-color:#e5e5e5">
        <br>
        <h2 style="text-align: center;"><b>Profile Setting</b></h2><br>
        <ul class="nav nav-tabs"style="background-color:inherit;">
            <li class="active"><a data-toggle="tab" href="#main">change password</a></li>


        </ul>
        <div class="tab-content" style="background-color:#f8f6f8;min-height: 400px">


            <?php include "user_profile/donor_profile1.php"; ?>


        </div>
        <br>
        <br>



    </div>



</div>
<br>
<div id="congratz" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons">&#xE876;</i>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Congratulation</h4>
                <p>You have become a Blood Donor</p>
                <button class="btn btn-success" data-dismiss="modal" onclick="window.location='user_profile.php'"><span>OK</span> <i class="material-icons">&#xE5C8;</i></button>
            </div>
        </div>
    </div>
</div>




<?php
include ("footer.php");
?>
