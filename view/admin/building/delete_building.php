<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Building\Building;

$gov = new Building();

$data = $gov->set($_GET);
$gov->delete($data);
?>