@extends('layout.main')
@extends('layout.backend-header')
@section('title','User/Xem')
@extends('layout.backend-aside')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Danh sách khách hàng
                <small>Danh sách</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('customer.index')}}">Danh sách khách hàng</a></li>
                <li class="active">{{$cus->name}}</li>
            </ol>
            @if(!empty($cus))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$cus->name}}</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{$cus->id}}</td>
                            </tr>
                            <tr>
                                <th>Tên khách hàng</th>
                                <td>{{$cus->name}}</td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td>{{$cus->gender}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$cus->email}}</td>
                            </tr>
                            <tr>
                                <th>Số điện thiện</th>
                                <td>{{$cus->phone}}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>{{$cus->address}}</td>
                            </tr>
                            </tbody>
                        </table>
            @else
                        <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>404!</strong> data not fount ...
                        </div>
                    </div>
                </div>
             @endif
    </div>

    
@stop()

