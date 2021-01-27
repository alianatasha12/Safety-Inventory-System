<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Supplier</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Supplier</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" id="addsupplierModalBtn" data-target="#addsupplierModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add Supplier </button>
				</div> <!-- /div-action -->	

				<table class="table" id="managesupplierTable">
					<thead>
						<tr>							
							<th>Date</th>
							<th>Supplier Name</th>
							<th>Supplier Contact</th>
							<th>Address</th>
							<th>Items Purchase</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Reason</th>
							<th>Staff Name</th>
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
<div class="modal fade" id="addsupplierModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="submitsupplierForm" action="php_action/createsupplier.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-supplier-messages"></div>

	        <div class="form-group">
	        	<label for="date_supplier" class="col-sm-4 control-label">Date: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="date" class="form-control" id="date_supplier" placeholder="Date" name="date_supplier"autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
	                 	        
	         <div class="form-group">
	        	<label for="suppliername" class="col-sm-4 control-label">Supplier Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="suppliername" placeholder="Supplier Name" name="suppliername" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->

	                

	                <div class="form-group">
	        	<label for="contact" class="col-sm-4 control-label">Supplier Contact: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="contact" placeholder="Supplier Contact" name="contact" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->
 	        
	         <div class="form-group">
	        	<label for="address" class="col-sm-4 control-label">Address: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="address" placeholder="Address" name="address" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 

	       	         	        
	         <div class="form-group">
	        	<label for="item" class="col-sm-4 control-label">Items: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="item" placeholder="Items" name="item" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->

	       	         	        
	         <div class="form-group">
	        	<label for="price" class="col-sm-4 control-label">Price: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="price" placeholder="Price" name="price" autocomplete="off">
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
	        	<label for="reason" class="col-sm-4 control-label">Reason: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="reason" placeholder="Reason" name="reason" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	   

	        <div class="form-group">
	        	<label for="total" class="col-sm-4 control-label">Staff Name:</label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="total" placeholder="Staff Name" name="total" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	      	        
	               	        
	                 	       
	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createsupplierBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div> <!-- /modal-footer -->	      
     	</form> <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add categories -->


<!-- edit categories brand -->
<div class="modal fade" id="editsupplierModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editsupplierForm" action="php_action/updatesupplier.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Supplier</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-supplier-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editdate_supplier" class="col-sm-4 control-label">Date: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="date" class="form-control" id="editdate_supplier" placeholder="Date" name="editdate_supplier" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		         <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editsuppliername" class="col-sm-4 control-label">Supplier Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editsuppliername" placeholder="Supplier Name" name="editsuppliername" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	 

		        <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editcontact" class="col-sm-4 control-label">Supplier Contact: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editcontact" placeholder="Supplier Contact" name="editcontact" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	    
   

                <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editaddress" class="col-sm-4 control-label">Address: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editaddress" placeholder="Address" name="editaddress" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->

		        <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="edititem" class="col-sm-4 control-label">Items Purchase: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="edititem" placeholder="Item Purchase" name="edititem" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->


		        <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editprice" class="col-sm-4 control-label">Price: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editprice" placeholder="Price" name="editprice" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->  

		         <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editquantity" class="col-sm-4 control-label">Quantity: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editquantity" placeholder="Quantity" name="editquantity" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	


		         <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="editreason" class="col-sm-4 control-label">Reason: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editreason" placeholder="Reason" name="editreason" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	


		         <div class="edit-supplier-result">
		      	<div class="form-group">
		        	<label for="edittotal" class="col-sm-4 control-label">Staff Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="edittotal" placeholder="Staff Name" name="edittotal" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         

		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editsupplierFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editsupplierBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
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
<div class="modal fade" tabindex="-1" role="dialog" id="removesupplierModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Supplier</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removesupplierFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removesupplierBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /categories brand -->


<script src="custom/js/supplier.js"></script>

<?php require_once 'includes/footer.php'; ?>