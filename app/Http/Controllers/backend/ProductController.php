<?php
 namespace App\Http\Controllers\backend;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request; 
 use App\Models\Product;
 use App\Models\Category;
 use App\ProductType;

 class ProductController extends Controller
 {
 	
 	public function index()
 	{
 
    $pro = Product::paginate(5); 
    // $pro = Product::simplepaginate(5);
 		// $product = Product::all();

 		return view('backend.product.index',[
 			   // 'products' => $product,
         'pros' => $pro
 			]);
 	}

 	public function add()
 	{
    $category = Category::all();
    $product_type = ProductType::all();
 		return view('backend.product.add',compact('category','product_type'));
 	} 
 	public function postAdd(Request $request)
 	{
        $filename='';
         $this->validate($request,[
                'name'        => 'required',
                'price'       => 'required',
                'sale_price'  => 'required',
                'image'       => 'required',
                'content'     => 'required'
            ]);

         if($request->hasFile('image')) 
        {
            $file = $request->file('image');
            // if($file->getClientOriginalExtension('image') == "JPG")
            // {
                $filename = $file->getClientOriginalName('image');
                $file -> move('public/images',$filename);
                // echo "Upload file thành công: " .$filename;
            // }
            // else{
            //     echo "Không được phép upload file";
            // }
        }
        else
        {
            echo "Chưa có file";
        } 

 	   	
        Product::create([
                'name'       => $request->input('name'),
                'cat_id'     => $request->input('cat_id'),
                'price'      => $request->input('price'),
                'sale_price' => $request->input('sale_price'),
                'id_type'    => $request->input('id_type'),
                'image'      => $filename, 
                'content'    => $request->input('content'),
                'hot'        => $request->input('hot'),
                'status'     => $request->input('status'),
                'updated_at' => time(),
                'created_at'  => time(),
            ]);

         return redirect()->route('product.index')->with('info','Bạn đã thêm sản phẩm thành công');
        
 	}

 	public function getXem($id)
    {
        $product = Product::find($id);
        return view('backend.product.xem',['product'=>$product]);
    }
    public function getSua($id)
    {
       $category = Category::all();
       $product = Product::find($id);
       $product_type = ProductType::all();
       return view('backend.product.sua',['product' => $product,'category'=>$category,  'product_type' => $product_type]);
    }
    public function postSua(Request $request, $id)
    {
       if ($request->hasFile('image')) {
         $this->validate($request,[
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ],
          [
             'image.required' => 'Bạn chưa tải file ảnh'
          ]);
         $file = $request->image;
         $file_name = $file->getClientOriginalName();
         $file->move('public/images',$file_name);
       }else{
        $file_name = $request->old_image;
       }

       $this->validate($request,[
          'name' => 'required',
          'price' => 'required',
          'sale_price' => 'required',
          'content' => 'required',
          'cat_id' => 'required',
          'id_type' => 'required'
        ],
        [
          'name.required' => 'Bạn chưa nhập tên sản phẩm',
          'price.required' => 'Bạn chưa nhập giá tiền cho sản phẩm',
          'sale_price.required' => 'Bạn chưa nhập giá tiền khuyến mại cho sản phẩm',
          'content.required' => 'Bạn chưa nhập nội dung sản phẩm',
          'cat_id.required' => 'Bạn chưa nhập danh mục sản phẩm',
          'id_type.required' => 'Bạn chưa chọn loại sản phẩm'
        ]);

       Product::where('id',$id)->update([
          'name' => $request->input('name'),
          'price' => $request->input('price'),
          'sale_price' => $request->input('sale_price'),
          'image' => $file_name,
          'content' =>$request->input('content'),
          'cat_id' => $request->input('cat_id'),
          'id_type' => $request->input('id_type')
        ]);

       return redirect()->route('product.index')->with('info','Bạn đã chỉnh sửa thành công');
    }
    public function getXoa($id)
    {
       $product = Product::find($id);
       $product->delete();
       return redirect('backend/product')->with('info','Bạn đã xóa thành công');
    }

    public function timkiem(Request $request)
    {
       $product = Product::where('name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                            ->orwhere('price', $request->key) //Tìm kiếm theo giá
                            ->get();
        return view('backend.product.search',compact('product')); 
    }
 }
?>