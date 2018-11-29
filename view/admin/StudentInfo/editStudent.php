
<?php
                 
 // if(isset($_SESSION["username"]))  
 // {  
 //    header('location:view/admin/index.php');
 //      // echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
 //      // echo '<br /><br /><a href="logout.php">Logout</a>';  
 // }  
 // else  
 // {  
 //      header("location:index.php");  
 // }
 ?>

<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>
<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);


use App\admin\student\Student;
$student = new Student();

$id = $_GET['edit'];
$result = $student->showSelect($id);


// $db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $id = $_GET['edit'];
// //                echo $id;
// //                var_dump($id);
// //                die();
// $stm =  $db->prepare("SELECT * FROM `student_data` WHERE unique_id = :id");
// $stm->bindValue(':id', $id, PDO::PARAM_STR);
// $stm->execute();
// $result = $stm->fetch(PDO::FETCH_ASSOC);
//use $results

?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: #ECF0F5">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
    <!-- <form method="post" action="#" accept-charset="utf-8" align="center" enctype="multipart/form-data"> -->

    <form method="post" action="view/admin/StudentInfo/update3.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">শিক্ষার্থীর একাডেমিক তথ্যাবলী সংশোধন  করুন </h3>
                <hr />
        <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                session_unset();
            }


        ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">লিঙ্গ <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option>সিলেক্ট করুন </option>
                                <option <?php echo ($result['sex']=='ছেলে')? 'selected':'' ?> value="ছেলে">ছেলে</option>
                        <option <?php echo ($result['sex']=='মেয়ে')? 'selected':'' ?> value="মেয়ে">মেয়ে</option>
                        <option <?php echo ($result['sex']=='অন্যান্য')? 'selected':'' ?> value="অন্যান্য">অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">শিক্ষার্থীর  নাম :<font color="red" size="4">*</font> </label>
                            <input type="text" name="student_name" class="form-control" value="<?php echo $result['student_name']?>" id="" required="required">

                            <input type="hidden" name="unique_id" class="form-control" value="<?php echo $result['unique_id']?>" id="" required="required">

                            <input type="hidden" name="student_image" class="form-control" value="<?php echo $result['student_image']?>" id="" required="required">

                            <input type="hidden" name="father_image" class="form-control" value="<?php echo $result['father_image']?>" id="" required="required">

                            <input type="hidden" name="mother_image" class="form-control" value="<?php echo $result['mother_image']?>" id="" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শ্রেণী: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['class']=='প্লে')? 'selected':'' ?> value="প্লে">প্লে</option>
                        <option <?php echo ($result['class']=='নার্সারি')? 'selected':'' ?> value="নার্সারি">নার্সারি</option>
                        <option <?php echo ($result['class']=='কে জি')? 'selected':'' ?> value="কে জি">কে জি</option>
                        <option <?php echo ($result['class']=='১ম')? 'selected':'' ?> value="১ম">১ম</option>
                        <option <?php echo ($result['class']=='২য় ')? 'selected':'' ?> value="২য় ">২য় </option>
                        <option <?php echo ($result['class']=='৩য়')? 'selected':'' ?> value="৩য়">৩য়</option>
                        <option <?php echo ($result['class']=='৪র্থ')? 'selected':'' ?> value="৪র্থ">৪র্থ</option>
                        <option <?php echo ($result['class']=='৫ম')? 'selected':'' ?> value="৫ম">৫ম</option>
                        <option <?php echo ($result['class']=='৬ষ্ঠ')? 'selected':'' ?> value="৬ষ্ঠ">৬ষ্ঠ</option>
                        <option <?php echo ($result['class']=='৭ম')? 'selected':'' ?> value="৭ম">৭ম</option>
                        <option <?php echo ($result['class']=='৮ম')? 'selected':'' ?> value="৮ম">৮ম</option>
                        <option <?php echo ($result['class']=='৯ম')? 'selected':'' ?> value="৯ম">৯ম</option>
                        <option <?php echo ($result['class']=='১০ম')? 'selected':'' ?> value="১০ম">১০ম</option>
                        <option <?php echo ($result['class']=='একাদশ')? 'selected':'' ?> value="একাদশ">একাদশ</option>
                        <option <?php echo ($result['class']=='দ্বাদশ')? 'selected':'' ?> value="দ্বাদশ">দ্বাদশ</option>
                        <option <?php echo ($result['class']=='ডিগ্রী ১ম বর্ষ')? 'selected':'' ?> value="ডিগ্রী ১ম বর্ষ">ডিগ্রী ১ম বর্ষ</option>
                        <option <?php echo ($result['class']=='ডিগ্রী ২য় বর্ষ')? 'selected':'' ?> value="ডিগ্রী ২য় বর্ষ">ডিগ্রী ২য় বর্ষ</option>
                        <option <?php echo ($result['class']=='ডিগ্রী ৩য় বর্ষ')? 'selected':'' ?> value="ডিগ্রী ৩য় বর্ষ">ডিগ্রী ৩য় বর্ষ</option>
                        <option <?php echo ($result['class']=='ডিগ্রী প্রিভিয়াস মাস্টার্স')? 'selected':'' ?> value="ডিগ্রী প্রিভিয়াস মাস্টার্স">ডিগ্রী প্রিভিয়াস মাস্টার্স</option>
                        <option <?php echo ($result['class']=='ডিগ্রী  মাস্টার্স')? 'selected':'' ?> value="ডিগ্রী  মাস্টার্স">ডিগ্রী  মাস্টার্স</option>
                        <option <?php echo ($result['class']=='অনার্স ১ম বর্ষ')? 'selected':'' ?> value="অনার্স ১ম বর্ষ">অনার্স ১ম বর্ষ</option>
                        <option <?php echo ($result['class']=='অনার্স ২য় বর্ষ')? 'selected':'' ?> value="অনার্স ২য় বর্ষ">অনার্স ২য় বর্ষ</option>
                        <option <?php echo ($result['class']=='অনার্স ৩য় বর্ষ')? 'selected':'' ?> value="অনার্স ৩য় বর্ষ">অনার্স ৩য় বর্ষ</option>
                        <option <?php echo ($result['class']=='অনার্স  ৪র্থ বর্ষ')? 'selected':'' ?> value="অনার্স  ৪র্থ বর্ষ">অনার্স  ৪র্থ বর্ষ</option>
                        <option <?php echo ($result['class']=='মাস্টার্স')? 'selected':'' ?> value="মাস্টার্স">মাস্টার্স</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">শিফট: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="shift" required>
                                <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['shift']=='প্রভাতী')? 'selected':'' ?> value="প্রভাতী">প্রভাতী</option>
                        <option <?php echo ($result['shift']=='দিবা')? 'selected':'' ?> value="দিবা">দিবা</option>
                        <option <?php echo ($result['shift']=='সান্ধ্যকালীন')? 'selected':'' ?> value="সান্ধ্যকালীন">সান্ধ্যকালীন</option>
                        <option <?php echo ($result['shift']=='রাত্রিকালীন')? 'selected':'' ?> value="রাত্রিকালীন">রাত্রিকালীন</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শাখা: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="branch" required>
                                 <option>সিলেক্ট করুন</option>

                        <option <?php echo ($result['branch']=='ক')? 'selected':'' ?> value="ক">ক</option>
                        <option <?php echo ($result['branch']=='খ')? 'selected':'' ?> value="খ">খ</option>
                        <option <?php echo ($result['branch']=='গ')? 'selected':'' ?> value="গ">গ</option>
                        <option <?php echo ($result['branch']=='ঘ')? 'selected':'' ?> value="ঘ">ঘ</option>
                        <option <?php echo ($result['branch']=='ঙ')? 'selected':'' ?> value="ঙ">ঙ</option>
                        <option <?php echo ($result['branch']=='চ')? 'selected':'' ?> value="চ">চ</option>
                        <option <?php echo ($result['branch']=='ছ')? 'selected':'' ?> value="ছ">ছ</option>
                        <option <?php echo ($result['branch']=='জ')? 'selected':'' ?> value="জ">জ</option>
                        <option <?php echo ($result['branch']=='ঝ')? 'selected':'' ?> value="ঝ">ঝ</option>
                        <option <?php echo ($result['branch']=='ঞ</')? 'selected':'' ?> value="ঞ</">ঞ</</option>
                        <option <?php echo ($result['branch']=='ট')? 'selected':'' ?> value="ট">ট</option>
                        <option <?php echo ($result['branch']=='ঠ')? 'selected':'' ?> value="ঠ">ঠ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">  গ্রুপ / বিভাগ: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="department" required>
                                <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['department']=='জেনারেল')? 'selected':'' ?> value="জেনারেল">জেনারেল</option>
                        <option <?php echo ($result['department']=='বিজ্ঞান')? 'selected':'' ?> value="বিজ্ঞান">বিজ্ঞান</option>
                        <option <?php echo ($result['department']=='মানবিক')? 'selected':'' ?> value="মানবিক">মানবিক</option>
                        <option <?php echo ($result['department']=='বানিজ্য')? 'selected':'' ?> value="বানিজ্য">বানিজ্য</option>
                        <option <?php echo ($result['department']=='ভোকেশনাল')? 'selected':'' ?> value="ভোকেশনাল">ভোকেশনাল</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">স্টুডেন্ট আইডি নাম্বার: <font color="red" size="4">*</font> </label>
                            <input type="text" value="<?= $result['student_id'] ;//substr(md5(time()),'0','5').date('Y'); //$submit_count.date('Y'); ?>" class="form-control" name="student_id" required >
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  ক্লাসের রোল নাম্বার : </label>
                            <input type="text" name="class_roll" class="form-control" value="<?php echo $result['class_roll']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  শিক্ষাবর্ষ : <font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" value="<?php echo date('Y'); ?>" name="year"  required>
                        </div>
                    </div>
                    
                </div>

               

                <h3 class="text-center" style="color: #2559ee">ব্যক্তিগত তথ্যাবলী</h3>
                <hr />

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জন্ম তারিখ: তারিখ <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_day" required>
                                <option>তারিখ</option>

                        <option <?php echo ($result['birth_day']=='১')? 'selected':'' ?> value="১">১</option>
                        <option <?php echo ($result['birth_day']=='২')? 'selected':'' ?> value="২">২</option>
                        <option <?php echo ($result['birth_day']=='৩')? 'selected':'' ?> value="৩">৩</option>
                        <option <?php echo ($result['birth_day']=='৪')? 'selected':'' ?> value="৪">৪</option>
                        <option <?php echo ($result['birth_day']=='৫')? 'selected':'' ?> value="৫">৫</option>
                        <option <?php echo ($result['birth_day']=='৬')? 'selected':'' ?> value="৬">৬</option>
                        <option <?php echo ($result['birth_day']=='৭')? 'selected':'' ?> value="৭">৭</option>
                        <option <?php echo ($result['birth_day']=='৮')? 'selected':'' ?> value="৮">৮</option>
                        <option <?php echo ($result['birth_day']=='৯')? 'selected':'' ?> value="৯">৯</option>
                        <option <?php echo ($result['birth_day']=='১০')? 'selected':'' ?> value="১০">১০</option>
                        <option <?php echo ($result['birth_day']=='১১')? 'selected':'' ?> value="১১">১১</option>
                        <option <?php echo ($result['birth_day']=='১২')? 'selected':'' ?> value="১২">১২</option>
                        <option <?php echo ($result['birth_day']=='১৩')? 'selected':'' ?> value="১৩">১৩</option>
                        <option <?php echo ($result['birth_day']=='১৪')? 'selected':'' ?> value="১৪">১৪</option>
                        <option <?php echo ($result['birth_day']=='১৫')? 'selected':'' ?> value="১৫">১৫</option>
                        <option <?php echo ($result['birth_day']=='১৬')? 'selected':'' ?> value="১৬">১৬</option>
                        <option <?php echo ($result['birth_day']=='১৭')? 'selected':'' ?> value="১৭">১৭</option>
                        <option <?php echo ($result['birth_day']=='১৮')? 'selected':'' ?> value="১৮">১৮</option>
                        <option <?php echo ($result['birth_day']=='১৯')? 'selected':'' ?> value="১৯">১৯</option>
                                               <option <?php echo ($result['birth_day']=='২০')? 'selected':'' ?> value="২০">২০</option>

					   <option <?php echo ($result['birth_day']=='২১')? 'selected':'' ?> value="২১">২১</option>
                        <option <?php echo ($result['birth_day']=='২২')? 'selected':'' ?> value="২২">২২</option>
                        <option <?php echo ($result['birth_day']=='২৩')? 'selected':'' ?> value="২৩">২৩</option>
                        <option <?php echo ($result['birth_day']=='২৪')? 'selected':'' ?> value="২৪">২৪</option>
                        <option <?php echo ($result['birth_day']=='২৫')? 'selected':'' ?> value="২৫">২৫</option>
                        <option <?php echo ($result['birth_day']=='২৬')? 'selected':'' ?> value="২৬">২৬</option>
                        <option <?php echo ($result['birth_day']=='২৭')? 'selected':'' ?> value="২৭">২৭</option>
                        <option <?php echo ($result['birth_day']=='২৮')? 'selected':'' ?> value="২৮">২৮</option>
                        <option <?php echo ($result['birth_day']=='২৯')? 'selected':'' ?> value="২৯">২৯</option>
                        <option <?php echo ($result['birth_day']=='৩০')? 'selected':'' ?> value="৩০">৩০</option>

                        <option <?php echo ($result['birth_day']=='৩১')? 'selected':'' ?> value="৩১">৩১</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  মাস: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_month" required>
                                <option>মাস</option>
                        <option <?php echo ($result['birth_month']=='০১')? 'selected':'' ?> value="০১">০১</option>
                        <option <?php echo ($result['birth_month']=='০২')? 'selected':'' ?> value="০২">০২</option>
                        <option <?php echo ($result['birth_month']=='০৩')? 'selected':'' ?> value="০৩">০৩</option>
                        <option <?php echo ($result['birth_month']=='০৪')? 'selected':'' ?> value="০৪">০৪</option>
                        <option <?php echo ($result['birth_month']=='০৫')? 'selected':'' ?> value="০৫">০৫</option>
                        <option <?php echo ($result['birth_month']=='০৬')? 'selected':'' ?> value="০৬">০৬</option>
                        <option <?php echo ($result['birth_month']=='০৭')? 'selected':'' ?> value="০৭">০৭</option>
                        <option <?php echo ($result['birth_month']=='০৮')? 'selected':'' ?> value="০৮">০৮</option>
                        <option <?php echo ($result['birth_month']=='০৯')? 'selected':'' ?> value="০৯">০৯</option>
                        <option <?php echo ($result['birth_month']=='১০')? 'selected':'' ?> value="১০">১০</option>
                        <option <?php echo ($result['birth_month']=='১১')? 'selected':'' ?> value="১১">১১</option>
                        <option <?php echo ($result['birth_month']=='১২')? 'selected':'' ?> value="১২">১২</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  সাল: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_year" required>
                                <option>সাল</option>
                        <option <?php echo ($result['birth_year']=='১৯৫২')? 'selected':'' ?> value="১৯৫২">১৯৫২</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৩')? 'selected':'' ?> value="১৯৫৩">১৯৫৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৪')? 'selected':'' ?> value="১৯৫৪">১৯৫৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৫')? 'selected':'' ?> value="১৯৫৫">১৯৫৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৬')? 'selected':'' ?> value="১৯৫৬">১৯৫৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৭')? 'selected':'' ?> value="১৯৫৭">১৯৫৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৮')? 'selected':'' ?> value="১৯৫৮">১৯৫৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৫৯')? 'selected':'' ?> value="১৯৫৯">১৯৫৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৬০')? 'selected':'' ?> value="১৯৬০">১৯৬০</option>
                        <option <?php echo ($result['birth_year']=='১৯৬১')? 'selected':'' ?> value="১৯৬১">১৯৬১</option>
                        <option <?php echo ($result['birth_year']=='১৯৬২')? 'selected':'' ?> value="১৯৬২">১৯৬২</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৩')? 'selected':'' ?> value="১৯৬৩">১৯৬৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৪')? 'selected':'' ?> value="১৯৬৪">১৯৬৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৫')? 'selected':'' ?> value="১৯৬৫">১৯৬৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৬')? 'selected':'' ?> value="১৯৬৬">১৯৬৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৭')? 'selected':'' ?> value="১৯৬৭">১৯৬৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৮')? 'selected':'' ?> value="১৯৬৮">১৯৬৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৬৯')? 'selected':'' ?> value="১৯৬৯">১৯৬৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৭১')? 'selected':'' ?> value="১৯৭১">১৯৭০</option>
                        <option <?php echo ($result['birth_year']=='১৯৭১')? 'selected':'' ?> value="১৯৭১">১৯৭১</option>
                        <option <?php echo ($result['birth_year']=='১৯৭২')? 'selected':'' ?> value="১৯৭২">১৯৭২</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৩')? 'selected':'' ?> value="১৯৭৩">১৯৭৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৪')? 'selected':'' ?> value="১৯৭৪">১৯৭৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৫')? 'selected':'' ?> value="১৯৭৫">১৯৭৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৬')? 'selected':'' ?> value="১৯৭৬">১৯৭৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৭')? 'selected':'' ?> value="১৯৭৭">১৯৭৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৮')? 'selected':'' ?> value="১৯৭৮">১৯৭৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৭৯')? 'selected':'' ?> value="১৯৭৯">১৯৭৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৮০')? 'selected':'' ?> value="১৯৮০">১৯৮০</option>
                        <option <?php echo ($result['birth_year']=='১৯৮১')? 'selected':'' ?> value="১৯৮১">১৯৮১</option>
                        <option <?php echo ($result['birth_year']=='১৯৮২')? 'selected':'' ?> value="১৯৮২">১৯৮২</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৩')? 'selected':'' ?> value="১৯৮৩">১৯৮৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৪')? 'selected':'' ?> value="১৯৮৪">১৯৮৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৫')? 'selected':'' ?> value="১৯৮৫">১৯৮৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৬')? 'selected':'' ?> value="১৯৮৬">১৯৮৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৭')? 'selected':'' ?> value="১৯৮৭">১৯৮৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৮')? 'selected':'' ?> value="১৯৮৮">১৯৮৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৮৯')? 'selected':'' ?> value="১৯৮৯">১৯৮৯</option>
                        <option <?php echo ($result['birth_year']=='১৯৯০')? 'selected':'' ?> value="১৯৯০">১৯৯০</option>
                        <option <?php echo ($result['birth_year']=='১৯৯১')? 'selected':'' ?> value="১৯৯১">১৯৯১</option>
                        <option <?php echo ($result['birth_year']=='১৯৯২')? 'selected':'' ?> value="১৯৯২">১৯৯২</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৩')? 'selected':'' ?> value="১৯৯৩">১৯৯৩</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৪')? 'selected':'' ?> value="১৯৯৪">১৯৯৪</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৫')? 'selected':'' ?> value="১৯৯৫">১৯৯৫</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৬')? 'selected':'' ?> value="১৯৯৬">১৯৯৬</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৭')? 'selected':'' ?> value="১৯৯৭">১৯৯৭</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৮')? 'selected':'' ?> value="১৯৯৮">১৯৯৮</option>
                        <option <?php echo ($result['birth_year']=='১৯৯৯')? 'selected':'' ?> value="১৯৯৯">১৯৯৯</option>
                        <option <?php echo ($result['birth_year']=='২০০০')? 'selected':'' ?> value="২০০০">২০০০</option>
                        <option <?php echo ($result['birth_year']=='২০০১')? 'selected':'' ?> value="২০০১">২০০১</option>
                        <option <?php echo ($result['birth_year']=='২০০২')? 'selected':'' ?> value="২০০২">২০০২</option>
                        <option <?php echo ($result['birth_year']=='২০০৩')? 'selected':'' ?> value="২০০৩">২০০৩</option>
                        <option <?php echo ($result['birth_year']=='২০০৪')? 'selected':'' ?> value="২০০৪">২০০৪</option>
                        <option <?php echo ($result['birth_year']=='২০০৫')? 'selected':'' ?> value="২০০৫">২০০৫</option>
                        <option <?php echo ($result['birth_year']=='২০০৬')? 'selected':'' ?> value="২০০৬">২০০৬</option>
                        <option <?php echo ($result['birth_year']=='২০০৭')? 'selected':'' ?> value="২০০৭">২০০৭</option>
                        <option <?php echo ($result['birth_year']=='২০০৮')? 'selected':'' ?> value="২০০৮">২০০৮</option>
                        <option <?php echo ($result['birth_year']=='২০০৯')? 'selected':'' ?> value="২০০৯">২০০৯</option>
                        <option <?php echo ($result['birth_year']=='২০১০')? 'selected':'' ?> value="২০১০">২০১০</option>
                        <option <?php echo ($result['birth_year']=='২০১১')? 'selected':'' ?> value="২০১১">২০১১</option>
                        <option <?php echo ($result['birth_year']=='২০১২')? 'selected':'' ?> value="২০১২">২০১২</option>
                        <option <?php echo ($result['birth_year']=='২০১৩')? 'selected':'' ?> value="২০১৩">২০১৩</option>
                        <option <?php echo ($result['birth_year']=='২০১৪')? 'selected':'' ?> value="২০১৪">২০১৪</option>
                        <option <?php echo ($result['birth_year']=='২০১৫')? 'selected':'' ?> value="২০১৫">২০১৫</option>
                        <option <?php echo ($result['birth_year']=='২০১৬')? 'selected':'' ?> value="২০১৬">২০১৬</option>
                        <option <?php echo ($result['birth_year']=='২০১৭')? 'selected':'' ?> value="২০১৭">২০১৭</option>
                        <option <?php echo ($result['birth_year']=='২০১৮')? 'selected':'' ?> value="২০১৮">২০১৮</option>
                        <option <?php echo ($result['birth_year']=='২০১৯')? 'selected':'' ?> value="২০১৯">২০১৯</option>
                        <option <?php echo ($result['birth_year']=='২০২০')? 'selected':'' ?> value="২০২০">২০২০</option>
                        <option <?php echo ($result['birth_year']=='২০২১')? 'selected':'' ?> value="২০২১">২০২১</option>
                        <option <?php echo ($result['birth_year']=='২০২২')? 'selected':'' ?> value="২০২২">২০২২</option>
                        <option>২০২৩</option>
                        <option>২০২৪</option>
                        <option>২০২৫</option>
                        <option>২০২৬</option>
                        <option>২০২৭</option>
                        <option>২০২৮</option>
                        <option>২০২৯</option>
                        <option>২০৩০</option>
                        <option>২০৩১</option>
                        <option>২০৩২</option>
                        <option>২০৩৩</option>
                        <option>২০৩৪</option>
                        <option>২০৩৫</option>
                        <option>২০৩৬</option>
                        <option>২০৩৭</option>
                        <option>২০৩৮</option>
                        <option>২০৩৯</option>
                        <option>২০৪০</option>
                        <option>২০৪১</option>
                        <option>২০৪২</option>
                        <option>২০৪৩</option>
                        <option>২০৪৪</option>
                        <option>২০৪৫</option>
                        <option>২০৪৬</option>
                        <option>২০৪৭</option>
                        <option>২০৪৮</option>
                        <option>২০৪৯</option>
                        <option>২০৫০</option>
                        <option>২০৫১</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">রক্তের গ্রুপ:</label>
                            <select class="form-control" name="blood_group" >
                                <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['blood_group']=='A+')? 'selected':'' ?> value="A+">A+</option>
                        <option <?php echo ($result['blood_group']=='A-')? 'selected':'' ?> value="A-">A-</option>
                        <option <?php echo ($result['blood_group']=='B+')? 'selected':'' ?> value="B+">B+</option>
                        <option <?php echo ($result['blood_group']=='B-')? 'selected':'' ?> value="B-">B-</option>
                        <option <?php echo ($result['blood_group']=='AB+')? 'selected':'' ?> value="AB+">AB+</option>
                        <option <?php echo ($result['blood_group']=='AB-')? 'selected':'' ?> value="AB-">AB-</option>
                        <option <?php echo ($result['blood_group']=='O+')? 'selected':'' ?> value="O+">O+</option>
                        <option <?php echo ($result['blood_group']=='O-')? 'selected':'' ?> value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ধর্ম: <font color="red" size="4">*</font></label>
                            <select class="form-control" name="religion" required>
                                <option>সিলেক্ট করুন</option>
                        <option <?php echo ($result['religion']=='ইসলাম')? 'selected':'' ?> value="ইসলাম">ইসলাম</option>
                        <option <?php echo ($result['religion']=='হিন্দু')? 'selected':'' ?> value="হিন্দু">হিন্দু</option>
                        <option <?php echo ($result['religion']=='খ্রিষ্ঠান')? 'selected':'' ?> value="খ্রিষ্ঠান">খ্রিষ্ঠান</option>
                        <option <?php echo ($result['religion']=='বৌদ্ধ')? 'selected':'' ?> value="বৌদ্ধ">বৌদ্ধ</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">জন্ম নিবন্ধন নাম্বার : <font color="red" size="4">*</font></label>
                            <input type="text" name="birth_reg_num" class="form-control" value="<?php echo $result['birth_reg_num']; ?>" required id="">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">মোবাইল নম্বর: </label>
                            <input type="text" name="last_Orga_phone" class="form-control" value="<?php echo $result['last_Orga_phone']; ?>"  id="">
                           
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">সর্বশেষ অধ্যয়ন প্রতিষ্ঠানের নাম ও  ঠিকানা : </label>
                            <input type="text" name="last_study_orga" class="form-control" value="<?php echo $result['last_study_orga']; ?>" id="">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="">ছেড়ে আসার কারন:</label>
                            <input type="text" name="why_left" class="form-control" value="<?php echo $result['why_left']; ?>" id="">
                        </div>
                    </div>
                </div>



                <h3 class="text-center" style="color: #2559ee">  বর্তমান ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="home_name" class="form-control" value="<?php echo $result['home_name']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="hoding_number" class="form-control" value="<?php echo $result['hoding_number']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="road_number" class="form-control" value="<?php echo $result['road_number']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="village_name" class="form-control" value="<?php echo $result['village_name']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর : <font color="red" size="4">*</font></label>
                            <input type="text" name="postoffice" class="form-control" value="<?php echo $result['postoffice']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="unione_name" class="form-control" value="<?php echo $result['unione_name']; ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="thana_name" class="form-control" value="<?php echo $result['thana_name']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম : <font color="red" size="4">*</font> </label>
                            <input type="text" name="district_name" class="form-control" value="<?php echo $result['district_name']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="postcode" class="form-control" value="<?php echo $result['postcode']; ?>" id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">  স্থায়ী ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="lasting_home_name" class="form-control" value="<?php echo $result['lasting_home_name']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="lasting_holding_number" class="form-control" value="<?php echo $result['lasting_holding_number']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="lasting_road_number" class="form-control" value="<?php echo $result['lasting_road_number']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম:</label>
                            <input type="text" name="lasting_village" class="form-control" value="<?php echo $result['lasting_village']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর:</label>
                            <input type="text" name="lasting_postoffice" class="form-control" value="<?php echo $result['lasting_postoffice']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম:</label>
                            <input type="text" name="lasting_unione" class="form-control" value="<?php echo $result['lasting_unione']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম:</label>
                            <input type="text" name="lasting_thana" class="form-control" value="<?php echo $result['lasting_thana']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম:</label>
                            <input type="text" name="lasting_district" class="form-control" value="<?php echo $result['lasting_district']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="lasting_postcode" class="form-control" value="<?php echo $result['lasting_postcode']; ?>" id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">  অভিভাবকের তথ্যাবলী   </h3>
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">পিতার নাম:<font color="red" size="4">*</font></label>
                            <input type="text" name="father_name" class="form-control" value="<?php echo $result['father_name']; ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পেশা:<font color="red" size="4">*</font></label>
                            <input type="text" name="father_occupation" class="form-control" value="<?php echo $result['father_occupation']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাসিক আয়:</label>
                            <input type="text" name="fa_monthly_income" class="form-control" value="<?php echo $result['fa_monthly_income']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা:</label>
                            <input type="text" name="fa_edu_quali" class="form-control" value="<?php echo $result['fa_edu_quali']; ?>" id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার:</label>
                            <input type="text" name="father_phone" class="form-control" value="<?php echo $result['father_phone']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="father_email" class="form-control" value="<?php echo $result['father_email']; ?>" id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</label>
                        <input type="text" name="father_national_id" class="form-control" value="<?php echo $result['father_national_id']; ?>" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">মাতার নাম:<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_name" class="form-control" value="<?php echo $result['mother_name']; ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পেশা:<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_occupation" class="form-control" value="<?php echo $result['mother_occupation']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাসিক আয়:</label>
                            <input type="text" name="mo_monthly_income" class="form-control" value="<?php echo $result['mo_monthly_income']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা:</label>
                            <input type="text" name="mo_edu_quali" class="form-control" value="<?php echo $result['mo_edu_quali']; ?>" id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার:</label>
                            <input type="text" name="mother_phone" class="form-control" value="<?php echo $result['mother_phone']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="mother_email" class="form-control" value="<?php echo $result['mother_email']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার : </label>
                        <input type="text" name="mo_national_id" class="form-control" value="<?php echo $result['mo_national_id']; ?>" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">পিতা / মাতার অবর্তমানে স্থানীয় অভিভাবকের নাম : </label>
                        <input type="text" name="local_gurdian" class="form-control" value="<?php echo $result['local_gurdian']; ?>" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">পেশা :</label>
                            <input type="text" name="local_occupation" class="form-control" value="<?php echo $result['local_occupation']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">সম্পর্ক: </label>
                            <input type="text" name="relation" class="form-control" value="<?php echo $result['relation']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  শিক্ষাগত যোগ্যতা : </label>
                            <input type="text" name="local_edu" class="form-control" value="<?php echo $result['local_edu']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার : </label>
                            <input type="text" name="local_phone" class="form-control" value="<?php echo $result['local_phone']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল : </label>
                            <input type="text" name="local_email" class="form-control" value="<?php echo $result['local_email']; ?>" id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার  : </label>
                            <input type="text" name="local_national_id" class="form-control" value="<?php echo $result['local_national_id']; ?>" id="">
                        </div>
                    </div>
                </div>
                
                <?php
            
            // if(isset($_SESSION['imgSize'])){
            //     echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
            //     session_unset();
            // }
            // if(isset($_SESSION['update'])){
            //     echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
            //     session_unset();
            // }


            ?>
               
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> শিক্ষার্থী ছবি :<font color="red" size="4">*</font> </label>
                            <input type='file' name="student_image"     onchange="readURL(this);" />
                            <img id="blah" src="view/admin/uploads/<?php echo $result['student_image']?>" width="100" alt="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পিতার ছবি : <font color="red" size="4">*</font></label>
                            <input type='file' name="father_image"     onchange="readURL2(this);" />
                            <img id="blah2" src="view/admin/uploads/<?php echo $result['father_image']?>" width="100" alt="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাতার ছবি: <font color="red" size="4">*</font></label>
                            <input type='file' name="mother_image"     onchange="readURL3(this);" />
                            <img id="blah3" src="view/admin/uploads/<?php echo $result['mother_image']?>" width="100" alt="" />
                        </div>
                    </div>
                </div>



                <br />

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
                </div>

            </form>
        </div>
    </div>
  </div>
</div>




<?php  include '../includes/footer.php' ?>

