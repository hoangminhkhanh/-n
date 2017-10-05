<?php
namespace App\Http\Controllers\backend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('backend.category.index',[
            'datas' => $data
        ]);
    }
    public function getAdd()
    {
        return view('backend.category.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required'
        ],
        [
            'name.required' => 'Bạn chưa nhập danh mục sản phẩm',
            'slug.required' => 'Bạn chưa nhập đường dẫn'
        ]);

        Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'updated_at' => time(),
            'created_at'  => time(),
            ]);
        return redirect()->route('backend.category')->with('info','Bạn đã thêm danh mục thành công');
    }

    public function getXem($id){
          $category = Category::find($id);
          return view('backend.category.xem',compact('category'));
    }

    public function getXoa($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('backend/category')->with('info','Bạn đã xóa thành công');
    }
    public function getSua($id)
    {
        $category = Category::find($id);
        return view('backend.category.sua',compact('category'));
    }
    public function postSua($id,Request $request)
    {
            $this->validate($request,[
                'name' => 'required',
                'slug' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên danh mục',
                'slug.required' => 'Bạn chưa nhập đường dẫn'
            ]);

            $category = Category::find($id);
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->save();;
            return redirect()->route('backend.category')->with('info','Bạn đã sửa thành công');
    }

    public function timkiem(Request $request)
     {
       $category = Category::where('name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                              ->orwhere('slug', $request->key) //Tìm kiếm theo slug
                              ->get();
        return view('backend.category.search',compact('category')); 
     }
}