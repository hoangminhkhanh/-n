@extends('layout.main')
@extends('layout.backend-header')
@section('title','Product')
@extends('layout.backend-aside')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách sản phẩm
        <small>danh sách sản phẩm</small>
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
        {{Session::get('info')}}
      </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div>
                  <p>
                    <a href="{{route('product.add')}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus"></span> Thêm mới
                    </a>
                  </p>
              </div>

              <div class="box-tools">
                <div class="input-group input-group-sm">
                  <form role="search" method="get" id="searchform" action=" {{route('product.timkiem')}}">
                    <input type="text" value="" id="s" name="key" placeholder="Nhập từ khóa..." />
                    <button class="fa fa-search btn btn-sm btn-primary" type="submit" id="searchsubmit"></button>
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
                  <th>Hình ảnh</th>
                  <th>Tên sản phẩm</th>
                  <th>Danh mục</th>
                  <th>Giá sản phẩm</th>
                  <th>Giá khuyến mại</th>
                  <!-- <th>Nội dung</th> -->
                  <!-- <th>Hot</th> -->
                  <th style="width: 150px">Hành động</th>
                </tr>
             @if($pros -> count())
              @foreach($pros as $pro)
            
                <tr>
                  <td>{{$pro->id}}</td>
                  <td>
                    <img src="../public/images/{{$pro->image}}" width="50">
                  </td>
                  <td>{{$pro->name}}</td>
                  <td>
                    @if($pro->cat_id == 1)
                       <div class="btn btn-xs btn-success">Laptop</div>
                    @else
                       <div class="btn btn-xs btn-danger">Mobile</div>
                    @endif
                  </td>
                  <td>{{number_format($pro->price)}}đ</td>
                  <td>{{number_format($pro->sale_price)}}đ</td>
                  <!-- <td>{{$pro->content}}</td> -->
                  <td>
                      <a href="product/xem/{{$pro->id}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="product/sua/{{$pro->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="product/xoa/{{$pro->id}}" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                  </td>
                </tr>
            
             @endforeach
             @endif
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="row" style="text-align: center;">{{$pros->links()}}</div>
        </div>
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
  