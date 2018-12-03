<?php include_once '../includes/header.php'; ?>

<?php 

	include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;

	$class = new Classmain();
	$results = $class->selectAllClass();

 ?>


<section class="content">
	<div class="row">

		<h2 style="text-align:center;color:green;">Add Section</h2>

		<br>
 
		<form action="view/admin/classinfo/storesection.php" method="post">


			<div class="col-md-4">
				<div class="form-group">
					<label for="">Class:</label>
					<select class="form-control" name="class" required="">
						<option>Select</option>
					<?php 
						foreach($results as $result){
							echo "<option>".$result['class']."</option>";
						}
					 ?>
						 
					</select>
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="">Section Name:</label>
					<input type="text" name="section" id="" class="form-control" pattern="^[A-Za-z0-9]+" placeholder="Enter Section Name..." required="">
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="">Nick Name : </label>
					<input type="text" name="nickname" id="" class="form-control" pattern="^[A-Za-z0-9]+" placeholder="Enter Nick Name..." required="" >
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<input type="submit"  class="btn btn-primary" name="submit" value="Submit">
 				</div>
			</div>
			

		</form>
	</div>
</section>





<?php include_once '../includes/footer.php'; ?>