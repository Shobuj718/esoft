 <?php 
 include '../includes/header.php';
 include_once '../../../vendor/autoload.php' ;
    use App\Admin\Section\Section;
    $section = new Section();
    $results = $section->selectAllSection();
?>


<section class="content">
     <!-- START CUSTOM TABS -->
      <h2 class="page-header">All Section</h2>

      <div class="row">
       
        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-left">
              <li class="active"><a href="view/admin/classinfo/allsection.php"  >All Section</a></li>
              <li><a href="view/admin/classinfo/one.php" >One</a></li>
              <li><a href="view/admin/classinfo/two.php">Two</a></li>
              <li><a href="view/admin/classinfo/three.php">Three</a></li>
              <li><a href="view/admin/classinfo/four.php">Four</a></li>
              <li><a href="view/admin/classinfo/five.php">Five</a></li>
              <li><a href="view/admin/classinfo/six.php">Six</a></li>
              <li><a href="view/admin/classinfo/seven.php">Seven</a></li>
              <li><a href="view/admin/classinfo/eight.php">Eight</a></li>
              <li><a href="view/admin/classinfo/nine.php">Nine</a></li>
              <li><a href="view/admin/classinfo/ten.php">Ten</a></li>
              <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li> -->
             </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                        <?php  
                          if($_SESSION['type'] == 'administrator'){
                        ?>
                                <a href="view/admin/classinfo/addsection.php"><h3 class="box-title pull-right btn btn-primary"> <i class="fa fa-plus"> Add New</i></h3></a>
                        <?php } ?>
                            </div>

          <?php
            if(isset($_SESSION['sectioninsert'])){
                echo "<div class='alert alert-success'>".$_SESSION['sectioninsert']."</div>";
                unset($_SESSION['sectioninsert']);
            }
            if(isset($_SESSION['sectiondelete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['sectiondelete']."</div>";
                unset($_SESSION['sectiondelete']);
            } 

          ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Class Name</th>
                                        <th>Section Name</th>
                                        <th>Nick Name </th>
                                         <th>Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                <?php
                                $sl = 1;
                                foreach ($results as $result) {
                                    ?>
                                       <tr>
                                           <td><?php echo $sl++?></td>
                                            <td><?php echo $result['class']?></td>
                                            <td><?php echo $result['section']?></td>
                                            <td><?php echo $result['nickname']?></td>
                                              
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                   <!--  <a class="btn btn-primary" href="javascript(void)">View</a> -->
              <?php  
                      if($_SESSION['type'] == 'user'){
                  ?>
                  <a class="btn btn-danger">Not Allowed</a>
              <?php } ?>
              
              <?php  
                  if($_SESSION['type'] == 'administrator'){
              ?>

                   <a  class="btn btn-info" href="view/admin/classinfo/editsection.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/classinfo/deletesection.php?del=<?php echo $result['unique_id']?>">Delete</a>

              <?php } ?>

                                        </td>
                                       </tr>

                                <?php } ?>

                                   </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
</section>


<?php include '../includes/footer.php'; ?>

 <?php  
/*
 include '../includes/header.php';
    
    include_once '../../../vendor/autoload.php' ;

    use App\Admin\Section\Section;
    $section = new Section();
    $results = $section->selectAllSection();
    
 ?>


            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Section 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Data tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <a href="view/admin/classinfo/addsection.php"><h3 class="box-title pull-right btn btn-primary"> <i class="fa fa-plus"></i> Add Section </h3></a>
                            </div>

                <?php
            if(isset($_SESSION['sectioninsert'])){
                echo "<div class='alert alert-success'>".$_SESSION['sectioninsert']."</div>";
                unset($_SESSION['sectioninsert']);
            }
            if(isset($_SESSION['sectiondelete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['sectiondelete']."</div>";
                unset($_SESSION['sectiondelete']);
            } 

            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                               <div class="box-body table-responsive no-padding">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Class Name</th>
                                        <th>Section Name</th>
                                        <th>Nick Name </th>
                                         <th>Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                <?php
                                $sl = 1;
                                foreach ($results as $result) {
                                    ?>
                                       <tr>
                                           <td><?php echo $sl++?></td>
                                            <td><?php echo $result['class']?></td>
                                            <td><?php echo $result['section']?></td>
                                            <td><?php echo $result['nickname']?></td>
                                              
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                   <!--  <a class="btn btn-primary" href="javascript(void)">View</a> -->
        
                    <a  class="btn btn-info" href="view/admin/classinfo/editsection.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/classinfo/deletesection.php?del=<?php echo $result['unique_id']?>">Delete</a>
                                        </td>
                                       </tr>

                                <?php } ?>

                                   </tbody>

                                </table>
                            </div>
                          </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->




<?php  include '../includes/footer.php' ?>

*/