<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models;
use Hash;

class CustomerController extends Controller
{
    public function index()
    {

    	$customer = Customer::all();
    	return view('backend.customer.index',compact('customer'));
    }

    public function getXem($id)
    {
       $cus = Customer::find($id);
       return view('backend.customer.xem',compact('cus'));
    }

    public function getSua($id)
    {
       $cus = Customer::find($id);
       return view('backend.customer.sua',compact('cus')); 
    }

    public function postSua(Request $request, $id)
    {
       $this->validate($request,[
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
       	],
       	[
       	    'name.reuquired' => 'Bạn chưa nhập tên khách hàng',
       	    'gender.required' => 'Bạn chưa chọn giới tính',
       	    'email.required' => 'Bạn chưa nhập email',
       	    'phone.required' => 'Bạn chưa nhập số điện thoại',
       	    'address.required' => 'Bạn chưa nhập địa chỉ'
       	]);

       Customer::where('id',$id)->update([
       	    'name' => $request->input('name'),
       	    'gender' => $request->input('gender'),
       	    'email' => $request->input('email'),
       	    'phone' => $request->input('phone'),
       	    'address' => $request->input('address')
       	]);

       return redirect()->route('customer.index')->with('info','Bạn đã sửa thành công');
    }

    public function getXoa($id)
    {
      $cus = Customer::find($id);
      $cus->delete();
      return redirect('backend/customer')->with('info','Bạn đã xóa thành công');
    }

    public function timkiem(Request $request)
    {
    	$customer = Customer::where('name','like','%'. $request->key .'%') //Tìm kiếm theo tên
    	                      ->orwhere('phone',$request->key) //tìm kiếm theo số điện thoại
    	                      ->get();
    	return view('backend.customer.search',compact('customer'));                      
    }

    public function getAdd()
    {
      return view('backend.customer.add');
    }

    public function postAdd(Request $request)
    {
      $this->validate($request,[
         'name' => 'required',
         'gender' => 'required',
         'email' => 'required',
         'password' => 'required',
         'phone' => 'required',
         'address' => 'required',
         'note' => 'required'
      ],
      [
         'name.required' => 'Bạn chưa nhập tên',
         'gender.required' => 'Bạn chưa chọn giới tính',
         'email.required' => 'Bạn chưa nhập đúng định dạng email',
         'password.required' => 'Bạn chưa nhập mật khẩu',
         'phone.required' => 'Bạn chưa nhập số điện thoại',
         'address.required' => 'Bạn chưa nhập địa chỉ',
         'note.required' => 'Bạn chưa nhập ghi chú'
      ]); 

      Customer::create([
         'name' => $request->input('name'),
         'gender' => $request->input('gender'),
         'email' => $request->input('email'),
         'password' => Hash::make($request->input('password')),
         'phone' => $request->input('phone'),
         'address' => $request->input('address'),
         'note' => $request->input('note'),
         'created_at' => time(),
         'updated_at' => time()
        ]);
      return redirect()->route('customer.index')->with('info','Bạn đã thêm tài khoản thành công');
    }
}
