@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Thêm mới danh mục sản phẩm')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm mới dạnh mục sản phẩm
			<small>thêm mới</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="{{route('backend.category')}}">Danh sách mục sản phẩm</a></li>
		</ol>
	</section>
	@if(count($errors) > 0)
	<div class="btn btn btn-info">
		@foreach($errors->all() as $err)
		    {{$err}}
		@endforeach
	</div>
	@endif
	<div class="row">
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">		
				<div class="form-group col-md-4">
					<label for="">Tên danh mục</label>
					<input type="text" class="form-control" name="name" placeholder="Input danh mục" required>
				</div>
				<div class="form-group col-md-4">
					<label for="">Slug</label>
					<input type="text" class="form-control" name="slug" placeholder="Input slug" required>
				</div>
				<div class="row" style="margin-bottom: 15px">
					<div class="col-md-4">
						<label for="">Trạng thái</label>
						<select name="status" id="cat_id" class="form-control" required="required">
							<option value="1">Public</option>
							<option value="0">Unpublic</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
				    <button type="reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>        
@stop