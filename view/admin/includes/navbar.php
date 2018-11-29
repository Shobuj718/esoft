<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Auth\Auth;

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