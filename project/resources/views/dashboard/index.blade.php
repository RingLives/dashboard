@extends('dashboard.layouts.app')
@section('page_title','Admin Home page')
@section('body_title','')
@section('body_title_section','')
@section('section')
@auth

@endauth
@endsection

	<!-- back design code -->

<div class="col-sm-2">
	<div class="form-group ">
		<a href="{{ URL::previous() }}" class="btn btn-primary ">
		<i class="fa fa-arrow-left"></i> Back</a>
	</div>
</div>

	<!-- back design code -->

	<!-- Add design code -->

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-sm-2">
			    <a href="" class="btn btn-primary" style="width: 100%; font-size: 15px;">New Menu <i class="fa fa-plus"></i></a>
			</div>
			<div class="col-sm-10" style="margin-left: -10px;">
			    <div class="col-sm-11 form-group">
			       <input type="text" name="searchFld" class="form-control" placeholder="Search"> 
			    </div>
			    <div class="col-sm-1" style="margin-left: -21px; ">
			    	<button class="btn btn-default" type="button">
			            <i class="fa fa-search"></i>
			        </button>
			    </div>
			</div>
		</div>
	</div>

	<!-- Add design code -->