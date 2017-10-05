@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Loại sản phẩm/Xem')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Danh sách loại sản phẩm
                <small>Thông tin loại sản phẩm</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('ProductType.index')}}">Danh sách loại sản phẩm</a></li>
                <li class="active">{{$protype->name}}</li>
            </ol>
        </section>
        @if(!empty($protype))
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tên sản phẩm: <strong>{{$protype->name}}</strong></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{$protype->id}}</td>
                        </tr>
                        <tr>
                            <th>Tên loại sản phẩm</th>
                            <td>{{$protype->name}}</td>
                        </tr>
                        <tr>
                            <th>Mô tả</th>
                            <td>{{$protype->descript}}</td>
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