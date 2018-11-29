
<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Admin\Basic\Basic;

$gov = new Basic();
$value = $gov->view();
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
         <h3 class="text-center" style="color: #2559ee">Basic Information </h3>
         <hr />
        <?php
        if(isset($_GET['message'])){
                echo "<div class='alert alert-success'>".$_GET['message']."</div>";
                session_unset();
            }
        if(isset($_SESSION['message'])){
                echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                 session_unset();
            }
        ?>
        <div class="col-md-12">   
             <div class="box">            
          <div class="box-body">        
            <table class="table table-bordered" id="dataTable" table-striped>
              <thead>
               <tr>
                <th>Id</th>
                <th>Name of School</th>
                <th>Founder Name</th>
                <th>Year of Establishment</th>
                <th>Thana</th>
                <th>District</th>
                <th>Image</th>
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
                    <td><?php echo $data['school_name'] ?></td>
                    <td><?php echo $data['founder'] ?></td>
                    <td><?php echo $data['year'] ?></td>
                    <td><?php echo $data['thana'] ?></td>
                    <td><?php echo $data['district'] ?></td>
                    <td><img src="view/admin/uploads/basic/<?php echo $data['image']?>" width="100" height="100"></td>
                    <td>
                        <a class="btn btn-success btn-xs" href="view/admin/basic/edit_basic_info.php?id=<?php echo $data['unique_id'] ?>">edit</a>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete this person')" href="view/admin/basic/delete_basic_info.php?id=<?php echo $data['unique_id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
              </tbody>
            </table>
            </div> 
            </div>   
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/footer.php' ?>

Basic