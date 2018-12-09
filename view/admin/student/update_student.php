<?php 

include_once '../../../vendor/autoload.php';

use App\Admin\Student\Student;

$student = new Student();

/*
echo "<pre>";
var_dump($_POST);
var_dump($_FILES);
die();*/

$_SESSION['data']  = $_POST;
$_SESSION['image_data'] = $_FILES;

/*var_dump($_SESSION['data']);
var_dump($_SESSION['image_data']);
echo $_SESSION['data']['sex'];
echo $_SESSION['data']['student_name'];
echo $_SESSION['image_data']['student_image']['name'];
die();*/

if(!empty($_FILES['student_image']) && !empty($_FILES['father_image']) && !empty($_FILES['mother_image'])){
    
    $student->student_info_insert($_POST);

}
else{
    $student->student_info_insert($_POST);  
 	   
}

