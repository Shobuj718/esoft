
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
    $folder = 'slide';
    $redirectfile = 'slideadd.php';
    $_POST['image'] = $helper->image_upload_dynamic($folder,$redirectfile);
    $data = $news->set($_POST);
    $news->insert_dynamically();
}
else{
    $data = $news->set($_POST)->insert_dynamically();  
     
}
