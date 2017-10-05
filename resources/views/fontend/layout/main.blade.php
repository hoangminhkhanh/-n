<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') </title>
	<link href='<?php echo url('/') ?>/public/fontend/css/style.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo url('/') ?>/public/fontend/css/giohang.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo url('/') ?>/public/fontend/css/re-ship-phone.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo url('/') ?>/public/fontend/css/toolbar.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo url('/') ?>/public/fontend/css/banner-brand-wrap.css' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo url('/') ?>/public/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo url('/') ?>/public/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="<?php echo url('/') ?>/public/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?php echo url('/') ?>/public/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="<?php echo url('/') ?>/public/assets/dest/css/style.css">
	<link rel="stylesheet" href="<?php echo url('/') ?>/public/assets/dest/css/animate.css">
	<link rel="stylesheet" href="<?php echo url('/') ?>/public/assets/dest/css/huong-style.css">
	<link href="<?php echo url('/') ?>/public/fontend/scripts/rateit.css" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
	<!--like facebook-->
	 <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://localhost:8080/MyLaravel/fontend" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
</head>
<body>
<!--Facebook comment-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1116297668501667',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	@include('fontend.layout.header')

	@yield('content')

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h5 class="widget-title" style="color: #33cc33">Hỗ trợ</h5>
						<div>
							<ul>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Tìm kiếm</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Tư vấn thiết kế</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Chăm sóc khách hàng</a></li>
								<li><a href="{{route('giohang')}}"><i class="fa fa-chevron-right"></i> Kiểm tra đơn hàng</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h5 class="widget-title" style="color: #33cc33">Hướng dẫn</h5>
						<div>
							<ul>
								<li><a href="https://www.thegioididong.com/huong-dan-mua-hang"><i class="fa fa-chevron-right"></i> Hướng dẫn mua hàng</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Giao nhận và thanh toán</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Đổi trả và bảo hành</a></li>
								<li><a href="{{route('dangky')}}"><i class="fa fa-chevron-right"></i> Đăng ký thành  viên</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
				 <div class="col-sm-10">
					<div class="widget">
						<h5 class="widget-title" style="color: #33cc33">Chính sách</h5>
						<div>
							<ul>
								<li><a href="https://www.thegioididong.com/thanh-toan"><i class="fa fa-chevron-right"></i> Chính sách thanh toán</a></li>
								<li><a href="https://www.thegioididong.com/giao-hang"><i class="fa fa-chevron-right"></i> Chính sách vận chuyển</a></li>
								<li><a href="https://www.thegioididong.com/chinh-sach-bao-hanh-san-pham"><i class="fa fa-chevron-right"></i> Chính sách đổi trả</a></li>
								<li><a href="https://www.thegioididong.com/bao-hanh"><i class="fa fa-chevron-right"></i> Chính sách bảo hành</a></li>
							</ul>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h5 class="widget-title" style="color: #33cc33">Tại sao chọn chúng tôi</h5>
						<div>
							<ul>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Đội ngũ chuyên nghiệp</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Giá cả hợp lý</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Kinh nghiệm trên 20 năm</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Đảm bảo tiến độ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p  style="text-align: center;">Khánh Hoàng. (&copy;) 2017 | Bản quyền thuộc về nhóm HKN</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->
   
	<!-- include js files -->
	<script src="<?php echo url('/') ?>/public/assets/dest/js/jquery.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/vendors/animo/Animo.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/vendors/dug/dug.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/js/scripts.min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/js/waypoints.min.js"></script>
	<script src="<?php echo url('/') ?>/public/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="<?php echo url('/') ?>/public/assets/dest/js/custom2.js"></script>
	<script src="<?php echo url('/') ?>/public/fontend/scripts/jquery.rateit.js" type="text/javascript"></script> 
	<script src="<?php echo url('/') ?>/public/fontend/js/update-cart.js" type="text/javascript"></script> 
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>

	<a href="#" class="cd-top">Back To Top</a>
	<style type="text/css">
		/* back to top */
		a.cd-top {
		display: inline-block;
		height: 40px;
		width: 40px;
		position: fixed;
		bottom: 10px;
		right: 10px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
		/* image replacement properties */
		overflow: hidden;
		text-indent: 100%;
		white-space: nowrap;
		background: #3097D1 url("https://thinhweb.com/wp-content/themes/thinhweb/images/cd-top-arrow.svg") no-repeat center 50%;
		visibility: hidden;
		opacity: 0;
		-webkit-transition: opacity .3s 0s, visibility 0s .3s;
		-moz-transition: opacity .3s 0s, visibility 0s .3s;
		transition: opacity .3s 0s, visibility 0s .3s;
		}
		a.cd-top.cd-is-visible, a.cd-top.cd-fade-out, .no-touch a.cd-top:hover {
		-webkit-transition: opacity .3s 0s, visibility 0s 0s;
		-moz-transition: opacity .3s 0s, visibility 0s 0s;
		transition: opacity .3s 0s, visibility 0s 0s;
		}

		a.cd-top, a.cd-top:visited, a.cd-top:hover {
		color: #CCCCCC;
		text-decoration: none;
		}

		a.cd-top.cd-is-visible {
		/* the button becomes visible */
		visibility: visible;
		opacity: 1;
		}
		a.cd-top.cd-fade-out {
		/* if the user keeps scrolling down, the button is out of focus and becomes less visible */
		opacity: 1;
		}
	</style>

	<script>
		jQuery(document).ready(function($){
		// browser window scroll (in pixels) after which the "back to top" link is shown
		var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

		//hide or show the "back to top" link
		$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
		$back_to_top.addClass('cd-fade-out');
		}
		});

		//smooth scroll to top
		$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
		scrollTop: 0 ,
		}, scroll_top_duration
		);
		});

		});

	</script>

<!--VCchat-->

	<!-- <script src="https://uhchat.net/code.php?f=d4d322"></script> -->

	<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=c6827e6238dbfe9e0ac81f7f5a468506&data=eyJoYXNoIjoiNjE0MDA5MGY0NDUxZDZiZWNlODFjOTA4ZmYxMGMwZmIiLCJzc29faWQiOjUwMTY5MjB9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
</body>
</html>
