<?php include_once '../includes/header.php'; ?>

<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <?php         
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_SESSION['message'])){
                echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
                session_unset();
            }
            ?>
            <form action="view/admin/news/store_news.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center" style="color: #2559ee">Add New Notice</h3>
                <hr /> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Notice :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="news" class="form-control" placeholder="Enter New Notice" required />
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">File :<font color="red" size="4"> *</font> </label>
                            <input type='file' id="image" name="image" required  onchange="readURL2(this);" />
                            <img id="blah2" src="#" alt=" " />
                        </div>
                    </div>
                </div> 
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/footer.php' ?>

