
<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>

<?php 
    
    use App\admin\News\News;
    $news = new News();

    $id = $_GET['edit'];
    $result = $news->slideSelect($id);

 ?>



<div class="col-md-12">

  <div class="container" style="width: 100%; background: 374850">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
            <form action="view/admin/organizationIfo/updateslide.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Update Slider Image   </h3>
                <hr />
                   


 				<div class="row">
 					<div class="col-lg-8 col-md-offset-2">
 						 <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                unset($_SESSION['imgSize']);
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                unset($_SESSION['fileext']);
            }


            ?>
 					</div>
                   
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="">Notice :<font color="red" size="4">*</font> </label>
                            <input type="text" name="news" class="form-control" value="<?= $result['news']; ?>" id="" required="required">

                            <input type="hidden" name="image" class="form-control" value="<?= $result['image']; ?>" id=""  >

                            <input type="hidden" name="unique_id" class="form-control" value="<?= $result['unique_id']; ?>" id=""  >

                        </div>

                         <div class="form-group">
                            <label for="">Details  : </label>
                            <textarea class="form-control" name="details" rows="5" id=""><?= $result['details']; ?></textarea>
                        </div>
 
                        <div class="form-group">
                            <label for="">Upload Image/PDF : </label>
                            <input type='file' name="image"   onchange="readURL(this);"   />
                            <img width="120" id="blah" src="view/admin/uploads/slide/<?= $result['image']; ?>" alt=" " />
                        </div>


             

                        <br />

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">
                        </div>
                        
                      </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>





<?php  include '../includes/footer.php' ?>