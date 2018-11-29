

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);
include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';

use App\Admin\Attendance\TeacherAttendance;

$teacher = new TeacherAttendance();

$results = $teacher->TeacherSelect();

/*echo "<pre>";
var_dump($data);
die();*/

/*$db = new PDO('mysql:host=localhost;dbname=sphsg;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$query = "SELECT * FROM teacher_data WHERE status=1 ";
$stmt = $db->prepare($query);
$results = $stmt->execute();
*/
?>

   
<div class="col-md-12">

  <div class="row">
    <div class="content">


     <form action="view/admin/teacherAttendance/AttendStore.php" method="post">

    <div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-responsive" style="background: white">

            <tr>
                <td colspan="12" style="color:green;"><h2><center>Take Teacher Attendance</center></h2> 
                <?php echo "<hr>" ?>
                </td>

            </tr>





            <tr>
                <th class="text-left">Sl</th>
                <th class="text-left">Name</th>
                <th class="text-left">Designation</th>
                <th class="text-left">Qualificatin</th>
                <th class="text-left">Mobile</th>
                <th class="text-left">Index_No</th>
                <th class="text-left">Action</th>
            </tr>
            <?php
            $sl = 1;
            foreach ($results as $result) {
                ?>
                <tr class="text-left">
                    <td><?php echo $sl++?></td>
                    <td>
                        <?php echo $result['teacher_name']?>
                        <input type="hidden" name="unique_id" value="<?php echo $result['unique_id']?>">    
                    </td>
                    <td><input type="hidden" name="designation" value="<?php echo $result['designation']?>"> <?php echo $result['designation']?></td>
                    <td><input type="hidden" name="eduquali" value="<?php echo $result['eduquali']?>"> <?php echo $result['eduquali']?></td>
                    <td><input type="hidden" name="mobile" value="<?php echo $result['mobile']?>"> <?php echo $result['mobile']?></td>
                    <td><input type="hidden" name="index_number" value="<?php echo $result['index_number']?>"> <?php echo $result['index_number']?></td>
                      
                  
                    <td>
                        <input type="radio"  name="attend[<?php echo $result['mobile']; ?>]" value="present"  required="">P
                        <input type="radio" name="attend[<?php echo $result['mobile']; ?>]" value="absent"  required="">A
                        <input type="radio" name="attend[<?php echo $result['mobile']; ?>]" value="leave"  required="">L
                    </td>
                    
                </tr>
            <?php }/* } else { ?>
            <strong style="font-size: 25px; color: red">No Data available..</strong>
                <a class="btn btn-primary" href="view/admin/teacherAttendance/index.php">Back</a><br />
        <?php }*/ ?>
        </table>
    </div>
        <tr>
                <td colspan="">
                    <input type="submit" class="btn btn-info" name="submit" value="Save">
                    <input type="reset" class="btn btn-danger" name="reset" value="Reset">
                </td>
            </tr>

    </form>
    <?php
        header('location:view/admin/teacherAttendance/index.php');
    ?>
   </div> 
  </div> 
</div> 



<?php include_once '../includes/footer.php'?>