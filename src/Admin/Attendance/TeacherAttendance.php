<?php 

namespace App\Admin\Attendance;

if(!isset($_SESSION)){
	session_start();
}

use PDO;
use PDOException;
use App\Connection;

class TeacherAttendance extends Connection
{

	public function set($data = array())
	{
		if(array_key_exists('unique_id', $data)){
			$this->unique_id = $data['unique_id'];
		}

		return $this;
	}

	public function TeacherSelect()
	{
		try {

			$stmt = $this->con->prepare("select * from teacher_data where status=1");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function insert($name){
		try {
			$datetime = date('Y-m-d h:m:a');
			$stmt = $this->con->prepare("insert into teacher_attend(name, created_at) values(:name, :created_at");
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':created_at', $datetime, PDO::PARAM_STR);
			$stmt->execute();
		}  catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function AttendTaken($name, $mobile, $index_number, $eduquali, $designation, $attend, $id)
	{
		try {

		/*	$currdate = date('Y-m-d');
		    //$query = "select distinct att_time from tbl_attendance";

		    $stmt = $this->con->prepare("select * from teacher_attend where class=:class  and att_time=:att_time ");
		    $stmt->bindValue(':class', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':branch', $this->branch, PDO::PARAM_STR);
			$stmt->bindValue(':department',$this->department,PDO::PARAM_STR);
			$stmt->bindValue(':att_time', $currdate, PDO::PARAM_STR);
		    $stmt->execute();
		    $value = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    if($stmt->rowCount() > 0){
		    	foreach( $value as $data){
			    	$dbdate = $data['att_time'];

			    	if ($dbdate == $currdate) {
			            $_SESSION['attUpErr'] = " Attendance Already Taken !!! ";
			            echo "<script>window.location='searchForTakeAttendance.php'</script>";
			            die();
			        }			       
			    }			    
		    }
		    else{*/
		    	$date = date('Y-m-d');
				$datetime = date('Y-m-d h:m:a');


			foreach ($attend as $key => $value) {
				/*$data = $key;
				$val  = $value;
				echo $data." and values is ".$val."<br>";*/
				$stmt = $this->con->prepare("insert into teacher_attend(name, mobile, index_number, eduquali, designation, attend, unique_id, att_date, created_at) values(:name, :mobile, :index_number, :eduquali, :designation, :attend, :unique_id, :att_date, :created_at ");

				$stmt->bindValue(':name', $name, PDO::PARAM_STR);
				$stmt->bindValue(':mobile', $key, PDO::PARAM_STR);
				$stmt->bindValue(':index_number', $index_number, PDO::PARAM_STR);
				$stmt->bindValue(':eduquali', $eduquali, PDO::PARAM_STR);
				$stmt->bindValue(':designation',$designation,PDO::PARAM_STR);
				$stmt->bindValue(':attend', $value, PDO::PARAM_STR);
				$stmt->bindValue(':unique_id', $id, PDO::PARAM_STR);
				$stmt->bindValue(':att_date', $date, PDO::PARAM_STR);
				$stmt->bindValue(':created_at', $datetime, PDO::PARAM_STR);
				$stmt->execute();
				if($stmt){
					$_SESSION['attTake'] = "Student Attendance Taken Successfully ";
			            echo "<script>window.location='index.php'</script>";
				}
			}

			
			
			echo "<script>window.location='searchForTakeAttendance.php'</script>";
	        die();
	        //}
		    
		   
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
}