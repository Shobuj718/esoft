

<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


use App\admin\News\News;
$news = new News();

$id = $_GET['show'];

$result = $news->slideSelect($id);


//error_reporting(0);




?>

        <br />
         <h2 style="text-align: center;padding-right:50px;color:green;" ><strong>Notice :</strong></h2>

        <h3 style="text-align: center; padding-right:50px;"> <strong style="color:red;">Summary  : </strong><?php echo $result['news']?></h3>
        <div style="text-align: center; padding-right:50px" class="form-group">
            <img src="view/admin/uploads/slide/<?php echo $result['image']?>" class="img-rounded" width="100" alt="no image">

        </div>

        
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <p> <strong style="color:black">Details :</strong> <?= $result['details']; ?></p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br /> 
                     
                </div>

        </div>
         

<?php  include '../includes/footer.php' ?>