<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Basic\Basic;

$gov = new Basic();

$data = $gov->set($_GET);
$gov->delete($data);
?>