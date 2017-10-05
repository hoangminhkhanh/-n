<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Backend
Route::group(['prefix' => 'backend','middleware' =>'adminLogin'],function(){
  Route::get('/',[
  'uses' => '\App\Http\Controllers\backend\MainController@index',
  'as'=> 'backend.index', 
  ]);
  
  Route::get('/backend-aside',[
    'uses' => '\App\Http\Controllers\backend\MainController@backendaside',
    'as' => 'layout.backend-aside'
    ]);

  Route::get('/logout',[
  'uses' => '\App\Http\Controllers\backend\MainController@logout',
  'as'=> 'backend.logout', 
  ]);

  Route::get('/user',[
  'uses' => '\App\Http\Controllers\backend\UserController@index',
  'as'=> 'user.index', 
  ]);

  Route::get('/user/add',[
  'uses' => '\App\Http\Controllers\backend\UserController@add',
  'as'=> 'user.add', 
  ]);

    Route::post('/user/add',[
  'uses' => '\App\Http\Controllers\backend\UserController@postAdd',
  'as'=> 'user.add', 
  ]);

  Route::get('/user/sua/{id}',[
      'uses' => '\App\Http\Controllers\backend\UserController@getSua',
      'as' => 'user.sua'
  ]);
  Route::post('/user/sua/{id}',[
    'uses' => '\App\Http\Controllers\backend\UserController@postSua',
    'as' => 'user.sua'
    ]);

  Route::get('/user/xem/{id}',[
      'uses' => '\App\Http\Controllers\backend\UserController@getXem',
      'as' => 'user.xem'
  ]);
  Route::get('/user/xoa/{id}',[
      'uses' => '\App\Http\Controllers\backend\UserController@getXoa',
      'as' => 'user.xoa'
  ]);

  Route::get('/user/tim-kiem',[
  'uses' => '\App\Http\Controllers\backend\UserController@timkiem',
  'as' => 'user.timkiem'
  ]);

  Route::get('/user/ca-nhan',[
  'uses' => '\App\Http\Controllers\backend\UserController@ttcanhan',
  'as' => 'user.canhan'
  ]);

  Route::get('/uses/thay-doi-mat-khau',[
   'uses' => '\App\Http\Controllers\backend\UserController@getdoipass',
   'as' => 'user.doipass'
    ]);

  Route::post('/uses/thay-doi-mat-khau',[
   'uses' => '\App\Http\Controllers\backend\UserController@postdoipass',
   'as' => 'user.doipass'
    ]);

  Route::get('/banner',[
    'uses' => '\App\Http\Controllers\backend\BannerController@index',
    'as' => 'banner.index',
    ]);

  Route::get('/banner/add',[
    'uses' => '\App\Http\Controllers\backend\BannerController@getAdd',
    'as' => 'banner.add',
    ]);

  Route::post('/banner/add',[
    'uses' => '\App\Http\Controllers\backend\BannerController@postAdd',
    'as' => 'banner.add',
    ]);

  Route::get('/banner/sua/{id}',[
      'uses' => '\App\Http\Controllers\backend\BannerController@getSua',
      'as' => 'banner.sua'
  ]);
  Route::post('/banner/sua/{id}','\App\Http\Controllers\backend\BannerController@postSua');

  Route::get('/banner/xem/{id}',[
      'uses' => '\App\Http\Controllers\backend\BannerController@getXem',
      'as' => 'banner.xem'
  ]);
  Route::get('/banner/xoa/{id}',[
      'uses' => '\App\Http\Controllers\backend\BannerController@getXoa',
      'as' => 'banner.xoa'
  ]);

  Route::get('/category',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@index',
        'as'=> 'backend.category',
    ]);

  Route::get('/category/add',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@getAdd',
        'as'=> 'category.add',
    ]);

  Route::post('/category/add',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@postAdd',
        'as'=> 'category.add',
    ]);

  Route::get('/category/xem/{id}',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@getXem',
        'as'=> 'category.xem',
    ]);

  Route::get('/category/xoa/{id}',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@getXoa',
        'as'=> 'category.xoa',
    ]); 
   
  Route::get('/category/sua/{id}',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@getSua',
        'as'=> 'category.sua',
    ]); 

  Route::post('/category/sua/{id}','\App\Http\Controllers\backend\CategoryController@postSua'); 
  
  Route::get('/category/tim-kiem',[
        'uses' => '\App\Http\Controllers\backend\CategoryController@timkiem',
        'as'=> 'category.timkiem',
    ]); 

  //danh sách khách hàng
   
   
  Route::get('/customer',[
    'uses' => '\App\Http\Controllers\backend\CustomerController@index',
    'as' => 'customer.index'
    ]);

  Route::get('/customer/xem/{id}',[
    'uses' => '\App\Http\Controllers\backend\CustomerController@getXem',
    'as' => 'customer.xem'
    ]);

  Route::get('/customer/sua/{id}',[
    'uses' => '\App\Http\Controllers\backend\CustomerController@getSua',
    'as' => 'customer.sua'
    ]);

  Route::post('/customer/sua/{id}',[
    'uses' => '\App\Http\Controllers\backend\CustomerController@postSua',
    'as' => 'customer.sua'
    ]);

  Route::get('/customer/xoa/{id}',[
    'uses' => '\App\Http\Controllers\backend\CustomerController@getXoa',
    'as' => 'customer.xoa'
    ]);

  Route::get('/customer/timkiem',[
    'uses' => '\App\Http\Controllers\backend\CustomerController@timkiem',
    'as' => 'customer.search'
    ]);
   Route::get('/customer/add',[
        'uses' => '\App\Http\Controllers\backend\CustomerController@getAdd',
        'as'=> 'customer.add', 
   ]);    
   
  Route::post('/customer/add',[
        'uses' => '\App\Http\Controllers\backend\CustomerController@postAdd',
        'as'=> 'customer.add'
    ]);    
  });

Route::post('/backend/login',[
'uses' => '\App\Http\Controllers\backend\MainController@postLogin',
'as'=> 'backend.login',
]);

Route::get('/backend/login',[
'uses' => '\App\Http\Controllers\backend\MainController@login',
'as'=> 'backend.login', 
]);


// Product: Sản phẩm

Route::group(['prefix' => 'backend', 'middleware' =>'adminLogin'],function(){
  Route::get('/product',[
   'uses' => '\App\Http\Controllers\backend\ProductController@index',
   'as' => 'product.index',
   ]); 

  Route::get('/product/add',[
    'uses' => '\App\Http\Controllers\backend\ProductController@add',
    'as' => 'product.add',
  ]);

  Route::get('/product/xem/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductController@getXem',
      'as' => 'product.xem',
  ]);

  Route::get('/product/sua/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductController@getSua',
      'as' => 'product.sua',
  ]);

  Route::post('/product/sua/{id}',[
    'uses'=>'\App\Http\Controllers\backend\ProductController@postSua',
    'as' =>  'product.sua'    
    ]);

  Route::get('/product/xoa/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductController@getXoa',
      'as' => 'product.xoa',
  ]);

  Route::get('/product/tim-kiem',[
  'uses' => '\App\Http\Controllers\backend\ProductController@timkiem',
  'as' => 'product.timkiem'
  ]);
});
  Route::post('/backend/product/add',[
  'uses' => '\App\Http\Controllers\backend\ProductController@postAdd',
  'as'=> 'product.add', 
  ]);



//ProductType: Loại sản phẩm

  Route::group(['prefix' => 'backend', 'middleware' => 'adminLogin'],function(){
    Route::get('/ProductType',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@index',
      'as' => 'ProductType.index'
      ]);

    Route::get('/ProductType/view/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@getXem',
      'as' => 'ProductType.view'
      ]);

    Route::get('/ProductType/edit/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@getEdit',
      'as' => 'ProductType.edit'
      ]);

    Route::post('/ProductType/edit/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@postEdit',
      'as' => 'ProductType.edit'
      ]);

    Route::get('/ProductType/delete/{id}',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@getDelete',
      'as' => 'ProductType.delete'
      ]);

    Route::get('/ProductType/add',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@getAdd',
      'as' => 'ProductType.add'
      ]);

    Route::post('/ProductType/add',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@postAdd',
      'as' => 'ProductType.add'
      ]);

    Route::get('/ProductType/tim-kiem',[
      'uses' => '\App\Http\Controllers\backend\ProductTypeController@timkiem',
      'as' => 'ProductType.search'
      ]);
  });




//Đơn hàng

  Route::group(['prefix' => 'backend', 'middleware' => 'adminLogin'],function(){
    Route::get('/Exhibition',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@index',
      'as' => 'Exhibition.index'
      ]);
    Route::get('/Exhibition/tim-kiem',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@timkiem',
      'as' => 'Exhibition.timkiem'
      ]);
    Route::get('/Exhibition/duyet/{id}',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@duyet',
      'as' => 'Exhibition.duyet'
      ]);
    Route::get('/Exhibition/view/{id}',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@getXem',
      'as' => 'Exhibition.view'
      ]);
    Route::get('/Exhibition/xoa/{id}',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@getXoa',
      'as' => 'Exhibition.xoa'
      ]);
    Route::get('/Exhibition/sua/{id}',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@getSua',
      'as' => 'Exhibition.sua'
      ]);
    Route::post('/Exhibition/sua/{id}',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@postSua',
      'as' => 'Exhibition.sua'
      ]);

    Route::get('/Exhibition/chi-tiet-don-hang',[
      'uses' => '\App\Http\Controllers\backend\ExhibitionController@chitietdonhang',
      'as' => 'Exhibition.chitietdonhang'
      ]);

    //file excel
    //Đơn hàng
    Route::get('/Exhibition/books', [
      'uses' => '\App\Http\Controllers\backend\BooksController@export',
      'as' => 'books.export'
      ]);
    
    //Chi tiết đơn hàng

    Route::get('/Exhibition/books/export', [
      'uses' => '\App\Http\Controllers\backend\BooksController@chitiethoadon',
      'as' => 'books.xuat'
      ]);

    Route::get('/Exhibition/search',[
      'uses' => '\App\Http\Controllers\backend\BooksController@search',
      'as' => 'Exhibition.searchchitietdonhang'
      ]);
  });





//Fontend

 Route::group(['prefix' => 'fontend'],function(){
  Route::get('/',[
  'uses' => '\App\Http\Controllers\fontend\MainController@index',
  'as' => 'trangchu'
  ]); 

  Route::get('gioithieu',[
  'uses' => '\App\Http\Controllers\fontend\MainController@gioithieu',
  'as' => 'gioithieu'
  ]); 

  Route::get('chi-tiet-san-pham/{id}',[
  'uses' => '\App\Http\Controllers\fontend\MainController@chitietsanpham',
  'as' => 'chitietsanpham'
  ]);

  Route::get('dang-ky',[
  'uses' => '\App\Http\Controllers\fontend\MainController@dangky',
  'as' => 'dangky'
  ]);

  Route::post('dang-ky',[
  'uses' => '\App\Http\Controllers\fontend\MainController@postdangky',
  'as' => 'dangky'
  ]);

  Route::get('dang-nhap', function() {
      return view('fontend.main.dangnhap');
  });

  Route::post('dang-nhap', ['as' => 'dangnhap','uses' => 'fontend\MainController@postdangnhap']);

  Route::get('dang-xuat',[
  'uses' => '\App\Http\Controllers\fontend\MainController@dangxuat',
  'as' => 'dangxuat'
  ]);

  Route::get('tim-kiem',[
  'uses' => '\App\Http\Controllers\fontend\MainController@timkiem',
  'as' => 'timkiem'
  ]);

  Route::get('add-to-cart/{id}',[
  'uses' => '\App\Http\Controllers\fontend\MainController@AddToCart',
  'as' => 'themgiohang'
  ]);

  Route::get('update-cart',[
  'uses' => '\App\Http\Controllers\fontend\MainController@UpdateCart',
  'as' => 'updateCart'
  ]);

  Route::get('del-cart/{id}',[
  'uses' => '\App\Http\Controllers\fontend\MainController@delItemCart',
  'as' => 'xoagiohang'
  ]);

  Route::get('dat-hang',[
  'uses' => '\App\Http\Controllers\fontend\MainController@dathang',
  'as' => 'dathang',
  'middleware' => 'customer'
  ]);

  Route::post('dat-hang',[
  'uses' => '\App\Http\Controllers\fontend\MainController@postCkeckout',
  'as' => 'dathang',
  ]);
  
  Route::get('gio-hang',[
  'uses' => '\App\Http\Controllers\fontend\MainController@giohang',
  'as' => 'giohang',
  ]);

  Route::get('danh-sach-don-hang',[
    'uses' => '\App\Http\Controllers\fontend\MainController@danhsachdonhang',
    'as' => 'danhsachdonhang'
    ]);

  Route::get('loai-san-pham/{type}',[
  'uses' => '\App\Http\Controllers\fontend\MainController@loaisanpham',
  'as' => 'loaisanpham',
  ]);

  Route::get('login/{provider}',[
  'uses' => '\App\Http\Controllers\fontend\MainController@redirectToProvider',
  'as' => 'provider_login',
  ]);

  Route::get('login/{provider}/callback',[
  'uses' => '\App\Http\Controllers\fontend\MainController@handleProviderCallback',
  'as' => 'provider_login_callback',
  ]);

  Route::get('view-list',[
    'uses' => '\App\Http\Controllers\fontend\MainController@ViewList',
    'as' => 'viewlist'
    ]); 
  //Gửi mail

  Route::get('lienhe',[
    'uses'=>'\App\Http\Controllers\fontend\MainController@getLienHe',
    'as' => 'lienhe',
    ]);

  Route::post('lienhe',[
    'uses'=>'\App\Http\Controllers\fontend\MainController@postLienHe',
    'as' => 'lienhe',
    ]);
 });