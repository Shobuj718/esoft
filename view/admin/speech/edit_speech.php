<?php include_once '../includes/header.php'; 

include_once '../../../vendor/autoload.php';
use App\Admin\Speech\Speech;

$gov = new Speech();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>

<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <form action="view/admin/speech/update_speech.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Update Principle Message </h3>
                <hr />
                    <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_GET['message'])){
                echo "<div class='alert alert-success'>".$_GET['message']."</div>";
               // session_unset();
            }


            ?> 
                <div class="row">
                  <div class="box-body pad">
                        <textarea class="textarea" name="principle_speech" required placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $data['principle_speech'] ?>              
                        </textarea>
                  </div>  
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4">*</font> </label>
                             <img src="view/admin/uploads/speech/<?php echo $data['image'] ?>" width="100" height="100"/>
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

