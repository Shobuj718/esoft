<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Institution\Institution;

$gov = new Institution();

$data = $gov->set($_GET);
$gov->delete($data);
?>