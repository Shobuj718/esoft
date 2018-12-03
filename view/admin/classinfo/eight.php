<?php include_once '../includes/header.php'; ?>

<?php 
    
    include_once '../../../vendor/autoload.php' ;

    use App\Admin\Section\Section;
    $section = new Section();
    $results = $section->selectClassEightSection();

 ?>


<section class="content">
	 <!-- START CUSTOM TABS -->
      <h2 class="page-header">Class Eight All Section</h2>

      <div class="row">
       
        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-left">
            
             <li><a href="view/admin/classinfo/allsection.php"  >All Section</a></li>
              <li><a href="view/admin/classinfo/one.php" >One</a></li>
              <li><a href="view/admin/classinfo/two.php">Two</a></li>
              <li><a href="view/admin/classinfo/three.php">Three</a></li>
               <li><a href="view/admin/classinfo/four.php">Four</a></li>
              <li><a href="view/admin/classinfo/five.php">Five</a></li>
              <li><a href="view/admin/classinfo/six.php">Six</a></li>
              <li><a href="view/admin/classinfo/seven.php">Seven</a></li>
              <li class="active"><a href="view/admin/classinfo/eight.php">Eight</a></li>
              <li><a href="view/admin/classinfo/nine.php">Nine</a></li>
              <li><a href="view/admin/classinfo/ten.php">Ten</a></li>

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
                                <a href="view/admin/classinfo/addsection.php"><h3 class="box-title pull-right btn btn-primary"><i class="fa fa-plus"></i> Add New </h3></a>
                        <?php } ?>
                            </div>

                 

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




<?php include_once '../../includes/footer.php'; ?>