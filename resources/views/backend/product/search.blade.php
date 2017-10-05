@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Product/search')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách sản phẩm
        <small>danh sách sản phẩm</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
      </ol>
    </section>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Images</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Sale_price</th>
                  <th>Content</th>
                  <th style="width: 150px">Action</th>
                </tr>
             @if($product -> count())
              @foreach($product as $pro)
            
                <tr>
                  <td>{{$pro->id}}</td>
                  <td>
                    <img src="../../public/images/{{$pro->image}}" width="50">
                  </td>
                  <td>{{$pro->name}}</td>
                  <td >{{number_format($pro->price)}}đ</td>
                  <td>{{number_format($pro->sale_price)}}đ</td>
                  <td>{{$pro->content}}</td>
                  <td>
                      <a href="product/xem/{{$pro->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="product/sua/{{$pro->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="product/xoa/{{$pro->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                  </td>
                </tr>
            
             @endforeach
             @endif
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop