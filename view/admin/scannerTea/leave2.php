<?php include_once '../includes/header.php'; ?>


 	<section class="content"> 
 			<div class="row">
 			 
 			 <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
                <h4> শিক্ষকদের ছুটি প্রদান </h4>

          </div>

          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form  method="post" action="view/admin/scannerTea/storeleave.php">
                              
                             <div class="col-md-6">
           <br>
                 <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Teacher Mobile Number:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-num"></i>
                  </div>
                  <input type="text" name="mobile" class="form-control" required="">
                </div>
                <!-- /.input group -->
              </div>     <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Start to leave:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="fromdate" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask required="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
              <div class="form-group">
                 <label>End to leave:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="enddate" class="form-control" data-inputmask="'alias': 'mm-dd-yyyy'" data-mask required="">
                </div>
                <!-- /.input group -->
              </div>
          <!-- /.box -->

                              <button type="submit" class="btn btn-success btn-block" name="submit">Take Leave</button>
                              <br>
                            <p id="message"></p>
                          </form>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
 		 
 			</div>
  	
 	</section>
  




 <?php  include_once '../includes/footer.php';  ?>