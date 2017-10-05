@extends('fontend.layout.main')
@section('title','Chi tiết sản phẩm')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trangchu')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> / <span style="color: #33cc33">Thông tin chi tiết sản phẩm</span> / <span style="color: #33cc33">{{$sanpham->name}}</span>
				</div>
			</div>
			<div class="pull-right">
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
						<div class="single-item" >
						    @if($sanpham->sale_price != 0)
							    <div class="ribbon-wrapper">
							        <div class="ribbon sale"> Sale</div>    	
							    </div>
							@endif  
						</div>	
						<div>
							<img src="<?php echo url('/') ?>/public/images/{{$sanpham->image}}" alt="{{$sanpham->name}}" title="{{$sanpham->name}}">
						</div>	
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h3><em>{{$sanpham->name}}</em></h3></p>
								<p class="single-item-price" style="font-size: 20px">
									@if($sanpham->sale_price == 0)
										<span class="flash-sale">{{number_format($sanpham->price)}} VNĐ</span>
								    @else
								       	<span class="flash-del">{{number_format($sanpham->price)}} VNĐ</span>
										<span class="flash-sale">{{number_format($sanpham->sale_price)}} VNĐ</span>
								    @endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>
							<div class="space20">&nbsp;</div>
				
							<div>
							<div class="boxshock">
			                    <div class="boxshockheader">
					                <div class="bgleft"></div>
					                    <label>MUA ONLINE GIÁ RẺ: <strong>
					                    	@if($sanpham->sale_price == 0)
												<span class="flash-sale" style="color: #000; font-size: 15px">{{number_format($sanpham->price)}} VNĐ</span>
										    @else
										       	<span class="flash-del" style="color: orange; font-size: 15px">{{number_format($sanpham->price)}} VNĐ</span>
												<span class="flash-sale" style="color: #000; font-size: 15px">{{number_format($sanpham->sale_price)}} VNĐ</span>
										    @endif
					                    </strong></label>
					                    <span>Kết thúc <b>2/9</b></span>
					                <div class="bgright"></div>
			                    </div>
			                    <div class="bgbottom"></div>
			                    <div class="boxshockcontent">
									<div class="area_promotion rule">
										<span>Mỗi số điện thoại chỉ được mua 1 sản phẩm</span>
										<span>Nhắn tin 5.000đ xác nhận mua hàng</span>
										<span>Nhận hàng trong vòng 48 giờ</span>
										<span>Được tặng kèm balo</span>
									</div>                
				                    <div>
				                        <a href="{{route('themgiohang',$sanpham->id)}}" class="buy_now" data-value="76031" style="text-decoration: none;"><b>Mua ngay giá 
				                        @if($sanpham->sale_price == 0)
											<span class="flash-sale" style="color: #000; font-size: 15px">{{number_format($sanpham->price)}} VNĐ</span>
									    @else
									       	<span class="flash-del" style="color: orange; font-size: 15px">{{number_format($sanpham->price)}} VNĐ</span>
											<span class="flash-sale" style="color: #000; font-size: 15px">{{number_format($sanpham->sale_price)}} VNĐ</span>
									    @endif
				                        </b>
				                            <span>Xem hàng, không thích không mua</span>
				                        </a>
				                    </div>
				                    </div>
			                    </div>
						    </div>
						</div>
					</div>
                
					<div class="single-item-options" style="margin-top: 15px; margin-left: 300px">
						<button type="submit" class="btn btn btn-sm btn-success"><a href="{{route('themgiohang',$sanpham->id)}}" style="color: #fff;font-size: 15px">Thêm vào giỏ hàng  <i class="fa fa-shopping-cart"></i></a></button>
						<div class="clearfix"></div>
						<button type="submit" class="btn btn btn-sm btn-info" style="margin-left:15px"><a href="{{route('giohang',$sanpham->id)}}" style="color: #fff;font-size: 15px">Xem giỏ hàng <i class="fa fa-eye"></i></a></button>
						<div class="clearfix"></div>
					</div>
					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
						</ul>
						<div class="panel" id="tab-description">
							<p>{!!$sanpham->content!!}</p>
						</div>
					</div>
                
                <!--Like facebook-->
					 <!-- Load Facebook SDK for JavaScript -->
					  <div id="fb-root"></div>
					  <script>(function(d, s, id) {
					    var js, fjs = d.getElementsByTagName(s)[0];
					    if (d.getElementById(id)) return;
					    js = d.createElement(s); js.id = id;
					    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
					    fjs.parentNode.insertBefore(js, fjs);
					  }(document, 'script', 'facebook-jssdk'));</script>

					  <!-- Your like button code -->
					  <div class="fb-like" 
					    data-href="http://localhost:8080/MyLaravel/fontend" 
					    data-layout="standard" 
					    data-action="like" 
					    data-show-faces="true">
					  </div>
					<!--End-->
				<!--Comment facebook-->
					<div class="fb-comments" data-href="http://localhost:8080/MyLaravel/fontend/chi-tiet-san-pham" data-colorscheme="light" data-numposts="10" data-width="850"></div>
				<!--End-->	
				

					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>
						<div class="row">
						@foreach($sp_tuongtu as $sp_tt)
							<div class="col-sm-4" style="margin-top: 20px">
								<div class="single-item">
								    @if($sanpham->sale_price != 0)
									    <div class="ribbon-wrapper"><div class="ribbon sale"> Sale
									    </div>    	
									    </div>
									@endif 
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sp_tt->id)}}"><img src="<?php echo url('/'); ?>/public/images/{{$sp_tt->image}}" alt="{{$sp_tt->name}}" title="{{$sp_tt->name}}" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp_tt->name}}</p>
										<p class="single-item-price" style="font-size: 15px">
											@if($sp_tt->sale_price == 0)
												<span class="flash-sale">{{number_format($sp_tt->price)}} VNĐ</span>
										    @else
										       	<span class="flash-del">{{number_format($sp_tt->price)}} VNĐ</span>
												<span class="flash-sale">{{number_format($sp_tt->sale_price)}} VNĐ</span>	
										    @endif
										</p>
									</div>
									<div class="single-item-caption" style="margin-top: 10px">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp_tt->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sp_tt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach	
						</div>
						<div class="row" style="float: right;">{{$sp_tuongtu -> links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm liên quan</h3>
						<div class="widget-body">
						@foreach($sp_lienquan as $sp)
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
								@if($sp->sale_price != 0)
								    <div class="ribbon-wrapper"><div class="ribbon sale"> Sale
								    </div>    	
								    </div>
								@endif 
									<a class="pull-left" href="{{route('chitietsanpham',$sp->id)}}"><img src="<?php echo url('/') ?>/public/images/{{$sp->image}}" alt=""></a>
									<div class="media-body">
										{{$sp->name}}
										<span class="beta-sales-price" style="font-size: 15px">
											@if($sp->sale_price == 0)
												<span class="flash-sale">{{number_format($sp->price)}} VNĐ</span>
										    @else
										       	<span class="flash-del">{{number_format($sp->price)}} VNĐ</span>
												<span class="flash-sale">{{number_format($sp->sale_price)}} VNĐ</span>	
										    @endif
										</span>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@stop