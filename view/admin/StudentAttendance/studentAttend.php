
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

use App\Admin\Attendance\Attendance;

$attendance = new Attendance();

$_POST['year'] = date('Y');

$results = $attendance->set($_POST)->SelectStudent();

/*echo "<pre>";
var_dump($results);
die();*/

/*$db = new PDO('mysql:host=localhost;dbname=sphsg;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$class = $_POST['class'];
$shift = $_POST['shift'];
$branch = $_POST['branch'];
$department = $_POST['department'];
$year = date('Y');*/


//$query = "SELECT * FROM student_data WHERE class LIKE :class OR class_roll LIKE :roll";

/*$query = "SELECT * FROM student_data WHERE class LIKE :classes AND  shift LIKE :shifted AND branch LIKE :branches AND department LIKE :department AND status=1 order by class_roll asc";
$stmt = $db->prepare($query);
$stmt->bindValue(':classes', '%' . $class . '%', PDO::PARAM_INT);
$stmt->bindValue(':shifted', '%' . $shift . '%', PDO::PARAM_INT);
$stmt->bindValue(':branches', '%'. $branch. '%', PDO::PARAM_STR);
$stmt->bindValue(':department', '%'. $department. '%', PDO::PARAM_STR);
//$stmt->bindValue(':roll', '%' . $roll . '%', PDO::PARAM_STR);
$results = $stmt->execute();*/

?>

   
<div class="col-md-12">

  <div class="row">
    <div class="content">

    <?php
    /*$sl = 1;
    if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll();*/

    ?>

    <form action="view/admin/StudentAttendance/attendanceTaken.php" method="post"> 
     

    <div class="box-body table-responsive no-padding">
        <table class="table table-bordered table-responsive" style="background:white; ">

            <tr>
                <td colspan="12" style="color:green;"><h2><center>Take Student Attendance</center></h2>

                <?=  "<hr>"; ?>

                </td>

            </tr>





            <tr>
                <th class="text-center">Sl</th>
                <th class="text-center">Name</th>
                <th class="text-center">Class</th>
                <th class="text-center">Roll</th>
                <th class="text-center">Section</th>
                <th class="text-center">Action</th>
                <th class="text-center">ID</th>
                <th class="text-center">Department</th>
                <th class="text-center">Image</th>
            </tr>
            <?php
            $sl = 1;
//            if ($stmt->rowCount() > 0) {
//            $results = $stmt->fetchAll();

            foreach ($results as $result) {
                ?>
                <tr class="text-center">
                    <td><?php echo $sl++?></td>
                    <td style="text-align:left;"><?php echo $result['student_name']?></td>
                    <td><input type="hidden" name="class" value="<?php echo $result['class']?>"> <?php echo $result['class']?></td>
                    <td><?php echo $result['class_roll']?></td>
                    <td><input type="hidden" name="branch" value="<?php echo $result['branch']?>"> <?php echo $result['branch']?></td>

                     <td>
                        <input type="radio" required="" name="attend[<?php echo $result['class_roll']; ?>]" value="present">P
                        <input type="radio" required="" name="attend[<?php echo $result['class_roll']; ?>]" value="absent">A
                        <input type="radio" required="" name="attend[<?php echo $result['class_roll']; ?>]" value="leave">L
                    </td>

                    <td><input type="hidden" name="student_id" value="<?php echo $result['student_id']?>"> <?php echo $result['student_id']?></td>
                    <td><input type="hidden" name="department" value="<?php echo $result['department']?>"> <?php echo $result['department']?></td>
                    

                    <td>
                        <img class="img-rounded" src="view/admin/uploads/<?php echo $result['student_image']?>" width="80" alt="no image">
                    </td>
                   
                   
                </tr>
            <?php }/* } else { 
           //  <strong style="font-size: 25px; color: red">No Data available..</strong>
           //      <a class="btn btn-primary" href="view/admin/StudentAttendance/searchForTakeAttendance.php">Back</a><br /> 
                $_SESSION['attErr'] = "Value Does not match !!!";
                echo "<script>window.location='view/admin/StudentAttendance/searchForTakeAttendance.php'</script>";
      }*/ ?>
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
        header('location:view/admin/StudentAttendance/searchForTakeAttendance.php');
    ?>
   </div> 
  </div> 
</div> 



<?php include_once '../includes/footer.php'?>