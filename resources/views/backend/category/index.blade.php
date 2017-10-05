@extends('layout.main')
@extends('layout.backend-header')
@section('title','Category')
@extends('layout.backend-aside')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Danh mục sản phẩm
                <small>Danh mục</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>
        @if(count($errors) > 0)
          <div class="alert alert-info">
              @foreach($errors->all() as $err)
                 {!!$err!!}
              @endforeach
          </div>
        @endif
        @if(Session::has('info'))
        <div class="alert alert-info">
         {!!Session::get('info')!!}
         </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div>
                            <p>
                              <a href="{{route('category.add')}}" class="btn btn-success">
                                  <span class="glyphicon glyphicon-plus"></span> Thêm mới
                              </a>
                            </p>
                        </div>

                        <div class="box-tools">
                            <div class="input-group input-group-sm">
                            <form role="search" method="get" id="searchform" action="{{route('category.timkiem')}}">
                                <input type="text" value="" id="s" name="key" placeholder="Nhập từ khóa..." />
                    <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                  </form>
                </div>    
              </div> 
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Đường dẫn tĩnh</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Lựa chọn</th>
                            </tr>
                            @if($datas->count())
                            @foreach($datas as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->slug}}</td>
                                    <td>{{$cat->created_at}}</td>
                                    <td>
                                        @if($cat->status == 1)
                                            <span class="label label-success">OK</span>
                                        @else
                                            <span class="label label-danger">NO</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="category/xem/{{$cat->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="category/sua/{{$cat->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="category/xoa/{{$cat->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                             @endforeach
                             @endif
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