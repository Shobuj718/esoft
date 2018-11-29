
<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);

include_once '../../../vendor/autoload.php';

use App\Admin\Attendance\TeacherAttendance;

$attendance = new TeacherAttendance();

echo "<pre>";
var_dump($_POST);
$name         = $_POST['name'];
$mobile       = $_POST['mobile'];
$index_number = $_POST['index_number'];
$eduquali     = $_POST['eduquali'];
$designation  = $_POST['designation'];
$attend       = $_POST['attend'];
$id           = $_POST['unique_id'];

//die();
$attendance->insert($name);
//$result = $attendance->set($_POST)->AttendTaken($name, $mobile, $index_number, $eduquali, $designation, $attend, $id);	


echo "<pre>";
var_dump($result);
die();
