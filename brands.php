<?php require_once 'include/heder.php'; ?>

<div class="row">
	<div class="col-md-12">
	  <ol class="breadcrumb abc1">
	    <li><a href="dashbord.php">Home</a></li> 
	    <li class="active">Brands</li>
	  </ol>

	  <div class="panel panel-default ">

		<div class="panel-heading text-center">
				<i class="fas fa-tasks"></i> Manage Categories
		</div>

		<div class="panel-body">
			<div class="remove-messages"><!-- contains the massage of operations -->
				
			</div>
			<div class="div-action pull pull-right" >	<!-- div-action contains add brands button -->
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#ABM" id="xyz">
					<i class="glyphicon glyphicon-plus"></i>Add Brands
				</button>
				
			</div>
			<table class="table" id="mngtable">
				<thead>
					<tr>
						<th style="border:1px solid #fff; color: #000000;">Brand Name</th>
						<th style="border:1px solid #fff; color: #000000;">Status</th>
						<th style="width: 15%;border:1px solid #fff; color: #000000;">Options</th>
					</tr>
				</thead>
			</table>
		</div>
	  </div>
	</div>
</div>

<!-- JS for brand model -->
<div class="modal fade" tabindex="-1" role="dialog" id="ABM"> <!-- for add brand model -->
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" id="submit_B_form" method="POST" action="action/create_brand.php" >

	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"> <i class="fas fa-plus-circle"></i>Add Brand</h4>
	      </div>
      	<div class="modal-body">
      		<div id="add-brand-messages"></div>

				  <div class="form-group">
				    <label for="brandname" class="col-sm-3 control-label">Brand Name:-</label>
				    
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="brandname" name="brandname" placeholder="Brand Name" autocomplete="off">
				    </div>
				  </div>
			  
			  <div class="form-group">
			    <label for="status" class="col-sm-3 control-label">Status:-</label>
			    <div class="col-sm-8">
			      <select class="form-control" id="status" name="status" >
			      	<option value="">~~Select~~</option>
				    <option value="1">~~Available~~</option>
				    <option value="2">~~Not Available~~</option>
			      </select>

			    </div>
			  </div>
			</div>
		  <div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-success" id="btn1" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes
        	</button>
	     </div>
		</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
							<!-- //To edit brands //-->
							
<div class="modal fade" tabindex="-1" role="dialog" id="EBM"><!-- for edit brand model -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="far fa-edit"></i>Edit Brand</h4>
      </div>
    <form class="form-horizontal" id="edit_B_form" action="action/edit_Brand.php" method="POST">
      
	   <div class="modal-body">
	        <div id ="edit-b-messages"></div>
	        <!-- <div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
				<span class="sr-only">Loading...</span>
			</div> -->
			<div class="edit-brand-result">
		      	<div class="form-group">
				    <label for="edit_brand" class="col-sm-3 control-label">Brand Name:-</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="edit_brand" name="edit_brand" placeholder="Brand Name" autocomplete="off">
				    </div>
				</div>
				  
				<div class="form-group">
				    <label for="edit_brand_status" class="col-sm-3 control-label">Status:-</label>
				    <div class="col-sm-8">
					    <select class="form-control" id="edit_brand_status" name="edit_brand_status">
					      	<option value="">Select Option</option>
							<option value="1">Available</option>
							<option value="2">Not Available</option>
					    </select>
				    </div>
				</div>
		    </div>
	 	 </div>
	      <div class="modal-footer editbrandfooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close
	        </button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	  	  </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="RBM"><!-- for remove brand model -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Brand</h4>
      </div>
      <div class="modal-body">
        <p>Do You Really Remove ??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove-sign"></i>Close</button>
        <button type="button" class="btn btn-success" id="btn3" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="custom/js/brands.js"></script> 


<?php require_once 'include/footer.php'; ?>