<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href="" style="font-family: Arial;font-size: 15px"><i class="fa fa-home"></i> 280/21 Cổ Nhuế, Quận Từ Liêm, Hà Nội</a></li>
						<li><a href="" style="font-family: Arial;font-size: 15px"><i class="fa fa-phone"></i> 097 360 5319</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
					@if(Auth::guard('customer')->check())
					    <li><a href="{{route('danhsachdonhang')}}" style="font-family: Arial;font-size: 15px"><i class="fa fa-list"></i>Danh sách đơn hàng</a></li> 
						<li><a href="#" style="font-family: Arial;font-size: 15px">Chào bạn <b style="color:orange"><em>{{Auth::guard('customer')->user()->name}}</em></b></a></li>
						<li><a href="{{route('dangxuat')}}" style="font-family: Arial;font-size: 15px"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng xuất</a></li>
					@else
					    <li><a href="#modal-login" data-toggle="modal" style="font-family: Arial;font-size: 15px"><i class="fa fa-clock-o"></i>Lịch sử đặt hàng</a></li>
						<li><a href="{{route('dangky')}}" style="font-family: Arial;font-size: 15px"><i class="fa fa-registered" aria-hidden="true"></i> Đăng kí</a></li>	
						<li><a href="{{route('dangnhap')}}" style="font-family: Arial;font-size: 15px"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
					@endif	
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<!--Banner quảng cáo-->
		<style type="text/css">
		    .container-full{
                margin-top: 15px
		    }
			.banner-body a img{
				width: 100% !important;
				border: 0 none;
				height: auto;
			}
			.banner-body a{
				text-decoration: none;
			}
		</style>
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('trangchu')}}" id="logo"><img src="<?php echo url('/') ?>/public/assets/dest/images/logoHKN.jpg" width="250px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('timkiem')}}">
					        <input type="text" value="" id="s" name="key" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>
                      
					<div class="beta-comp">
					
					@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i>
							Giỏ hàng (@if(Session::has('cart')){{$cart->totalQty}} @else Trống @endif)
							<i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
							@foreach($cart->items as $item)
								<div class="cart-item">
								    <a href="{{route('xoagiohang',$item['id'])}}" class="cart-item-delete"><i class="fa fa-trash" aria-hidden="true"></i></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="<?php echo url('/') ?>/public/images/{{$item['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$item['name']}}</span>
											<span class="cart-item-amount">{{$item['qty']}}*
												<span>
												@if($item['sale_price'] == 0)
												  {{number_format($item['price'])}} VNĐ
												@else
	                                              {{number_format($item['sale_price'])}}
												@endif	
												</span>
										    </span>
										</div>
									</div>
								</div>
							@endforeach	
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">
									  {{number_format($cart->totalPrice)}} VNĐ     	
									</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Thanh toán<i class="fa fa-chevron-right"></i></a>
										<a href="{{route('giohang')}}" class="beta-btn primary text-center">Giỏ hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					@endif	
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trangchu')}}">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
							@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
							@endforeach	
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->

	<!--modal signin-->
    </div>
        <div class="modal fade" id="modal-login">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">Vui lòng đăng nhập</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('dangnhap')}}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Input email">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Input password">
                        </div>
                        <button type="submit" name="dang_nhap" class="btn btn-primary btn-block">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>