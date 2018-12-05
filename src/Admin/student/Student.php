<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 09-Dec-17
 * Time: 11:10 AM
 */



namespace App\Admin\student;

if(!isset($_SESSION)){
    session_start();
}

use App\Connection;
use PDO;
use PDOException;

class Student extends Connection
{


    //select data from database
    public function select($query){
        $result =$this->con->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showSelect($id){
    	try{
    		$stmt = $this->con->prepare('SELECT * FROM `student_data` WHERE unique_id = :id and status = 1 ');
    		$stmt->bindValue(':id', $id, PDO::PARAM_STR);
    		$stmt->execute();
    		return $stmt->fetch(PDO::FETCH_ASSOC);

    	}
    	catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }


    //deleted student data from database...
    public function DeleteStudent($id){
        try {
            
            $stmt = $this->con->prepare("update student_data set 
      
                  status = :status,
                  deleted_at=NOW()
                  where unique_id = :id ");

                $stmt->bindValue(':status', '2', PDO::PARAM_STR);
                $stmt->bindValue(':id', $id, PDO::PARAM_STR);
                $stmt->execute();

            if($stmt){
                $_SESSION['delete'] = "Student Data  Deleted ! ";
                echo "<script>window.location='allstudent.php'</script>";
            }

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    // teacher data select for show
    public function showTeacher($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `teacher_data` WHERE unique_id = :id');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }

    // select all student fee for print
    public function selectStuFee($id){
        try {

            $stmt = $this->con->prepare("select * from student_fee where student_id = :id and status=1");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }
    

    public function selectId(){
        try{
            $stmt = $this->con->prepare('select student_id from student_data ORDER by id DESC Limit 1 ');
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "Error !" .$e->getMessage(). "<br />";
            die();
        }
    }

    //select delete student for restore...
    public function selectDeleteStudent(){
        try {
            
            $stmt =$this->con->prepare("select * from student_data where status = :status ");
            $stmt->bindValue(':status', 2, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //restore student from database
    public function restoreStudent($id){
        try {

            $stmt = $this->con->prepare("update student_data set status = :status where unique_id = :id ");
            $stmt->bindValue(':status', 1, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['restoreStu'] = "Student Restorecd Successfully ";
                echo "<script>window.location='allDeleteStudent.php'</script>";
            }
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //paramanently deleted student data from database...
    public function parmanentDeleteStudent($id){
        try {
            
            $stmt = $this->con->prepare("delete from student_data where unique_id = :id ");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['deletestudent'] = "Student Data Parmanently Deleted ! ";
                echo "<script>window.location='allDeleteStudent.php'</script>";
            }

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //select all student data for using marksheet(findmeritposition2)...
    public function selectAllData($student_id){
        try {

            $stmt = $this->con->prepare("select * from student_data where student_id = :student_id ");
            $stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    //select all student from database using calculation for student fee...
    public function selectAllStudent(){
        try {

            $stmt = $this->con->prepare("select * from student_fee where status = 1 ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br />";
            die();
        }
    }

    // select total registration student number 
    public function totalRegStuNumber(){
        try {

            $stmt = $this->con->prepare("select * from student_data where person='student' and status=1 ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }

     //select data from database
    public function studentIDForSendSMS($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `student_data` WHERE student_id = :id and status = 1 ');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }
     //select data from database
    public function teacherIDForSendSMS($id){
        try{
            $stmt = $this->con->prepare('SELECT * FROM `teacher_data` WHERE mobile=:id and status = 1 ');
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
        catch (PDOException $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
           }
    }



    // select all class attend student 
    public function attendReportToday($attend_date, $year)
    {
        try {

            $stmt = $this->con->prepare("select * from sendsms where attend_date=:attend_date and year=:year ");

            $stmt->bindValue(':attend_date', $attend_date, PDO::PARAM_STR);
            $stmt->bindValue(':year', $year, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }

    // student information image upload
    public function student_info_insert($data)
    {
        try {

            extract($data);

            $num1 = (mt_rand() .rand(1,9999));
            $num2 = (mt_rand(10,800000) .rand(10000,500000));

            $uploadMainTo = null;
            if (!empty($_FILES['student_image'])) {
                $student_image = $_FILES['student_image']['name'];
                $main_image_size = $_FILES['student_image']['size'];
                $main_image_tmp = $_FILES['student_image']['tmp_name'];

                $name =  substr(md5(time()),'0','10');
                $data = explode('.',$student_image);
                $student_image = $name.'.'.end($data);

               $permited = array('jpg', 'jpeg', 'png', 'gif');
               $file_size = $_FILES['student_image']['size'];
               $div2 = explode('.', $student_image);
               $file_ext = strtolower(end($div2));

               if($file_size > 1048576){
                    $imgSize = "Student image size should be less then 1MB !!!";
                    $_SESSION['imgSize'] = $imgSize;
                         echo "<script>window.location= 'add_student.php'</script>";

                    die();
                }

                elseif (in_array($file_ext, $permited) == false) {
                    $fileext = "Student image upload only:-".implode(', ', $permited);
                    $_SESSION['fileext'] = $fileext;
                     echo "<script>window.location= 'add_student.php'</script>";

                    die();
                }

                
                $uploadMainTo = "../uploads/student/" . $student_image;
                $moveMain = move_uploaded_file($main_image_tmp, $uploadMainTo);
            } 

            $uploadSecondTo = null;
            if (!empty($_FILES['father_image'])) {
                $father_image = $_FILES['father_image']['name'];
                $second_image_size = $_FILES['father_image']['size'];
                $second_image_tmp = $_FILES['father_image']['tmp_name'];

                $name =  substr(md5('huj'),'0','10');
                $data = explode('.',$father_image);
                //$father_image = $name.'.'.end($data);
                $father_image = $num1.'.'.end($data);

                $permited = array('jpg', 'jpeg', 'png', 'gif');
                $file_size = $_FILES['father_image']['size'];

                $div2 = explode('.', $father_image);
                $file_ext = strtolower(end($div2));
                
                if($file_size > 1048576){
                $imgSize = "Father image size should be less then 1MB !!!";
                $_SESSION['imgSize'] = $imgSize;
                     echo "<script>window.location= 'add_student.php'</script>";

                die();
            }
            elseif (in_array($file_ext, $permited) == false) {
                $fileext = "Father image upload only:-".implode(', ', $permited);
                $_SESSION['fileext'] = $fileext;
                     echo "<script>window.location= 'add_student.php'</script>";

                die();
            }




                $uploadSecondTo = "../uploads/student/" . $father_image;
                $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
            }

            $uploadPdfTo = null;
            if (!empty($_FILES['mother_image'])) {
                $mother_image = $_FILES['mother_image']['name'];
                $pdf_size = $_FILES['mother_image']['size'];
                $pdf_tmp = $_FILES['mother_image']['tmp_name'];

                $name =  substr(md5('shobuj'),'0','10');
                $data = explode('.',$mother_image);
                //$mother_image = $name.'.'.end($data);
                $mother_image = $num2.'.'.end($data);

                $permited = array('jpg', 'jpeg', 'png', 'gif');
                $file_size = $_FILES['mother_image']['size'];
                $div2 = explode('.', $mother_image);
                $file_ext = strtolower(end($div2));


            if($file_size > 1048576){
                $imgSize = "Mother image size should be less then 1MB !!!";
                $_SESSION['imgSize'] = $imgSize;
                     echo "<script>window.location= 'add_student.php'</script>";

                die();
            }
            elseif (in_array($file_ext, $permited) == false) {
                $fileext = "Mother image upload only:-".implode(', ', $permited);
                $_SESSION['fileext'] = $fileext;
                     echo "<script>window.location= 'add_student.php'</script>";

                die();
            }

                $uploadPdfTo = "../uploads/student/" . $mother_image;
                $movepdf = move_uploaded_file($pdf_tmp, $uploadPdfTo);
            }

           // extract($data);
            $stmt = $this->con->prepare("insert into student_data(sex, student_name, class, shift, branch, department, student_id, class_roll, year, birth_day, birth_month, birth_year, blood_group, religion, birth_reg_num, last_study_orga, why_left, last_Orga_phone, home_name, hoding_number, road_number, village_name, postoffice, unione_name, thana_name, district_name, postcode, lasting_home_name, lasting_holding_number, lasting_road_number, lasting_village, lasting_postoffice, lasting_unione, lasting_thana, lasting_district, lasting_postcode, father_name, father_occupation, fa_monthly_income, fa_edu_quali, father_phone, father_email, father_national_id, mother_name, mother_occupation, mo_monthly_income, mo_edu_quali, mother_phone, mother_email, mo_national_id, local_gurdian, local_occupation, relation, local_edu, local_phone, local_email, local_national_id, student_image, father_image, mother_image, unique_id)

            VALUES(:sex, :student_name, :class, :shift, :branch, :department, :student_id, :class_roll, :year, :birth_day, :birth_month, :birth_year, :blood_group, :religion, :birth_reg_num, :last_study_orga, :why_left, :last_Orga_pho, :home_name, :hoding_number, :road_number, :village_name, :postoffice, :unione_name, :thana_name, :district_name, :postcode, :lasting_home_name, :lasting_holding_number, :lasting_road_number, :lasting_village, :lasting_postoffice, :lasting_unione, :lasting_thana, :lasting_district, :lasting_postcode, :father_name, :father_occupation, :fa_monthly_income, :fa_edu_quali, :father_phone, :father_email, :father_national_id, :mother_name, :mother_occupation, :mo_monthly_income, :mo_edu_quali, :mother_phone, :mother_email, :mo_national_id, :local_gurdian, :local_occupation, :relation, :local_edu, :local_phone, :local_email, :local_national_id, :student_image, :father_image, :mother_image, :unique_id)");
            $stmt->execute(array(
                ':sex' => $sex,
                ':student_name' => $student_name,
                ':class'=>$class,
                ':shift'=>$shift,
                ':branch'=>$branch,
                ':department'=>$department,
                ':student_id'=>$student_id,
                ':class_roll'=>$class_roll,
                ':year'=>$year,
                ':birth_day'=>$birth_day,
                ':birth_month'=>$birth_month,
                ':birth_year'=>$birth_year,
                ':blood_group'=>$blood_group,
                ':religion'=>$religion,
                ':birth_reg_num'=>$birth_reg_num,
                ':last_study_orga'=>$last_study_orga,
                ':why_left'=>$why_left,
                ':last_Orga_pho'=>$last_Orga_phone,
                ':home_name'=>$home_name,
                ':hoding_number'=>$hoding_number,
                ':road_number'=>$road_number,
                ':village_name'=>$village_name,
                ':postoffice'=>$postoffice,
                ':unione_name'=>$unione_name,
                ':thana_name'=>$thana_name,
                ':district_name'=>$district_name,
                ':postcode'=>$postcode,
                ':lasting_home_name'=>$lasting_home_name,
                ':lasting_holding_number'=>$lasting_holding_number,
                ':lasting_road_number'=>$lasting_road_number,
                ':lasting_village'=>$lasting_village,
                ':lasting_postoffice'=>$lasting_postoffice,
                ':lasting_unione'=>$lasting_unione,
                ':lasting_thana'=>$lasting_thana,
                ':lasting_district'=>$lasting_district,
                ':lasting_postcode'=>$lasting_postcode,
                ':father_name'=>$father_name,
                ':father_occupation'=>$father_occupation,
                ':fa_monthly_income'=>$fa_monthly_income,
                ':fa_edu_quali'=>$fa_edu_quali,
                ':father_phone'=>$father_phone,
                ':father_email'=>$father_email,
                ':father_national_id'=>$father_national_id,
                ':mother_name'=>$mother_name,
                ':mother_occupation'=>$mother_occupation,
                ':mo_monthly_income'=>$mo_monthly_income,
                ':mo_edu_quali'=>$mo_edu_quali,
                ':mother_phone'=>$mother_phone,
                ':mother_email'=>$mother_email,
                ':mo_national_id'=>$mo_national_id,
                ':local_gurdian'=>$local_gurdian,
                ':local_occupation'=>$local_occupation,
                ':relation'=>$relation,
                ':local_edu'=>$local_edu,
                ':local_phone'=>$local_phone,
                ':local_email'=>$local_email,
                ':local_national_id'=>$local_national_id,
                ':student_image'=>$student_image,
                ':father_image'=>$father_image,
                ':mother_image'=>$mother_image,
                ':unique_id'   => md5(time())

            ));

        if($stmt){
            unset($_SESSION['data']);
            unset($_SESSION['image_data']);
            $_SESSION['msg'] ='Student Information Successfully Inserted !!!';
            echo "<script>window.location= 'index.php'</script>";

        }


            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }
    // student information insert...
    public function student_insert($data)
    {
        try {
           $stmt = $this->con->prepare("select * from student");
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage()."<br>";
            die();
        }
    }

}