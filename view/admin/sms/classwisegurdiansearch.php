<?php 

include_once '../../../vendor/autoload.php' ;

//error_reporting(0);

use App\admin\Gurdian\Gurdian;

$sms = new Gurdian();

$year = trim(htmlspecialchars($_POST['year']));

 
$myFile = "classwiseGurdian.txt";
$fo = fopen($myFile, 'w') or die("can't open file");

$stringData = '';

$result = $sms->set($_POST)->classWiseGurdian();

// echo "<pre>";
// var_dump($result);
// die();

foreach($result as $data){

	$stringData.=$data['father_phone'].",";

}

$trimmed=rtrim($stringData, ', ');



fwrite($fo, $trimmed);

fclose($fo);

?>

<?php include_once '../includes/header.php'; ?>



<section class="content">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label><strong style="color:green">Text file generaing here... copy and past send sms field...</strong></label>
				<textarea class="form-control" name="message" id="message" rows="10" placeholder="Above text file generaing here... copy and past send sms field... ..."><?php echo $trimmed; ?></textarea>
			</div>
		</div>
	</div>
</section>






<?php include_once '../includes/footer.php'; ?>