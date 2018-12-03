<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

 
 
    use App\admin\Subject\Subject;
    $subject = new Subject();
    $results  = $subject->selectAllSub();



?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Subject
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
                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>
                                <a href="view/admin/classinfo/newsubadd.php"><h3 class="box-title pull-right btn btn-primary"><i class="fa fa-plus"></i> Add New</h3></a>
                         <?php } ?>

                            </div>

                <?php
            if(isset($_SESSION['addsub'])){
                echo "<div class='alert alert-success'>".$_SESSION['addsub']."</div>";
                unset($_SESSION['addsub']);
            }
            if(isset($_SESSION['deletesub'])){
                echo "<div class='alert alert-danger'>".$_SESSION['deletesub']."</div>";
                unset($_SESSION['deletesub']);
            }
            if(isset($_SESSION['updatesub'])){
                echo "<div class='alert alert-info'>".$_SESSION['updatesub']."</div>";
                unset($_SESSION['updatesub']);
            }


            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                               <div class="box-body table-responsive no-padding">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Subject_Name</th>
                                        <th>Department </th>
                                        <th>Subject_Code</th>
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
                                            <td><?php echo $result['subject']?></td>
                                            <td><?php echo $result['department']?></td>
                                            <td><?php echo $result['subcode']?></td>
                                             
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

        
                    <a  class="btn btn-info" href="view/admin/classinfo/editsubject.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/classinfo/deletesubject.php?del=<?php echo $result['unique_id']?>">Delete</a>
                    
                <?php } ?>

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