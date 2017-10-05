@extends('layout.main')
@extends('layout.backend-header')
@section('title','User/Xem')
@extends('layout.backend-aside')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Thêm tài khoản
                <small>tài khoản</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('user.index')}}">Danh sách tài khoản</a></li>
                <li class="active">{{$user->full_name}}</li>
            </ol>
            @if(!empty($user))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$user->full_name}}</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <a href="{{route('user.add')}}" class="btn btn-success">
                                <span class="glyphicon glyphicon-plus"></span> Thêm mới
                            </a>
                            <a data-toggle="modal" href='user/xoa/{{$user->id}}' class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                                Delete
                            </a>
                        </p>
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr>
                                <th>Full name</th>
                                <td>{{$user->full_name}}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$user->username}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td>{{$user->password}}</td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>
                                    @if($user->role_id ==1)
                                      <div class="btn btn btn-sm btn-primary">Admin</div> 
                                    @else
                                      <div class="btn btn btn-sm btn-info">Customer</div> 
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created_at</th>
                                <td>{{$user->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated_at</th>
                                <td>{{$user->updated_at}}</td>
                            </tr>
                            </tbody>
                        </table>
            @else
                        <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>404!</strong> data not fount ...
                        </div>
                    </div>
                </div>
             @endif
    </div>
@stop()

