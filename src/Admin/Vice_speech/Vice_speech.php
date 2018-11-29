<?php 
namespace App\Admin\Vice_speech;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Vice_speech extends Connection{

	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('vice_speech', $data)){
			$this->vice_speech = $data['vice_speech'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/vice_speech/'.$image);
		return $image;
	}
	public function insert(){
			
		if(empty($this->image)){
			$query = $this->con->prepare("insert into vice_speech (vice_speech,unique_id,created_at) values(:vice_speech,:unique_id,:created_at)");
			$query->bindValue(':vice_speech', $this->vice_speech, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();

			if($query){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='vice_principle_speech.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("insert into vice_speech (vice_speech,image,unique_id,created_at) values(:vice_speech,:image,:unique_id,:created_at)");
			$query->bindValue(':vice_speech', $this->vice_speech, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
			
			if($query){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='vice_principle_speech.php'</script>";
			}
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from vice_speech where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from vice_speech where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from vice_speech where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/vice_speech/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/vice_speech/'.$data['image'])){
			unlink('../uploads/vice_speech/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){

			$query = $this->con->prepare("update vice_speech set vice_speech=:vice_speech,updated_at=:updated_at where status=:status and unique_id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':vice_speech',$this->vice_speech, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
			if($query){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='vice_principle_speech.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update vice_speech set vice_speech=:vice_speech,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':vice_speech',$this->vice_speech, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->execute();
			
			if($query){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='vice_principle_speech.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update vice_speech set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('vice_principle_speech.php','_self')</script>";
		}
	}

}