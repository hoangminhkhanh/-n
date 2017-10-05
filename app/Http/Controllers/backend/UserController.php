<?php
 namespace App\Http\Controllers\backend;
 use App\Models\User;
 use App\Role;
 use Auth;
 use Hash;
 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

   class UserController extends Controller
   {
   	
   	public function index()
   	{
      $users = User::all();
   		return view('backend.user.index',[
            'users' => $users
         ]);
   	}
      public function add()
      {
         $role = Role::all();
         return view('backend.user.add',compact('role'));
      }
      public function postAdd(Request $request)
   	{
         $this->validate($request,[
                'full_name' => 'required',
                'username'  => 'required',
                'email'     => 'required|unique:users|email|max:100',
                'password'  => 'required|min:6',
                'role_id'   => 'required'
            ]);
        
         User::create([
                'full_name' => $request->input('full_name'),
                'username'  => $request->input('username'),
                'email'     => $request->input('email'),
                'password'  => bcrypt($request->input('password')),
                'role_id'   => $request->input('role_id'),
                'created-at'=> time(),
                'update_at' => time()
            ]);
        
         return redirect()->route('user.index')->with('info','Thêm tài khoản thành công!!!');
   	}
    public function getSua($id)
    {
        $user = User::find($id);
        $role = Role::all();
        return view('backend.user.sua',[
            'user' => $user,
            'role' => $role
        ]);
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request,[
                'full_name' => 'required|unique:users|min:3|max:100',
                'email' => 'required|unique:users',
                'username' => 'required|unique:users',
                // 'password' => 'required|min:3|max:100',
                'role_id' => 'required'
            ],
            [
                'full_name.required' => 'Bạn chưa nhập họ và tên',
                'email.required' =>'Bạn chưa nhập email',
                'username.required' => 'Bạn chưa nhập tên',
                'full_name.unique' => 'Tên đã tồn tại',
                'full_name.min' => 'Tên có độ dài nhỏ nhất là 3 ký tự',
                'full_name.max' => 'Tên độ dài lớn nhất 100 ký tự',
                'password' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu của bạn có độ dài nhỏ nhất là 3',
                'password.max' => 'Mật khẩu của bạn có độ dài lớn nhất là 100',   
                'role' => 'Bạn chưa chọn quyền'
        ]);

        $user = User::find($id);
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->role_id = $request->role_id;
        // if ($user->password == ) {
          
        // }
        $user->save();

        return redirect()->route('user.index')->with('info','Bạn đã sửa thành công');
    }

    public function getXem($id)
    {
        $user = User::find($id);
        return view('backend.user.xem',[
            'user' => $user
        ]);
    }
   	public function getXoa($id)
    {
        $user = User::find($id);
        $user ->delete();
        return redirect('backend/user')->with('info','Bạn đã xóa thành công');
    }

    public function timkiem(Request $request)
     {
       $user = User::where('full_name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                              ->orwhere('username', $request->key) //Tìm kiếm theo username
                              ->get();
        return view('backend.user.search',compact('user')); 
     }

   public function ttcanhan()
     {
      $user = User::first();
      return view('backend.user.ttcanhan',compact('user'));
     }

   public function getdoipass()
     {
        return view('backend.user.doipass');
     }  

   public function postdoipass(Request $request)
     {
        $this->validate($request,[
            'password' => 'required|OldPassword',
            'n_password' => 'required',
            're_password' => 'required|same:n_password',
          ],
          [
            'password.required' => 'Bạn chưa nhập mật khẩu hiện tại',
            'n_password.required' => 'Bạn chưa nhập mật khẩu mới',
            're_password.required' => 'Bạn chưa nhập lại mật khẩu',
            're_password.n_password' => 'Bạn chưa nhập mật khẩu trùng mật khẩu mới'
          ]);

        Auth::user()->update([
           'password' => Hash::make($request->input('n_password'))
          ]);

        return redirect()->route('user.index')->with('info','Bạn đã thay đổi mật khẩu thành công');
     }  
   }  
?>