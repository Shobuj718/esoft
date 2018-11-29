<?php 

namespace App\Admin\Attendance;

if(!isset($_SESSION)){
	session_start();
}

use PDO;
use PDOException;
use App\Connection;

date_default_timezone_set("Asia/Dhaka");

class Attendance extends Connection
{
	public function set($data = array())
	{
		if(array_key_exists('class', $data)){
			$this->class = $data['class'];
			$class = $this->class;
		}
		if(array_key_exists('shift', $data)){
			$this->shift = $data['shift'];
			$shift = $this->shift;
		}
		if(array_key_exists('branch', $data)){
			$this->branch = $data['branch'];
			$branch = $this->branch;
		}
		if(array_key_exists('department', $data)){
			$this->department = $data['department'];
			$department = $this->department;
		}
		if(array_key_exists('year', $data)){
			$this->year = $data['year'];
		}
		if(array_key_exists('attend', $data)){
			$this->attend = $data['attend'];
			$attend = $this->attend;
		}

		if(array_key_exists('dateSelect', $data)){
			$this->dateSelect = $data['dateSelect'];
			$dateSelect = $this->dateSelect;
		}
		
		return $this;
	}

	// select class, section department wise student
	public function SelectStudent()
	{
		try {

			//$query = "SELECT * FROM student_data WHERE class LIKE :classes AND  shift LIKE :shifted AND branch LIKE :branches AND department LIKE :department AND status=1 order by class_roll asc";

			$query = "SELECT * FROM student_data WHERE class = :classes AND  shift = :shifted AND branch = :branches AND department = :department AND year = :year AND status=1 order by class_roll asc";
			$stmt = $this->con->prepare($query);
			$stmt->bindValue(':classes', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':shifted', $this->shift, PDO::PARAM_STR);
			$stmt->bindValue(':branches', $this->branch, PDO::PARAM_STR);
			$stmt->bindValue(':department',$this->department,PDO::PARAM_STR);
			 $stmt->bindValue(':year', $this->year, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['attUpErr'] = "Value does not match !!!";
				echo "<script>window.location=searchForTakeAttendance.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	//Attendance already taken
	public function AlreadyTaken($attend, $class, $shift, $branch, $department)
	{
		try {

			$currdate = date('Y-m-d');
		    //$query = "select distinct att_time from tbl_attendance";

		    $stmt = $this->con->prepare("select * from tbl_attendance where class=:class and branch=:branch and department=:department and att_time=:att_time ");
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
		    else{
		    	$date = date('Y-m-d');
				$datetime = date('Y-m-d h:m:a');


			foreach ($attend as $key => $value) {
				/*$data = $key;
				$val  = $value;
				echo $data." and values is ".$val."<br>";*/
				$stmt = $this->con->prepare("insert into tbl_attendance(class, branch, department, roll, attend, att_time, insertDT) values(:class, :branch, :department, :roll, :attend, :date, :datetime)");
				$stmt->bindValue(':class', $class, PDO::PARAM_STR);
				$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
				$stmt->bindValue(':department', $department, PDO::PARAM_STR);
				$stmt->bindValue(':roll', $key, PDO::PARAM_STR);
				$stmt->bindValue(':attend', $value, PDO::PARAM_STR);
				$stmt->bindValue(':date', $date, PDO::PARAM_STR);
				$stmt->bindValue(':datetime', $datetime, PDO::PARAM_STR);
				$stmt->execute();
				if($stmt){
					$_SESSION['attTake'] = "Student Attendance Taken Successfully ";
			            echo "<script>window.location='searchForTakeAttendance.php'</script>";
				}
			}

			
			
			echo "<script>window.location='searchForTakeAttendance.php'</script>";
	        die();
	        }
		    
		   
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// attendance taken
	public function StudentAttend($attend, $class, $shift, $branch, $department)
	{
		try {

			
			$date = date('Y-m-d');
			$datetime = date('Y-m-d h:m:a');


			foreach ($attend as $key => $value) {
				/*$data = $key;
				$val  = $value;
				echo $data." and values is ".$val."<br>";*/
				$stmt = $this->con->prepare("insert into tbl_attendance(class, branch, department, roll, attend, att_time, insertDT) values(:class, :branch, :department, :roll, :attend, :date, :datetime)");
				$stmt->bindValue(':class', $class, PDO::PARAM_STR);
				$stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
				$stmt->bindValue(':department', $department, PDO::PARAM_STR);
				$stmt->bindValue(':roll', $key, PDO::PARAM_STR);
				$stmt->bindValue(':attend', $value, PDO::PARAM_STR);
				$stmt->bindValue(':date', $date, PDO::PARAM_STR);
				$stmt->bindValue(':datetime', $datetime, PDO::PARAM_STR);
				$stmt->execute();
				/*if($stmt){
					 echo "<script>window.location='searchForTakeAttendance.php</script>";
				}*/
			}

			$_SESSION['attTake'] = "Student Attendance Taken Successfully ";
			echo "<script>window.location='view/admin/StudentAttendance/searchForTakeAttendance.php</script>";
			

		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	// select student for upadate attendance 
	public function EditStudentAttend()
	{
		try {

			//$query = "SELECT * FROM tbl_attendance WHERE class LIKE :classes AND  shift LIKE :shifted AND branch LIKE :branches AND department LIKE :department AND att_time LIKE :dateSelect order by id asc ";


			$query = "SELECT * FROM tbl_attendance WHERE class = :classes AND branch = :branches AND department = :department AND att_time = :dateselect order by id asc";
			$stmt = $this->con->prepare($query);
			$stmt->bindValue(':classes', $this->class, PDO::PARAM_STR);
			$stmt->bindValue(':branches', $this->branch, PDO::PARAM_STR);
			$stmt->bindValue(':department',$this->department,PDO::PARAM_STR);
			 $stmt->bindValue(':dateselect',$this->dateSelect,PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			else{
				$_SESSION['attUpErr'] = "Value does not match !!!";
                echo "<script>window.location=searchByDateWise.php'</script>";
			}
			
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage()."<br>";
			die();
		}
	}

	public function otherway($attend, $class, $branch, $department, $dateselect)
	{	
			

		    if (date('h:m:a') > '4:00 pm') {
		         $_SESSION['attUpErr'] = " Attendance Update time end !!! ";
		         echo "<script>window.location='searchByDateWise.php'</script>";
		         die();
		    }

		 foreach ($attend as $att_key => $att_value){
	        if($att_value != ''){
	            $update = $this->con->prepare("update tbl_attendance set 
	                        attend = :present,
	                        updated_at = NOW()
	                        where roll = '".$att_key."'and att_time = '".$dateselect."' and class = '".$class."' and branch = '".$branch."' and department = '".$department."' ");
	            $update->bindValue(':present', $att_value, PDO::PARAM_STR);
	            $result = $update->execute();
	            if($result){
	                $_SESSION['attUpdate'] = "Attendance Update Successfully";
	                echo "<script>window.location='searchByDateWise.php'</script>";
	                //header('Location:searchByDateWise.php');
	            }
	        }

    }
	}

	
}	 
   