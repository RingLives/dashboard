@extends('dashboard.layouts.app')
@section('page_title','Admin Home page')
@section('body_title','Create Menu')
@section('body_title_section','')
@section('section')
@auth
<style type="text/css">
	
</style>
<div class="row">
	<div class="col-sm-2">
		<div class="form-group ">
			<a href="{{ URL::previous() }}" class="btn btn-primary " style="width: 100%; margin: 10px 0px 5px 0px;">
			<i class="fa fa-arrow-left"></i> Back</a>
		</div>
	</div>
</div>

<div class="row">
	<div class="panel panel-default">
		<!-- <div class="panel-heading"></div> -->
		<form action="{{route('devt_menu_create_action')}}" method="post">
			@csrf
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Order By</label>
						<div class="col-xs-12 col-md-12">
							<select name="order_by" class="form-control">
								<option value="{{old('prent_route_id')}}">Choose a Option</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Parent Menu</label>
						<div class="col-xs-11 col-md-11">
							<select class="form-control" name="prent_route_id">
								<option value="{{old('prent_route_id')}}">Choose a Option</option>
								<option value="1">a</option>
								<option value="2">b</option>
								<option value="3">c</option>
								<!-- <option value="{{old('prent_route_id')}}">c</option> -->
							</select>
						</div>
						<div class="col-xs-1 col-md-1">
							<a class="hand-cursor"  data-toggle="modal" data-target="#parent_add_modal">
								<i class="fa fa-plus-circle" style="font-size: 30px;margin-left: -7px;"></i>
							</a>
						</div>
					</div>

					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Child Menu Name</label>
						<div class="col-xs-11 col-md-11">
							<input type="text" name="id_child_menu" class="form-control" placeholder="Child Menu Name" value="{{old('prent_route_id')}}">
						</div>
						<div class="col-xs-1 col-md-1">
							<a class="hand-cursor"  data-toggle="modal" data-target="#child_add_modal">
								<i class="fa fa-plus-circle" style="font-size: 30px;margin-left: -7px;"></i>
							</a>
						</div>
						@if ($errors->has('id_child_menu'))
						    <span class="invalid-feedback" role="alert">
						        <strong>{{ $errors->first('id_child_menu') }}</strong>
						    </span>
						@endif
					</div>

					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Route Name</label>
						<div class="col-xs-12 col-md-12">
							<input type="text" name="route_name" class="form-control" placeholder="Route Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Menu Description</label>
						<div class="col-xs-12 col-md-12">
							<input type="text" name="menu_description" class="form-control" placeholder="add...">
						</div>
					</div>

					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Icon Name</label>
						<div class="col-xs-12 col-md-12">
							<input type="text" name="icon" class="form-control" placeholder="Icon">
						</div>
					</div>

					<div class="col-xs-12 col-md-3 form-group">
						<label class="col-xs-12 col-md-12">Status</label>
						<div class="col-xs-12 col-md-12">
							<select class="form-control" name="is_active">
								<option value="1">Active</option>
								<option value="0">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				
	            <div class="form-group" >
	                <div class="col-xs-12 col-sm-3 col-md-2 pull-right" style="margin-top: 20px;margin-bottom: 20px;">
	                    <button type="submit" class="btn btn-primary confirm" style="width: 100%;">
	                        Submit
	                	</button>
	                </div>
	            </div>
			</div>
		</form>
	</div>
</div>

@include('dashboard.developer_tools.menu.modal.parent')
@include('dashboard.developer_tools.menu.modal.child')
@endauth
@guest
<h1>Please login again!</h1>
@endguest
@endsection