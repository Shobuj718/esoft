<?php include_once '../includes/header.php'; 
include_once '../../../vendor/autoload.php';
use App\Admin\Holiday\Holiday;

$gov = new Holiday();
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
            <form action="view/admin/holiday/update_holiday.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Holidays</h3>
                <hr /> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Year:<font color="red" size="4">*</font> </label>
                            <select name="year" class="form-control">
                                <option value="">Select Year</option>
                                <?php
                                  for($year = 2018; $year <= date("Y"); $year++){
                                ?>     
                                  <option value="<?php echo $year ?>" <?php if($data['year'] == $year) echo "selected" ?> ><?php echo $year ?></option>
                                <?php
                                 }
                                ?>
                            </select>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Month:<font color="red" size="4">*</font> </label>
                            <select name="month" class="form-control" required>
                                <option value="">Select Month</option>
                            <?php
                              $months = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June',
                                        '07'=>'July','08'=> 'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December');
                               foreach($months as $value=>$month){
                            ?>
                                   <option value=<?php echo $value ?> <?php if ($data['month'] == $value) echo "selected" ?>><?php echo $month ?></option>
                            <?php
                               }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dates :(Ascending order)<font color="red" size="4"> </font> </label><br>
                            <input type="text" class="form-control" name="day" value="<?php echo $data['days'] ?>"/>
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

