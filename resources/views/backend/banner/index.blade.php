@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Slide')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        Danh sách Slide
        <small>danh sách slide</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              @if(Session::has('info'))
                <div class="alert alert-info">
                    {{Session::get('info')}}
                </div>
              @endif
              <div>
                  <p>
                    <a href="{{route('banner.add')}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus"></span> Thêm mới
                    </a>
                  </p>
              </div>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Hình ảnh</th>
                  <th>Content</th>
                  <th>Slug</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              @foreach($banner as $banner)
                <tr>
                  <td>{{$banner->id}}</td>
                  <td>
                    <img src="<?php echo url('/') ?>/public/uploads/slide/{{$banner->image}}" alt="" style="width: 150px">
                  </td>
                  <td>{{$banner->content}}</td>
                  <td>{{$banner->slug}}</td>
                  <td>
                    @if($banner->status == 1)
                      <div class="btn btn btn-xs btn-success">Yes</div>
                    @else
                      <div class="btn btn btn-xs btn-danger">No</div>   
                    @endif
                  </td>
                  <td>
                      <a href="banner/xem/{{$banner->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="banner/sua/{{$banner->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="banner/xoa/{{$banner->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- /.content -->
  </div>
@stop