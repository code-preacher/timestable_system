<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
include '../config.php';

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>NAITES TIMETABLE DASHBOARD</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="NAITES TIMETABLE">
    <meta name="keywords" content="NAITES TIMETABLE">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../images/logo2.png">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
   <?php
include "inc/header.php";
   ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
   <?php
include "inc/sidebar.php";
   ?>     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">

<div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                               <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-default"></i></span>
                                </div>
                                <?php 

$ft=mysqli_query($con,"select * from user");
$ftt=mysqli_num_rows($ft);

                                ?>
                                <div class="media-body media-text-right">
                                     <a href="nd1.php"><h2><?php echo $ftt; ?></h2>
                                    <p class="m-b-0">Total number of Students</p></a>
                                </div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                               <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-primary"></i></span>
                                </div>
                                <?php 

$f1=mysqli_query($con,"select * from user where level='nd1'");
$f11=mysqli_num_rows($f1);

                                ?>
                                <div class="media-body media-text-right">
                                     <a href="nd1.php"><h2><?php echo $f11; ?></h2>
                                    <p class="m-b-0">Total number of ND 1</p></a>
                                </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                             <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-success"></i></span>
                                </div>
                                 <?php 

$f2=mysqli_query($con,"select * from user where level='nd2'");
$f21=mysqli_num_rows($f2);

                                ?>
                                <div class="media-body media-text-right">
                                      <a href="nd2.php"><h2><?php echo $f21; ?></h2>
                                    <p class="m-b-0">Total number of ND 2</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                               <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-warning"></i></span>
                                </div>
                                <?php 

$f3=mysqli_query($con,"select * from user where level='hnd1'");
$f31=mysqli_num_rows($f3);

                                ?>
                                <div class="media-body media-text-right">
                                     <a href="hnd1.php"><h2><?php echo $f31; ?></h2>
                                    <p class="m-b-0">Total number of HND 1</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                 <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-danger"></i></span>
                                </div>
                                <?php 

$f4=mysqli_query($con,"select * from user where level='hnd2'");
$f41=mysqli_num_rows($f4);

                                ?>
                                <div class="media-body media-text-right">
                                     <a href="hnd2.php"><h2><?php echo $f41; ?></h2>
                                    <p class="m-b-0">Total number of HND 2</p></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <div class="col-lg-9">
                        
<div class="card">
                                <div class="card-body">
                                    <div class="year-calendar"></div>
                                </div>
                            </div>

                    </div>
               

                </div>

               



                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
           
<!-- FOOTER SCRIPT -->
<?php
include "inc/footer.php";
?>

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!-- scripit init-->

    <script src="js/scripts.js"></script>

</body>

</html>