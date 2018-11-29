
<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Admin\Class_room\Class_room;

$gov = new Class_room();
$value = $gov->view();
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
         <h3 class="text-center" style="color: #2559ee">Number of Class Room</h3>
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
                <th>Number of Class Room</th>
                <th>Picture</th>
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
                    <td><?php echo $data['class_room'] ?></td>
                    <td><img src="view/admin/uploads/class_room/<?php echo $data['image']?>" width="100" height="100"></td>
                    <td>
                        <a class="btn btn-success btn-xs" href="view/admin/class_room/edit_class_room.php?id=<?php echo $data['unique_id'] ?>">edit</a>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete this person')" href="view/admin/class_room/delete_class_room.php?id=<?php echo $data['unique_id'] ?>">Delete</a>
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

