@extends('fontend.layout.main')
@section('title','Loại sản phẩm')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
			    <div class="beta-breadcrumb font-large">
					<a href="{{route('trangchu')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a> / <span style="color: #33cc33">Loại sản phẩm</span> / <span style="color: #33cc33">{{$loai_sp->name}}</span>
				</div>
			</div>
			<div class="pull-right">
				
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
					@foreach($loai as $loai)
						<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
					@endforeach	
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>Sản phẩm tìm thấy</h4>	
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
						@foreach($sp_theoloai as $sp)
							<div class="col-sm-4" style="margin-top: 20px">
								<div class="single-item">
								    @if($sp->sale_price != 0)
									    <div class="ribbon-wrapper"><div class="ribbon sale"> Sale
									    </div>    	
									    </div>
								    @endif 
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sp->id)}}"><img src="<?php echo url('/')?>/public/images/{{$sp->image}}" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp->name}}</p>
										<p class="single-item-price" style="font-size: 15px">
										@if($sp->sale_price == 0)
											<span class="flash-sale">{{number_format($sp->price)}} VNĐ</span>
										@else
										    <span class="flash-del">{{number_format($sp->price)}} VNĐ</span>
											<span class="flash-sale">{{number_format($sp->sale_price)}} VNĐ</span>
										@endif	
										</p>
									</div>
									<div class="single-item-caption" style="margin-top: 10px">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
					    @endforeach	
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khác</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($sp_khacs)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
						@foreach($sp_khacs as $sp_khac)
							<div class="col-sm-4" style="margin-top: 20px">
								<div class="single-item">
								     @if($sp_khac->sale_price != 0) 
									    <div class="ribbon-wrapper"><div class="ribbon sale"> Sale
									    </div>    	
									    </div>
								    @endif
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sp_khac->id)}}"><img src="<?php echo url('/') ?>/public/images/{{$sp_khac->image}}"" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp_khac->name}}</p>
										<p class="single-item-price" style="font-size: 15px">
										@if($sp_khac->sale_price == 0)
											<span class="flash-sale">{{number_format($sp_khac->price)}} VNĐ</span>
										@else
										    <span class="flash-del">{{number_format($sp_khac->price)}} VNĐ</span>
											<span class="flash-sale">{{number_format($sp_khac->sale_price)}} VNĐ</span>
										@endif
										</p>
									</div>
									<div class="single-item-caption" style="margin-top: 10px">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp_khac->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sp_khac->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach	
						</div>
						<div class="row" style="float: right">{{$sp_khacs -> links()}}</div>
						<div class="space40">&nbsp;</div>
						
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@stop