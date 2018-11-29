<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Class_room\Class_room;

$gov = new Class_room();

$data = $gov->set($_GET);
$gov->delete($data);
?>