@extends('layout.main')
@extends('layout.backend-header')
@section('title','User/add')
@extends('layout.backend-aside')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm tài khoản khách hàng
        <small>thêm tài khoản</small>
      </h1>
        <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('customer.index')}}">Danh sách khách hàng</a></li>
      </ol>
      </ol>
          @if(count($errors) > 0)
             <div class="alert alert-success">
                 @foreach($errors->all() as $err)
                    {{$err}}
                 @endforeach
             </div>
          @endif
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm tài khoản khách hàng</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('customer.add')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="full_name">Tên khách hàng</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                  @if($errors->has('name'))
                     <div class="help-block">{{$errors->first('name')}}</div>
                  @endif
                </div>
                <div class="form-group" style="width: 100%">
                  <label for="">Giới tính</label>
                  <input type="radio" name="gender" value="nam" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                  <input type="radio" name="gender" value="nữ" style="width: 10%"> <span>Nữ</span>
                  @if($errors->has('gender'))
                     <div class="help-block">{{$errors->first('gender')}}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                   @if($errors->has('email'))
                     <div class="help-block">{{$errors->first('email')}}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="password">Mât khẩu</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                   @if($errors->has('password'))
                     <div class="help-block">{{$errors->first('password')}}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="phone">Số điện thoại</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                   @if($errors->has('phone'))
                     <div class="help-block">{{$errors->first('phone')}}</div>
                  @endif
                </div>  
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="address">
                   @if($errors->has('address'))
                     <div class="help-block">{{$errors->first('address')}}</div>
                  @endif
                </div> 
                <div class="form-group">
                  <label for="note">Nội dung</label>
                  <textarea name="note" class="form-control" rows="3"></textarea> 
                   @if($errors->has('note'))
                     <div class="help-block">{{$errors->first('note')}}</div>
                  @endif
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i></button>
              </div>
              </div>
              <!-- /.box-body -->             
            </form>
          </div>
          <!-- /.box -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
