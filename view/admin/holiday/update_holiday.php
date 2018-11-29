<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\Holiday\Holiday;

$gov = new Holiday();

$data = $gov->set($_POST);
$gov->update($data);

?>