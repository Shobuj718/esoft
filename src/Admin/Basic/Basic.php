<?php 
namespace App\Admin\Basic;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Basic extends Connection{

	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('school_name', $data)){
			$this->school_name = $data['school_name'];
		}
		if(array_key_exists('founder', $data)){
			$this->founder = $data['founder'];
		}
		if(array_key_exists('thana', $data)){
			$this->thana = $data['thana'];
		}
		if(array_key_exists('district', $data)){
			$this->district = $data['district'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('image', $data)){
			$this->image = $data['image'];
		}
		return $this;
	}
	public function image_upload($file){
		
		$image = rand(10000,90000).$file['name'];
		move_uploaded_file($file['tmp_name'], '../uploads/basic/'.$image);
		return $image;
	}
	public function insert(){
			
		if(empty($this->image)){
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();

			if($query){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='add_basic_info.php'</script>";
			}
		}
		else{
			$query = $this->con->prepare("insert into basic_info (school_name,founder,thana,district,year,image,unique_id,created_at) values(:school_name,:founder,:thana,:district,:year,:image,:unique_id,:created_at)");
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image', $this->image, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
			
			if($query){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='add_basic_info.php'</script>";
			}
		}		
	}
	public function view(){
		$query = $this->con->prepare("select * from basic_info where status=:status order by id desc");
		$query->bindValue(':status', 1, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from basic_info where status=:status and unique_id=:id");
		$query->execute(array(':id'=>$this->id,':status'=>1));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update_image($id,$file){
		
		$query = $this->con->prepare("select * from basic_info where status=:status and unique_id=:id");
		$query->bindValue(':id',$id, PDO::PARAM_INT);
		$query->bindValue(':status',1, PDO::PARAM_INT);
		$query->execute();
		$data = $query->fetch(PDO::FETCH_ASSOC);
		$image = rand(10000,90000).$file['name'];
		$moving = '../uploads/basic/'.$image;
		
		if(empty($data['image'])){
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else if(file_exists('../uploads/basic/'.$data['image'])){
			unlink('../uploads/basic/'.$data['image']);
			move_uploaded_file($file['tmp_name'], $moving);
		}
		else{
			move_uploaded_file($file['tmp_name'], $moving);
		}
		return $image;
	}
	public function update(){

		if(empty($this->image)){
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,updated_at=:updated_at where status=:status and unique_id=:id");
		
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':updated_at', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':status', 1, PDO::PARAM_STR);
			$query->execute();
		/*	if($query){
				$_SESSION['message']="You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}*/
		}
		else{
			$query = $this->con->prepare("update basic_info set school_name=:school_name,founder=:founder,thana=:thana,district=:district,year=:year,image=:image,updated_at=:updated_at where status=:status and unique_id=:id");
			
			$query->bindValue(':id',$this->id, PDO::PARAM_INT);
			$query->bindValue(':school_name', $this->school_name, PDO::PARAM_STR);
			$query->bindValue(':founder', $this->founder, PDO::PARAM_STR);
			$query->bindValue(':thana', $this->thana, PDO::PARAM_STR);
			$query->bindValue(':district', $this->district, PDO::PARAM_STR);
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':image',$this->image, PDO::PARAM_STR);
			$query->bindValue(':status',1, PDO::PARAM_INT);
			$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
			$query->execute();
			
			if($query){
				$_SESSION['message'] = "You have updated information";
				echo "<script>window.location='basic_info.php'</script>";
			}
		}
	}
	public function delete($id){
		$query = $this->con->prepare("update basic_info set deleted_at=:deleted_at,status=:status where unique_id=:id");
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':deleted_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
		$query->bindValue(':status',0, PDO::PARAM_STR);
		$query->execute();
		
		if($query){
			$_SESSION['message'] = "You Have Deleted Information";
			echo "<script>window.open('basic_info.php','_self')</script>";
		}
	}

}