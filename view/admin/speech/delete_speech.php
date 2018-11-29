<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Speech\Speech;

$gov = new Speech();

$data = $gov->set($_GET);
$gov->delete($data);
?>