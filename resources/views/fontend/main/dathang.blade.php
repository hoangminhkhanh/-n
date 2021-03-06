@extends('fontend.layout.main')
@section('title','Đặt hàng')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<div class="beta-breadcrumb">
					<a href="{{route('trangchu')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> / <span style="color: #33cc33">Đặt hàng</span> / <a href="{{route('trangchu')}}" style="color: #33cc33">Tiếp tục mua hàng</a>
				</div>
			</div>
			<div class="pull-right">
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			
			<form action="" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
				    @if(Session::has('info'))
                       <div class="alert alert-success">
                       	{!!Session::get('info')!!}
                       </div>
                    @endif
					<div class="col-sm-4">
						<h6 class="your-order-head" style="font-size: 20px">Thông tin khách hàng đặt hàng </h6>
						<div class="space20">&nbsp;</div>

						<div class="form-group">
							<label for="name">Họ tên*</label>
							<input type="text" id="name" name="name" value="{{Auth::guard('customer')->user()->name}}">
						</div>
						
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" value="{{Auth::guard('customer')->user()->email}}">
						</div>

						<div class="form-group">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" name="address" value="{{Auth::guard('customer')->user()->address}}">
						</div>
						
						<div class="form-group">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" name="phone" value="{{Auth::guard('customer')->user()->phone}}">
						</div>
					</div>
					<div class="col-sm-4">
						<h6 class="your-order-head" style="font-size: 20px">Thông tin người nhận</h6>
						<div class="space20">&nbsp;</div>
                           
						<div class="form-group">
							<label for="name">Họ tên*</label>
							<input type="text" id="name" name="name" placeholder="Vui lòng nhập họ tên">
						</div>
						<div class="form-group">
							<label>Giới tính </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-group">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" placeholder="Vui lòng nhập email">
						</div>

						<div class="form-group">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" name="address" placeholder="Vui lòng nhập địa chỉ">
						</div>
						
						<div class="form-group">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" name="phone" placeholder="Vui lòng nhập số điện thoại">
						</div>
						
						<div class="form-group">
							<label for="notes">Ghi chú</label>
							<textarea id="note" class="form-control" name="note" style="width: 360px"></textarea>
						</div>
					</div>
                    <section  id="dathang">    
						<div class="col-sm-4">
							<div class="your-order">
								<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
								<div class="your-order-body" style="padding: 0px 10px">
									<div class="your-order-item">
										<div>
										<!--  one item	 -->
										@if(count($cart->items))
										@foreach($cart->items as $item)
											<div class="media">
												<img width="25%" src="<?php echo url('/') ?>/public/images/{{$item['image']}}" alt="" class="pull-left">
												<div class="media-body">
													<p class="font-large"><em><strong>{{$item['name']}}</strong></em></p>
													<span class="color-gray your-order-info" style="margin-top: 2px">Đơn giá:
													@if($item['sale_price'] == 0)
													 {{number_format($item['price'])}} VNĐ
	                                                @else
	                                                 {{number_format($item['sale_price'])}} VNĐ
	                                                @endif 
													</span>
													<span class="color-gray your-order-info" style="margin-top: 2px">Số lượng: 
													 <input type="text" size="1" value="{{$item['qty']}}" name="quantity[40]" class="span1" id="qtt-{{$item['id']}}" style="width: 50px">
													 <td class="total">
													 	<a class="btn-update-cart" href="{{route('updateCart')}}" data-id="{{$item['id']}}">
										                 <img class="tooltip-test" data-original-title="Update" src="<?php echo url('/') ?>/public/assets/dest/images/update.png" alt="" style="padding-left: 50px">
										             </a>
										             <a href="{{route('xoagiohang',$item['id'])}}">
										                 <img class="tooltip-test" data-original-title="Remove" src="<?php echo url('/') ?>/public/assets/dest/images/remove.png" alt="">
										             </a>
													 </td>
													</span>
												</div>
											</div>
										@endforeach	
                                        @endif 
										<!-- end one item -->
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="your-order-item">
										<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
										<div class="pull-right"><h5 class="color-black" style="color: orange">
											@if(Session::has('cart'))
											   {{number_format($cart->totalPrice)}}
											@else
											   0   
											@endif
											VNĐ
										</h5></div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
								
								<div class="your-order-body">
									<ul class="payment_methods methods">
										<li class="payment_method_bacs">
											<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
											<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
											<div class="payment_box payment_method_bacs" style="display: block;">
												Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
											</div>						
										</li>

										<li class="payment_method_cheque">
											<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
											<label for="payment_method_cheque">Chuyển khoản </label>
											<div class="payment_box payment_method_cheque">
												Chuyển tiền đến tài khoản sau:
												<br>- Số tài khoản: 123 456 789
												<br>- Chủ TK: Hoàng Minh Khánh
												<br>- Ngân hàng BIDV, Chi nhánh Bắc từ liêm
											</div>						
										</li>
										
									</ul>
								</div>
	                            <div class="your-order-head"><h5>Hình thức vận chuyển</h5></div>
	                            <div class="your-order-body">
									<ul class="payment_methods methods">
										<li class="payment_method_bacs">
											<input id="payment_method_bacs" type="radio" class="input-radio" name="shipper" value="Oto" checked="checked" data-order_button_text="">
											<label for="payment_method_bacs">Oto</label>	
										</li>

										<li class="payment_method_cheque">
											<input id="payment_method_cheque" type="radio" class="input-radio" name="shipper" value="Xe máy" data-order_button_text="">
											<label for="payment_method_cheque">Xe máy</label>		
										</li>
									</ul>
								</div> 
								<div class="text-center"><button class="beta-btn primary">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
							</div> <!-- .your-order -->
						</div>
					</section>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@stop