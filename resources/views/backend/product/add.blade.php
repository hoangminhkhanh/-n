@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Product/add')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Thêm mới sản phẩm
        <small>Thêm mới</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
	<div class="panel panel-primary" style="margin-top: 20px">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm sản phẩm mới</h3>
	</div>
	@if(count($errors) > 0)
	<div class="btn btn btn-secondary">
		@foreach($errors->all() as $err)
		   {{$err}}
		@endforeach
	</div>
	@endif
	<div class="panel-body">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">		
			<div class="row">
				<div class="form-group col-md-6">
				<label for="">Tên sản phẩm</label>
				<input type="text" class="form-control" name="name" placeholder="Input name" required>
			</div>
		
		    <div class="form-group col-md-6">
				<label for="cat_id">Danh mục sản phẩm</label>
				<select name="cat_id" id="cat_id" class="form-control" required="required">
					<option value="">--Chọn danh mục--</option>
					@foreach($category as $ct)
					   <option value="{{$ct->id}}">{{$ct->name}}</option>
					@endforeach   
				</select>
			</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label for="">Giá sản phẩm</label>
					<input type="text" class="form-control" name="price" placeholder="Input price" required>
				</div>
				<div class="col-md-4">
					<label for="">Giá khuyến mại</label>
					<input type="text" class="form-control" name="sale_price" placeholder="Input price">
				</div>
				<div class="form-group col-md-4">
					<label for="id_type">Loại sản phẩm</label>
					<select name="id_type" id="id_type" class="form-control" required="required">
						<option value="">--Chọn loại sản phẩm--</option>
						@foreach($product_type as $pt)
						   <option value="{{$pt->id}}">{{$pt->name}}</option>
						@endforeach   
				    </select>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4">
					<label for="">Hình ảnh sản phẩm</label>
					<input type="file" class="form-control" name="image" placeholder="Input price">
				</div>
				<div class="col-md-4">
					<label for="">Hot ?</label>
					<div class="radio">
						<label>
							<input type="radio" name="hot" value="0" checked="checked">
							No
						</label>
						<label>
							<input type="radio" name="hot" value="1">
							Yes
						</label>
					</div>
				</div>
				<div class="col-md-4">
					<label for="">Trạng thái</label>
					<select name="status" id="cat_id" class="form-control" required="required">
						<option value="1">Public</option>
						<option value="0">Unpublic</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="content">Nội dung sản phẩm</label>
				<textarea name="content" id="demo" class="form-control ckeditor" rows="3"></textarea> 
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i></button>
		</form>
	</div>
</div>
</div>
@stop