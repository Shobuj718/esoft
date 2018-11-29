
<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Admin\Institution\Institution;

$gov = new Institution();
$value = $gov->view();
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
         <h3 class="text-center" style="color: #2559ee">Vice Principle Messages </h3>
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
                <th>History</th>
                <th>Picture</th>
                <th>Village</th>
                <th>Post Office</th>
                <th>Thana</th>
                <th>District</th>
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
                    <td><textarea rows="10" cols="50"><?php echo $data['history'] ?></textarea></td>
                    <td><img src="view/admin/uploads/institution/<?php echo $data['image']?>" width="100" height="100"></td>
                    <td><?php echo $data['village'] ?></td>
                    <td><?php echo $data['post_office'] ?></td>
                    <td><?php echo $data['thana'] ?></td>
                    <td><?php echo $data['district'] ?></td>
                    <td>
                        <a class="btn btn-success btn-xs" href="view/admin/institution/edit_history.php?id=<?php echo $data['unique_id'] ?>">edit</a>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete this person')" href="view/admin/institution/delete_history.php?id=<?php echo $data['unique_id'] ?>">Delete</a>
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

