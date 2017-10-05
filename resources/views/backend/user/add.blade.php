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
        Thêm tài khoản
        <small>tài khoản</small>
      </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
              <h3 class="box-title">Thêm tài khoản</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('user.add')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="full_name">Họ tên</label>
                  <input type="text" class="form-control" id="full_name" name="full_name" name="username" placeholder="Enter full_name">
                  @if($errors->has('full_name'))
                     <div class="help-block">{{$errors->first('full_name')}}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="username">Tên đăng nhập</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                  @if($errors->has('username'))
                     <div class="help-block">{{$errors->first('username')}}</div>
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
                  <label for="role">Quyền hạn</label>
                  <select name="role_id" class="form-control">
                  @if(!empty($role))
                      <option value="">--Không chọn quyền--</option>  
                  @foreach($role as $rl)
                      <option value="{{$rl->id}}">{{$rl->name}}</option>
                  @endforeach    
                  @endif   
                  </select> 
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
  