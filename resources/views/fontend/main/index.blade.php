@extends('fontend.layout.main')
@section('title','Trang chủ')
@section('content')
<div class="rev-slider">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<div class="bannercontainer" >
		        <div class="banner" >
					<ul>
					 @foreach($slide as $sl)
						<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
				            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="<?php echo url('/') ?>/public/uploads/slide/{{$sl->image}}" data-src="<?php echo url('/') ?>/public/uploads/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('<?php echo url('/') ?>/public/uploads/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>
				        </li>
			        @endforeach
					</ul>
				</div>
			</div>
			<div class="tp-bannertimer"></div>
		</div>
	</div>			<!--slider-->
</div>
<!--re-ship-phone-->
<div class="container" style="margin-top: 25px">
	<div class="module moduleship">
		<div class="modcontent clearfix">
			<div class="row re-ship-phone">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<span class="icon icon1">
						</span>
						<p class="des">
							<span>Tư vấn 24/7</span> Miễn phí
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<span class="icon icon2"></span>
						<p class="des">
							Vận chuyển <span>miễn phí</span>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<span class="icon icon3">

						</span>
						<p class="des">
							Nhận hàng <span>Nhận tiền</span>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<span class="icon icon4">

						</span>
						<p class="des">
							Gọi ngay <span>0973 605 319</span>
						</p>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<!--end-->
<div class="banner-9" style="margin-top: 15px">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 hidden-xs">
				<div class="single-banner-left">
					<a href="#">
						<img alt="HKN" src="//bizweb.dktcdn.net/100/035/203/themes/200826/assets/banner_6.jpg?1497521205776">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" id='main'>
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<div class="toolbar">
							<div class="row">
									<div>
										<h6 style="color: #fff; margin-left: 20px">Sản phẩm mới</h6>
									</div>
									 
									</div>
							</div>
							</div>	
						</div>

						<div class="row" style="margin-top: 15px">
						@foreach($new_product as $n_pro)
							<div class="col-sm-3" style="margin-top: 20px">
								<div class="single-item">
								@if($n_pro->sale_price != 0)
								    <div class="ribbon-wrapper"><div class="ribbon sale"> Sale</div>    	
								    </div>
								@endif   
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$n_pro->id)}}"><img src="<?php echo url('/') ?>/public/images/{{$n_pro->image}}" alt="{{$n_pro->name}}" title="{{$n_pro->name}}" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$n_pro->name}}</p>
										<p class="single-item-price" style="font-size: 15px">
										@if($n_pro->sale_price == 0)
											<span class="flash-sale">{{number_format($n_pro->price)}} VNĐ</span>
									    @else
									       	<span class="flash-del">{{number_format($n_pro->price)}} VNĐ</span>
											<span class="flash-sale">{{number_format($n_pro->sale_price)}} VNĐ</span>	
									    @endif
										</p>
									</div>
									<div class="single-item-caption" style="margin-top: 15px">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$n_pro->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$n_pro->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach	
						</div>
						<div class="row" style="float: right; margin-top: 15px">{{$new_product -> links()}}</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>
                    <div class="banner-9">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
									<div class="single-banner-left">
										<a href="">
											<img alt="HKN" src="//bizweb.dktcdn.net/100/035/203/themes/200826/assets/banner_4.jpg?1497521205776">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<div class="beta-products-list">
						<div class="toolbar">
							<div class="row">
									<div>
										<h6 style="color: #fff; margin-left: 20px">Sản phẩm khuyến mãi</h6>
									</div>
									</div>
							</div>
							</div>	
						</div>

						<div class="row" style="margin-top: 15px">
                        @foreach($sanpham_khuyenmai as $km)
							<div class="col-sm-3" style="margin-top: 20px">
								<div class="single-item">
								@if($km->sale_price != 0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
								@endif	
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$km->id)}}"><img src="<?php echo url('/') ?>/public/images/{{$km->image}}" alt="{{$km->name}}" title="{{$km->name}}" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$km->name}}</p>
										<p class="single-item-price" style="font-size: 15px">
											<span class="flash-del">{{number_format($km->price)}} VNĐ</span>
											<span class="flash-sale">{{number_format($km->sale_price)}} VNĐ</span>
										</p>
									</div>
									<div class="single-item-caption" style="margin-top: 15px">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$km->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$km->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
					    @endforeach		
						</div>
						<div class="row" style="float: right;">{{$sanpham_khuyenmai -> links()}}</div>
						<div class="space40">&nbsp;</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
	<h5 style="margin-bottom: 70px;margin-left: 90px;margin-top: -50px">Thương hiệu sản phẩm</h5>
	<section class="banner-brand-wrap hidden-sm-down">
		<div class="container banner-brand-wrap">
			<div class="banner-brand">
				<div id="owl-brand" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
					<div class="owl-wrapper-outer">
						<div class="owl-wrapper" style="width: 2280px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
							<div class="owl-item active" style="width: 190px;">
								<div class="item">
									<img src="<?php echo url('/') ?>/public/assets/dest/images/hp.jpg" alt="">
								</div>
							</div>
							<div class="owl-item active" style="width: 190px;">
								<div class="item">
									<img style="border-radius: 4px" src="<?php echo url('/') ?>/public/assets/dest/images/mac1.jpg" alt="">
								</div>
							</div>
							<div class="owl-item active" style="width: 190px;">
								<div class="item">
									<img style="border-radius: 4px" src="<?php echo url('/') ?>/public/assets/dest/images/del.jpg" alt="">
								</div>
							</div>
							<div class="owl-item active" style="width: 190px;">
								<div class="item">
									<img style="border-radius: 4px" src="<?php echo url('/') ?>/public/assets/dest/images/msi.jpg" alt="">
								</div>
							</div>
							<div class="owl-item active" style="width: 190px;">
								<div class="item">
									<img style="border-radius: 4px" src="<?php echo url('/') ?>/public/assets/dest/images/asus1.jpg" alt="">
								</div>
							</div>
							<div class="owl-item active" style="width: 190px;">
								<div class="item">
									<img style="border-radius: 4px" src="<?php echo url('/') ?>/public/assets/dest/images/acer.jpg" alt="">
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
    </section>
</div> <!-- .container -->
@stop