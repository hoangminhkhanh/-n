<?php
namespace App\Http\Controllers\fontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Customer;
use App\Orders;
use App\Orders_detail;
use App\Banner;
use App\Cart;
use App\ProductType;
use Session;
use Hash;
use Auth;
use Socialite;
use App\SocialiteProvider;
use Mail;
use DB;
use App\Mail\OrderMail;
use Illuminate\Support\ServiceProvider;

class MainController extends Controller
{
    public function index()
    {
        $slide = Banner::all();
    	$new_product = Product::where('cat_id',1)->paginate(8);
        $sanpham_khuyenmai = Product::where('sale_price','<>',0)->paginate(4);
    	return view('fontend.main.index',compact('new_product','sanpham_khuyenmai','slide'));
    }

    public function chitietsanpham(Request $request, $id)
    {
        $sanpham = Product::where('id',$request->id)->first();
        $sp_tuongtu = Product::where('cat_id',$sanpham->cat_id)->simplePaginate(3);
        $sp_lienquan = Product::paginate(4);
        return view('fontend.main.chitietsanpham',compact('sanpham','sp_tuongtu','sp_lienquan'));
    }

    public function ViewList()
    {
        $slide = Banner::all(); 
        $new_product = Product::where('cat_id',1)->paginate(8);
        $sanpham_khuyenmai = Product::where('sale_price','<>',0)->paginate(4);
        return view('fontend.main.index',compact('new_product','sanpham_khuyenmai','slide'));
        return view('fontend.main.viewlist',compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function gioithieu()
    {
    	return view('fontend.main.gioithieu');
    }

    public function dangky()
    {
        return view('fontend.main.dangky');
    }

    public function postdangky(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:customer,email',
            'password' => 'required|min:6|max:20',
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'note' => 'required'
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng email',
            'email.unique' => 'Email đã có người dùng',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Độ dài ký tự không nhỏ hơn 6 ký tự',
            'password.max' => 'Độ dài ký tự không lớn hơn 20 ký tự',
            'name.required' => 'Vui lòng nhập tên',
            'gender.required' => 'Bạn chưa chọn giới tính',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'address.required' => 'Bạn chưa nhập địa chỉ'
        ]);

       $customer = new Customer;
       $customer->name = $request->name;
       $customer->email = $request->email;
       $customer->gender = $request->gender;
       $customer->password = Hash::make($request->password);
       $customer->phone = $request->phone;
       $customer->address = $request->address;
       $customer->note = $request->note;
       $customer->save();
       
       return redirect()->route('trangchu')->with('thongbao','Đã tạo tài khoản thành công');
    }

    public function dangnhap()
    {
        return view('fontend.main.dangnhap');
    }

    public function postdangnhap(Request $request)
    {
    
        $this->validate($request,[
               'email' => 'required|email',
               'password' => 'required|min:6|max:20'
            ],
            [
               'email.required' => 'Vui lòng nhập email',
               'email.email' => 'Không đúng định dạng email',
               'password.required' => 'Vui lòng nhập password',
               'password.min' => 'Mật khẩu ít nhất 6 ký tự',
               'password.max' => 'Mật khẩu không quá 20 ký tự'
            ]);

       $customer = Auth::guard('customer');
        if (!$customer->attempt($request->only(['email','password']))) 
        {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Tên đăng nhập nhập hoặc mật khẩu không đúng']);
        }

        return redirect()->route('trangchu')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);

    }

    public function dangxuat(Cart $cart)
    {
        Auth::guard('customer')->logout();
        //xóa giỏ hàng
        Session::forget('cart');
        
        return redirect()->route('trangchu');
    }

    public function timkiem(Request $request)
    {
        $product = Product::where('name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                            ->orwhere('price', $request->key) //Tìm kiếm theo giá
                            ->get();
        return view('fontend.main.search',compact('product'));      
    }

    
    public function AddToCart($id, Cart $cart)
    {
        $product_cart=Product::find($id)->toArray();
        $cart->add($product_cart);
        return redirect()->back();
    }

    public function delItemCart($id, Cart $cart)
    {
        $cart->remove($id);
        return redirect()->back()->with('info','Bạn đã xóa một sản phẩm trong giỏ hàng <a href="'.route('themgiohang',['id'=>$id]).'" class="label label-success">Khôi phục ngay</a>');
    }

    public function UpdateCart(Request $request, Cart $cart)
    {
        $cart->update($request->id,$request->qty);
    }

    public function dathang(Cart $cart)
    {
        return view('fontend.main.dathang',[
            'cart' => $cart
        ]); 
    }

    public function giohang(Cart $cart){
        return view('fontend.main.giohang',[
            'cart' => $cart
        ]); 
    }

    public function postCkeckout(Request $request, Cart $cart)
    {
        $customer = Auth::guard('customer');
        $this->validate($request,[
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'note' => 'required'
            ]);
        //insert dữ liệu vào bảng order
        $order = new Orders;
            $order->cus_id = $customer->user()->id;
            $order->email = $request->email;
            $order->name = $request->name;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->note = $request->note;
            $order->total_amount = $cart->totalPrice;
            $order->payment = $request->payment_method;
            $order->shipper = $request->shipper;
            $order->save();
        if ($order->save()) {
                foreach($cart->items as $key => $value)
                {
                    $order_detail = new Orders_detail;
                    $order_detail->orders_id = $order->id;
                    $order_detail->product_id = $key;
                    $order_detail->price = ($value['price']/$value['qty']);
                    $order_detail->quantity = $value['qty'];
                    $order_detail->payment = $request->payment_method;
                    $order_detail->shipper = $request->shipper;
                    $order_detail->save();
                }    
            }
            else{
                echo 'Lỗi';
            } 

        $listProduct= DB::table('orders_detail')
                ->join('product','product.id','orders_detail.product_id')
                ->select('orders_detail.*','product.name','product.image')
                ->where('orders_detail.orders_id','=',$order->id)
                ->get();
        //Gửi mail
        Mail::send(new OrderMail($listProduct,$request->email,$cart->totalPrice,
            $request->name,$request->phone));

        //xóa giỏ hàng
        Session::forget('cart');

        return redirect()->back()->with('info','Đặt hàng thành công');       
    }

    public function danhsachdonhang()
    {
        $lichSuMua = DB::table('orders_detail')
                    ->join('orders','orders_detail.orders_id','=','orders.id')
                    ->join('product','orders_detail.product_id','=','product.id')
                    ->where('orders.cus_id','=',Auth::guard('customer')->user()->id)
                    ->select('orders_detail.*','orders.total_amount','product.name','product.sale_price','product.price')->get();
        return view('fontend.main.danhsachdonhang',compact('lichSuMua'));
    }

    public function loaisanpham($type)
    {
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khacs    = Product::where('id_type','<>',$type)->simplePaginate(3);
        $loai_sp     = ProductType::where('id', $type)->first();
        $loai        = ProductType::all();
        return view('fontend.main.loai_sanpham',compact('loai','loai_sp','sp_khacs','sp_theoloai'));
    }

    public function getLienHe()
    {
       return view('fontend.main.lienhe');
    }

    public function postLienHe(Request $request)
    {
        
        $data = ['name'=>$request->name, 'email' => $request->email, 'content' => $request->content];
        Mail::send('fontend.main.giaodienmail',$data, function($message){
            $message->to('anhkhanh220596@gmail.com', 'Khánh Hoàng')->subject('Đây là mail nhận thông tin miễn phí !');
        });
        Session::flash('flash_message', 'Send message successfully!');

        return view('fontend.main.lienhe');
    }
}
