<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 20-Nov-17
 * Time: 12:51 PM
 */

if(!isset($_SESSION)){
    session_start();
}


include_once '../../../vendor/autoload.php' ;

use App\admin\student\Student;
$student = new Student();

$id = $_GET['del'];

$student->DeleteStudent($id);
