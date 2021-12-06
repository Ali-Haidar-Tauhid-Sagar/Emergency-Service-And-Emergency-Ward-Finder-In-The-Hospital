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

        //getting website hospital infromation

        include('../../../includes/db_connection.php');
        $sql = "select * from hospital where hospital_id=".$_SESSION['org_id'];
        $run = mysqli_query($connection,$sql);
        confirm_query($run);
        $row = mysqli_fetch_array($run);
        $count = mysqli_num_rows($run);
        //var_dump($row);

        $name="";
        $speciality="";
        $address = "";
		$map = "";
        $email="";
        $phone = "";
        $emergency="";
        $fax = "";
        $description = "";
        $geo="";

        if($count==1){
            $name=$row['name'];
            $speciality=$row['speciality'];
            $address = $row['address'];
            $description = $row['description'];
            $phone = $row['phone'];
            $emergency = $row['emergency'];
            $fax = $row['fax'];
            $email = $row['email'];
			$map = $row['map'];

        }
        else {
            ?>
            <script type="text/javascript">

                alert("ops! No information.Add from update section")
            </script>

            <?php
        }




?>

<br><br>
<center>
<h1>Welcome To Hospital Panel</h1>
<h2><?php echo $name ?></h2>
<h3><?php echo $address ?></h3>
<h3><b>Phone-</b><?php echo $phone ?> <b>Email-</b><?php echo $email ?></h3><br><br><br><br><br>
<p>Copyright &copy; 2020&ndash;<?php echo date("Y"); ?> Emergency Service And Emergency Ward Finder In The Hospital</a></p>
</center>
<?php

include "footer.php";
?>



