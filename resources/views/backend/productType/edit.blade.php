@extends('layout.main')
@extends('layout.backend-header')
@section('title','product/xem')
@extends('layout.backend-aside')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Danh sách loại sản phẩm
                <small>Sửa loại sản phẩm</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('ProductType.index')}}">Danh sách loại sản phẩm</a></li>
                <li class="active">{{$pType->name}}</li>
            </ol>
        </section>
        @if(count($errors) > 0)
           <div class="alert alert-info">
               @foreach($errors->all() as $err)
                  {{$err}}
               @endforeach
           </div>
        @endif


        @if(!empty($pType))
        <div class="panel-body">
        <form action="{{route('ProductType.edit',$pType->id)}}" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">        
            <div class="row">
            	<div class="form-group col-md-4">
	                <label for="">Tên loại sản phẩm</label>
	                <input type="text" class="form-control" name="name" value="{{$pType->name}}" placeholder="Input name" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="content">Mô tả</label>
                <textarea name="descript" id="demo" class="form-control ckeditor" rows="3"></textarea>
            </div>    
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
            <button type="reset" class="btn btn-sm btn-primary"><i class="fa fa-repeat" aria-hidden="true"></i></button>
        </form>
    </div>
    @endif
    </div>
@stop