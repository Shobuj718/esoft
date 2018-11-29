<?php 

include_once '../../../vendor/autload.php';

use app/admin/Teacher/Teacher;

$teacher = new Teacher();


echo "<pre>";
var_dump($_POST);



/*if(issetif($_SERVER['REQUEST_METHOD'] == 'POST') {
	$mobile  = trim($_POST['mobile']);
	$fromdate = trim($_POST['fromdate']);
	$enddate  = trim($_POST['enddate']);

	// if teacher 1 day leave...update student data table attend rows...
	if($fromdate == $enddate){
		$data  = $teacher->teacherOneDayLeave($mobile, $fromdate);
	}

	// if fromdate greater than enddate...
	if($fromdate >= $enddate){
		$_SESSION['error'] = "Please Enter a valid date format(start and end date) !!!";
	}

	// if tacher 2 or more day leave.... update
	if($fromdate <= $enddate){
		// some code here...
	}
}*/
