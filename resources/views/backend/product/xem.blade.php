@extends('layout.main')
@extends('layout.backend-header')
@section('title','product/xem')
@extends('layout.backend-aside')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Danh sách sản phẩm
                <small>Thông tin sản phẩm</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
                <li class="active">{{$product->name}}</li>
            </ol>
        </section>
        @if(!empty($product))
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tên sản phẩm: <strong>{{$product->name}}</strong></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Giá sản phẩm</th>
                            <td>{{number_format($product->price)}} VNĐ</td>
                        </tr>
                        <tr>
                            <th>Giá khuyến mại</th>
                            <td>{{number_format($product->sale_price)}} VNĐ</td>
                        </tr>
                        <tr>
                            <th>Hình ảnh sản phẩm</th>
                            <td>
                                <img src="../../../public/images/{{$product->image}}" alt="{{$product->name}}" width="100px">
                            </td>
                        </tr>
                        <tr>
                            <th>Nội dung</th>
                            <td>{{$product->content}}</td>
                        </tr>
                        <tr>
                            <th>Created_at</th>
                            <td>{{$product->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated_at</th>
                            <td>{{$product->updated_at}}</td>
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