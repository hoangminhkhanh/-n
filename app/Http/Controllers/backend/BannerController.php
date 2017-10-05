<?php

 namespace App\Http\Controllers\backend;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use App\Banner;

class BannerController extends Controller
{
    public function index()
    {
    	$banner = Banner::all();
    	return view('backend.banner.index',compact('banner'));
    }
     
    public function getAdd()
    {
        return view('backend.banner.add');
    }

    public function postAdd(Request $request)
    {
    	$filename = '';
        $this->validate($request,[
               'slug' => 'required',
               'content' => 'required',
               'image' => 'required'
        	],
        	[
               'slug.required' => 'Vui lòng nhập slug',
               'content.required' => 'Vui lòng nhập nội dung',
               'image.required' => 'Vui lòng chọn file ảnh'
        	]);
        if ($request->hasFile('image')) {
        	$file = $request->file('image');
        	$filename = $file->getClientOriginalName('image');
        	$file->move('public/uploads/slide', $filename);
        }
        else{
        	echo 'Chưa có file';
        }

        Banner::create([
        	'slug' => $request->input('slug'),
        	'content' => $request->input('content'),
        	'image' => $filename,
        	'updated_at' => time(),
            'created_at'  => time(),
        	]);

        return redirect()->route('banner.index')->with('info','Bạn đã thêm thành công');
    }

    public function getXem($id)
    {

    }

    public function getXoa($id)
    {
        $banner =  Banner::find($id);
        $banner->delete();
        return redirect('banckend/banner')->with('info','Bạn đã xóa thành công');
    }

    public function getSua($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.sua',compact('banner'));
    }

    public function postSua(Request $request,$id)
    {
        $this->validate($request,[
              'slug' => 'required',
            ],
            [
              'slug.required' => 'Bạn chưa nhập tên slide'
            ]);
         $banner = Banner::find($id);
         $banner->slug = $request->slug;

         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $name = $file->getClientOriginalName();
             $hinhanh = str_random(4) ."_". $name;

             //Kiểm tra xem có trùng tên hay không

             while(file_exists('public/uploads/slide' . $hinhanh)){
                $hinhanh = str_random(4) ."_". $name;
             }
             $file->move('public/uploads/slide', $hinhanh);
             unlink('public/uploads/slide' . $banner->image);
             $banner->hinhanh = $hinhanh;
         }
         else{
            $banne->image = '';
         }

         $banner->save();
         return redirect()->route('banner.index')->with('info','Bạn đã sửa thành công');
    }

}
