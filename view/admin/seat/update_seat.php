<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Seat\Seat;

$gov = new Seat();

if($_FILES['file']['name']){
	$_POST['file'] = $gov->update_image($_POST['id'],$_FILES['file']);
	$data = $gov->set($_POST);
	$gov->update($data);
}
else{
	$data = $gov->set($_POST);
	$gov->update($data);
}
?>