<?php 
include_once '../../vendor/autoload.php';
use App\Admin\Auth\Auth;


if(!isset($_SESSION)){  
  session_start();
}
/*$_SESSION['username'] = "admin";
$_SESSION['type'] = "administrator";*/

if(!isset($_SESSION['username'])){
    echo "<script>window.location= 'http://localhost/esoft/view/admin/login/index.php'</script>";
}



$auth = new Auth();

$data = $auth->recent_entry();
//echo "<pre>";
//var_dump($data);
$i=0;
foreach($data as $result){
  $i++;

}
//echo $i;

 ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Educational Management Software</title>
    <base href="http://localhost/esoft/">
    <link rel="shortcut icon" href="assets/admin/dist/img/avatar.png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/admin/bower_components/morris.js/morris.css">

     <!-- jvectormap -->
  <link rel="stylesheet" href="assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- Ionicons -->
  <link rel="stylesheet" href="assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/front/assets/css/managing_committe.css">




  <!-- Font Awesome -->
  <!-- Ionicons -->
  <!-- daterange picker -->
  <!-- bootstrap datepicker -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="assets/admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="assets/admin/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/admin/plugins/iCheck/square/blue.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- <script src="https://wchat.freshchat.com/js/widget.js"></script> -->


    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


    <script src="view/admin/StudentInfo/main.js";></script>



     <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <style type="text/css">
        .sk-circle {
  position: absolute;
  top:48%;
  left: 48%;
  width: 40px;
  height: 40px;
  position: relative;
}
.sk-circle .sk-child {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.sk-circle .sk-child:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #333;
  border-radius: 100%;
  -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
          animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
}
.sk-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg); }
.sk-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg); }
.sk-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg); }
.sk-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg); }
.sk-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg); }
.sk-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg); }
.sk-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg); }
.sk-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg); }
.sk-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg); }
.sk-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg); }
.sk-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg); }
.sk-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s; }
.sk-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
          animation-delay: -1s; }
.sk-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s; }
.sk-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s; }
.sk-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
          animation-delay: -0.7s; }
.sk-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s; }
.sk-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s; }
.sk-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s; }
.sk-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
          animation-delay: -0.3s; }
.sk-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s; }
.sk-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
          animation-delay: -0.1s; }

@-webkit-keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
.spinner-wrapper {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ff6347;
z-index: 999999;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    /*position: absolute;*/
    background-color: #f1f1f1;
    min-width: 228px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}



/*.dropdown-content a:hover {background-color: #ddd}*/

.dropdown:hover .dropdown-content {
    display: block;
}


    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">

<!-- <div class="spinner-wrapper">
<div class="sk-circle">
  <div class="sk-circle1 sk-child"></div>
  <div class="sk-circle2 sk-child"></div>
  <div class="sk-circle3 sk-child"></div>
  <div class="sk-circle4 sk-child"></div>
  <div class="sk-circle5 sk-child"></div>
  <div class="sk-circle6 sk-child"></div>
  <div class="sk-circle7 sk-child"></div>
  <div class="sk-circle8 sk-child"></div>
  <div class="sk-circle9 sk-child"></div>
  <div class="sk-circle10 sk-child"></div>
  <div class="sk-circle11 sk-child"></div>
  <div class="sk-circle12 sk-child"></div>
</div>
</div> -->

<!-- Site wrapper -->
<div class="wrapper" id="demo">

  <header class="main-header">
    <!-- Logo -->
    <a href="view/admin/index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ehsan</b>Soft</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
       <li class="dropdown">
        <a style="background-color: #096c45;" href="javascript:void(0)">English
         </a>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="javascript:void(0);">
                      <div class="pull-left">
                        <img src="view/admin/uploads/user/shobuj.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        From User
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome Software?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  
                  
                  
                 
                </ul>
              </li>
              <li class="footer"><a href="javascript:void(0);">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo $i; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $i; ?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="view/admin/user/index.php">
                      <i class="fa fa-users text-aqua"></i> <?php echo $i; ?> new members joined today
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="view/admin/user/index.php">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
        <a style="background-color: #090c45;" href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="assets/admin/images/shobuj.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs">Hello, <?= ucfirst($_SESSION['username']); ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="assets/admin/images/shobuj.jpg" class="img-circle" alt="User Image">

            <p>
              Shobuj Islam - PHP Developer
              <small>Member since Nov. 2017</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="javascript:void(0);">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#"></a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="javascript:void(0);">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="javascript:void(0);" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="view/admin/login/logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
               <!--  <div class="pull-left image">
                    <img src="assets/front/dist/img/shobuj.jpg" class="img-circle" alt="User Image">
                </div> -->
                <!-- <div class="pull-left info">
                   <a href="index.php"> <p style="font-size:16px;">Back To Website</p>
                     </a>
                </div> -->
            </div>

            <!-- search form -->
            <form action="view/admin/index.php" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">

                <!-- <li class="header"><a href="view/admin/weather/chat.php">Chat with Admin  </a></li> -->
                <li class="header"><a href="index.php">Back To Website </a></li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-dashboard"></i> <span>Home</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu ">
                        <li><a href="view/admin/index.php"><i class="fa fa-circle-o"></i>Home</a></li>
                    </ul>
                </li>

                

               

                
                    <li class="treeview ">
                        <a href="javascript:void(0)">
                            <i class="fa fa-folder"></i> <span>Student Attendance</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>
                            <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                          
                          <!--  
                          <li><a href="view/admin/scanner/index.php"><i class="fa fa-circle-o"></i> আইডি কার্ড পাঞ্চ </a></li>
                            <li><a href="view/admin/scanner/smsbalance.php"><i class="fa fa-circle-o"></i> এস এম এস সংখ্যা </a></li>

                            <li><a href="view/admin/scanner/searchForTakeAttendance.php"><i class="fa fa-circle-o"></i> ম্যানুয়াল ভাবে </a></li>
                            <li><a href="view/admin/scanner/searchByDateWise.php"><i class="fa fa-circle-o"></i> সংশোধন করা </a></li>
                            
                            -->
                            
                            <li><a href="view/admin/scanner/index.php"><i class="fa fa-circle-o"></i> Id Card Punch</a></li>
                            <li><a href="view/admin/scanner/smsbalance.php"><i class="fa fa-circle-o"></i>SMS Number</a></li>

                            <li><a href="view/admin/StudentAttendance/searchForTakeAttendance.php"><i class="fa fa-circle-o"></i> Manually Attendance</a></li>
                            <li><a href="view/admin/StudentAttendance/searchByDateWise.php"><i class="fa fa-circle-o"></i> Edit Attendance</a></li>

                            <!-- <li><a href="view/admin/StudentAttendance/searchForTakeAttendance.php"><i class="fa fa-circle-o"></i> ড্যাশ বোর্ড2 </a></li>

                        <li><a href="view/admin/StudentAttendance/searchForTakeAttendance.php"><i class="fa fa-circle-o"></i> ম্যানুয়াল ভাবে2 </a></li>
                        <li><a href="view/admin/StudentAttendance/searchByDateWise.php"><i class="fa fa-circle-o"></i> সংশোধন করা2 </a></li>-->
                            
                        <?php } ?>
                            
                            <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Finger Print</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview ">
                        <a href="javascript:void(0)">
                            <i class="fa fa-folder"></i> <span>Teacher Attendance</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="view/admin/teacherAttendance/index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                            <li><a href="view/admin/scannerTea/index.php"><i class="fa fa-circle-o"></i> Id Card Punch </a></li>
                            <li><a href="view/admin/teacherAttendance/teacherAttendanceTaken.php"><i class="fa fa-circle-o"></i> Manually Attendance</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit Attendance </a></li>
                            <li><a href="view/admin/scannerTea/leave.php"><i class="fa fa-circle-o"></i>Teacher's leave</a></li>
                            <li><a href="view/admin/scannerTea/leaveSchool.php"><i class="fa fa-circle-o"></i> Teacher's Transfer </a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Finger Print</a></li>
                           
                        </ul>
                    </li>

                 <li class="treeview  ">
                     <a href="javascript:void(0)">
                         <i class="fa fa-folder"></i> <span>Students Information</span>
                         <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
                     </a>
                     <ul class="treeview-menu">
                          <li><a href="view/admin/StudentInfo/allstudent.php"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                         <li><a href="view/admin/StudentInfo/allstudent.php"><i class="fa fa-circle-o"></i> All Students</a></li>

                   <?php  
                       if($_SESSION['type'] == 'administrator'){
                   ?>

                         <li><a href="view/admin/StudentInfo/studentInfoAdd.php"><i class="fa fa-circle-o"></i> Add Biodata</a></li>
                         <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Class Migration</a></li>
                         <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Section Migration </a></li>

                     <?php } ?>

                         <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> All Syllabus </a></li>
                         <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Id Card </a></li>
                         <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                         
                     </ul>
                 </li> 
        
        
           <li class="treeview  ">
              <a href="javascript:void(0)">
                  <i class="fa fa-folder"></i> <span>Teachers Information </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="view/admin/teacher/allteacher.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                        <li><a href="view/admin/teacher/allteacher.php"><i class="fa fa-circle-o"></i> All Teachers </a></li>

                    <?php  
                      if($_SESSION['type'] == 'administrator'){
                    ?>

                        <li><a href="view/admin/teacher/addTeacherInfo.php"><i class="fa fa-circle-o"></i>Add Biodata</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Class Migration</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Section Migration </a></li>

                    <?php } ?>

                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> All Syllabus </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Id Card</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                        
                    </ul>
                </li>


              
              <li class="treeview">
                  <a href="javascript:void(0)">
                      <i class="fa fa-laptop"></i>
                      <span>Institution Information</span>
                      <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="view/admin/organizationIfo/allnews.php"><i class="fa fa-circle-o"></i> Dashboard  </a></li>
                     

                  <?php 
                      if($_SESSION["type"] == 'administrator'){
                  ?>

                      <li><a href="view/admin/organizationIfo/topnews.php"><i class="fa fa-circle-o"></i>Add Notice</a></li>
                      <li><a href="view/admin/organizationIfo/slideadd.php"><i class="fa fa-circle-o"></i>Add Slider Image</a></li>
                      <li><a href="view/admin/organizationIfo/allslide.php"><i class="fa fa-circle-o"></i>All Slider Image</a></li>

                  <?php } ?>

                      <li><a href="view/admin/organizationIfo/allnews.php"><i class="fa fa-circle-o"></i>All Notice</a></li>
                      
                  </ul>
              </li>
                <li class="treeview">
                    <a href="javascript:void(0)">
                        <i class="fa fa-edit"></i> <span>Class Information</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="view/admin/classinfo/allclass.php"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                       <li><a href="view/admin/classinfo/allclass.php"><i class="fa fa-circle-o"></i> All Class</a></li>

                    <?php 
                        if($_SESSION["type"] == 'administrator'){
                    ?>

                       <li><a href="view/admin/classinfo/addclass.php"><i class="fa fa-circle-o"></i>Add Class</a></li>

                    <?php } ?>

                       <li><a href="view/admin/classinfo/allsection.php"><i class="fa fa-circle-o"></i>All Section </a></li>

                    <?php 
                        if($_SESSION["type"] == 'administrator'){
                    ?>

                       <li><a href="view/admin/classinfo/addsection.php"><i class="fa fa-circle-o"></i> Add Section</a></li>

                    <?php } ?>

                       <li><a href="view/admin/classinfo/allnewsub.php"><i class="fa fa-circle-o"></i>All Subject</a></li>

                    <?php 
                        if($_SESSION["type"] == 'administrator'){
                    ?>

                       <li><a href='view/admin/classinfo/newsubadd.php'><i class="fa fa-circle-o"></i> Add Subject</a></li>

                    <?php } ?>

                       <!-- <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> ল্যংগুয়েজ ভার্সন </a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> সেশন </a></li>
                       
                       
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> শিফট </a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> শিফট টাইম </a></li> -->
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Class Schedule</a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                       </ul>
                </li>
                <li class="treeview">
                    <a href="javascript:void(0)s">
                        <i class="fa fa-table"></i> <span>Department</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="view/admin/department/index.php"><i class="fa fa-circle-o"></i>Dashboard</a></li>
                       <li><a href="view/admin/department/adddepartment.php"><i class="fa fa-circle-o"></i> Add New Department</a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> General </a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Science </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Humanities </a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Commerce </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                       <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                       
                        
                    </ul>
                </li>

                <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Managing Committe</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="view/admin/commitee/index.php"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                        <li><a href="view/admin/commitee/index.php"><i class="fa fa-circle-o"></i> All Committe</a></li>
                        <li><a href="view/admin/commitee/addcommitee.php"><i class="fa fa-circle-o"></i> Add New Member</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Duration </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>  Date of Meeting  </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                    </ul>
                </li>

                

     <li class="treeview">
         <a href="javascript:void(0)">
            <i class="fa fa-share"></i> <span>Marksheet </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">
                <a href="javascript:void(0)"><i class="fa fa-share"></i>Play to Class 5
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/onetofivemarksheet/meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/onetofivemarksheet/meritmarksheet.php'><span>Marksheet & All Info</span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/onetofivemarksheet/markadd.php'><span>Add All Subject Marks</span></a></li>
                            <li><a href='view/admin/onetofivemarksheet/editmarksearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/onetofivemarksheet/deletemark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                    
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Class 6 to 8
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <li><a href='view/admin/marksheet/meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/marksheet/allmerit.php'><span>All Marksheet(Class wise)</span></a></li>
                            <li><a href='view/admin/marksheet/meritmarksheet.php'><span>Marksheet & All Info </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/marksheet/allSubMarkAdd.php'><span>Add All Subject Marks </span></a></li>
                            <li><a href='view/admin/marksheet/editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/marksheet/deleteStuMark.php'><span>Delete</span></a></li>
                            
                          <!--  <li><a href='view/admin/marksheet/markAdd.php'><span>বিষয় ভিত্তিক নাম্বার পুরাতন</span></a></li>
                            <li><a href='view/admin/marksheet/markShow.php'><span>শিক্ষার্থীর মার্কশীট পুরাতন</span></a></li>
                            <li><a href='#'><span>সর্বোচ্চ নাম্বার</span></a></li>
                            <li><a href='view/admin/marksheet/markUpdateform.php'><span>সংশোধন করা পুরাতন</span></a></li> -->

                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                    
                </ul>
                
               

      <li class="treeview">
         <a href="javascript:void(0)">
            <i class="fa fa-share"></i> <span>Class 9 to 10</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">
                
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Science 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/ninetenmarksheet/science/meritmarksheet.php'><span>Dashboard</span></a></li>
                    <li><a href='view/admin/ninetenmarksheet/science/allmerit.php'><span>All Marksheet(Class wise) </span></a></li>
                    <li><a href='view/admin/ninetenmarksheet/science/meritmarksheet.php'><span>Marksheet & All Info </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/ninetenmarksheet/science/allSubMarkAdd.php'><span>Add All Subject Marks </span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/science/editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/science/deleteStuMark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Humanities 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/ninetenmarksheet/humanities/meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/humanities/meritmarksheet.php'><span>Marksheet & All Info </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/ninetenmarksheet/humanities/allSubMarkAdd.php'><span>Add All Subject Marks  </span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/humanities/editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/humanities/deleteStuMark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Commerce
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/ninetenmarksheet/commerce /meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/commerce /meritmarksheet.php'><span>Marksheet & All Info </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/ninetenmarksheet/commerce /allSubMarkAdd.php'><span>Add All Subject Marks</span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/commerce /editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/ninetenmarksheet/commerce /deleteStuMark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                </ul>
            </li>
        </ul>


    </li>

     <li class="treeview">
         <a href="javascript:void(0)">
            <i class="fa fa-share"></i> <span>Class 11 to 12</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">
                
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Science 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/hscmarksheet/science/meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/hscmarksheet/science/meritmarksheet.php'><span>Marksheet & All Info  </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/hscmarksheet/science/allSubMarkAdd.php'><span>Add All Subject Marks</span></a></li>
                            <li><a href='view/admin/hscmarksheet/science/editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/hscmarksheet/science/deleteStuMark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Humanities 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/hscmarksheet/humanities /meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/hscmarksheet/humanities /meritmarksheet.php'><span>Marksheet & All Info </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/hscmarksheet/humanities /allSubMarkAdd.php'><span>Add All Subject Marks </span></a></li>
                            <li><a href='view/admin/hscmarksheet/humanities /editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/hscmarksheet/humanities /deleteStuMark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i>Commerce
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href='view/admin/hscmarksheet/commerce /meritmarksheet.php'><span>Dashboard</span></a></li>
                            <li><a href='view/admin/hscmarksheet/commerce /meritmarksheet.php'><span>Marksheet & All Info</span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/hscmarksheet/commerce /allSubMarkAdd.php'><span>Add All Subject Marks  </span></a></li>
                            <li><a href='view/admin/hscmarksheet/commerce /editallSubMarkSearch.php'><span>Edit</span></a></li>
                            <li><a href='view/admin/hscmarksheet/commerce /deleteStuMark.php'><span>Delete</span></a></li>
                            
                          
                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>Report</span></a></li>
                        
                </ul>
            </li>
        </ul>


    </li>
    
            </li>
        </ul>


    </li>
            
                <!-- <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>মার্কসশীট </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href='view/admin/marksheet/meritmarksheet.php'><span>ড্যাশ বোর্ড</span></a></li>
                            <li><a href='view/admin/marksheet/meritmarksheet.php'><span>মার্কশীট এবং সকল তথ্য </span></a></li>
                            

                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>

                            
                            
                            <li><a href='view/admin/marksheet/allSubMarkAdd.php'><span>সকল বিষয়ের নম্বর যোগ করা  </span></a></li>
                            <li><a href='view/admin/marksheet/editallSubMarkSearch.php'><span>সংশোধন করা </span></a></li>
                            <li><a href='view/admin/marksheet/deleteStuMark.php'><span>ডিলিট করা</span></a></li>
                            
                            <li><a href='view/admin/marksheet/markAdd.php'><span>বিষয় ভিত্তিক নাম্বার পুরাতন</span></a></li>
                            <li><a href='view/admin/marksheet/markShow.php'><span>শিক্ষার্থীর মার্কশীট পুরাতন</span></a></li>
                            <li><a href='#'><span>সর্বোচ্চ নাম্বার</span></a></li>
                            <li><a href='view/admin/marksheet/markUpdateform.php'><span>সংশোধন করা পুরাতন</span></a></li>

                        <?php } ?>

                            

                            <li><a href='javascript:void(0)'><span>রিপোর্ট</span></a></li>
                        
                    </ul>
                </li> -->

             <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Tabulation Sheet</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="view/admin/tabulationsheet/index.php"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                       

                  <?php  
                      if($_SESSION['type'] == 'administrator'){
                  ?>

                        <li><a href="view/admin/tabulationsheet/onetofive.php"><i class="fa fa-circle-o"></i> Class 1 to 5 </a></li>
                        <li><a href="view/admin/tabulationsheet/sixtoeight.php"><i class="fa fa-circle-o"></i> Class 6 to 8 </a></li>
                        <li><a href="view/admin/tabulationsheet/ninetenscience.php"><i class="fa fa-circle-o"></i> Class 9 to 10 - Science </a></li>
                        <li><a href="view/admin/tabulationsheet/ninetoten.php"><i class="fa fa-circle-o"></i> Class 9 to 10 - Humanities</a></li>
                        <li><a href="view/admin/tabulationsheet/ninetoten.php"><i class="fa fa-circle-o"></i> Class 9 to 10 - Commerce </a></li>
                        <li><a href="view/admin/tabulationsheet/nineten.php"><i class="fa fa-circle-o"></i> Class 9 to 10 ( All Sudents) </a></li>

                  <?php } ?>

                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                        
                    </ul>
                </li>

             <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Grade Sheet</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="view/admin/gradeset/allStuGradeNum.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
                       <li><a href="view/admin/gradeset/allStuGradeNum.php"><i class="fa fa-circle-o"></i> All Student With GPA</a></li>
                        <!-- <li><a href="#"><i class="fa fa-circle-o"></i> মার্কস অনুযায়ী গ্রেড সেটিংস </a></li> -->
                  <?php  
                      if($_SESSION['type'] == 'administrator'){
                  ?>

                        <li><a href="view/admin/marksheet/editallSubMarkSearch.php"><i class="fa fa-circle-o"></i> Edit</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>

                  <?php } ?>

                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                        
                    </ul>
                </li>


                
                

                    <li class="treeview  ">
                        <a href="javascript:void(0)">
                            <i class="fa fa-folder"></i> <span>Testimonial</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="view/admin/testimonial/index.php"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                            <li><a href="view/admin/testimonial/index.php"><i class="fa fa-circle-o"></i>Testimonial(SSC)</a></li>
                            <li><a href="view/admin/testimonial/findtestimonial.php"><i class="fa fa-circle-o"></i>Search</a></li>
                            
                           
                        </ul>
                    </li>
                    <li class="treeview  ">
                        <a href="javascript:void(0)">
                            <i class="fa fa-folder"></i> <span>TC </span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="view/admin/transferCertificate/index.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
                            <li><a href="view/admin/transferCertificate/index.php"><i class="fa fa-circle-o"></i>Issue TC  </a></li>
                        </ul>
                    </li>

                        <li class="treeview  ">
                            <a href="javascript:void(0)">
                                <i class="fa fa-folder"></i> <span>Library </span>
                                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="view/admin/library/allbook.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                                <li><a href="view/admin/library/index.php"><i class="fa fa-circle-o"></i>Add New Book</a></li>
                                <li><a href="view/admin/library/borrowBook.php"><i class="fa fa-circle-o"></i>Take books by the students </a></li>
                                <li><a href="view/admin/library/issuebooksearch.php"><i class="fa fa-circle-o"></i> Books taken by the students  </a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                            </ul>
                        </li>
             
 <li class="treeview">
         <a href="javascript:void(0)">
            <i class="fa fa-share"></i> <span>Accounting </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">
                <a href="javascript:void(0)"><i class="fa fa-share"></i> About the student
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="view/admin/calculation/student/index.php"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                    <li><a href="view/admin/calculation/student/allstudentfee.php"><i class="fa fa-circle-o"></i>Tution & Others Fee </a></li>
                    <li><a href="view/admin/calculation/student/"><i class="fa fa-circle-o"></i> Exam Fee Rating </a></li>
                    <li><a href="view/admin/calculation/student/"><i class="fa fa-circle-o"></i> Total Fees </a></li>
                    <li><a href="view/admin/calculation/student/"><i class="fa fa-circle-o"></i> Arrear Details </a></li>
                    <li><a href="view/admin/calculation/student/"><i class="fa fa-circle-o"></i> Edit </a></li>
                    <li><a href="view/admin/calculation/student/"><i class="fa fa-circle-o"></i> Delete</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                   
                    
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i> About the Officers/Employees
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Salary </a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>

                    
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i>Daily cost calculation
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Daily consumption </a></li>
                     <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete </a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                    
                    
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Bank Account
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Daily collection amount </a></li>
                     <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Deposit</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Withdraw </a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Existence </a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Add New Bank Account</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                    
                </ul>
            </li>
        </ul>


    </li>
                
                <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Examination Schedule</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Dashboard </a></li>
                        <li><a href="view/admin/exam/index.php"><i class="fa fa-circle-o"></i> Examination Routine</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Examination Routine(Shift Wise) </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Seat Plan</a></li>
                        
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Admit Card </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                        
                    </ul>
                </li>
                 <li class="treeview">
         <a href="javascript:void(0)">
            <i class="fa fa-share"></i> <span>Routine</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="treeview">
                <a href="javascript:void(0)"><i class="fa fa-share"></i> Teacher's Routine
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>List of Class Teachers </a></li>
                    <li><a href="javascript:void(0)"><i class="fa-circle-o"></i> Edit</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                   
                    
                </ul>
                <a href="javascript:void(0)"><i class="fa fa-share"></i>Student's Routine
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                    <li><a href="view/admin/routine/index.php"><i class="fa fa-circle-o"></i> Class Routine</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Examination Routine</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>

                    
                </ul>
            </li>
        </ul>


    </li>


          <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Promotion </span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="view/admin/promotion/index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                        <li><a href="view/admin/promotion/index.php"><i class="fa fa-circle-o"></i>Promotion</a></li>
                        
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                        
                    </ul>
                </li>
               
            
                <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Progress Card </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Dashboard </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Add New Name </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                       
                    </ul>
                </li>
               
              
               
                
                <!-- <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>অভিভাবক সাক্ষাতের তথ্যাবলী  </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> ড্যাশ বোর্ড </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> অভিভাবকের নাম</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> শিক্ষার্থীর নাম </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> ক্লাস </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> শিফট </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> সেকশন </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> রোল </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> সিদ্ধান্ত </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> সংশোধন করা </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> ডিলিট করা </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> রিপোর্ট </a></li>
                    </ul>
                </li> -->
                
                <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Hostel Service</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                         <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Dashboard</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Add New Name</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Residential fees</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Meal Charge</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                    </ul>
                </li>
                <li class="treeview  ">
                    <a href="javascript:void(0)">
                        <i class="fa fa-folder"></i> <span>Transport Service</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i>Dashboard</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Add New Name</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Transportation costs</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Edit </a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Delete</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
                    </ul>
                </li>

        <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Report </a></li>
             
        
      

     
    
            </li>
        </ul>


    </li>
















            </ul> 
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

   <script type="text/javascript">

        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-59955232-1'}, 'google_translate_element');
        }
        </script>
        
