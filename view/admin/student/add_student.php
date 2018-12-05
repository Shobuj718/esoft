<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


    use App\admin\student\Student;
    $student = new Student();
    
    $results = $student->selectId();
    $lastid = $results['student_id'];

?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <form action="view/admin/student/store_student.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Add Student Academic Information </h3>
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
                            <input type="text" name="student_name" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['student_name'];} ?>" class="form-control" pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character " placeholder="Enter student name.." id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Sex : <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option>-Select-</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['sex']=='Boy')? 'selected':''; } ?> value='Boy'>Boy</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['sex']=='Girl')? 'selected':''; } ?> value='Girl'>Girl</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['sex']=='Other')? 'selected':''; } ?> value='Other'>Other</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Class : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                <option>-select-</option>
            
            
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='One')? 'selected':''; } ?> value='One'>One</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Two')? 'selected':''; } ?> value='Two'>Two</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Three')? 'selected':''; } ?> value='Three'>Three</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Four')? 'selected':''; } ?> value='Four'>Four</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Five')? 'selected':''; } ?> value='Five'>Five</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Six')? 'selected':''; } ?> value='Six'>Six</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Seven')? 'selected':''; } ?> value='Seven'>Seven</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Eight')? 'selected':''; } ?> value='Eight'>Eight</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Nine')? 'selected':''; } ?> value='Nine'>Nine</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Ten')? 'selected':''; } ?> value='Ten'>Ten</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Eleven')? 'selected':''; } ?> value='Eleven'>Eleven</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['class']=='Twelve')? 'selected':''; } ?> value='Twelve'>Twelve</option>
                               
                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Shift : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="shift" required>
                                <option>-select-</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['shift']=='Morning')? 'selected':''; } ?> value='Morning'>Morning</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['shift']=='Day')? 'selected':''; } ?> value='Day'>Day</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['shift']=='Evening')? 'selected':''; } ?> value='Evening'>Evening</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['shift']=='Night')? 'selected':''; } ?> value='Night'>Night</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Section : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="branch" required>
                                <option>-select-</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['branch']=='A')? 'selected':''; } ?> value='A'>A</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['branch']=='B')? 'selected':''; } ?> value='B'>B</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['branch']=='C')? 'selected':''; } ?> value='C'>C</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['branch']=='D')? 'selected':''; } ?> value='D'>D</option>
                              
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">  Department/Group : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="department" required>
                                <option>-select-</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['department']=='General')? 'selected':''; } ?> value='General'>General</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['department']=='Science')? 'selected':''; } ?> value='Science'>Science</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['department']=='Humanities')? 'selected':''; } ?> value='Humanities'>Humanities</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['department']=='Commerce')? 'selected':''; } ?> value='Commerce'>Commerce</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['department']=='Vocational')? 'selected':''; } ?> value='Vocational'>Vocational</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Class Roll : </label>
                            <input type="text" name="class_roll" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['class_roll'];} ?>" pattern="[0-9]+" title="Must Contain Number " placeholder="Enter Class Roll..." id="">
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
                            <label for="">Student Id : <font color="red" size="4">*</font> </label>
                            <input type="text" value="<?= ++$lastid ; ?>" class="form-control" pattern="[0-9]+" title="Must Contain Number " name="student_id" required >
                        </div>
                    </div>
                </div>


               

                <h3 class="text-center" style="color: #2559ee">Personal Information</h3>
                <hr />

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Birth Date : Day <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_day" required>
                                <option>Day</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='1')? 'selected':''; } ?> value='1'>1</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='2')? 'selected':''; } ?> value='2'>2</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='3')? 'selected':''; } ?> value='3'>3</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='4')? 'selected':''; } ?> value='4'>4</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='5')? 'selected':''; } ?> value='5'>5</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='6')? 'selected':''; } ?> value='6'>6</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='7')? 'selected':''; } ?> value='7'>7</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='8')? 'selected':''; } ?> value='8'>8</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='9')? 'selected':''; } ?> value='9'>9</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='10')? 'selected':''; } ?> value='10'>10</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='11')? 'selected':''; } ?> value='11'>11</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='12')? 'selected':''; } ?> value='12'>12</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='13')? 'selected':''; } ?> value='13'>13</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='14')? 'selected':''; } ?> value='14'>14</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='15')? 'selected':''; } ?> value='15'>15</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='16')? 'selected':''; } ?> value='16'>16</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='17')? 'selected':''; } ?> value='17'>17</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='18')? 'selected':''; } ?> value='18'>18</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='19')? 'selected':''; } ?> value='19'>19</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='20')? 'selected':''; } ?> value='20'>20</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='21')? 'selected':''; } ?> value='21'>21</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='22')? 'selected':''; } ?> value='22'>22</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='23')? 'selected':''; } ?> value='23'>23</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='24')? 'selected':''; } ?> value='24'>24</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='25')? 'selected':''; } ?> value='25'>25</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='26')? 'selected':''; } ?> value='26'>26</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='27')? 'selected':''; } ?> value='27'>27</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='28')? 'selected':''; } ?> value='28'>28</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='29')? 'selected':''; } ?> value='29'>29</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='30')? 'selected':''; } ?> value='30'>30</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_day']=='31')? 'selected':''; } ?> value='31'>31</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  Month : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_month" required>
                                <option>Month</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='1')? 'selected':''; } ?> value='1'>1</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='2')? 'selected':''; } ?> value='2'>2</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='3')? 'selected':''; } ?> value='3'>3</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='4')? 'selected':''; } ?> value='4'>4</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='5')? 'selected':''; } ?> value='5'>5</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='6')? 'selected':''; } ?> value='6'>6</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='7')? 'selected':''; } ?> value='7'>7</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='8')? 'selected':''; } ?> value='8'>8</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='9')? 'selected':''; } ?> value='9'>9</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='10')? 'selected':''; } ?> value='10'>10</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='11')? 'selected':''; } ?> value='11'>11</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_month']=='12')? 'selected':''; } ?> value='12'>12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  Year : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_year" required>
                                <option>Year</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2000')? 'selected':''; } ?> value='2000'>2000</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2001')? 'selected':''; } ?> value='2001'>2001</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2002')? 'selected':''; } ?> value='2002'>2002</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2003')? 'selected':''; } ?> value='2003'>2003</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2004')? 'selected':''; } ?> value='2004'>2004</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2005')? 'selected':''; } ?> value='2005'>2005</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2006')? 'selected':''; } ?> value='2006'>2006</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2007')? 'selected':''; } ?> value='2007'>2007</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2008')? 'selected':''; } ?> value='2008'>2008</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2009')? 'selected':''; } ?> value='2009'>2009</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2010')? 'selected':''; } ?> value='2010'>2010</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2011')? 'selected':''; } ?> value='2011'>2011</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['birth_year']=='2012')? 'selected':''; } ?> value='2012'>2012</option>
                               
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Blood Group :</label>
                            <select class="form-control" name="blood_group" >
                                <option>-select-</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='A+')? 'selected':''; } ?> value='A+'>A+</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='A-')? 'selected':''; } ?> value='A-'>A-</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='B+')? 'selected':''; } ?> value='B+'>B+</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='B-')? 'selected':''; } ?> value='B-'>B-</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='o+')? 'selected':''; } ?> value='o+'>o+</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='o-')? 'selected':''; } ?> value='o-'>o-</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='AB+')? 'selected':''; } ?> value='AB+'>AB+</option>
             <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['blood_group']=='AB-')? 'selected':''; } ?> value='AB-'>AB-</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Religion : <font color="red" size="4">*</font></label>
                            <select class="form-control" name="religion" required>
                                <option>-select-</option>

            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['religion']=='Islam')? 'selected':''; } ?> value='Islam'>Islam</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['religion']=='Hindu')? 'selected':''; } ?> value='Hindu'>Hindu</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['religion']=='Cristian')? 'selected':''; } ?> value='Cristian'>Cristian</option>
            <option <?php if(isset($_SESSION['data'])){
                echo ($_SESSION['data']['religion']=='Bouddha')? 'selected':''; } ?> value='Bouddha'>Bouddha</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Birth Registration Number : <font color="red" size="4">*</font></label>
                            <input type="text" name="birth_reg_num" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['birth_reg_num'];} ?>"  pattern="[0-9]+" title="Must Contain Number " placeholder="Enter birth reg:  number..." required id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mobile Number : </label>
                            <input type="text" name="last_Orga_phone" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['last_Orga_phone'];} ?>"  pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Enter Phone Number..." >
                        </div>
                    </div>
                    
                    
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name and address of the last study organization : </label>
                            <input type="text" name="last_study_orga" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['last_study_orga'];} ?>" pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,120}" title="Must Contain character " placeholder="Last study  oraganization..." id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Reason to leave :</label>
                            <input type="text" name="why_left" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['why_left'];} ?>" pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,120}" title="Must Contain character " placeholder="why left..." id="">
                        </div>
                    </div>
                </div>




                <h3 class="text-center" style="color: #2559ee">  Present Address  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Home Name :</label>
                            <input type="text" name="home_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['home_name'];} ?>" pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character " placeholder="Enter Home name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Home/Holding Number :</label>
                            <input type="text" name="hoding_number" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['hoding_number'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character " placeholder="Enter Holding number..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Road Number :</label>
                            <input type="text" name="road_number" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['road_number'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Road number..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Village Name : <font color="red" size="4">*</font></label>
                            <input type="text" name="village_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['village_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Village name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Post Office Name : <font color="red" size="4">*</font></label>
                            <input type="text" name="postoffice" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['postoffice'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Postoffice name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Unione/Municipality Name : <font color="red" size="4">*</font></label>
                            <input type="text" name="unione_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['unione_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Unione name..." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Upazila/Thana Name : <font color="red" size="4">*</font></label>
                            <input type="text" name="thana_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['thana_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Thana name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">District Name : <font color="red" size="4">*</font> </label>
                            <input type="text" name="district_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['district_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter District name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Post Code Number:</label>
                            <input type="text" name="postcode" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['postcode'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Post Code..." id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">Permanent Address </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Home Name :</label>
                            <input type="text" name="lasting_home_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_home_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder=" Enter Home name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Home/Holding Number :</label>
                            <input type="text" name="lasting_holding_number" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_holding_number'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Holding number..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Road Number :</label>
                            <input type="text" name="lasting_road_number" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_road_number'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Road number..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Village Name :</label>
                            <input type="text" name="lasting_village" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_village'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Village name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Post Office Name :</label>
                            <input type="text" name="lasting_postoffice" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_postoffice'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Postoffice name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Unione/Municipality Name :</label>
                            <input type="text" name="lasting_unione" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_unione'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Unione name..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Upzila/Thana Name :</label>
                            <input type="text" name="lasting_thana" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_thana'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Thana name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">District Name :</label>
                            <input type="text" name="lasting_district" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['why_left'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter District name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Post Code Number:</label>
                            <input type="text" name="lasting_postcode" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['lasting_postcode'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Post Code..." id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee"> Parent Information   </h3>
                <hr />

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Father Name :<font color="red" size="4">*</font></label>
                            <input type="text" name="father_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['father_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Father name.." id="" required>
                        </div>
                    </div>
					  <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Occupation :<font color="red" size="4">*</font></label>
                            <input type="text" name="father_occupation" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['father_occupation'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Occupation.." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Monthly Income :</label>
                            <input type="text" name="fa_monthly_income" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['fa_monthly_income'];} ?>"  pattern="[0-9 a-z.]+" title="Must Contain character "  placeholder="Monthly income.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Educational Qualification :</label>
                            <input type="text" name="fa_edu_quali" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['fa_edu_quali'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Education Qualification.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mobile Number:</label>
                            <input type="text" name="father_phone" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['father_phone'];} ?>"  pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Enter phone number.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="text" name="father_email" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['father_email'];} ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder="Enter email.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="">National ID / Passport / Driving License Number :</label>
                        <input type="text" name="father_national_id" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['father_national_id'];} ?>"  pattern="[0-9]+" title="Must Contain Number "  placeholder="Enter father NID..." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mother Name:<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_name" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mother_name'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Father name.." id="" required>
                        </div>
                    </div>
					
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Occupation :<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_occupation" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mother_occupation'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter Occupation.." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Monthly Income :</label>
                            <input type="text" name="mo_monthly_income" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mo_monthly_income'];} ?>"  pattern="[0-9 a-z.]+" title="Must Contain character "  placeholder="Monthly income.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Educational Qualification :</label>
                            <input type="text" name="mo_edu_quali" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mo_edu_quali'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Education Qualification.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mobile Number :</label>
                            <input type="text" name="mother_phone" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mother_phone'];} ?>"  pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Enter phone number.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email :</label>
                            <input type="text" name="mother_email" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mother_email'];} ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder="Enter email.." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">National ID / Passport / Driving License Number : </label>
                        <input type="text" name="mo_national_id" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['mo_national_id'];} ?>"   pattern="[0-9]+" title="Must Contain Number "  placeholder="Enter father NID..." id="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Name of local guardian in absence of Parent : </label>
                        <input type="text" name="local_gurdian" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['local_gurdian'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Enter father NID..." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Occupation :</label>
                            <input type="text" name="local_occupation" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['local_occupation'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Husband or Wife name..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Relation: </label>
                            <input type="text" name="relation" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['relation'];} ?>"   pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character " placeholder="Occupatin..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> Educational Qualification: </label>
                            <input type="text" name="local_edu" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['local_edu'];} ?>"  pattern="[a-zA-Z][a-zA-Z0-9-_. ]{1,20}" title="Must Contain character "  placeholder="Merit date..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mobile Number : </label>
                            <input type="text" name="local_phone" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['local_phone'];} ?>"  pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Education qualification..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email : </label>
                            <input type="text" name="local_email" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['local_email'];} ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email..." id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">National ID / Passport / Driving License Number  : </label>
                            <input type="text" name="local_national_id" class="form-control" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['local_national_id'];} ?>"   pattern="[0-9]+" title="Must Contain Number "  placeholder="Mobile number..." id="">
                        </div>
                    </div>
                </div>
                
                
               
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Student Image :<font color="red" size="4">*</font> </label>
                            <input type='file' name="student_image" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['image_data']['student_image']['name'];} ?>" onchange="readURL(this);" />
                            <img id="blah" src="#" alt=" " />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Father Image : <font color="red" size="4">*</font></label>
                            <input type='file' name="father_image" onchange="readURL2(this);" />
                            <img id="blah2" src="#" alt=" " />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mother Image: <font color="red" size="4">*</font></label>
                            <input type='file' name="mother_image" onchange="readURL3(this);" />
                            <img id="blah3" src="#" alt=" " />
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

