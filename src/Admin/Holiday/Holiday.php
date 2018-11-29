<?php 
namespace App\Admin\Holiday;
if(!isset($_SESSION)){  
  session_start();
}
use PDO;
use PDOException;
use App\Connection;

class Holiday extends Connection{

	public function set($data = array()){
		if(array_key_exists('id', $data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('month', $data)){
			$this->month = $data['month'];
		}
		if(array_key_exists('days', $data)){
			$this->days = implode(', ', $data['days']);
		}
		if(array_key_exists('day', $data)){
			$this->day = $data['day'];
		}
		return $this;
	}
	public function insert(){
		
		$query = $this->con->prepare("select * from holiday where year=:year and month =:month");
		$query->bindValue(':year', $this->year, PDO::PARAM_STR);
		$query->bindValue(':month', $this->month, PDO::PARAM_STR);
		$query->execute();			
		
		if($query->rowCount() > 0){

			$_SESSION['message']='Already Inserted';
			echo "<script>window.open('add_holiday.php','_self')</script>";
			}
			else{
			$query = $this->con->prepare("insert into holiday (year,month,days,unique_id,created_at) values(:year,:month,:days,:unique_id,:created_at)");
			$query->bindValue(':year', $this->year, PDO::PARAM_STR);
			$query->bindValue(':month', $this->month, PDO::PARAM_STR);
			$query->bindValue(':days', $this->days, PDO::PARAM_STR);
			$query->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
			$query->bindValue(':created_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);
			$query->execute();
			
			if($query){
				$_SESSION['message']="You have inserted information";
				echo "<script>window.location='add_holiday.php'</script>";
			}
		}
				
	}
	public function view(){
		$query = $this->con->prepare("select * from holiday");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function details($id){
		$query = $this->con->prepare("select * from holiday where unique_id=:id");
		$query->execute(array(':id'=>$this->id));
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update(){

		$query = $this->con->prepare("update holiday set year=:year,month=:month,days=:days,updated_at=:updated_at where unique_id=:id");
			
		$query->bindValue(':id',$this->id, PDO::PARAM_INT);
		$query->bindValue(':year', $this->year, PDO::PARAM_STR);
		$query->bindValue(':month', $this->month, PDO::PARAM_STR);
		$query->bindValue(':days', $this->day, PDO::PARAM_STR);
		$query->bindValue(':updated_at',date('Y-m-d h:i:s a'), PDO::PARAM_STR);	
		$query->execute();
			
		if($query){
			$_SESSION['message'] = "You have updated information";
			echo "<script>window.location='holidays.php'</script>";
		}
	}
}