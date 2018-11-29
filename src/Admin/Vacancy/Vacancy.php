<?php 
namespace App\Admin\Vacancy;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Vacancy extends Connection{

	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('vacancy', $data)){
			$this->vacancy = $data['vacancy'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/vacancy/'.$image);
		return $image;
	}
	public function insert(){
			
		$query = $this->con->prepare("insert into vacancy (vacancy,image,unique_id,created_at) values(:vacancy,:image,:unique_id,:created_at)");
		$query->bindValue(':vacancy', $this->vacancy, PDO::PARAM_STR);
		$query->bindValue(':image', $this->image, PDO::PARAM_STR);
		$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
		$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->execute();
			
		if($query){
			$_SESSION['message']="You have inserted information";
			echo "<script>window.location='add_vacancy.php'</script>";
		}
				
	}
	public function view(){
		$query = $this->con->prepare("select * from vacancy where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from vacancy where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from vacancy where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/vacancy/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/vacancy/'.$data['image'])){
			unlink('../uploads/vacancy/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){
			$query = $this->con->prepare("update vacancy set vacancy=:vacancy,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':vacancy', $this->vacancy, PDO::PARAM_STR);
			$query->bindValue(':updated_at', date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			$query->execute();
			if($query){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='vacancy.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("update vacancy set vacancy=:vacancy,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':vacancy', $this->vacancy, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->execute();
			
			if($query){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='vacancy.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update vacancy set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('vacancy.php','_self')</script>";
		}
	}

}