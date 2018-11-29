
<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Admin\Tution\Tution;

$gov = new Tution();
$value = $gov->view();
?>
     <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tution Fees & Scholarship
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
                                
                                <a href="view/admin/tution/add_tution.php"><h3 class="box-title pull-right btn btn-primary">Add New </h3></a>
                            </div>

                <?php
            if(isset($_SESSION['message'])){
                echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
               unset($_SESSION['message']);
            }
            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                         <th>Id</th>
                                          <th>Title</th>
                                          <th>Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                   <?php 
                                       $i = 1;
                                       foreach($value as $data){
                                   ?>
                                   <tr>
                                       <td><?php echo $i++ ?></td>
                                       <td><?php echo $data['achievement'] ?></td>
                                       <td>
                                           <a class="btn btn-success btn-xs" href="view/admin/tution/edit_tution.php?id=<?php echo $data['unique_id'] ?>">edit</a>
                                           <a class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete this person')" href="view/admin/news/delete_tution.php?id=<?php echo $data['unique_id'] ?>">Delete</a>
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
            </section>
            <!-- /.content -->
<?php  include '../includes/footer.php' ?>

