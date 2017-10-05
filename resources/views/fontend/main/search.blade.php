@extends('fontend.layout.main')
@section('title','Search')
@section('content')
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Tìm kiếm sản phẩm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($product as $n_pro)
								<div class="col-sm-3" style="margin-top: 20px">
									<div class="single-item">
									@if($n_pro->sale_price != 0)
									    <div class="ribbon-wrapper"><div class="ribbon sale"> Sale
									    </div>    	
									    </div>
									@endif    
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$n_pro->id)}}"><img src="<?php echo url('/') ?>/public/images/{{$n_pro->image}}" alt="{{$n_pro->name}}" title="{{$n_pro->name}}" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$n_pro->name}}</p>
											<p class="single-item-price">
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
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@stop