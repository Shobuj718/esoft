<?php 

namespace App;

use App\Connection;

use PDOExecption;
use PDO;

class Helper extends Connection
{

	// notice image deleted....
	public function img_delete($unique_id){
		$stmt = $this->con->prepare("select image from top_news where unique_id = :id ");
		$stmt->bindValue(':id', $unique_id, PDO::PARAM_STR);
		$stmt->execute();
		$image_name = $stmt->fetch(PDO::PARAM_STR);
		if(file_exists('../uploads/news/'.$image_name['image'])){
			unlink('../uploads/news/'.$image_name['image']);
		}
		
	}

	//  image deleted for dynamic table....
	public function img_delete_dynamic($unique_id, $table,$folder){
		$stmt = $this->con->prepare("select image from ".$table." where unique_id = :id ");
		$stmt->bindValue(':id', $unique_id, PDO::PARAM_STR);
		$stmt->execute();
		$image_name = $stmt->fetch(PDO::PARAM_STR);
		if(file_exists('../uploads/'.$folder.'/'.$image_name['image'])){
			unlink('../uploads/'.$folder.'/'.$image_name['image']);
		}
		
	}

	 // image upload funciton for all...
    public function image_upload_dynamic($folder,$redirectfile)
    {
        try {

            $uploadSecondTo = null;
            if (!empty($_FILES['image'])) {
                $image = $_FILES['image']['name'];
                $second_image_size = $_FILES['image']['size'];
                $second_image_tmp = $_FILES['image']['tmp_name'];

                $name =  substr(md5(time()),'0','10');
                $data = explode('.',$image);
                $image = $name.'.'.end($data);

                $permited = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc');
                $file_size = $_FILES['image']['size'];
                $div2 = explode('.', $image);
                $file_ext = strtolower(end($div2));


            if($file_size > 1048576){
                $imgSize = "Image size should be less then 1MB !!!";
                $_SESSION['imgSize'] = $imgSize;
                      echo "<script>window.location= '".$redirectfile."'</script>";

                die();
            }
            elseif (in_array($file_ext, $permited) == false) {
                $fileext = "You can upload only:-".implode(', ', $permited);
                $_SESSION['fileext'] = $fileext;
                     echo "<script>window.location= '".$redirectfile."'</script>";

                die();
            }


                $uploadSecondTo = "../uploads/".$folder."/" . $image;
                $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
                return $image;
            }

            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }

    // image upload for news only...
	public function image_upload($unique_id){

		$upload = null;
	 
	    $image = $_FILES['image']['name'];
	    $second_image_size = $_FILES['image']['size'];
	    $second_image_tmp = $_FILES['image']['tmp_name'];

	    $name =  substr(md5(time()),'0','10');
	    $data = explode('.',$image);
	    $image = $name.'.'.end($data);

	    $permited = array('jpg', 'jpeg', 'png', 'gif');
	    $file_size = $_FILES['image']['size'];
	    $div2 = explode('.', $image);
	    $file_ext = strtolower(end($div2));


		if($file_size > 1048576){
		    $imgSize = "Image size should be less then 1MB !!!";
		    $_SESSION['imgSize'] = $imgSize;
		         echo "<script>window.location= 'editnews.php?edit=".$unique_id."'</script>";

		    die();
		}
		elseif (in_array($file_ext, $permited) == false) {
		    $fileext = "You can upload only:-".implode(', ', $permited);
		    $_SESSION['fileext'] = $fileext;
		         echo "<script>window.location= 'editnews.php?edit=".$unique_id."'</script>";

		    die();
		}


		    $upload = "../uploads/news/" . $image;
		    $moveSecond = move_uploaded_file($second_image_tmp, $upload);
		    return $_POST['image'] = $image;
		}

 
}