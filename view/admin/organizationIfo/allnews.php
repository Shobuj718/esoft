

<?php

/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */

    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


use App\admin\News\News;
$news = new News();

$stmt = 'SELECT * FROM top_news where status = "1" ORDER by id DESC ';
$results = $news->select($stmt);




?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   All School Notice
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
                                <a href="view/admin/organizationIfo/topnews.php"><h3 class="box-title pull-right btn btn-primary">Add Notice</h3></a>
                            </div>

                <?php
            if(isset($_SESSION['notice'])){
                echo "<div class='alert alert-success'>".$_SESSION['notice']."</div>";
               unset($_SESSION['notice']);
            }if(isset($_SESSION['newsUpdate'])){
                echo "<div class='alert alert-info'>".$_SESSION['newsUpdate']."</div>";
                unset($_SESSION['newsUpdate']);
            }
            if(isset($_SESSION['delete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['newsDelete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['newsDelete']."</div>";
                unset($_SESSION['newsDelete']);
            }
            if(isset($_SESSION['update'])){
                echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
                unset($_SESSION['update']);
            }


            ?>

                            <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-body table-responsive no-padding">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Notice</th>
                                        <th>Details </th> 
                                        <th>Image</th>
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
                                            <td><?php echo $result['news']?></td>
                                            <td><?php echo $result['details']?></td> 

                                            <td>
                                                <img class="img-rounded" src="view/admin/uploads/news/<?php echo $result['image']?>" width="80" alt="no image">
                                            </td>
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                    <a style="color: "  class="btn btn-primary btn-sm btn-flat" href="view/admin/organizationIfo/showNews.php?show=<?php echo $result['unique_id']?>">View &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                <?php  
                    if($_SESSION['type'] == 'administrator'){
                ?>

                    <br />
                    <a  class="btn btn-success btn-sm btn-flat" href="view/admin/organizationIfo/editNews.php?edit=<?php echo $result['unique_id']?>"><i class="fa fa-edit"></i>Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                     <br />
                    <a onclick="return confirm('Are you sure to Delete'); " class="btn btn-danger btn-sm btn-flat" href="view/admin/organizationIfo/deleteNews.php?del=<?php echo $result['unique_id']?>"> <i class="fa fa-trash"></i> Delete</a>

                <?php } ?>
                                        </td>
                                       </tr>

                                <?php } ?>

                                   </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                          </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->



<?php  include '../includes/footer.php' ?>