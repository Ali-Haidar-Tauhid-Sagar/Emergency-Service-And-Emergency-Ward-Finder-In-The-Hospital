<?php
session_start();
$current_file = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Emergency and Service Ward Finder </title>
    <script type="text/javascript">
       var scrl = "|| Emergency Service And Emergency Ward Finder In The Hospital ||";
        function scrlsts() {
            scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
            document.title = scrl;
            setTimeout("scrlsts()", 300);
        }*
    </script>
    <link rel="icon" href="images/logo%201.png">
    <link rel="stylesheet prefetch" href="Bootstrap/bootstrap 3.2/bootstrap.min.css">
    <link rel="stylesheet prefetch" href="Bootstrap/bootstrap 3.2/bootstrap-theme.min.css">
    <link rel="stylesheet prefetch" href="Bootstrap/bootstrap 3.2/bootstrapValidator.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>


    <link rel='stylesheet prefetch' href='Bootstrap/bootstrap-theme.min.css.map'>
    <link rel='stylesheet prefetch' href='Bootstrap/bootstrap.min.css.map'>
    <link rel='stylesheet prefetch' href='Bootstrap/bootstrap-theme.css.map'>
    <link rel='stylesheet prefetch' href='Bootstrap/bootstrap.css.map'>




    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
    <link href="Bootstrap/slidebar.css" rel="stylesheet">
    <link href="../admin/hospital/assets/css/table.css" rel="stylesheet">


    <link href="Bootstrap/layout/styles/error_modal.css" rel="stylesheet" type="text/css" media="all">
    <link href="Bootstrap/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="Bootstrap/layout/styles/login_modal.css" rel="stylesheet" type="text/css" media="all">
    <link href="Bootstrap/layout/styles/divider.css" rel="stylesheet" type="text/css" media="all">
    <link href="Bootstrap/layout/styles/footer.css" rel="stylesheet" type="text/css" media="all">
    <link href="Bootstrap/layout/styles/fontawesome-4.5.0.min.css" rel="stylesheet" type="text/css" media="all">

    <script src="js/jquery-1.11.0.js"></script>
    <script src="Bootstrap/layout/scripts/jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js" ></script>
<!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style type="text/css">
        .modal {
            overflow-y: auto;
        }

        .modal-open {
            overflow: auto;
        }

        .modal-open[style] {
            padding-right: 0px !important;
        }
		@import url('https://fonts.googleapis.com/css?family=Montserrat');

.onoffswitch3
{
    position: relative;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch3-checkbox {
    display: none;
}

.onoffswitch3-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 0px solid #999999; border-radius: 0px;
}

.onoffswitch3-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch3-inner > span {
    display: block; float: left; position: relative; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}

.onoffswitch3-inner .onoffswitch3-active {
    padding-left: 10px;
    background-color: #EEEEEE; color: #FFFFFF;
}

.onoffswitch3-inner .onoffswitch3-inactive {
    width: 100px;
    padding-left: 16px;
    background-color: #EEEEEE; color: #FFFFFF;
    text-align: right;
}

.onoffswitch3-switch {
    display: block; width: 50%; margin: 0px; text-align: center;
    border: 0px solid #999999;border-radius: 0px;
    position: absolute; top: 0; bottom: 0;
}
.onoffswitch3-active .onoffswitch3-switch {
    background: #2525fa; left: 0;
    width: 160px;
}
.onoffswitch3-inactive{
    background: #A1A1A1; right: 0;
    width: 20px;
}
.onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-inner {
    margin-left: 0;
}

.glyphicon-remove{
    padding: 3px 0px 0px 0px;
    color: #fff;
    background-color: #000;
    height: 25px;
    width: 25px;
    border-radius: 15px;
    border: 2px solid #fff;
}

.scroll-text{
    color: #000;
}
    </style>


</head>

<body  id="top">

<div class="wrapper  row4">
    <div id="topbar" class="hoc clear">
	<img style="width: 3150px;height: 40px" src="images/logo-13.png">
        <?php

            if(isset($_SESSION['uid'])){
                echo '<div class="fl_right">
            <ul class="nospace inline pushright">
                <li class="drop"><i class="label"></i>
                    <span class="glyphicon glyphicon-user"> </span>
                    <a href="#">
                        <strong style="color:yellow" >  '.$_SESSION['name']. '</strong>
						<li><a style="color:white" href="user_profile.php"><b>Profile</b></a></li>
						<li><a style="color:pink" href="donor.php"><b>Donor</b></a></li>
						<li><a style="color:white" href="donor1.php"><b>Change Password</b></a></li>
                    </a>
                    <ul>
                        <li><a style="color:red"  href="action.php?logout=true"><b>Logout</b></a></li>
                    </ul>
                </li>
            </ul>
        </div>';
            }
        else{
            echo '<div class="fl_right">
                <ul class="inline">

                </ul>
            </div>';
        }
        ?>



                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="loginmodal-container">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4>Login Your Account</h4><br>
                                <form id="login_form" method="post">
                                    <input type="text" name="email" placeholder="Email" required>
                                    <input type="password" name="passwd" placeholder="Password" required>
                                    <span style="color: red" id="login_error"></span>
                                    <input type="submit" name="login" class="login loginmodal-submit"  value="Login">
                                </form><br>

                                <div class="login-help">
                                    <h1><a href="user_register.php">New Register</a></h1>
                                </div>
                            </div>
                        </div>
                    </div>







    </div>
</div>
<div class="onoffswitch3">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text"><span class="glyphicon glyphicon-forward"></span> Emergency Service And Emergency Ward Finder In The Hospital  <span class="glyphicon glyphicon-forward"></span> Emergency Service And Emergency Ward Finder In The Hospital <span class="glyphicon glyphicon-forward"></span>  Emergency Service And Emergency Ward Finder In The Hospital</marquee>
                <span class="onoffswitch3-switch">EVENT NEWS <span class="glyphicon glyphicon-remove"></span></span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW EVENT NEWS</span></span>
        </span>
    </label>
</div>
<!--header part finish-->

        </div>

    </header>
</div>

<div class="wrapper row6">
    <nav id="mainav" class=" hoc clear">

        <ul class="clear">
            <li class="<?php if($current_file=="index.php") echo "active" ?>"><a href="index.php">Home</a></li>
			<li class="<?php if($current_file=="donor_find.php") echo "active" ?>" ><a  class="drop" href="#">Login</a>
                <ul>
					<li><a href="/project/public/website/user_register.php">New Register</a></li>
					<li><a href="#login-modal"  data-toggle="modal" data-target="#login-modal">User Login</a></li>
					<li><a href="/project/public/admin/login/login.php">Admin Login</a></li>
                </ul>
            </li>
			<li class="<?php if($current_file=="hospital.php" || $current_file=="detail_hospital.php") echo "active" ?>"><a class="" href="hospital.php">Ward Booking</a>
			<li class="<?php if($current_file=="donor_find.php") echo "active" ?>" ><a  class="drop" href="#">Emergency Services</a>
                <ul>
					<li class="<?php if($current_file=="doctor_search.php") echo "active" ?>"><a class="" href="doctor_search.php">Doctors Information</a></li>
					<li class="<?php if($current_file=="hospital.php" || $current_file=="detail_hospital.php") echo "active" ?>"><a class="" href="hospital.php">Hospital Information</a>
					<li class="<?php if($current_file=="amb.php") echo "active" ?>"><a href="amb.php">Ambulance Service</a></li>
					<li class="<?php if($current_file=="bloodbank.php") echo "active" ?>" ><a href="bloodbank.php">Blood Banks</a></li>
					<li class="<?php if($current_file=="donor_find.php") echo "active" ?>"><a href="donor_find.php">Search Donor</a></li>
                </ul>
				<li class="<?php if($current_file=="About.php") echo "active" ?>" ><a href="About.php">About Us</a></li>
				<li class="<?php if($current_file=="Contact.php") echo "active" ?>" ><a href="Contact.php">Contact Us</a></li>

            </li>

                <ul>




                </ul>
            </li>


        </ul>

    </nav>
    </div>


    <br>
