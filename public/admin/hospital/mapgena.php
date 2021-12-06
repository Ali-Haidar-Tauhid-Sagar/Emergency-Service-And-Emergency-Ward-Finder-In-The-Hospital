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


<div class="content">
 <iframe width="100%" height="900"  src="https://google-map-generator.com/" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>


