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
                          <form id="theFormID" name="cartCheckout" method="" action="view/admin/scannerTea/storesms.php" method="get" novalidate="novalidate">
                              
                             <div class="col-md-6">
          <div class="box box-primary">
           
            <div class="box-body">
   
              <!-- Date and time range -->
              <div class="form-group">
                <label>Teachers Leave</label>

                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Set a Date for leave
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

                              <button type="submit" class="btn btn-success btn-block" name="insert-data" id="insert-data" onclick="insertData()">Take Attendence</button>
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