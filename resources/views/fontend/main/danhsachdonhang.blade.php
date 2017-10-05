@extends('fontend.layout.main')
@section('title','Danh sách đơn hàng')
@section('content')
  <div class="container">
  	<div class="row" style="margin-top: 20px">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng của bạn</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding" style="margin-top: 10px">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Giá sản phẩm</th>
                  <th>Thanh toán</th>
                  <th>Vận chuyển</th>
                  <th>Ngày đặt</th>
                </tr> 
              @foreach($lichSuMua as $list )
                <tr>
                  <td style="color: orange">{!!$list->name!!}</td>
                  <td>{!!$list->quantity!!}</td>
                  <td style="color: orange">
                    @if($list->sale_price ==0)
                       {!!number_format($list->price)!!}đ
                    @else
                       {!!number_format($list->sale_price)!!}đ
                    @endif
                  </td>
                  <td>{!!$list->payment!!}</td>
                  <td>{!!$list->shipper!!}</td>
                  <td>{!!$list->created_at!!}</td>
                </tr> 
              @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
      </div>
  </div>
@endsection()