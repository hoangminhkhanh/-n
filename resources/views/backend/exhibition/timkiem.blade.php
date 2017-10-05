@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Tìm kiếm')
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
        <li><a href="{{route('Exhibition.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Note</th>
                  <th>Tổng tiền</th>
                  <th>Tình trạng</th>
                  <th>Ngày đặt</th>
                  <!-- <th>Hot</th> -->
                  <th style="width: 150px">Action</th>
                </tr>
            @if(count($orders))
            @foreach($orders as $orders)
                <tr>
                  <td>{{$orders->id}}</td>
                  <td>{{$orders->name}}</td>
                  <td>{{$orders->phone}}</td>
                  <td>{{$orders->address}}</td>
                  <td>{{$orders->note}}</td>
                  <td>{{number_format($orders->total_amount)}}</td>
                  <td>
                    @if($orders->status == 1)
                      <div class="btn btn btn-sm btn-success">Đã duyệt</div>
                    @else
                      <div class="btn btn btn-sm btn-danger">Chưa duyệt</div> 
                    @endif
                  </td>
                  <td>{{$orders->created_at}}</td>
                  <td>
                      <a href="../Exhibition/view/{{$orders->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Xem</a>
                      <!-- <a href="../Exhibition/sua/{{$orders->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="../Exhibition/xoa/{{$orders->id}}" class="btn btn-success btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a> -->
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