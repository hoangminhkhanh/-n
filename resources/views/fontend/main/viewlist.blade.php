@extends('fontend.layout.main')
@section('title','Xem sản phẩm kiểu danh sách')
@section('content')
<!--slide-->
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
<!--end-->

<!--Hình thức vận chuyển-->
<style type="text/css">
    .re-ship-phone .item{
    	padding: 15px 0 15px 65px;
    	background: #f4f4f4;
    	overflow:hidden;
    	border-radius: 46px 0 0 46px;
    	color: #444;
    	font-size: 18px;
    	position: relative;
    	font-weight: 600;
    	text-transform: uppercase;
    	margin: 10px 0;
    }
	.re-ship-phone .item .icon .icon1{
		background-image: url('https://bizweb.dktcdn.net/100/109/381/themes/161997/assets/return.png?1499937015181');
		background-repeat: no-repeat;
		background-position: center;
	}
	.re-ship-phone .item .icon{
		height: 50px;
		width: 50px;
		position: absolute;
		left: 0;
		top: 0;
		border-radius: 50%;
		background-color: #666;
	}
	.re-ship-phone .item .des span{
		color: #f48549;
	}
	.re-ship-phone .item .des{
		margin: 0;
		line-height: 21px;
	}
</style>
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
						<span class="icon icon2">

						</span>
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
<!---->

<!--banner quảng cáo-->
<style type="text/css">
	.toolbar{
		border: 1px solid #ddd;
		margin: 20px 0;
		padding: 9px;
		background: #3ab54a;
	}
	div{
		display:block;
	}
	.view-mode{
		margin-top: 5px
	}
	.view-mode a{
		color: #fff;
		display: inline-block;
		padding: 4px 9px;
		background: #e9e9e9;
		text-decoration: none;
	}
	.change-view-active{
		background-color: #3ab54a !important;
	}
</style>
<div class="banner-9" style="margin-top: 15px">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 hidden-xs">
				<div class="single-banner-left">
					<a href="#">
						<img alt="Vanesa" src="//bizweb.dktcdn.net/100/035/203/themes/200826/assets/banner_6.jpg?1497521205776">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end-->

<!--Container-->
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							
							<!-- <div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
								<div class="clearfix"></div> -->
							<div class="toolbar">
								<div class="row">
										<div class="col-xs-4 col-sm-6">
											<h4 style="color: #fff">Sản phẩm mới</h4>
										</div>
										<div class="col-xs-8 col-sm-6 text-right">
											<div id="sort-by">
											    <div class="sorter">
												<div class="view-mode"> 
													<a href="?view=grid" title="Danh sách" class="button button-grid change-view--active"><i class="fa fa-th-large" aria-hidden="true"></i></a>
													<a href="{{route('viewlist')}}" title="Danh sách" class="button button-list "><i class="fa fa-th-list" aria-hidden="true"></i></a>
												</div>
											</div>
												<!-- <script>
													Bizweb.queryParams = {};
													if (location.search.length) {
														for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
															aKeyValue = aCouples[i].split('=');
															if (aKeyValue.length > 1) {
																Bizweb.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
															}
														}
													}

													$(function() {
														$('#soft_by')
														// select the current sort order
															.val('default')
															.bind('change', function() {
															Bizweb.queryParams.sortby = jQuery(this).val();
															location.search = jQuery.param(Bizweb.queryParams).replace(/\+/g, '%20');
														});
													});
												</script> -->
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
											    <div class="ribbon-wrapper">
												    <div class="ribbon sale"> Sale </div>
												</div>
											@endif   
											<div class="single-item-header">
												<a href="{{route('chitietsanpham',$n_pro->id)}}"><img src="<?php echo url('/') ?>/public/images/{{$n_pro->image}}" alt="{{$n_pro->name}}" title="{{$n_pro->name}}" height="250px"></a>
											</div>
											<div class="single-item-body">
											<!--Đánh giá-->
											    <div class="rateit"></div>
												<div id="rateit_star"></div>
													<script type="text/javascript">
													    $(function () { $('#rateit_star').rateit({min: 1, max: 10, step: 2}); });
													</script>
												    <div id="rateit_star1"  data-productid="123"></div>
													<script type="text/javascript">
													   $(function () {
													       $('#rateit_star1').rateit({min: 1, max: 10, step: 1});
													       $('#rateit_star1').bind('rated', function (e) {
													         var ri = $(this);
													         var value = ri.rateit('value');
													         var productID = ri.data('productid');
													         alert('Bạn đã đánh giá '+value +' sao cho sản phẩm có id là:'+productID );
													         //không cho phép đánh giá,sau khi đã đánh giá xong
													         ri.rateit('readonly', true);
													     });
													   });
													</script>	
											<!--End-->	
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
							
							<!-- <div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sanpham_khuyenmai)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div> -->
							<div class="toolbar">
								<div class="row">
										<div class="col-xs-4 col-sm-6">
											<h4 style="color: #fff">Sản phẩm khuyến mãi</h4>
										</div>
										<div class="col-xs-8 col-sm-6 text-right">
											<div id="sort-by">
											    <div class="sorter">
												<div class="view-mode"> 
													<a href="?view=grid" title="Danh sách" class="button button-grid change-view--active"><i class="fa fa-th-large" aria-hidden="true"></i></a>
													<a href="?view=list" title="Danh sách" class="button button-list "><i class="fa fa-th-list" aria-hidden="true"></i></a>
												</div>
											</div>
												<script>
													Bizweb.queryParams = {};
													if (location.search.length) {
														for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
															aKeyValue = aCouples[i].split('=');
															if (aKeyValue.length > 1) {
																Bizweb.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
															}
														}
													}

													$(function() {
														$('#soft_by')
														// select the current sort order
															.val('default')
															.bind('change', function() {
															Bizweb.queryParams.sortby = jQuery(this).val();
															location.search = jQuery.param(Bizweb.queryParams).replace(/\+/g, '%20');
														});
													});
												</script>
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
										<!--Đánh giá-->
										    <div class="rateit"></div>
											<div id="rateit_star"></div>
												<script type="text/javascript">
												    $(function () { $('#rateit_star').rateit({min: 1, max: 10, step: 2}); });
												</script>
											    <div id="rateit_star1"  data-productid="123"></div>
												<script type="text/javascript">
												   $(function () {
												       $('#rateit_star1').rateit({min: 1, max: 10, step: 1});
												       $('#rateit_star1').bind('rated', function (e) {
												         var ri = $(this);
												         var value = ri.rateit('value');
												         var productID = ri.data('productid');
												         alert('Bạn đã đánh giá '+value +' sao cho sản phẩm có id là:'+productID );
												         //không cho phép đánh giá,sau khi đã đánh giá xong
												         ri.rateit('readonly', true);
												     });
												   });
												</script>	
										<!--End--> 
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
</div> <!-- .container -->
<!--end-->
@stop