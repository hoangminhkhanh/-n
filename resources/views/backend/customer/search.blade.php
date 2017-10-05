@extends('layout.main')
@extends('layout.backend-header')
@section('title','Tìm kiếm khách hàng')
@extends('layout.backend-aside')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Danh sách khách hàng
                <small>Danh sách</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách khách hàng</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Giới tính</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                            </tr>
                            @if($customer->count())
                            @foreach($customer as $cus)
                            <tr>
                                <td>{{$cus->id}}</td>
                                <td>{{$cus->name}}</td>
                                <td>{{$cus->gender}}</td>
                                <td>{{$cus->email}}</td>
                                <td>{{$cus->phone}}</td>
                                <td>{{$cus->address}}</td>
                                <td>
                                    <a href="../customer/xem/{{$cus->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="../customer/sua/{{$cus->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="../customer/xoa/{{$cus->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
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