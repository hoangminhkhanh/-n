 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo url('/') ?>/public/assets/dest/images/1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->full_name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="{{route('backend.index')}}">
            <i class="fa fa-dashboard"></i> <span>BẢNG ĐIỀU KHIỂN</span>
          </a>
        </li>
        <li class="dropdown notifications-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bars"></i>
                <span>Danh mục sản phẩm</span>
                <span class="label label-success"></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <span class="pull-right-container"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('backend.category')}}"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a></li>
                <li><a href="{{route('category.add')}}"><i class="fa fa-circle-o"></i> Thêm mới danh mục sản phẩm</a></li>
              </ul>
            </li>
        </li>
        <li class="dropdown notifications-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bars"></i>
                <span>Loại sản phẩm</span>
                <span class="label label-success"></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <span class="pull-right-container"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('ProductType.index')}}"><i class="fa fa-circle-o"></i> Danh sách loại sản phẩm</a></li>
                <li><a href="{{route('ProductType.add')}}"><i class="fa fa-circle-o"></i> Thêm mới danh sách loại sản phẩm</a></li>
              </ul>
            </li>
        </li>
        <li class="dropdown notifications-menu">
          <li class="treeview">
            <a href="#">
              <i class="fa fa-product-hunt"></i>
              <span>Sản phẩm</span>
              <span class="label label-danger"></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              <span class="pull-right-container"></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
              <li><a href="{{route('product.add')}}"><i class="fa fa-circle-o"></i> Thêm mới sản phẩm</a></li>
            </ul>
          </li>
        </li>
        <li class="dropdown notifications-menu">
          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Quản lý bán hàng</span>
               <span class="label label-warning"></span>
               <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
               <ul class="treeview-menu">
              <li><a href="{{route('Exhibition.index')}}"><i class="fa fa-circle-o"></i> Đơn hàng</a></li> 
              <li><a href="{{route('Exhibition.chitietdonhang')}}"><i class="fa fa-circle-o"></i>Chi tiết đơn hàng</a></li>
            </ul>
              </span>
            </a>
          </li>
        <li class="dropdown notifications-menu">  
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user-circle-o"></i>
              <span>Quản lý người dùng</span>
              <span class="label label-info"></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Danh sách tài khoản</a></li>
              <li><a href="{{route('user.add')}}"><i class="fa fa-circle-o"></i> Thêm mới tài khoản</a></li>
              <li><a href="{{route('user.canhan')}}"><i class="fa fa-circle-o"></i> Thông tin cá nhân</a></li>
              <li><a href="{{route('user.doipass')}}"><i class="fa fa-circle-o"></i> Thay đổi mật khẩu</a></li>
            </ul>
          </li>
        </li>
        <li class="dropdown notifications-menu">  
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user-circle-o"></i>
              <span>Quản lý khách hàng</span>
              <span class="label label-info"></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('customer.index')}}"><i class="fa fa-circle-o"></i> Danh sách khách hàng</a></li>
              <li><a href="{{route('customer.add')}}"><i class="fa fa-circle-o"></i> Thêm mới tài khoản</a></li>
            </ul>
          </li>
        </li>
        <li class="dropdown notifications-menu">  
          <li class="treeview">
            <a href="#">
              <i class="fa fa-sliders"></i>
              <span>Quản lý slide</span>
              <span class="label label-primary"></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('banner.index')}}"><i class="fa fa-circle-o"></i> Danh sách slide</a></li>
              <li><a href="{{route('banner.add')}}"><i class="fa fa-circle-o"></i> Thêm mới slide</a></li>
            </ul>
          </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>