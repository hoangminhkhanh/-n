<?php

 namespace App\Http\Controllers\backend;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Auth;
 use App\Orders;
 use App\Models\User;
 use App\Models\Product;
 use App\Models\Category;
 use App\Banner;
 use App\Customer;
 use App\Cart;
 use App\ProductType;

   class MainController extends Controller
   {
   	public function index()
   	{
         $order = Orders::all()->sum('total_amount');  
         $user = User::all(); 
         $product = Product::paginate(5);
         $products = Product::all();
         $orders = Orders::all();
   		return view('backend.main.index',compact('order','user','product','products','orders'));
   	}
   	public function login()
      {
         return view('backend.main.login');
      }
      public function postLogin(Request $request)
   	{
   		$this->validate($request,[
                'username'  => 'required',
                'password'  => 'required'
            ]);
         if (!Auth::attempt($request->only(['username','password']),$request->has('remember'))) {
            return redirect()->back()->with('info','Tên đăng nhập hoặc mật khẩu không đúng');
         }
         return redirect()->route('backend.index');
   	}
      public function logout()
      {
         Auth::logout();
         return redirect()->route('backend.login');
      }
   }  
?>