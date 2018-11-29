<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Class_room\Class_room;

$gov = new Class_room();

if($_FILES['image']['name']){
	$_POST['image'] = $gov->update_image($_POST['id'],$_FILES['image']);
	$data = $gov->set($_POST);
	$gov->update($data);
}
else{
	$data = $gov->set($_POST);
	$gov->update($data);
}
?>