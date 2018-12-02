<?php 
include_once '../../../vendor/autoload.php';

error_reporting(0);

 use App\admin\News\News;
 use App\Helper;

$news = new News();
$unique_id = $_POST['unique_id'];

if(!empty($_FILES['image']['name'])){
	$helper = new Helper();

	//$helper->img_delete($_POST['unique_id']);
	$folder       = 'slide';
    $redirectfile = 'allslide.php';
    $table        = 'slide';
	$helper->img_delete_dynamic($unique_id, $table,$folder);
	$_POST['image'] = $helper->image_upload_dynamic($folder,$redirectfile);
 	$result = $news->set($_POST);
 	$news->slideupdate();

}else{ 
	$result = $news->set($_POST)->slideupdate();
}
 
 
 
 