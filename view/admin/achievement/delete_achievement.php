<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Achievement\Achievement;

$gov = new Achievement();

$data = $gov->set($_GET);
$gov->delete($data);
?>