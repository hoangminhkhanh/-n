@extends('layout.main')
@extends('layout.backend-header')
@section('title','User')
@extends('layout.backend-aside')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        Danh sách tài khoản
        <small>danh sách tài khoản</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>

      </ol>
    </section>
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                @if(count($errors) > 0)
                  <div class="alert alert-info">
                      @foreach($errors->all() as $err)
                        {!!$err!!}
                      @endforeach
                  </div>
                @endif
                @if(Session::has('info'))
                    <div class="alert alert-danger">
                        {{Session::get('info')}}
                    </div>
                @endif
              <div>
                <p>
                  <a href="{{route('user.add')}}" class="btn btn-success">
                      <span class="glyphicon glyphicon-plus"></span> Thêm mới
                  </a>
                </p>
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm">
                  <form role="search" method="get" id="searchform" action="{{route('user.timkiem')}}">
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
                  <th>Họ và tên</th>
                  <th>Tên đăng nhập</th>
                  <th>Email</th>
                  <th>Quyền hạn</th>
                  <th>Ngày tạo</th>
                  
                  <th>Hành động</th>
                </tr>
              @foreach($users as $user)  
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->full_name}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    @if($user->role_id ==1)
                      <div class="btn btn btn-xs btn-danger">Admin</div> 
                    @else
                      <div class="btn btn btn-xs btn-primary">Customer</div> 
                    @endif
                  </td>
                  <td>{{$user->created_at}}</td>
                  
                  <td>
                      <a href="user/xem/{{$user->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="user/sua/{{$user->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="user/xoa/{{$user->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                  </td>
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
  