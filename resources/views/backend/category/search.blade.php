@extends('layout.main')
@extends('layout.backend-header')
@section('title','Category')
@extends('layout.backend-aside')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Danh mục sản phẩm
                <small>Danh mục</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh mục sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Đường dẫn tĩnh</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Lựa chọn</th>
                            </tr>
                            @if($category->count())
                            @foreach($category as $ct)
                                <tr>
                                    <td>{{$ct->id}}</td>
                                    <td>{{$ct->name}}</td>
                                    <td>{{$ct->slug}}</td>
                                    <td>{{$ct->created_at}}</td>
                                    <td>
                                        @if($ct->status == 1)
                                            <span class="label label-success">OK</span>
                                        @else
                                            <span class="label label-danger">NO</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="category/xem/{{$ct->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="category/sua/{{$ct->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="category/xoa/{{$ct->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
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