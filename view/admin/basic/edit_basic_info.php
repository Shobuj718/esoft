<?php include_once '../includes/header.php'; 
include_once '../../../vendor/autoload.php';
use App\Admin\Basic\Basic;

$gov = new Basic();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>
<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <form action="view/admin/basic/update_basic_info.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Add Basic Information </h3>
                <hr />
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
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group">
                            <label for="">Name of Institution<font color="red" size="4">*</font> </label>
                            <input type="text" name="school_name" class="form-control" value="<?php echo $data['school_name'] ?>" id="" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Founder<font color="red" size="4">*</font> </label>
                           <input type="text" name="founder" class="form-control" value="<?php echo $data['founder'] ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Thana<font color="red" size="4">*</font> </label>
                           <input type="text" name="thana" class="form-control" value="<?php echo $data['thana'] ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">District<font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" name="district" value="<?php echo $data['district'] ?>" required>
                        </div>
                    
                    </div>
                    <div class="col-md-6">    
                         <div class="form-group">
                            <label for="">Year Of Establishment<font color="red" size="4">*</font> </label>
                            <select name="year" class="form-control">
                            	<?php
                            		 for($year = 1900; $year <= date('Y'); $year++){
                                 ?>
                            			<option value="<?php echo $year ?>" <?php if($data['year'] == $year) echo "selected" ?>><?php echo $year ?></option>

                           	    <?php }?>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <img src="view/admin/uploads/basic/<?php echo $data['image'] ?>" width="100" height="100"/>
                            <input type='file' id="image" name="image"   onchange="readURL2(this);" />
                            <img id="blah2" src="#" alt=" " />
                        </div>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/footer.php' ?>

