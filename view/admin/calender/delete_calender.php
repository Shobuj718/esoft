<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Calender\Calender;

$gov = new Calender();

$data = $gov->set($_GET);
$gov->delete($data);
?>