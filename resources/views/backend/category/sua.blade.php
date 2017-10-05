@extends('layout.main')
@extends('layout.backend-header')
@section('title','Danh mục/Sửa')
@extends('layout.backend-aside')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sửa danh mục</h3>
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
                    <a href="{{route('backend.category')}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-th-list"></span> Về danh sách
                    </a>
                </p>
                @if(!empty($category))
                <form action="{{route('category.sua',$category->id)}}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>
                                <label for="">Tên danh mục</label>
                            </th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục" value="{{$category->name}}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Đường dẫn tĩnh</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="slug" placeholder="Nhập đường dẫn" value="{{$category->slug}}" >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Trạng thái</th>
                            <td>
                                <select name="cat_id" id="cat_id" class="form-control" required="required">
                                <option value="">--Select category--</option>
                                <option value="1">Public</option>    
                                <option value="0">UnPublic</option>  
                                </select>
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
