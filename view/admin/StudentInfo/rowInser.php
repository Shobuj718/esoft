
<?php
// echo "<pre>";
// var_dump($_POST);
// var_dump($_FILES);
// echo "<pre>";
// die();
error_reporting(0);

if(!isset($_SESSION)){
    session_start();
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$name = $_POST['text'];

//    $sex = $_POST['sex'];
//    $student_name = $_POST['student_name'];
//    $class = $_POST['class'];
    //$class = $_POST['class'];

    $sex                =  $_POST['sex'];
    $student_name       =  $_POST['student_name'];
    $class              =  $_POST['class'];
    $shift              =  $_POST['shift'];
    $branch             =  $_POST['branch'];
    $department         =  $_POST['department'];
    $student_id         =  $_POST['student_id'];
    $class_roll         =  $_POST['class_roll'];
    $year               =  $_POST['year'];
    $birth_day          =  $_POST['birth_day'];
    $birth_month        =  $_POST['birth_month'];
    $birth_year         =  $_POST['birth_year'];
    $blood_group        =  $_POST['blood_group'];
    $religion           =  $_POST['religion'];
    $birth_reg_num      =  $_POST['birth_reg_num'];
    $last_study_orga    =  $_POST['last_study_orga'];
    $why_left           =  $_POST['why_left'];
    $last_Orga_phone    =  $_POST['last_Orga_phone'];
    $home_name          =  $_POST['home_name'];
    $hoding_number      =  $_POST['hoding_number'];
    $road_number        =  $_POST['road_number'];
    $village_name       =  $_POST['village_name'];
    $postoffice         =  $_POST['postoffice'];
    $unione_name        =  $_POST['unione_name'];
    $thana_name         =  $_POST['thana_name'];
    $district_name      =  $_POST['district_name'];
    $postcode           =  $_POST['postcode'];
    $lasting_home_name  =$_POST['lasting_home_name'];
    $lasting_holding_number =  $_POST['lasting_holding_number'];
    $lasting_road_number =  $_POST['lasting_road_number'];
    $lasting_village     =  $_POST['lasting_village'];
    $lasting_postoffice  =  $_POST['lasting_postoffice'];
    $lasting_unione      =  $_POST['lasting_unione'];
    $lasting_thana       =  $_POST['lasting_thana'];
    $lasting_district    =  $_POST['lasting_district'];
    $lasting_postcode    =  $_POST['lasting_postcode'];
    $father_name         =  $_POST['father_name'];
    $father_occupation   =  $_POST['father_occupation'];
    $fa_monthly_income   =  $_POST['fa_monthly_income'];
    $fa_edu_quali        =  $_POST['fa_edu_quali'];
    $father_phone        =  $_POST['father_phone'];
    $father_email        =  $_POST['father_email'];
    $father_national_id  =  $_POST['father_national_id'];
    $mother_name         =  $_POST['mother_name'];
    $mother_occupation   =  $_POST['mother_occupation'];
    $mo_monthly_income   =  $_POST['mo_monthly_income'];
    $mo_edu_quali        =  $_POST['mo_edu_quali'];
    $mother_phone        =  $_POST['mother_phone'];
    $mother_email        =  $_POST['mother_email'];
    $mo_national_id      =  $_POST['mo_national_id'];
    $local_gurdian       =  $_POST['local_gurdian'];
    $local_occupation    =  $_POST['local_occupation'];
    $relation            =  $_POST['relation'];
    $local_edu           =  $_POST['local_edu'];
    $local_phone         =  $_POST['local_phone'];
    $local_email         =  $_POST['local_email'];
    $local_national_id   =  $_POST['local_national_id'];
    //$student_image       =  $_POST['student_image'];
    //$father_image        =  $_POST['father_image'];
    //$mother_image        =  $_POST['mother_image'];

}
?>

<?php
$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 $num1 = (mt_rand() .rand(1,9999));
$num2 = (mt_rand(10,800000) .rand(10000,500000));
//echo(mt_rand(10,100). "<br>");

//echo $num1."   ".$num2;


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
        $imgSize = "Image size should be less then 1MB !!!";
        $_SESSION['imgSize'] = $imgSize;
             echo "<script>window.location= 'studentInfoAdd.php'</script>";

        die();
    }

    elseif (in_array($file_ext, $permited) == false) {
        $fileext = "You can upload only:-".implode(', ', $permited);
        $_SESSION['fileext'] = $fileext;
         echo "<script>window.location= 'studentInfoAdd.php'</script>";

        die();
    }

    
    $uploadMainTo = "../uploads/" . $student_image;
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
    $imgSize = "Image size should be less then 1MB !!!";
    $_SESSION['imgSize'] = $imgSize;
         echo "<script>window.location= 'studentInfoAdd.php'</script>";

    die();
}
elseif (in_array($file_ext, $permited) == false) {
    $fileext = "You can upload only:-".implode(', ', $permited);
    $_SESSION['fileext'] = $fileext;
         echo "<script>window.location= 'studentInfoAdd.php'</script>";

    die();
}




    $uploadSecondTo = "../uploads/" . $father_image;
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
    $imgSize = "Image size should be less then 1MB !!!";
    $_SESSION['imgSize'] = $imgSize;
         echo "<script>window.location= 'studentInfoAdd.php'</script>";

    die();
}
elseif (in_array($file_ext, $permited) == false) {
    $fileext = "You can upload only:-".implode(', ', $permited);
    $_SESSION['fileext'] = $fileext;
         echo "<script>window.location= 'studentInfoAdd.php'</script>";

    die();
}

    $uploadPdfTo = "../uploads/" . $mother_image;
    $movepdf = move_uploaded_file($pdf_tmp, $uploadPdfTo);
}




 


$stmt = $db->prepare("insert into student_data(sex, student_name, class, shift, branch, department, student_id, class_roll, year, birth_day, birth_month, birth_year, blood_group, religion, birth_reg_num, last_study_orga, why_left, last_Orga_phone, home_name, hoding_number, road_number, village_name, postoffice, unione_name, thana_name, district_name, postcode, lasting_home_name, lasting_holding_number, lasting_road_number, lasting_village, lasting_postoffice, lasting_unione, lasting_thana, lasting_district, lasting_postcode, father_name, father_occupation, fa_monthly_income, fa_edu_quali, father_phone, father_email, father_national_id, mother_name, mother_occupation, mo_monthly_income, mo_edu_quali, mother_phone, mother_email, mo_national_id, local_gurdian, local_occupation, relation, local_edu, local_phone, local_email, local_national_id, student_image, father_image, mother_image, unique_id)

VALUES(:sex, :student_name, :class, :shift, :branch, :department, :student_id, :class_roll, :year, :birth_day, :birth_month, :birth_year, :blood_group, :religion, :birth_reg_num, :last_study_orga, :why_left, :last_Orga_pho, :home_name, :hoding_number, :road_number, :village_name, :postoffice, :unione_name, :thana_name, :district_name, :postcode, :lasting_home_name, :lasting_holding_number, :lasting_road_number, :lasting_village, :lasting_postoffice, :lasting_unione, :lasting_thana, :lasting_district, :lasting_postcode, :father_name, :father_occupation, :fa_monthly_income, :fa_edu_quali, :father_phone, :father_email, :father_national_id, :mother_name, :mother_occupation, :mo_monthly_income, :mo_edu_quali, :mother_phone, :mother_email, :mo_national_id, :local_gurdian, :local_occupation, :relation, :local_edu, :local_phone, :local_email, :local_national_id, :student_image, :father_image, :mother_image, :unique_id)");


//$stmt = $db->prepare("INSERT INTO student_data
//(
//sex, student_name, class, shift, branch, department, student_id, class_roll, year, birth_day, birth_month, birth_year, blood_group, religion, birth_reg_num, last_study_orga, why_left, last_Orga_phone, home_name, hoding_number, road_number, village_name, postoffice, unione_name, thana_name, district_name, postcode, lasting_home_name, lasting_holding_number, lasting_road_number, lasting_village, lasting_postoffice, lasting_unione, lasting_thana, lasting_district, lasting_postcode, father_name, father_occupation, fa_monthly_income, fa_edu_quali, father_phone, father_email, father_national_id, mother_name, mother_occupation, mo_monthly_income, mo_edu_quali, mother_phone, mother_email, mo_national_id, local_gurdian, local_occupation, relation, local_edu, local_phone, local_email, local_national_id, student_image, father_image, mother_image
//
//)
//
// VALUES(:sex, :student_name, :class, :shift, :branch, :department, :student_id, :class_roll, :year, :birth_day, :birth_month, :birth_year, :blood_group, :religion, :birth_reg_num, :last_study_orga, :why_left, :last_Orga_phone, :home_name, :hoding_number, :road_number, :village_name, :postoffice, :unione_name, :thana_name, :district_name, :postcode, :lasting_home_name, :lasting_holding_number, :lasting_road_number, :lasting_village, :lasting_postoffice, :lasting_unione, :lasting_thana, :lasting_district, :lasting_postcode, :father_name, :father_occupation, :fa_monthly_income, :fa_edu_quali, :father_phone, :father_email, :father_national_id, :mother_name, :mother_occupation, :mo_monthly_income, :mo_edu_quali, :mother_phone, :mother_email, :mo_national_id, :local_gurdian, :local_occupation, :relation, :local_edu, :local_phone, :local_email, :local_national_id, :student_image, :father_image, :mother_image)");




$result = $stmt->execute(array(
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


if($result){
     $_SESSION['msg'] = 'Data successfully Inserted !!!';
    //header("location:allstudent.php");
     echo "<script>window.location= 'allstudent.php'</script>";

}
 
//$query = $db->execute("INSERT INTO input (name, image, image1, image2) VALUES (?,?,?,?) array($name, $uploadPdfTo, $uploadMainTo, $uploadSecondTo) );

?>
