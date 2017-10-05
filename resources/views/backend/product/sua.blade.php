@extends('layout.main')
@extends('layout.backend-header')
@section('title','product/sua')
@extends('layout.backend-aside')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Sửa sản phẩm
                <small>Sửa sản phẩm</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
                <li class="active">{{$product->name}}</li>
            </ol>
        </section>
        @if(count($errors) > 0)
           <div class="alert alert-info">
               @foreach($errors->all() as $err)
                  {{$err}}
               @endforeach
           </div>
        @endif

        @if(!empty($product))
        <div class="panel-body">
        <form action="{{route('product.sua',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">        
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Input name" required>
            </div>
           <div class="row">
                <div class="form-group col-md-6">
                    <label for="cat_id">Danh mục</label>
                    <select name="cat_id" id="cat_id" class="form-control" required="required">
                        <option value="">-- Chọn danh mục --</option>
                        @foreach($category as $cate)
                           <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach  
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="id_type">Loại sản phẩm</label>
                    <select name="id_type" id="id_type" class="form-control" required="required">
                        <option value="">-- Chọn danh mục --</option>
                        @foreach($product_type as $pt)
                           <option value="{{$pt->id}}">{{$pt->name}}</option>
                        @endforeach  
                    </select>
                </div>
           </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Input price" required>
                </div>
                <div class="col-md-6">
                    <label for="">Giá khuyến mại</label>
                    <input type="text" class="form-control" name="sale_price" value="{{$product->sale_price}}" placeholder="Input price">
                </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                   <img src="../../../public/images/{{$product->image}}" alt="{{$product->image}}" width="100" style="margin: 10px">
                </div>
                <div class="col-md-4">
                    <label for="">Hình ảnh S/p</label>
                    <input type="file" class="form-control" name="image" placeholder="Input price">
                    <input type="text" name="old_img" value="{{$product->image}}" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Hot ?</label>
                    <div class="radio">
                    @if($product->hot ==1)
                        <label>
                            <input type="radio" name="hot" value="1" checked="checked">
                            Yes
                        </label>
                    @else    
                        <label>
                            <input type="radio" name="hot" value="0">
                            No
                        </label>
                    @endif    
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="">Status</label>
                    <select name="status" id="cat_id" class="form-control" required="required">
                    @if($product->status == 1)
                        <option value="1">Public</option>
                    @else    
                        <option value="0">Unpublic</option>
                    @endif    
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Nội dung sản phẩm</label>
                <textarea name="content" id="demo" class="form-control ckeditor" rows="3">
                    {{$product->content}}
                </textarea>
            </div>    
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i></button>
        </form>
    </div>
    @endif
    </div>
@stop