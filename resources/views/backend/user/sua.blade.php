@extends('layout.main')
@extends('layout.backend-header')
@section('title','User/add')
@extends('layout.backend-aside')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sửa thông tin</h3>
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
                    <a href="{{route('user.index')}}" class="btn btn-success" title="Về danh sách">
                       <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                </p>
                @if(!empty($user))
                <form action="{{route('user.sua',$user->id)}}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>
                                <label for="">Họ tên</label>
                            </th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="full_name" placeholder="Input full_name" value="{{$user->full_name}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Tên đăng nhập</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="username" placeholder="Input username" value="{{$user->username}}" >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Input email" value="{{$user->email}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Mật khẩu</th>
                            <td>
                                <div class="form-group">
                                    <input type="password" class="form-control" disabled name="password" placeholder="Input Password" value="{{$user->email}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Quyền hạn</th>
                            <td>
                                <div class="form-group"> 
                                  <select name="role_id" class="form-control">
                                  @if(!empty($role))
                                   <option value="">--Không chọn quyền--</option>  
                                  @foreach($role as $rl)
                                    <option value="{{$rl->id}}">{{$rl->name}}</option>
                                  @endforeach    
                                  @endif   
                                  </select> 
                                </div>
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
