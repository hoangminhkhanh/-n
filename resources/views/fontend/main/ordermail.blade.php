<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xác nhận đơn hàng</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table class="table table-hover">
	   <h1>Kính chào quý khách</h1></br>
	   <h3>Chúng tôi nhận được <b style="color: orange">đơn hàng</b> của quý khách với hình thức thanh toán là <b style="color: orange">thanh toán khi nhận hàng</b>. Chúng tôi sẽ gửi thông báo đến quý khách ngay khi sản phẩm được giao cho đơn vị vận chuyển</h3>
	   <hr style="border: 2px solid #ccc; margin: 20px 0  0 20px"></hr>
       <h2>Đơn hàng sẽ được gửi đến người nhận là: </h2></br>
       <h2 style="color: red; font-family: Arial;margin: 15px 0 0 15px">{{$name}}</h2></br>
       
       <p style="margin: 15px 0 0 15px">Phone: <b style="color: #000; font-size: 20px">{{$phone}}</b></p></br>
       <p style="margin: 15px 0 0 15px">Sau đây là chi tiết đơn hàng của quý khách</p></br>
       <div style="margin: 15px 0 0 15px;background: #99ffff;height: auto;">
       	   <h4 style="margin-top: 15px 0 0 15px">Kiện hàng được giao bơi Laptop NHK</h4></br>
           @foreach($listProduct as $pro)
       	      <h4 style="margin: 15px 0 0 15px">Được thành lập vào ngày: {{$pro->created_at}} với hình thức giao hàng miễn phí</h4>
           @endforeach   
       </div>
       <div style="margin: 15px 0 0 15px;">
          @foreach($listProduct as $list)
          <?php 
                  $ten = "public/images/".$list->image;
           ?>
            <img style="padding-left: 10px; padding-top: 10px;height: 120px;width: 120px" src="<?php echo $message->embed($ten); ?>" alt="">
            <p>Tên sản phẩm: <b style="color: orange">{{$list->name}}</b></p>
            <p>Số lượng: {{$list->quantity}}</p>
          @endforeach  
       	<h4 style="color: orange">Tổng tiền: {{number_format($total)}} VNĐ</h4>
       </div> 
    </table>
</body>
</html>