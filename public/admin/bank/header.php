 
<?php
    session_start();
    if(!isset($_SESSION['bank_id'])){
        header("location:/project/public/admin/login/login.php");
    }
    //echo $_SESSION['admin_id']." ";
  //  echo $_SESSION['bank_id']." ";
  //  echo $_SESSION['owner'];
    $current_file=basename($_SERVER['PHP_SELF']);

?>

<head>

    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/new_logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../hospital/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../hospital/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../hospital/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="../hospital/assets/css/table.css" rel="stylesheet">

    <link href="../hospital/assets/css/animation.css" rel="stylesheet">



    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../hospital/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="../hospital/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../hospital/assets/modals/jquery.min.js" type="text/javascript"></script>
    <script src="../hospital/assets/modals/bootstrap.min.js" type="text/javascript"></script>
	 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
	 
	 
	 
	 
	 
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sideb">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Welcome to Super Admin Panel
                </a>
            </div>

            <ul class="nav">
                <li <?php if($current_file=="dashboard.php") echo 'class="active"' ?> >
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				
				<li <?php if($current_file=="add_bank.php") echo 'class="active"' ?> >
                    <a href="add_bank.php">
                        <i class="pe-7s-portfolio"></i>
                        <p>New Bank Add</p>
                    </a>
                </li>
				<li <?php if($current_file=="Bank_list.php") echo 'class="active"' ?> >
                    <a href="Bank_list.php">
                        <i class="pe-7s-portfolio"></i>
                        <p>Blood Bank List</p>
                    </a>
                </li>
				<li <?php if($current_file=="user.php") echo 'class="active"' ?> >
                    <a href="user.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Add Owner User </p>
                    </a>
                </li>
				<li <?php if($current_file=="user_list.php") echo 'class="active"' ?> >
                    <a href="user_list.php">
                        <i class="pe-7s-add-user"></i>
                        <p>User List </p>
                    </a>
                </li>
				
				<li <?php if($current_file=="hospital.php") echo 'class="active"' ?> >
                    <a href="hospital.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Add Hospital</p>
                    </a>
                </li>
				<li <?php if($current_file=="hospital_list.php") echo 'class="active"' ?> >
                    <a href="hospital_list.php">
                        <i class="pe-7s-browser"></i>
                        <p>Hospital List</p>
                    </a>
                </li>
				<li <?php if($current_file=="doctor_list.php") echo 'class="active"' ?> >
                    <a href="doctor_list.php">
                        <i class="pe-7s-browser"></i>
                        <p>Doctor List</p>
                    </a>
                </li>
				<li class="<?php if($current_file=="Contact.php") echo "active" ?>">
                    <a href="Contact.php">
                        <i class="pe-7s-id"></i>
                        <p>Contact Request</p>
                    </a>
                </li>
				<li class="<?php if($current_file=="mapgena.php") echo "active" ?>">
                    <a href="mapgena.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Google Map</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>


    <div class="main-panel">

        <?php
        include 'uppernav.php';
        ?>





