@extends('layout.main')
@extends('layout.backend-header')
@section('title','User/add')
@extends('layout.backend-aside')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sửa thông tin khách hàng</h3>
            </div>
             @if(count($errors) > 0)
               <div class="alert alert-info">
                   @foreach($errors->all() as $err)
                      {{$err}}
                   @endforeach
               </div>
            @endif
            <div class="panel-body">
                <p>
                    <a href="{{route('customer.index')}}" class="btn btn-success" title="Về danh sách">
                       <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                </p>
                @if(!empty($cus))
                <form action="{{route('customer.sua',$cus->id)}}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>
                                <label for="">Tên khách hàng</label>
                            </th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Input name" value="{{$cus->name}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Giới tính</th>
                            <td>
                                <div class="form-block" style="width: 100%">
		                            <input type="radio" name="gender" value="nam" style="width: 10%"><span style="margin-right: 10%">Nam</span>
		                            <input type="radio" name="gender" value="nữ" style="width: 10%"> <span>Nữ</span>
                    	        </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Input email" value="{{$cus->email}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Số điện thoại</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Input phone" value="{{$cus->phone}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td>
                                 <input type="text" class="form-control" name="address" placeholder="Input address" value="{{$cus->address}}">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i></button>
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
@stop()
