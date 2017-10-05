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
        <li><a href="{{route('user.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>

      </ol>
    </section>
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                @if(session('info'))
                    <div class="alert alert-info">
                        {{session('info')}}
                    </div>
                @endif
              <h3 class="box-title">Danh sách tài khoản</h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Full name</th>
                  <th>username</th>
                  <th>email</th>
                  <th>Data created</th>
                  
                  <th>Action</th>
                </tr>
              @foreach($user as $user)  
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->full_name}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>
                  
                  <td>
                      <a href="user/xem/{{$user->id}}" class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="user/sua/{{$user->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="user/xoa/{{$user->id}}" class="btn btn-success btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
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
  