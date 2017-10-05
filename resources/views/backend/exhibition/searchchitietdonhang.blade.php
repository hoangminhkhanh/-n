@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Đơn hàng')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách đơn hàng
        <small>danh sách đơn hàng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
              <div style="margin-top: 10px">
                <form action="{{route('books.xuat')}}" method="get" role="form"> 
                 <button type="submit" title="Xuất file ra excel" class="btn btn btn-sm btn-success" style="font-size: 15px">Xuất ra chi tiết hóa đơn Excel  <i class="fa fa-print" aria-hidden="true"></i></button>
                </form>
              </div> 
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Tên khách hàng</th>
                  <th>SĐT</th>
                  <th>Địa chỉ</th>
                  <th>Ghi chú</th>
                  <th>Tổng tiền</th>
                  <th>Tình trạng</th>
                  <th>P/t vận chuyển</th>
                  <th>P/t thanh toán</th>
                  <th>Ngày đặt</th>
                  <!-- <th style="width: 150px">Hành động</th> -->
                </tr>
            @foreach($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->email}}</td>
                  <td>{{$order->name}}</td>
                  <td>{{$order->phone}}</td>
                  <td>{{$order->address}}</td>
                  <td>{{$order->note}}</td>
                  <td>{{number_format($order->total_amount)}}đ</td>
                  <td>
                  	@if($order->status == 1)
                  	  <div class="btn btn btn-xs btn-success">Đã duyệt</div>
                  	@else
                  	  <div class="btn btn btn-xs btn-danger">Chưa duyệt</div> 
                  	@endif
                  </td>
                  <td>{{$order->shipper}}</td>
                  <td>{{$order->payment}}</td>
                  <td>{{$order->created_at}}</td>
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
  <!-- /.content-wrapper -->
@stop