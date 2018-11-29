<?php 

include_once '../../../vendor/autoload.php';
use App\Admin\News\News;

$gov = new News();

$data = $gov->set($_GET);
$gov->delete($data);
?>