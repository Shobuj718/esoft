<?php 
namespace App\Admin\Speech;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Speech extends Connection{

	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('principle_speech', $data)){
			$this->principle_speech = $data['principle_speech'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/speech/'.$image);
		return $image;
	}
	public function insert(){
			
		if(empty($this->image)){
			$query = $this->con->prepare("insert into principle_speech (principle_speech,unique_id,created_at) values(:principle_speech,:unique_id,:created_at)");
			$query->bindValue(':principle_speech', $this->principle_speech, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();

			if($query){
				$_SESSION['message']="You have inserted information";
				//echo "<script>window.open('add_principle_speech.php','_self')</script>";
				echo "<script>window.location='principle_speech.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("insert into principle_speech (principle_speech,image,unique_id,created_at) values(:principle_speech,:image,:unique_id,:created_at)");
			$query->bindValue(':principle_speech', $this->principle_speech, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
			
			if($query){
				$_SESSION['message']="You have inserted information";
				//echo "<script>window.open('add_principle_speech.php','_self')</script>";
				echo "<script>window.location='principle_speech.php'</script>";
			}
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from principle_speech where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from principle_speech where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from principle_speech where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/speech/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/speech/'.$data['image'])){
			unlink('../uploads/speech/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){

			$query = $this->con->prepare("update principle_speech set principle_speech=:principle_speech,updated_at=:updated_at where status=:status and unique_id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':principle_speech',$this->principle_speech, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->execute();
			if($query){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='principle_speech.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update principle_speech set principle_speech=:principle_speech,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':principle_speech',$this->principle_speech, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->execute();
			
			if($query){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='principle_speech.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update principle_speech set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('principle_speech.php','_self')</script>";
		}
	}

}