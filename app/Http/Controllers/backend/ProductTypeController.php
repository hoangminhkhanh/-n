<?php
 namespace App\Http\Controllers\backend;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request; 
 use App\Models\Product;
 use App\ProductType;


 class ProductTypeController extends Controller
 {
 	public function index()
 	{ 
 		$productType = ProductType::all();
 		return view('backend.productType.index',compact('productType'));
 	}

 	public function getXem($id)
 	{
 		$protype = ProductType::find($id);
        return view('backend.productType.view',compact('protype'));
 	}

 	public function getEdit($id)
 	{
 		$pType = ProductType::find($id);
 		return view('backend.productType.edit',compact('pType'));
 	}

 	public function postEdit(Request $request, $id)
 	{
       $this->validate($request,[
       	  'name' => 'required',
       	  'descript' => 'required'
       	],
       	[
       	  'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
       	  'descript.required' => 'Bạn chưa nhập mô tả loại sản phẩm'
       	]);

       $productType = ProductType::find($id);
       $productType->name = $request->name;
       $productType->descript = $request->descript;
       $productType->save();
       return redirect()->route('ProductType.index')->with('thongbao','Bạn đã sửa thành công');
 	}

 	public function getDelete($id)
 	{
 		$productType = ProductType::find($id);
 		$productType->delete();
 		return redirect()->route('ProductType.index')->with('thongbao','Bạn đã xóa thành công');
 	}

 	public function getAdd()
 	{
 		return view('backend.productType.add');
 	}

 	public function postAdd(Request $request)
 	{
       $this->validate($request,[
       	  'name' => 'required',
       	  'descript' => 'required'
       	],
       	[
       	  'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
       	  'descript.required' => 'Bạn chưa nhập mô tả loại sản phẩm'
       	]);

       ProductType::create([
       	  'name' => $request->input('name'),
       	  'descript' => $request->input('descript'),
       	  'updated_at' => time(),
              'created_at'  => time(),	
       	]);

       return redirect()->route('ProductType.index')->with('thongbao','Bạn đã thêm loại sản phẩm thành công');
 	}

       public function timkiem(Request $request)
       {

       $proType = ProductType::where('name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                            ->get();
        return view('backend.productType.search',compact('proType'));
       }
 }
 ?>