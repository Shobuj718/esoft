
<?php
    

/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */

include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';

use App\Admin\Auth\Auth;

$auth = new Auth();

$data = $auth->recent_entry();




?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   All User Information
                    <!-- <small>advanced tables</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">To View User Info click View button(right)</h3>
                            <?php  
                                if($_SESSION['type'] == 'administrator'){
                            ?>
                                <a href="javascript:void(0);"><h3 class="box-title pull-right btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Add New User</h3></a>
                            <?php
                              }
                            ?>
                                <?php
            if(isset($_SESSION['success'])){
                echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                unset($_SESSION['success']);
            }
            if(isset($_SESSION['delete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['update'])){
                echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
                unset($_SESSION['update']);
            }


            ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Join_Date</th>
                            <th>Join_Time</th>
                            <th>Image</th>
							 <th>Action</th>                         
                        </tr>
                        </thead>
                       <tbody>
                    <?php
                    $sl = 1;
                    foreach ($data as $result) {
                        ?>
                           <tr>
                               <td><?php echo $sl++?></td>
                               <td><?php echo $result['userName']?></td>
                               <td><?php echo $result['userEmail']?></td>
                               <td>
	                               	<?php 
	                               		$date = $result['created_at'];
	                               		$date = explode(' ', $date);
	                               		echo $date['0'];
	                                ?>                                	
                                </td>
                               <td>
	                               	<?php 
	                               		$date = $result['created_at'];
	                               		$date = explode(' ', $date);
	                               		echo $date['1'];
	                                ?>                                	
                                </td>


                                <td>
                                   <img src="view/admin/uploads/<?php echo $result['student_image']?>" width="100" alt="no image">
                               </td>
							   
                               <td>

                      <?php  
                          if($_SESSION['type'] == 'administrator'){
                      ?>
                      
                         <a style="color: black" class="btn btn-info btn-sm btn-flat" href="view/admin/StudentInfo/showStudent.php?show=<?php echo $result['unique_id']?>">View</a> 

                       | <a  class="btn btn-success btn-sm btn-flat" href="view/admin/StudentInfo/editStudent.php?edit=<?php echo $result['unique_id']; ?>"><i class='fa fa-edit'></i>Edit</a> |
                        <a onclick="return confirm('Are you sure to Delete'); " class="btn btn-danger btn-sm btn-flat" href="view/admin/StudentInfo/deleteStudent.php?del=<?php echo $result['unique_id']; ?>"><i class='fa fa-trash'></i>Delete</a>

                    <?php
                      }
                    ?>
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