<?php include_once '../includes/header.php'; 
include_once '../../../vendor/autoload.php';
use App\Admin\Book\Book;

$gov = new Book();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>
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
            <form action="view/admin/book/update_book.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                <h3 class="text-center" style="color: #2559ee">Edit Book</h3>
                <hr /> 
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Name of Book  :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="name" required class="form-control" value="<?php echo $data['name'] ?>"/>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Writer's Name  :<font color="red" size="4">*</font> </label>
                            <input type='text' id="" name="writer" required class="form-control" value="<?php echo $data['writer'] ?>"/>
                        </div>
                    </div>  
                </div> 
                <br />
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php  include '../includes/footer.php' ?>

