<?php
    
    include_once '../../includes/header.php'; 

    include_once '../../../../vendor/autoload.php' ;

    //  echo "<pre>";
    // var_dump($_POST);
    //die();

    use App\Admin\Ninetenscience\Ninetenscience;
    $Ninetenscience = new Ninetenscience();

    $class = $_POST['class'];
    $term  = $_POST['term'];
    $year  = $_POST['year'];
    $student_id = $_POST['student_id'];

    $result = $Ninetenscience->nineTenAllMark($class, $term, $year, $student_id);

    // echo "<pre>";
    // var_dump($result);
    // die();


 ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/ninetenmarksheet/science/updateMarksheet.php" method="post">
        <!-- <form action="view/admin/marksheet/allSubMarkupdate.php" method="post">
 -->
        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">শিক্ষার্থীদের নম্বর সংশোধন </h3>
                <br />
        <?php
            if(isset($_SESSION['msg2'])){
                echo "<div class='alert alert-success'>".$_SESSION['msg2']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                //session_unset();
            }
             


        ?>
   
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                            
                            <option <?= ($result['class'] == 'নবম')?'selected':'' ?> >নবম</option>
                            <option <?= ($result['class'] == '১০ম')?'selected':'' ?> >১০ম</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শিফট:</strong>
                        <select class="form-control" name="shift" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?php echo ($result['shift'] == 'প্রভাতী')?'selected':'' ?> >প্রভাতী</option>
                            <option <?php echo ($result['shift'] == 'দিবা')?'selected':'' ?> >দিবা</option>
                            <option <?php echo ($result['shift'] == 'সান্ধ্যকালীন')?'selected':'' ?> >সান্ধ্যকালীন</option>
                            <option <?php echo ($result['shift'] == 'রাত্রিকালীন')?'selected':'' ?> >রাত্রিকালীন</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শাখা:</strong>
                        <select class="form-control" name="branch" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?php echo ($result['branch'] == 'ক')?'selected':'' ?> >ক</option>
                            <option <?php echo ($result['branch'] == 'খ')?'selected':'' ?> >খ</option>
                            <option <?php echo ($result['branch'] == 'গ')?'selected':'' ?> >গ</option>
                            <option <?php echo ($result['branch'] == 'ঘ')?'selected':'' ?> >ঘ</option>
                            <option <?php echo ($result['branch'] == 'ঙ')?'selected':'' ?> >ঙ</option>
                            <option <?php echo ($result['branch'] == 'চ')?'selected':'' ?> >চ</option>
                            <option <?php echo ($result['branch'] == 'ছ')?'selected':'' ?> >ছ</option>
                            <option <?php echo ($result['branch'] == 'জ')?'selected':'' ?> >জ</option>
                            <option <?php echo ($result['branch'] == 'ঝ')?'selected':'' ?> >ঝ</option>
                            <option <?php echo ($result['branch'] == 'ঞ')?'selected':'' ?> >ঞ</option>
                            <option <?php echo ($result['branch'] == 'ট')?'selected':'' ?> >ট</option>
                            <option <?php echo ($result['branch'] == 'ঠ')?'selected':'' ?> >ঠ</option>
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>বিভাগ:</strong>
                        <select class="form-control" name="department" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?php echo ($result['department'] == 'জেনারেল')?'selected':'' ?> >জেনারেল</option>
                            <option <?php echo ($result['department'] == 'বিজ্ঞান')?'selected':'' ?> >বিজ্ঞান</option>
                            <option <?php echo ($result['department'] == 'মানবিক')?'selected':'' ?> >মানবিক</option>
                            <option <?php echo ($result['department'] == 'বানিজ্য')?'selected':'' ?> >বানিজ্য  </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option <?php echo ($result['term'] == 'মধ্যবর্তি')?'selected':'' ?> >মধ্যবর্তি   </option>
                            <option <?php echo ($result['term'] == 'বার্ষিক')?'selected':'' ?> >বার্ষিক </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
            <input type="text" name="student_id" value="<?php echo $result['student_id']; ?>"   class="form-control" placeholder="Enter id..." id="" required="">
            <input type="hidden" name="unique_id" value="<?php echo $result['unique_id']; ?>"   class="form-control"  id="" required="">
                    </div>

                </div>
            </div>  

            <h3 style="text-align:center;color:green;">সকল বিষয় </h3>

            <?php echo "<hr>"; ?>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা ১ম পত্র</label>
                        <select class="form-control" name="bangla1" value="<?php echo $result['bangla1']; ?>" required>
                            <option selected="">বাংলা ১ম পত্র</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ নম্বর :</label>
                        <input type="text" name="fullmark" value="<?php echo $result['fullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  লিখিত  নম্বর: </label>
                        <input type="text" name="b1w" value="<?php echo $result['b1w']; ?>"    class="form-control" placeholder="Enter Written Number" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b1m" value="<?php echo $result['b1m']; ?>"   class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা ২য় পত্র</label>
                        <select class="form-control" name="bangla2"  value="<?php echo $result['bangla2']; ?>"  required>

                            <option selected="">বাংলা ২য় পত্র</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="b2fullmark" value="<?= $result['b2fullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">  প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="b2w" value="<?= $result['b2w']; ?>"    class="form-control" placeholder="Enter Written Number..." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b2m" value="<?= $result['b2m']; ?>"    class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ইংরেজী ১ম পত্র</label>
                        <select class="form-control" name="english1" value="<?= $result['english1']; ?>" required>
                             <option selected="">ইংরেজী ১ম পত্র</option>                  
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="enfullmark" value="<?= $result['enfullmark']; ?>"    placeholder="Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e1w" value="<?= $result['e1w']; ?>"    class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="e1g" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ইংরেজী ২য় পত্র</label>
                        <select class="form-control" name="english2" value="<?= $result['english2']; ?>" required>
                          <option selected="">ইংরেজী ২য় পত্র</option>                    
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="e2fullmark" value="<?= $result['e2fullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject...  " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e2w" value="<?= $result['e2w']; ?>"    class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="e2m" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : গণিত</label>
                        <select class="form-control" name="math" value="<?= $result['math']; ?>" required>
                          
                            <option selected="">গণিত</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="mfullmark" value="<?= $result['mfullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="mw" value="<?= $result['mw']; ?>"    class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="mg" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : উচ্চতর গণিত</label>
                        <select class="form-control" name="hmath" value="<?= $result['hmath']; ?>" required="">
                            <option selected="">উচ্চতর গণিত</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="hfullmark" value="<?= $result['hfullmark']; ?>" placeholder="Ex: 100, Full marks this subject..." class="form-control" id="" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">প্রাপ্ত  নম্বর:</label>
                        <input type="text" name="hmw" value="<?= $result['hmw']; ?>" placeholder="Enter Written Number..." class="form-control" id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : পদার্থবিজ্ঞান  </label>
                        <select class="form-control" name="physics" value="<?= $result['physics']; ?>" required="">
                            <option selected="">পদার্থবিজ্ঞান</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="pfullmark" value="<?= $result['pfullmark']; ?>" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="pw" value="<?= $result['pw']; ?>" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="pm" value="<?= $result['pm']; ?>" class="form-control" placeholder="Enter MCQ..." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="pp" value="<?= $result['pp']; ?>" class="form-control" placeholder="Enter Practical Number..." id="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : রসায়ন   </label>
                        <select class="form-control" name="chemistry" value="<?= $result['chemistry']; ?>" required="">
                            <option selected="">রসায়ন </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="cfullmark" value="<?= $result['cfullmark']; ?>" placeholder="Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="cw" value="<?= $result['cw']; ?>" placeholder="Enter Written Number..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="cm" value="<?= $result['cm']; ?>" class="form-control" placeholder="Enter MCQ..." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="cp" value="<?= $result['cp']; ?>" class="form-control" placeholder="Enter Practical Number..." id="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : জীববিজ্ঞান    </label>
                        <select class="form-control" name="biology" value="<?= $result['biology']; ?>" required="">
                            <option selected="">জীববিজ্ঞান  </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bfullmark" value="<?= $result['bfullmark']; ?>" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="bw" value="<?= $result['bw']; ?>" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bm" value="<?= $result['bm']; ?>" class="form-control" placeholder="Enter MCQ..." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="bp" value="<?= $result['bp']; ?>" class="form-control" placeholder="Enter Practical Number..." id="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলাদেশ ও বিশ্ব পরিচয়</label>
                        <select class="form-control" name="banint"  value="<?= $result['banint']; ?>" required>
                        
                            <option selected="">বাংলাদেশ ও বিশ্ব পরিচয়</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bifullmark" value="<?= $result['bifullmark']; ?>"   placeholder=" Ex: 50, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="biw" value="<?= $result['biw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bim" value="<?= $result['bim']; ?>"    class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : কৃষি শিক্ষা</label>
                        <select class="form-control" name="agriculture" value="<?= $result['agriculture']; ?>" required>
                        
                            <option selected="">কৃষি শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="agfullmark" value="<?= $result['agfullmark']; ?>" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="agw" value="<?= $result['agw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="agm" value="<?= $result['agm']; ?>"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

         
            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ধর্ম ও নৈতিক শিক্ষা</label>
                        <select class="form-control" name="religion" value="<?= $result['religion']; ?>" required>
                        
                            <option selected="">ধর্ম ও নৈতিক শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="refullmark" value="<?= $result['refullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="rw" value="<?= $result['rw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="rm" value="<?= $result['rm']; ?>"   class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বিজ্ঞান</label>
                        <select class="form-control" name="science" value="<?= $result['science']; ?>" required>
                        
                            <option selected="">বিজ্ঞান</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="sfullmark" value="<?= $result['sfullmark']; ?>"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="sw" value="<?= $result['sw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="sm" value="<?= $result['sm']; ?>"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="sp" value="<?= $result['sp']; ?>" class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : তথ্য ও যোগাযোগ প্রযুক্তি</label>
                        <select class="form-control" name="ict" value="<?= $result['ict']; ?>" required>
                        
                            <option selected="">তথ্য ও যোগাযোগ প্রযুক্তি</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="ictfullmark" value="<?= $result['ictfullmark']; ?>" placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="iw" value="<?= $result['iw']; ?>" class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="im" value="<?= $result['im']; ?>"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="ip" value="<?= $result['ip']; ?>"  class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : গার্হস্থ্যবিজ্ঞান ৪র্থ </label>
                        <select class="form-control" name="dms" value="<?= $result['dms']; ?>" required>
                        
                          
                            <option selected="">গার্হস্থ্যবিজ্ঞান ৪র্থ </option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="dmsfullmark" value="<?= $result['dmsfullmark']; ?>"  placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="dw" value="<?= $result['dw']; ?>" class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="dm" value="<?= $result['dm']; ?>" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="dp" value="<?= $result['dp']; ?>" class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : শারীরিক শিক্ষা ও স্বাস্থ্য </label>
                        <select class="form-control" name="sports" value="<?= $result['sports']; ?>" required>
                        
                          
                            <option selected="">শারীরিক শিক্ষা ও স্বাস্থ্য</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="spfullmark" value="<?= $result['spfullmark']; ?>"  placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="spw" value="<?= $result['spw']; ?>" class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="spm" value="<?= $result['spm']; ?>" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর:</label>
                        <input type="text" name="spp" value="<?= $result['spp']; ?>" class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : কর্ম ও জীবনমূখী শিক্ষা </label>
                        <select class="form-control" name="wl" value="<?= $result['wl']; ?>" required>
                         
                            <option selected="">কর্ম ও জীবনমূখী শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="wlfullmark" value="<?= $result['wlfullmark']; ?>" placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="wlw" value="<?= $result['wlw']; ?>" class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="wlm" value="<?= $result['wlm']; ?>" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="wlp" value="<?= $result['wlp']; ?>" class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : চারু ও কারুকলা</label>
                        <select class="form-control" name="arts" value="<?= $result['arts']; ?>" required>
                         
                            <option selected="">চারু ও কারুকলা</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="artsfullmark" value="<?= $result['artsfullmark']; ?>" placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="aw" value="<?= $result['aw']; ?>" class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="am" value="<?= $result['am']; ?>" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর:</label>
                        <input type="text" name="ap"  value="<?= $result['ap']; ?>" class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>

             
             
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>  
             
  </div>

</div>






<?php  include '../../includes/footer.php' ?>
