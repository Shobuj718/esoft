

<?php include_once '../../includes/header.php'; ?>


<?php 

	include_once '../../../../vendor/autoload.php';

	use App\Admin\Calculation\Student\Student;

	$id = $_GET['edit'];

	$student = new Student();
	$result = $student->EditFee($id);  
	// echo "<pre>";
	// var_dump($result);
	// die();



 ?>
<!-- <div class="lantra">  
<div id="google_translate_element"></div>

	<script type="text/javascript">

	function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-59955232-1'}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
</diV>  -->


 	<section class="content"> 
 			
 			 
 				<h3 style="text-align:center;color:green;">বেতন ও  অন্যান্য ফি আদায়ের রশিদ  </h3>

 				<br />
 				<?php 

 					if(isset($_SESSION['feeew'])){
 						echo "<div class='alert alert-success'>".$_SESSION['feeew']."</div>";
 					}

 				 ?>
 				<form action="view/admin/calculation/student/updatefee.php" method="post">
 					
 					<div class="row">
	 					<div class="col-md-4">
							<div class="form-group">
								<label for="">শ্রেণী:</label>
								<select class="form-control" name="class" required="">

								<?php 
									// foreach($results as $result){
										//echo "<option>".$result['class']."</option>";
									//}
								 ?>
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
                        <option <?php echo ($result['class']=='৯ম ')? 'selected':'' ?>
value="৯ম ">৯ম </option>
                        <option <?php echo ($result['class']=='১০ম')? 'selected':'' ?> value="১০ম">১০ম</option>
                        <option <?php echo ($result['class']=='একাদশ')? 'selected':'' ?> value="একাদশ">একাদশ</option>
                        <option <?php echo ($result['class']=='দ্বাদশ')? 'selected':'' ?> value="দ্বাদশ">দ্বাদশ</option>
									 
								</select>
							</div>
						</div>

		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">শিক্ষার্থীর আইডি:</label>
		 						<input type="text" name="student_id" class="form-control" id=""  value="<?= $result["student_id"]; ?>"  required="">

		 						<input type="hidden" name="unique_id"   value="<?= $result["unique_id"]; ?>"  required="">
							</div>
		 				</div>

		 				<div class="col-md-4">
				             <!-- Date -->
				              <div class="form-group">
				                <label>তারিখ  :</label>

				                <div class="input-group date">
				                  <div class="input-group-addon">
				                    <i class="fa fa-calendar"></i>
				                  </div>
				                  <input type="text" name="submit_date" value="<?= $result["submit_date"]; ?>" class="form-control" id="datepicker" required="">
				                </div>
				                <!-- /.input group -->
				              </div>
				              <!-- /.form group -->
				        </div>
			        </div>

			        <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">মাসিক বেতন: চলতি/ অগ্রীম/ বকেয়া </label>
		 						<input type="text" name="salary" class="form-control" id=""  value="<?= $result["salary"]; ?>" >
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">ভর্তি/পুনঃ ভর্তি ফি:</label>
		 						<input type="text" name="admission" class="form-control" id=""  value="<?= $result["admission"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">জরিমানা: বকেয়া বেতন/ অনুপস্থিতির :</label>
		 						<input type="text" name="fine" class="form-control" id=""  value="<?= $result["fine"]; ?>" >
							</div>
		 				</div>
	 				</div>

	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">সেশন:</label>
		 						<input type="text" name="sessionfee" class="form-control" id=""  value="<?= $result["sessionfee"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">পরীক্ষা :</label>
		 						<input type="text" name="exam" class="form-control" id=""  value="<?= $result["exam"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">পরিচিতি পত্র:</label>
		 						<input type="text" name="contact_letter" class="form-control" id=""  value="<?= $result["contact_letter"]; ?>">
							</div>
		 				</div>
	 				</div>


	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">গ্রন্থাগার জামানত :</label>
		 						<input type="text" name="security" class="form-control" id=""  value="<?= $result["security"]; ?>" > 
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">বিদ্যুৎ :</label>
		 						<input type="text" name="current" class="form-control" id=""  value="<?= $result["current"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">বার্ষিকী :</label>
		 						<input type="text" name="yearly" class="form-control" id=""  value="<?= $result["yearly"]; ?>">
							</div>
		 				</div>
	 				</div>


	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">সফটওয়্যার:</label>
		 						<input type="text" name="software" class="form-control" id=""  value="<?= $result["software"]; ?>" >
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">বিবিধ :</label>
		 						<input type="text" name="other" class="form-control" id=""  value="<?= $result["other"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">রেজিস্ট্রেশন/পরীক্ষা :</label>
		 						<input type="text" name="regexam" class="form-control" id=""  value="<?= $result["regexam"]; ?>">
							</div>
		 				</div>
	 				</div>


	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">প্রশংসা পত্র :</label>
		 						<input type="text" name="testimonial" class="form-control" id=""  value="<?= $result["testimonial"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">বিজ্ঞানাগার জামানত :</label>
		 						<input type="text" name="science_security" class="form-control" id=""  value="<?= $result["science_security"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">কেন্দ্র :</label>
		 						<input type="text" name="center" class="form-control" id=""  value="<?= $result["center"]; ?>">
							</div>
		 				</div>
	 				</div>



	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">ব্যাবহারিক  :</label>
		 						<input type="text" name="practical" class="form-control" id=""  value="<?= $result["practical"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">নম্বর সনদপত্র :</label>
		 						<input type="text" name="number_certificate" class="form-control" id=""  value="<?= $result["number_certificate"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">স্কাউট/গার্লস  গাইড   :</label>
		 						<input type="text" name="scout" class="form-control" id=""  value="<?= $result["scout"]; ?>">
							</div>
		 				</div>
	 				</div>

	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">বাসভাড়া  :</label>
		 						<input type="text" name="bus" class="form-control" id=""  value="<?= $result["bus"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">ছাড়পত্র   :</label>
		 						<input type="text" name="clearance" class="form-control" id=""  value="<?= $result["clearance"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">উন্নয়ন   :</label>
		 						<input type="text" name="development" class="form-control" id=""  value="<?= $result["development"]; ?>">
							</div>
		 				</div>
	 				</div>

	 				 <div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">দরিদ্র   তহবিল   :</label>
		 						<input type="text" name="poorfund" class="form-control" id=""  value="<?= $result["poorfund"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">ধর্মীয়  অনুষ্ঠান     :</label>
		 						<input type="text" name="re_ceremoni" class="form-control" id=""  value="<?= $result["re_ceremoni"]; ?>">
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">রেড  ক্রিসেন্ট ফান্ড     :</label>
		 						<input type="text" name="red_cricent" class="form-control" id=""  pvalue="<?= $result["red_cricent"]; ?>" >
							</div>
		 				</div>
	 				</div>


	 				<div class="row">
		 				<div class="col-md-4">
		 					<div class="form-group">
								<label for="">অবস্থা :</label>
		 						<select name="status2" class="form-control">
	                                <option <?= $result['status2']=='paid'?'selected':'' ?> value="paid">Paid</option>
	                                <option <?= $result['status2']=='unpaid'?'selected':'' ?> value="unpaid">Unpaid</option>
	                                
	                            </select>
							</div>
		 				</div>


		 				<div class="col-md-4">
		 					<div class="form-group">
								 <label for="">পদ্ধতি :</label>
		 						<select name="method" class="form-control">
	                                <option <?= $result['method']=='cash'?'selected':'' ?> value="cash">Cash</option>
	                                <option <?= $result['method']=='check'?'selected':'' ?> value="check">Check</option>
	                                <option <?= $result['method']=='card'?'selected':'' ?> value="card">Card</option>
	                            </select>
							</div>
		 				</div>
	 				</div>


                    					
					<div class="col-md-4">
						<div class="form-group">
 				 			<input type="submit" class="btn btn-primary" name="submit" value="Submit">	
						</div>
					</div> 
 				</form>
 		 <br>
 		 <br>
 			<!-- </div> -->
  	
 	</section>
  
 




<?php include_once '../../includes/footer.php'; ?>
