<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Book\Book;

$gov = new Book();

$data = $gov->set($_GET);
$gov->delete($data);
?>