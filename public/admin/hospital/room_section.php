<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
header("location:/project/public/admin/login/login.php");

}
echo $_SESSION['org_id'] . " " . $_SESSION['admin_id'] . " " . $_SESSION['admin_name'] . " " . $_SESSION['owner'];


$current_file = basename($_SERVER['PHP_SELF']);
include('header.php');
include('../../../includes/db_connection.php');

$org_id=(int)$_SESSION['org_id'];
$sql="SELECT
icu_aval,
icu_quantity,
icu_rate,
ccu_aval,
ccu_quantity,
ccu_rate,
single_aval,
single_quantity,
single_rate
FROM hospitals_room
WHERE hospital_id={$org_id}";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);


?>
<?php
if (isset($_POST['room_set'])) {

    $org_id = (int)$_POST['org_id'];
    $icu_aval = "no";
    $ccu_aval = "no";
    $single_aval = "no";
    $share_aval = "no";
    $male_ward_aval = "no";
    $female_ward_aval = "no";

    if (isset($_POST['icu_check'])) {

        $icu_aval = "yes";
        $icu_quantity =(int)$_POST['icu_quantity'];
        $icu_rate =(int) $_POST['icu_rate'];

    } else {

        $icu_quantity =(int)$_POST['icu_quantity'];
        $icu_rate =(int) $_POST['icu_rate'];
    }

    if (isset($_POST['ccu_check'])) {

        $ccu_aval = "yes";
        $ccu_quantity = (int)$_POST['ccu_quantity'];
        $ccu_rate =(int)$_POST['ccu_rate'];

    } else {

        $ccu_quantity = (int)$_POST['ccu_quantity'];
        $ccu_rate =(int)$_POST['ccu_rate'];
    }
    if (isset($_POST['single_check'])) {

        $single_aval = "yes";
        $single_quantity = (int)$_POST['single_quantity'];
        $single_rate = (int)$_POST['single_rate'];

    } else {

        $single_quantity = (int)$_POST['single_quantity'];
        $single_rate = (int)$_POST['single_rate'];
    }
   
    $sql = "UPDATE hospitals_room
SET
  icu_aval = '{$icu_aval}' -- icu_aval - VARCHAR(10)
 ,icu_quantity = {$icu_quantity} -- icu_quantity - SMALLINT(6)
 ,icu_rate = {$icu_rate} -- icu_rate - SMALLINT(6)
 ,ccu_aval = '{$ccu_aval}' -- ccu_aval - VARCHAR(10)
 ,ccu_quantity = {$ccu_quantity} -- ccu_quantity - SMALLINT(6)
 ,ccu_rate = {$ccu_rate} -- ccu_rate - SMALLINT(6)
 ,single_aval = '{$single_aval}' -- single_aval - VARCHAR(10)
 ,single_quantity = {$single_quantity} -- single_quantity - SMALLINT(6)
 ,single_rate = {$single_rate} -- single_rate - SMALLINT(6)
WHERE
  hospital_id={$org_id} ";
    $result= mysqli_query($connection,$sql);
    $count=mysqli_affected_rows($connection);

    if($count==0){
        echo json_encode("updated");
    }
    else{
        echo json_encode("failed");
    }

}

?>

<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-md-8">
<div class="card">
    <div class="header">
        <h4 class="title" style="text-align: center">Manage Rooms of Your Hospital</h4>
    </div>
    <div class="content">
        <form method="post" id="room">
                <div class="table-responsive">
                <table id="ver-minimalist">
                    <thead>
                    <tr>
                        <th>Availability</th>
                        <th>Category</th>
                        <th>Rate (Per Day BDT)</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center"><input type="checkbox" id="icu_check"
                                                              name="icu_check" <?php if($row['icu_aval']=="yes") echo "checked"  ?> ></td>
                        <td>ICU</td>
                        <td><input type="text" class="form-control" id="icu_rate" name="icu_rate" value="<?php echo $row['icu_rate']?>" ></td>
                        <td><input type="number" min="0" class="form-control" placeholder="no.of icu"
                                   value="<?php echo $row['icu_quantity']?>" id="icu_quantity" name="icu_quantity" ></td>

                    </tr>
                    <tr>
                        <td style="text-align: center"><input
                                type="checkbox" id="ccu_check" name="ccu_check" <?php if($row['ccu_aval']=="yes") echo "checked"  ?> ></td>
                        <td>CCU</td>
                        <td><input type="text" class="form-control" id="ccu_rate" name="ccu_rate" value="<?php echo $row['ccu_rate']?>"></td>
                        <td><input type="number" min="0" class="form-control" placeholder="no.of ccu"
                                   value="<?php echo $row['ccu_quantity'] ?>" id="ccu_quantity" name="ccu_quantity" ></td>

                    </tr>
                    <tr>
                        <td style="text-align: center"><input type="checkbox" <?php if($row['single_aval']=="yes") echo "checked"  ?>
                                                              id="single_check" name="single_check" ></td>
                        <td>Emergency ward</td>
                        <td><input type="text" class="form-control" id="single_rate" name="single_rate" value="<?php echo $row['single_rate']?>"></td>
                        <td><input type="number" min="0" class="form-control" placeholder="no.of single"
                                   value='<?php echo $row['single_quantity']?>' id="single_quantity" name="single_quantity" ></td>

                    </tr>
                    </tbody>
                </table>
                </div>
            <br>

            <div class="row">

                <div class="col-lg-1"></div>

                <div class="col-md-8">
                    <div class="text animated bounce" id="updated" style="color: #000099">Updated</div>
                </div>
                <div class="col-md-2">
						<input type="submit" id="btnShowMsg" name="room_set" value="Save!" onClick='showMessage()'/>
                    <div class="clearfix"></div>
                </div>
            </div>

<script type="text/javascript">
			function showMessage(){
				alert("Successfully Updated.");
			}
		</script>

        </form>


    </div>
</div>
</div>


</div>
</div>
</div>


</div>
<input type="hidden" name="org_id" id="org_id" value="<?php  echo $_SESSION['org_id'] ?>">


<script type="text/javascript">

$(document).ready(function(){

$('#icu_check').click(function()
{
    //If checkbox is checked then disable or enable input
    if ($(this).is(':checked'))
    {

        $('#icu_rate').prop('disabled', false);
        $('#icu_quantity').prop('disabled', false);


    }
    //If checkbox is unchecked then disable or enable input
    else
    {
        $('#icu_rate').prop('disabled', true);
        $('#icu_quantity').prop('disabled', true);


    }
});

$('#ccu_check').click(function()
{
    //If checkbox is checked then disable or enable input
    if ($(this).is(':checked'))
    {

        $('#ccu_rate').prop('disabled', false);
        $('#ccu_quantity').prop('disabled', false);


    }
    //If checkbox is unchecked then disable or enable input
    else
    {
        $('#ccu_rate').prop('disabled', true);
        $('#ccu_quantity').prop('disabled', true);


    }
});
$('#single_check').click(function()
{
    //If checkbox is checked then disable or enable input
    if ($(this).is(':checked'))
    {

        $('#single_rate').prop('disabled', false);
        $('#single_quantity').prop('disabled', false);


    }
    //If checkbox is unchecked then disable or enable input
    else
    {
        $('#single_rate').prop('disabled', true);
        $('#single_quantity').prop('disabled', true);


    }
});


});
document.getElementById('updated').style.visibility = "hidden";

$( "#room" ).on( "submit", function( event ) {
event.preventDefault();




    var data = $("#room").serializeArray();
    data.push({name: 'room_set', value: 'true'});
    data.push({name: 'org_id', value: $("#org_id").val()});



    console.log(data);


    $.ajax({
        type: "POST",
        url: "action.php",
        data: data,
        dataType: "json",
        success: function(data) {

           if(data=="updated"){
               document.getElementById('updated').style.visibility = "visible";
           }



        }
    });






});




</script>

