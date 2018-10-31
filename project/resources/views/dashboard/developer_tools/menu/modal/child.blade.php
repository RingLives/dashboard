<div class="modal fade" id="child_add_modal" role="dialog" style="padding-top: 180px;">
    <div class="modal-dialog">
      	<div class="modal-content">
	      	<div class="modal-header">Create Child menu
	      	  <button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div> 
	        <div class="modal-body">
	            <div class="row">
	            	<div class="col-xs-12 col-md-12 form-group">
	            		<label class="col-xs-12 col-md-12">Menu Name</label>
	            		<div class="col-xs-12 col-md-12">
	            			<input type="text" name="menu_name" class="form-control" placeholder="Enter Name">
	            		</div>
	            	</div>

	            	<div class="col-xs-12 col-md-12 form-group">
						<label class="col-xs-12 col-md-12">Status</label>
						<div class="col-xs-12 col-md-12">
							<select class="form-control" name="is_active">
								<option value="{{old('is_active')}}">Active</option>
								<option value="{{old('is_active')}}">Inactive</option>
							</select>
						</div>
					</div>

					<div class="form-group" >
		                <div class="col-xs-12 col-sm-3 col-md-2 pull-right" style="margin-top: 20px;margin-bottom: 20px;">
		                    <button type="submit" class="btn btn-primary" style="width: 100%;">
		                        Submit
		                	</button>
		                </div>
		            </div>
	            </div>
	        </div>
      	</div>
    </div>
</div>