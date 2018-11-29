<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Seat\Seat;

$gov = new Seat();

$data = $gov->set($_GET);
$gov->delete($data);
?>