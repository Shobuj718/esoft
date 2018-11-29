<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Vehicle\Vehicle;

$gov = new Vehicle();

$data = $gov->set($_GET);
$gov->delete($data);
?>