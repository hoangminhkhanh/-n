@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Slide')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Thêm mới Slide
        <small>thêm mới</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
	<div class="panel panel-primary" style="margin-top: 20px">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm slide</h3>
	</div>
	@if(count($errors) > 0)
	<div class="btn btn btn-info">
		@foreach($errors->all() as $err)
		    {{$err}}
		@endforeach
	</div>
	@endif
	<div class="panel-body">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">		
			<div class="row">
				<div class="form-group col-md-4">
					<label for="">Slug</label>
					<input type="text" class="form-control" name="slug" placeholder="Input slug" required>
				</div>
				
				<div class="col-md-4">
					<label for="">Hình Ảnh</label>
					<input type="file" class="form-control" name="image" required>
				</div>
				<div class="col-md-4">
					<label for="">Status</label>
					<select name="status" id="cat_id" class="form-control" required="required">
						<option value="1">Public</option>
						<option value="0">Unpublic</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="demo" class="form-control ckeditor" rows="3"></textarea> 
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
		</form>
	</div>
</div>
</div>
@stop