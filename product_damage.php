<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Product Damage</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Product Damage</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" id="adddamageModalBtn" data-target="#adddamageModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add Product Damage </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="managedamageTable">
					<thead>
						<tr>							
							<th>Date</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Location</th>
							<th>Reason</th>
							<th>Option</th>

							
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->


<!-- add categories -->
<div class="modal fade" id="adddamageModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="submitdamageForm" action="php_action/createproduct_damage.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product Damage</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-damage-messages"></div>

	        <div class="form-group">
	        	<label for="date" class="col-sm-4 control-label">Date: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="date" class="form-control" id="date" placeholder="Date" name="date" min = "<?php echo date('Y-m-d');?>"autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	         <div class="form-group">
	        	<label for="productname" class="col-sm-4 control-label">Product Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="productname" placeholder="Product Name" name="productname" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	   

	         <div class="form-group">
	        	<label for="quantity" class="col-sm-4 control-label">Quantity: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
	         <div class="form-group">
	        	<label for="location" class="col-sm-4 control-label">Location: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="location" placeholder="Location" name="location" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	  
	         <div class="form-group">
	        	<label for="reason" class="col-sm-4 control-label">Reason: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="reason" placeholder="Reason" name="reason" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	               	        
	                 	       
	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createdamageBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div> <!-- /modal-footer -->	      
     	</form> <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add categories -->


<!-- edit categories brand -->
<div class="modal fade" id="editdamageModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editdamageForm" action="php_action/editproduct_damage.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Product Damage</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-damage-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-damage-result">
		      	<div class="form-group">
		        	<label for="editdate" class="col-sm-4 control-label">Date: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="date" class="form-control" id="editdate" placeholder="Date" name="editdate" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		         <div class="edit-damage-result">
		      	<div class="form-group">
		        	<label for="editproductname" class="col-sm-4 control-label">Product Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editproductname" placeholder="Product Name" name="editproductname" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	    

                <div class="edit-damage-result">
		      	<div class="form-group">
		        	<label for="editquantity" class="col-sm-4 control-label">Quantity: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editquantity" placeholder="Quantity" name="editquantity" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	
		        <div class="edit-damage-result">
		      	<div class="form-group">
		        	<label for="editlocation" class="col-sm-4 control-label">Location: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editlocation" placeholder="Location" name="editlocation" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	 
		        <div class="edit-damage-result">
		      	<div class="form-group">
		        	<label for="editreason" class="col-sm-4 control-label">Reason: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editreason" placeholder="Reason" name="editreason" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	           

		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editdamageFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editdamageBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- /categories brand -->

<!-- categories brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removedamageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Damage</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removedamageFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removedamageBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /categories brand -->


<script src="custom/js/product_damage.js"></script>

<?php require_once 'includes/footer.php'; ?>