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
    @if(Session::has('info'))
      <div class="alert alert-info">
        {{Session::get('info')}}
      </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
              <div style="margin-top: 10px">
                <form action="{{route('books.export')}}" method="get" role="form"> 
                 <button type="submit" title="Xuất file ra excel" class="btn btn btn-sm btn-success" style="font-size: 15px">Xuất ra Excel <i class="fa fa-print" aria-hidden="true"></i></button>
                </form>
              </div> 
              <div class="box-tools">
                <div class="input-group input-group-sm">
                  <form role="search" method="get" id="searchform" action="{{route('Exhibition.timkiem')}}">
                    <input type="text" value="" id="s" name="key" placeholder="Nhập từ khóa..." />
                    <button class="fa fa-search" type="submit" id="searchsubmit"></button>
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
                  <th>Tên khách hàng</th>
                  <th>SĐT</th>
                  <th>Địa chỉ</th>
                  <th>Ghi chú</th>
                  <th>Tổng tiền</th>
                  <th>Tình trạng</th>
                  <th>Ngày đặt</th>
                  <th style="width: 150px">Hành động</th>
                </tr>
            @if(count($orders))    
              @foreach($orders as $order)
                  <tr>
                    <td>{{$order->id}}</td>
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
                    <td>{{$order->created_at}}</td>
                    <td>
                        <a href="Exhibition/view/{{$order->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Xem</a>
                        <!-- <a href="Exhibition/sua/{{$order->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="Exhibition/xoa/{{$order->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a> -->
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