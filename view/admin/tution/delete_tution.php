<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Tution\Tution;

$gov = new Tution();

$data = $gov->set($_GET);
$gov->delete($data);
?>