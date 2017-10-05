@extends('fontend.layout.main')
@section('title','Liên hệ')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trangchu')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> / <span style="color: #33cc33">Liên Hệ</span>
				</div>
			</div>
			<div class="pull-right">
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div>
				<div class="beta-map">
					<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.2088820827703!2d105.77736301443778!3d21.064317885979136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552b05f530a5%3A0x49837e2a176e4a43!2zMjgwIEPhu5UgTmh14bq_LCBD4buVIE5odeG6vyAxLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2sin!4v1503144043887" width="500" height="450" frameborder="0" style="border: 1px solid blue" allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
	</div>
<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Thông tin</h2>
					<div class="space20">&nbsp;</div>
					<p>Mọi thắc mắc xin liên hệ với chúng tôi theo mẫu form phía dưới</p>
					<div class="space20">&nbsp;</div>
					<form action="{{route('lienhe')}}" method="post">	
					<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-block">
							<input name="name" type="text" placeholder="Your Name (Bắt buộc)">
						</div>
						<div class="form-block">
							<input name="email" type="email" placeholder="Your email (Bắt buộc)">
						</div>
						<div class="form-block">
							<textarea style="width: 450px; height: 150px" name="content" rows="3" placeholder="Your Message"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" id="b1" class="beta-btn primary">Gửi<i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Liên hệ với chúng tôi</h2>
					<div class="space20">&nbsp;</div>
					<p style="font-size: 15px"><i class="fa fa-location-arrow" aria-hidden="true"></i> :&nbsp;Nhà số 10, Ngõ 280/21 Cổ Nhuế, Bắc Từ liêm, Hà Nội</p>
					<p style="margin-top: 10px;font-size: 15px"><i class="fa fa-phone" aria-hidden="true"></i> :&nbsp;0973 605 319</p>
					<p style="margin-top: 10px;font-size: 15px"><i class="fa fa-envelope" aria-hidden="true"></i> :&nbsp;khanhhoang220596@gmail.com</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->	

	<script type="text/javascript">
		document.getElementById('b1').onclick = function(){
			swal("Thành công","Gửi thành công","success");
		};
	</script>
@stop