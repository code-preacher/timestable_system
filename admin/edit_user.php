<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$id=$_GET['id'];
?>
<?php
include '../config.php';
$x=mysqli_query($con,"select * from user where id='$id'");
$xx=mysqli_fetch_array($x);

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
     <meta name="description" content="NAITES TIMETABLE DASHBOARD ">
    <meta name="keywords" content="NAITES TIMETABLE DASHBOARD ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->


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
                    <h3 class="text-primary">NAITES TIMETABLE DASHBOARD</h3> 

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Update Profile</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Update User Profile</h4>

                                <p>
                               
                                <?php echo $_SESSION['pmsg']; ?>
                                <?php echo $_SESSION['pmsg']=""; ?>
                            </p>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   <form action="cpass-user.php?id=<?php echo $id; ?>" method="POST">
                                       
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Matno:</p>
                                            <input type="text" class="form-control input-rounded" name="matno"  required="required" value=<?php echo $xx['matno'];  ?>  >
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Password :</p>
                                            <input type="text" class="form-control input-rounded" name="pwd" required="required" value=<?php echo $xx['password']; ?> >
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Fullname :</p>
                                            <input type="text" class="form-control input-rounded" name="fname" required="required" value=<?php echo $xx['fullname']; ?> >
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Level :</p>
                                            
                                            <select name="level" class="form-control input-rounded" required="required">
                           <option value="<?php echo $xx['level']; ?>"> <?php echo strtoupper($xx['level']); ?></option>                     
                          <option value="nd1">ND 1</option>
                        <option value="nd2">ND 2</option>
                        <option value="hnd1">HND 1</option>
                        <option value="hnd2">HND 2</option>

                    </select>
                                        </div>
                                        
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                        <button type="reset" class="btn btn-inverse">Clear</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->

<!-- FOOTER REGION -->
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
    <script src="js/scripts.js"></script>

</body>

</html>