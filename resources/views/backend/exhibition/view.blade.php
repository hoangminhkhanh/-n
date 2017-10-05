@extends('layout.main')
@extends('layout.backend-header')
@section('title','Exhibition/Xem')
@extends('layout.backend-aside')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
               Danh sách đơn hàng
                <small>Đơn hàng</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('Exhibition.index')}}">Danh sách đơn hàng</a></li>
                <li class="active">{{$orders->name}}</li>
            </ol>
            @if(!empty($orders))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$orders->name}}</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{$orders->id}}</td>
                            </tr>
                            <tr>
                                <th>Khách hàng</th>
                                <td>{{$orders->cus_id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$orders->name}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$orders->phone}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$orders->address}}</td>
                            </tr>
                            <tr>
                                <th>Note</th>
                                <td>{{$orders->note}}</td>
                            </tr>
                            <tr>
                                <th>Tổng tiền</th>
                                <td>{{number_format($orders->total_amount)}} VNĐ</td>
                            </tr>
                            <tr>
                                <th>Tình trạng</th>
                                <td>
                                    @if($orders->status == 1)
                                       <div class="btn btn btn-sm btn-success">Đã duyệt</div>
                                       <div class="btn btn btn-sm btn-danger">
                                           <a href="{{route('Exhibition.duyet',$orders->id)}}">Bỏ duyệt</a>
                                       </div>
                                    @else
                                       <div class="btn btn btn-sm btn-danger">Chưa duyệt</div>  
                                       <div class="btn btn btn-sm btn-success">
                                           <a href="{{route('Exhibition.duyet',$orders->id)}}">Duyệt</a>
                                       </div>
                                    @endif   
                                </td>
                            </tr>
                            <tr>
                                <th>Ngày đặt</th>
                                <td>{{$orders->created_at}}</td>
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

