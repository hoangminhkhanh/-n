@extends('layout.main')
@extends('layout.backend-header')
@extends('layout.backend-aside')
@section('title','Thông tin cá nhân')
@section('content')
<div class="content-wrapper">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6" style="margin-top: 20px">
			<div class="row">
				<div class="box box-solid bg-teal-gradient">
					<div class="box-header">
					  <i class="fa fa-user" aria-hidden="true"></i>
					  <h3 class="box-title" style="font-size: 20px">User Profile</h3>
					</div> 
					<img style="height: 20%;width: 25%;margin-left: 10px;border-radius: 100%" src="<?php echo url('/') ?>/public/assets/dest/images/1.png" alt="">
                    <h3 style="float: right;padding-right: 100px">
                       {{Auth::user()->full_name}} </br>
                       <p style="font-size: 15px;margin-top: 10px"><em>
                           @if(Auth::user()->role_id ==1)
                              <div class="btn btn btn-xs btn-danger">Admin</div>
                           @else
                              <div class="btn btn btn-xs btn-success">Customer</div>    
                           @endif
                       </em></p> </br>
                       <p style="font-size: 17px;margin-top: 10px"><i class="fa fa-envelope-o" aria-hidden="true"></i> : {{Auth::user()->email}}</p>
                       <p style="font-size: 17px"><i class="fa fa-phone" aria-hidden="true"></i> : 0973 605 319</p>
                       <p style="font-size: 17px"><i class="fa fa-address-card-o" aria-hidden="true"></i> : 280/21 Cổ nhuế, Bắc từ liêm, Hà nội</p>
                    </h3> 
                    <p style="text-align: center;font-size: 20px;padding-top: 
                    25px">Thông tin cá nhân</p>
                    <hr>
                    <form action="" style="margin-top: 30px">
                    	<div class="form-group" style="margin-left: 50px">
                    		<label for="Email">Email*</label>
                            <input type="email" class="form-control" style="margin-left: 117px;width: 300px " value="{{Auth::user()->email}}">
                    	</div>
                    	<div class="form-group" style="margin-left: 50px">
                    		<label for="Fullname">Họ tên*</label>
                            <input type="text" class="form-control" style="margin-left: 117px;width: 300px" value="{{Auth::user()->full_name}}">
                    	</div>
                    	<div class="form-group" style="margin-left: 50px">
                    		<label for="Username">Tên đăng nhập*</label>
                            <input type="text" class="form-control" style="margin-left: 117px;width: 300px " value="{{Auth::user()->username}}">
                    	</div>
                    	<div class="form-group" style="text-align: center;padding-bottom: 10px">
                        <button type="submit" class="btn btn btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                       
                    	</div>
                    </form>
			    </div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<!-- /.box -->
@stop