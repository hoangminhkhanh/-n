@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Slide/Sửa slide')
@section('content')
<div class="content-wrapper">
        <section class="content-header">
            <h1>
                Danh sách slide
                <small>Sửa slide</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('banner.index')}}">Danh sách slide</a></li>
                <li class="active">{{$banner->name}}</li>
            </ol>
        </section>
        @if(count($errors) > 0)
           <div class="alert alert-info">
               @foreach($errors->all() as $err)
                  {{$err}}
               @endforeach
           </div>
        @endif

        @if(!empty($banner))
        <div class="panel-body">
        <form action="{{route('banner.sua',$banner->id)}}" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">        
            <div class="form-group">
                <label for="">Tên slide</label>
                <input type="text" class="form-control" name="slug" value="{{$banner->slug}}" placeholder="Input name" required>
            </div>
            <div class="row">
            <div class="col-md-4">
                   <img src="../../../public/uploads/slide/{{$banner->image}}" alt="{{$banner->image}}" width="200px" style="margin: 10px">
                </div>
                <div class="col-md-4">
                    <label for="">Hình ảnh slide</label>
                    <input type="file" class="form-control" name="image" placeholder="Input ">
                </div>
                <div class="col-md-4">
                    <label for="">Trạng thái</label>
                    <select name="status" id="cat_id" class="form-control" required="required">
                    @if($banner->status == 1)
                        <option value="1">Public</option>
                    @else    
                        <option value="0">Unpublic</option>
                    @endif    
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Nội dung sản phẩm</label>
                <textarea name="content" id="demo" class="form-control ckeditor" rows="3">{{$banner->content}}</textarea>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px"><i class="fa fa-upload" aria-hidden="true"></i></button>
        </form>
    </div>
    @endif
    </div>
@stop