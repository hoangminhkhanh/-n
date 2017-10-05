@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Chỉnh sửa hóa đơn')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sửa thông tin</h3>
            </div>
            <div class="panel-body">
                <p>
                    <a href="{{route('Exhibition.index')}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-th-list"></span> Về danh sách
                    </a>
                </p>
                @if(!empty($order))
                <form action="{{route('Exhibition.sua',$order->id)}}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>
                                <label for="">Tên khách hàng</label>
                            </th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Input name" value="{{$order->name}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Số điện thoại</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="phone" placeholder="Input phone" value="{{$order->phone}}" >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Input address" value="{{$order->address}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Ghi chú</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="note" placeholder="Input note" value="{{$order->note}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Tổng tiền</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled name="total_amount" placeholder="Input total_amount" value="{{$order->total_amount}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Tình trạng</th>
                            <td>
                                @if($order->status == 1)
                                  <div class="btn btn btn-xs btn-success
                                  ">Đã duyệt</div>
                                @else
                                  <div class="btn btn btn-xs btn-success
                                  ">Chưa duyệt</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Ngày đặt</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled name="created_at" placeholder="Input created_at" value="{{$order->created_at}}">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                </form>
                @else
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>404!</strong> data not fount ...
                </div>
                @endif
            </div>
        </div>
    </div>
@stop