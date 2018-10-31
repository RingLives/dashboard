@extends('dashboard.layouts.app')
@section('page_title','Admin Home page')
@section('body_title','Menu List')
@section('body_title_section','')
@section('section')
<!-- <div class="row"> -->
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
				    <a href="{{route('devt_menu_create_view')}}" class="btn btn-primary" style="width: 100%; font-size: 15px;">New Menu <i class="fa fa-plus"></i></a>
				</div>
				<div class="col-sm-10 col-xs-12" style="margin-left: -10px;">
				    <div class="col-sm-11 col-xs-11 form-group">
				       <input type="text" name="searchFld" class="form-control" placeholder="Search"> 
				    </div>
				    <div class="col-sm-1 col-xs-1" style="margin-left: -21px;">
				    	<button class="btn btn-default" type="button" >
				            <i class="fa fa-search"></i>
				        </button>
				    </div>
				</div>
			</div>
			<div class="row">
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>Parent Name</th>
						<th>Child Name</th>
						<th>Route Name</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
						@php($i = 1 + $listedValue->perPage() * ($listedValue->currentPage() - 1))
						@foreach($listedValue as $values)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$values->id_parent_menu}}</td>
							<td>{{$values->id_child_menu}}</td>
							<td>{{$values->route_name}}</td>
							<td>{{($values->is_active == 1)?'Active':'Inactive'}}</td>
							<td>
								<a href="#" class="btn btn-success form-control" >Edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$listedValue->links()}}
			</div>
		</div>
	</div>
<!-- </div> -->
@endsection
