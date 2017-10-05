<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Orders;
use App\Orders_detail;
use App\Customer;


class ExhibitionController extends Controller
{
    public function index()
    { 
    	$orders = Orders::all();
    	return view('backend.exhibition.index',compact('orders'));
    }

    public function timkiem(Request $request)
    {
    	$orders = Orders::where('name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                              ->orwhere('created_at','like','%'. $request->key. '%') //Tìm kiếm theo ngày
                              ->get();
        return view('backend.exhibition.timkiem',compact('orders')); 
    }

    public function duyet($id)
    { 
       $orders = Orders::find($id);
       if ($orders->status == 1) {
          $orders->status =0;     }
       else{ 
          $orders->status = 1;
      }
        $orders->save();

        return view('backend.exhibition.view',compact('orders'));  
    }

    public function getXem($id)
    {
        $orders = Orders::find($id);
        return view('backend.exhibition.view',compact('orders'));
    }

    public function getXoa($id)
    {
        $orders = Orders::find($id);
        $orders->delete();
        return redirect()->route('Exhibition.index')->with('info','Bạn đã xóa thành công');
        
    }

    public function getSua($id)
    {
        $order = Orders::find($id);
        return view('backend.exhibition.sua',compact('order')); 
    }

    public function postSua(Request $request,$id)
    {
       $this->validate($request,[
           'name' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'note' => 'required'
        ],
        [
           'name.required' => 'Bạn chưa nhập tên',
           'phone.required' => 'Bạn chưa nhập số điện thoại',
           'address.required' => 'Bạn chưa nhập địa chỉ',
           'note.required' => 'Bạn chưa nhập ghi chú'   
        ]);

       $order = Orders::find($id);
       $order->name = $request->name;
       $order->phone = $request->phone;
       $order->address = $request->address;
       $order->note = $request->note;
       $order->save();
     
       return redirect()->route('Exhibition.index')->with('info','Bạn đã sửa thành công');
    }

    public function chitietdonhang()
    {
      $orders = Orders::all();
      return view('backend.exhibition.chitietdonhang',compact('orders'));
    }
}
