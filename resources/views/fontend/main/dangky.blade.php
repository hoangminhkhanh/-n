@extends('fontend.layout.main')
@section('title','Đăng ký')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<div class="beta-breadcrumb">
					<a href="{{route('trangchu')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> / <span style="color: #33cc33">Đăng kí</span>
				</div>
			</div>
			<div class="pull-right">
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('dangky')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
					   <div class="alert alert-danger">
					   	  @foreach($errors->all() as $err)
					   	     {{$err}}
					   	  @endforeach
					   </div>
					@endif
                    @if(Session::has('thongbao'))
                       <div class="alert alert-success">
                       	  {{Session::get('thongbao')}}
                       </div>
					@endif
					<div class="col-sm-6">
						<h5 style="text-align: center;">Đăng kí tài khoản</h5>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="text">Tên của bạn*</label>
							<input type="text" name="name" required>
						</div>
						
						<div class="form-block">
							<label for="email">Email *</label>
							<input type="email" name="email" required>
						</div>
						<div class="form-block" style="width: 100%">
                    		<label for="Gioitinh">Giới tính*</label>
                            <input type="radio" name="gender" value="nam" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                            <input type="radio" name="gender" value="nữ" style="width: 10%"> <span>Nữ</span>
                    	</div>

						<div class="form-block">
							<label for="password">Password*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" required>
						</div>
						<div class="form-block">
							<label for="address">Địa chỉ*</label>
							<input type="text" name="address" required>
						</div>
						<div class="form-block">
							<label for="note">Ghi chú</label>
							<textarea name="note" id="" cols="3" rows="3"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
					<div style="margin-top: 15px">
						<div class="beta-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.2088820827703!2d105.77736301443778!3d21.064317885979136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552b05f530a5%3A0x49837e2a176e4a43!2zMjgwIEPhu5UgTmh14bq_LCBD4buVIE5odeG6vyAxLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1503601456758" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@stop