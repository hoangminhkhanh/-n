@extends('fontend.layout.main')
@section('title','Giỏ hàng')
@section('content')
<section class="main-cart-page main-container col1-layout bg-white">
	<div class="bg-white">
		<div class="main container hidden-xs cnt_width_970">
			<div class="col-main cart_desktop_page cart-page">
				<div class="cart page_cart hidden-xs">
					<form action="" method="post" novalidate="" class="margin-bottom-0">
						<div class="bg-scroll">
							<div class="cart-thead">
								<div style="width: 17%;text-align: left;">Hình ảnh</div>
								<div style="width: 33%">
									<span class="nobr">Tên sản phẩm</span>
								</div>
								<div style="width: 15%" class="a-left">
									<span class="nobr">Đơn giá</span>
								</div>
								<div style="width: 14%" class="a-left">Số lượng</div>
								<div style="width: 15%" class="a-left">Thành tiền</div>
								<div style="width: 6%">Xoá</div>
							</div>
							<div class="cart-tbody">
							@foreach($cart->items as $item)
								<div class="item-cart productid-12129207">
									<div style="width: 17%" class="image">
										<a class="product-image" title="" href="">
											<img width="120" height="auto" alt="" title="{{$item['name']}}" src="<?php echo url('/') ?>/public/images/{{$item['image']}}">
										</a>
									</div>
									<div style="width: 33%" class="a-center">
										<h2 class="product-name">
											<a class="text2line" href="">{{$item['name']}}</a>
										</h2>
									</div>
									<div style="width: 15%" class="a-center">
										<span class="item-price"> 
											<span class="price">
											@if($item['sale_price'] == 0)
											   {{number_format($item['price'])}} VNĐ
											@else
											   {{number_format($item['sale_price'])}} VNĐ   
											@endif
											</span>
										</span>
									</div>
									<div style="width: 14%" class="a-center">
										<div class="input_qty_pr relative">
											<input class="variantID" type="hidden" name="variantId" value="12129207">
											
											<input type="text" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem12129207" id="qtyItem12129207" name="Lines" size="4" value="{{$item['qty']}}">
											
										</div>
									</div>
									<div style="width: 15%" class="a-center">
										<span class="cart-price"> 
											<span class="price">
											@if($item['sale_price'] == 0)
											   {{number_format($item['price'])}} VNĐ
											@else
											   {{number_format($item['sale_price'])}} VNĐ   
											@endif
											</span> 
										</span>
									</div>
									<div style="width: 6%">
										<a class="button remove-item remove-item-cart" title="Xóa" href="{{route('xoagiohang',$item['id'])}}" data-id="12129207">
											<span >
												<i style="margin-top: 41px" class="fa fa-times" aria-hidden="true"></i>
											</span>
										</a>
									</div>
								</div>
							@endforeach	
							</div>
						</div>
					</form>
					<div class="cart-collaterals cart_submit row">
						<div class="totals col-sm-12 col-md-12 col-xs-12">
							<div class="totals">
								<div class="inner">
									<table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
										<colgroup>
										<col><col>
									</colgroup>
									<tfoot>
										<tr>
											<td colspan="20" class="a-left">
												<span>Tổng tiền phải thanh toán:</span> 
											</td>
											<td class="a-right">
												<strong>
													<span class="totals_price price">
														@if(Session::has('cart'))
														   {{number_format($cart->totalPrice)}}
														@else
														   0   
														@endif
														VNĐ
													</span>
												</strong>
											</td>
										</tr>
									</tfoot>
								</table>
								<ul class="checkout">
									<li class="clearfix">
										<button class="btn btn-success button btn-proceed-checkout f-right" title="Tiến hành đặt hàng" type="button" onclick="window.location.href='{{route('dathang')}}'"> 
											<span>Tiến hành đặt hàng</span>
										</button>
										<button class="btn btn-gray button btn-proceed-checkout margin-right-15 f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='{{route('trangchu')}}'">
											<span>Tiếp tục mua hàng</span>
										</button>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@stop