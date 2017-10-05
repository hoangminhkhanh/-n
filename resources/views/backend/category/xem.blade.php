@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Xem danh mục')
@section('content')
<div class="content-wrapper">
        <section class="content-header">
            <h1>
                Danh sách danh mục
                <small>danh mục</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('backend.category')}}">Danh sách danh mục</a></li>
                <li class="active">{{$category->name}}</li>
            </ol>
            @if(!empty($category))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$category->name}}</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{$category->id}}</td>
                            </tr>
                            <tr>
                                <th>Tên danh mục</th>
                                <td>{{$category->name}}</td>
                            </tr>
                            <tr>
                                <th>Đường dẫn tĩnh</th>
                                <td>{{$category->slug}}</td>
                            </tr>
                            <tr>
                                <th>Trạng thái</th>
                                <td>
                                    @if($category->status ==1)
                                      <div class="btn btn btn-xs btn-success">OK</div> 
                                    @else
                                      <div class="btn btn btn-xs btn-danger">No</div> 
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created_at</th>
                                <td>{{$category->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated_at</th>
                                <td>{{$category->updated_at}}</td>
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
@stop