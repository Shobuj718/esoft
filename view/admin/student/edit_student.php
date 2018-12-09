

<?php

/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */

include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';
error_reporting(0);


use App\admin\student\Student;
$student = new Student();

$id = $_GET['edit'];
$result = $student->showSelect($id);


?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: #ECF0F5">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
    <!-- <form method="post" action="#" accept-charset="utf-8" align="center" enctype="multipart/form-data"> -->

    <form method="post" action="view/admin/StudentInfo/update3.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Update Students Academic Information</h3>
                <hr />
        <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                unset($_SESSION['imgSize']);
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                unset($_SESSION['fileext']);
            }


        ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Student Name :<font color="red" size="4">*</font> </label>
                            <input type="text" name="student_name" class="form-control" value="<?php echo $result['student_name']?>" id="" required="required">

                            <input type="hidden" name="unique_id" class="form-control" value="<?php echo $result['unique_id']?>" id="" required="required">

                            <input type="hidden" name="student_image" class="form-control" value="<?php echo $result['student_image']?>" id="" required="required">

                            <input type="hidden" name="father_image" class="form-control" value="<?php echo $result['father_image']?>" id="" required="required">

                            <input type="hidden" name="mother_image" class="form-control" value="<?php echo $result['mother_image']?>" id="" required="required">
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Sex <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option>-select- </option>
                        <option <?php echo ($result['sex']=='Boy')? 'selected':'' ?> value="Boy">Boy</option>
                        <option <?php echo ($result['sex']=='Girl')? 'selected':'' ?> value="Girl">Girl</option>
                        <option <?php echo ($result['sex']=='Other')? 'selected':'' ?> value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Class : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                <option>-class-</option>
                        
                        <option <?php echo ($result['class']=='One')? 'selected':'' ?> value="One">One</option>
                        <option <?php echo ($result['class']=='Two')? 'selected':'' ?> value="Two">Two</option>
                        <option <?php echo ($result['class']=='Three')? 'selected':'' ?> value="Three">Three</option>
                        <option <?php echo ($result['class']=='Four')? 'selected':'' ?> value="Four">Four</option>
                        <option <?php echo ($result['class']=='Five')? 'selected':'' ?> value="Five">Five</option>
                        <option <?php echo ($result['class']=='Six')? 'selected':'' ?> value="Six">Six</option>
                        <option <?php echo ($result['class']=='Seven')? 'selected':'' ?> value="Seven">Seven</option>
                        <option <?php echo ($result['class']=='Eight')? 'selected':'' ?> value="Eight">Eight</option>
                        <option <?php echo ($result['class']=='Nine')? 'selected':'' ?> value="Nine">Nine</option>
                        <option <?php echo ($result['class']=='Ten')? 'selected':'' ?> value="Ten">Ten</option>
                        <option <?php echo ($result['class']=='Eleven')? 'selected':'' ?> value="Eleven">Eleven</option>
                        <option <?php echo ($result['class']=='Twelve')? 'selected':'' ?> value="Twelve">Twelve</option>
                       
                            </select>
                        </div>
                    </div>
					
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  Class Roll : </label>
                            <input type="text" name="class_roll" class="form-control" value="<?php echo $result['class_roll']; ?>" id="">
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Section : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="branch" required>
                                 <option>-select-</option>

                        <option <?php echo ($result['branch']=='A')? 'selected':'' ?> value="A">A</option>
                        <option <?php echo ($result['branch']=='B')? 'selected':'' ?> value="B">B</option>
                        <option <?php echo ($result['branch']=='C')? 'selected':'' ?> value="C">C</option>
                        <option <?php echo ($result['branch']=='D')? 'selected':'' ?> value="D">D</option>
                        
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for=""> Department/Group : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="department" required>
                                <option>-select-</option>
                        <option <?php echo ($result['department']=='General')? 'selected':'' ?> value="General">General</option>
                        <option <?php echo ($result['department']=='Science')? 'selected':'' ?> value="Science">Science</option>
                        <option <?php echo ($result['department']=='Humanities')? 'selected':'' ?> value="Humanities">Humanities</option>
                        <option <?php echo ($result['department']=='Commerce')? 'selected':'' ?> value="Commerce">Commerce</option>
                        <option <?php echo ($result['department']=='Vocational')? 'selected':'' ?> value="Vocational">Vocational</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">

                     <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Shift : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="shift" required>
                                <option>-select-</option>
                        <option <?php echo ($result['shift']=='Morning')? 'selected':'' ?> value="Morning">Morning</option>
                        <option <?php echo ($result['shift']=='Day')? 'selected':'' ?> value="Day">Day</option>
                        <option <?php echo ($result['shift']=='Evening')? 'selected':'' ?> value="Evening">Evening</option>
                        <option <?php echo ($result['shift']=='Night')? 'selected':'' ?> value="Night">Night</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  Year : <font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" value="<?php echo date('Y'); ?>" name="year"  required>
                        </div>
                    </div>
                    
                </div>

               
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Student ID : <font color="red" size="4">*</font> </label>
                            <input type="text" value="<?= $result['student_id'] ;//substr(md5(time()),'0','5').date('Y'); //$submit_count.date('Y'); ?>" class="form-control" name="student_id" required >
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">Personal Information</h3>
                <hr />

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Date of Birth : Day <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_day" required>
                                <option>Day</option>
						<?php
                        /*for($i=1; $i<=31; $i++){
							$selected = ($result['birth_day']=='$i')?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }*/
                      ?>

                        <option <?php echo ($result['birth_day']=='1')? 'selected':'' ?> value="1">1</option>
                        <option <?php echo ($result['birth_day']=='2')? 'selected':'' ?> value="2">2</option>
                        <option <?php echo ($result['birth_day']=='3')? 'selected':'' ?> value="3">3</option>
                        <option <?php echo ($result['birth_day']=='4')? 'selected':'' ?> value="4">4</option>
                        <option <?php echo ($result['birth_day']=='5')? 'selected':'' ?> value="5">5</option>
                        <option <?php echo ($result['birth_day']=='6')? 'selected':'' ?> value="6">6</option>
                        <option <?php echo ($result['birth_day']=='7')? 'selected':'' ?> value="০৭">7</option>
                        <option <?php echo ($result['birth_day']=='8')? 'selected':'' ?> value="8">8</option>
                        <option <?php echo ($result['birth_day']=='9')? 'selected':'' ?> value="9">9</option>
                        <option <?php echo ($result['birth_day']=='10')? 'selected':'' ?> value="10">10</option>
                        <option <?php echo ($result['birth_day']=='11')? 'selected':'' ?> value="11">11</option>
                        <option <?php echo ($result['birth_day']=='12')? 'selected':'' ?> value="12">12</option>
                        <option <?php echo ($result['birth_day']=='১৩')? 'selected':'' ?> value="১৩">13</option>
                        <option <?php echo ($result['birth_day']=='১৪')? 'selected':'' ?> value="১৪">14</option>
                        <option <?php echo ($result['birth_day']=='১৫')? 'selected':'' ?> value="১৫">15</option>
                        <option <?php echo ($result['birth_day']=='১৬')? 'selected':'' ?> value="১৬">16</option>
                        <option <?php echo ($result['birth_day']=='১৭')? 'selected':'' ?> value="১৭">17</option>
                        <option <?php echo ($result['birth_day']=='১৮')? 'selected':'' ?> value="১৮">18</option>
                        <option <?php echo ($result['birth_day']=='১৯')? 'selected':'' ?> value="১৯">19</option>
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
                            <label for="">  Month : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_month" required>
                                <option>Month</option>
                        <option <?php echo ($result['birth_month']=='1')? 'selected':'' ?> value="1">1</option>
                        <option <?php echo ($result['birth_month']=='2')? 'selected':'' ?> value="2">2</option>
                        <option <?php echo ($result['birth_month']=='3')? 'selected':'' ?> value="3">3</option>
                        <option <?php echo ($result['birth_month']=='4')? 'selected':'' ?> value="4">4</option>
                        <option <?php echo ($result['birth_month']=='5')? 'selected':'' ?> value="5">5</option>
                        <option <?php echo ($result['birth_month']=='6')? 'selected':'' ?> value="6">6</option>
                        <option <?php echo ($result['birth_month']=='7')? 'selected':'' ?> value="০৭">7</option>
                        <option <?php echo ($result['birth_month']=='8')? 'selected':'' ?> value="8">8</option>
                        <option <?php echo ($result['birth_month']=='9')? 'selected':'' ?> value="9">9</option>
                        <option <?php echo ($result['birth_month']=='10')? 'selected':'' ?> value="10">10</option>
                        <option <?php echo ($result['birth_month']=='11')? 'selected':'' ?> value="11">11</option>
                        <option <?php echo ($result['birth_month']=='12')? 'selected':'' ?> value="12">12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  Year : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_year" required>
                                <option>Year</option>
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
                            <img id="blah" src="view/admin/uploads/student/<?php echo $result['student_image']?>" width="100" alt="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পিতার ছবি : <font color="red" size="4">*</font></label>
                            <input type='file' name="father_image"     onchange="readURL2(this);" />
                            <img id="blah2" src="view/admin/uploads/student/<?php echo $result['father_image']?>" width="100" alt="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাতার ছবি: <font color="red" size="4">*</font></label>
                            <input type='file' name="mother_image"     onchange="readURL3(this);" />
                            <img id="blah3" src="view/admin/uploads/student/<?php echo $result['mother_image']?>" width="100" alt="" />
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

