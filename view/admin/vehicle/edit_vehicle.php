<?php include_once '../includes/header.php'; 
include_once '../../../vendor/autoload.php';
use App\Admin\Vehicle\Vehicle;

$gov = new Vehicle();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <?php         
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_SESSION['message'])){
                echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                session_unset();
            }
            ?>
            <form action="view/admin/vehicle/update_vehicle.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit vehicle</h3>
                <hr /> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Number of vehicle :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="vehicle" class="form-control" value="<?php echo $data['vehicle']?>" />
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <img src="view/admin/uploads/vehicle/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"  onchange="readURL2(this);" />
                            <img id="blah2" src="#" alt=" " />
                        </div>
                    </div>
                </div> 
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/footer.php' ?>
