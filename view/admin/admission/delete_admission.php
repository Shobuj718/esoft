<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Admission\Admission;

$gov = new Admission();

$data = $gov->set($_GET);
$gov->delete($data);
?>