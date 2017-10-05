@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Loại sản phẩm')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách loại sản phẩm
        <small>Loại sản phẩm</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div>
                  <p>
                    <a href="{{route('ProductType.add')}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus"></span> Thêm mới
                    </a>
                  </p>
              </div>
              @if(Session::has('thongbao'))
                <div class="alert alert-info">
                  {{Session::get('thongbao')}}
                </div>
              @endif
              <div class="box-tools">
                <div class="input-group input-group-sm">
                  <form role="search" method="get" id="searchform" action="{{route('ProductType.search')}}">
                    <input type="text" value="" id="s" name="key" placeholder="Nhập từ khóa..." />
                    <button class="fa fa-search btn btn-sm btn-primary" type="submit" id="searchsubmit"></button>
                  </form>
                </div>    
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>ID</th>
                  <th>Tên loại sản phẩm</th>
                  <th>Mô tả</th>
                  <th style="width: 100px">Hành động</th>
                </tr>
             @if($productType -> count())
              @foreach($productType as $proType)
            
                <tr>
                  <td>{{$proType->id}}</td>
                  <td>{{$proType->name}}</td>
                  <td>{{$proType->descript}}</td>
                  <td>
                      <a href="ProductType/view/{{$proType->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="ProductType/edit/{{$proType->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="ProductType/delete/{{$proType->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
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