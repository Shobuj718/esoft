<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Goal\Goal;

$gov = new Goal();

$data = $gov->set($_GET);
$gov->delete($data);
?>