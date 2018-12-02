
<?php
// echo "<pre>";
// var_dump($_POST);
// var_dump($_FILES);


include_once '../../../vendor/autoload.php';
use App\Admin\News\News;
use App\Helper;

$helper = new Helper();
$news = new News();

if(!empty($_FILES['image']['name'])){
    
    $_POST['image'] = $news->image_upload();
    $data = $news->set($_POST);
    $news->insert();
}
else{
    $data = $news->set($_POST)->insert();  
     
}
