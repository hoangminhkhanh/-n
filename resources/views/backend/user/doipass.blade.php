@extends('layout.main')
@extends('layout.backend-header')
@section('title','User/Thay đổi mật khẩu')
@extends('layout.backend-aside')
@section('content')
 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Thay đổi mật khẩu</h3>
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
            
                <form action="{{route('user.doipass')}}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Mật khẩu cũ</th>
                            <td>
                                <div class="form-group">
                                    <input type="password" class="form-control"  name="password" placeholder="Input password">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Mật khẩu mới</th>
                            <td>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="n_password" placeholder="Input password new" >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Nhập lại mật khẩu</th>
                            <td>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="re_password" placeholder="Input re_password">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-repeat" aria-hidden="true"></i></button>
                </form>

              <!--   <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>404!</strong> data not fount ...
                </div>
 -->
            </div>
        </div>
    </div>
@stop