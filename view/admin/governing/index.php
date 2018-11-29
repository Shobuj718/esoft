
<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Admin\Governing\Governing;

$gov = new Governing();
$value = $gov->view();
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <?php
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
                <th>Name</th>
                <th>Designation</th>
                <th>Mobile Number</th>
                <th>Religion</th>
                <th>Email</th>
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
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['designation'] ?></td>
                    <td><?php echo $data['mobile_number'] ?></td>
                    <td><?php echo $data['religion'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><img src="view/admin/uploads/governing/<?php echo $data['image']?>" width="100" height="100"></td>
                    <td>
                        <a class="btn btn-warning btn-xs" href="view/admin/governing/details.php?id=<?php echo $data['unique_id'] ?>">Details</a>
                        <a class="btn btn-success btn-xs" href="view/admin/governing/edit.php?id=<?php echo $data['unique_id'] ?>">edit</a>
                        <a class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to delete this person')" href="view/admin/governing/delete_committe.php?id=<?php echo $data['unique_id'] ?>">Delete</a>
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

