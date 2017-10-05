<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Book;
use App\Cart;
use App\Orders;
class BooksController extends Controller
{
	public function export()
	{
	    $export = Orders::select('id','email','name','phone','address','note','total_amount')->get();
	    Excel::create('Bang thong ke don hang',function($excel) use($export){
	         $excel->sheet('Bảng thống kê đơn hàng',function($sheet) use($export){   
	            $sheet->fromArray($export);   
	      });
		})->export('xlsx');
    }  

    public function chitiethoadon()
    {
    $orders = Orders::all();
 
    $fileName = 'bookList'.time();
 
    Excel::create($fileName, function($excel) use ($orders){ // su dung use($books) moi co the truyen gia tri bien $books tu ben ngoai vao ham
        $excel->sheet('Chi tiết hóa đơn', function ($sheet) use ($orders) {
            $sheet->mergeCells('A1:C1');
 
            $sheet->cell('A1', function ($cell) {
                $cell->setValue('CÔNG TY CỔ PHẦN TNHH NHK');
                $cell->setFontWeight('bold');
            });
             $sheet->mergeCells('E2:F2'); 
             $sheet->cell('E2', function ($cell) {
                $cell->setValue('CHI TIẾT HÓA ĐƠN');
                $cell->setFontWeight('bold');
            });
            $result = $this->getDataToLaravelExcel($orders); //Goi den ham getDataToLaravelExcel de tạo mang du lieu can in ra Excel
 
            $sheet->fromArray($result, null, 'A3', false, true);
        });
    })->store('xlsx', public_path('/excel/import'));
 
    $path = 'excel/import/' . $fileName . '.xlsx';
 
    return redirect()->route('Exhibition.chitietdonhang')->with('thongbao','Bạn đã xuất chi tiết hóa đơn thành công');
	}

	private function getDataToLaravelExcel($orders)
		{

		    $result = [];
		 
		    foreach ($orders as $key => $value) {
		        $result[] = [
		            'STT' => $key + 1,
		            'Tên khách hàng' => isset($value->name) ? $value->name : '',
		            'Email' => isset($value->email) ? $value->email : '',
		            'Số điện thoại' => isset($value->phone) ? $value->phone : '',
		            'Địa chỉ' => isset($value->address) ?$value->address : '',
		            'Ghi chú' => isset($value->note) ? $value->note : '',
		            'Tổng tiền' => isset($value->total_amount) ? number_format($value->total_amount) : '',
		            'Phương thức vận chuyển' => isset($value->shipper) ? $value->shipper : '',
		            'Phương thức thanh toán' => isset($value->payment) ? $value->payment : '',
		            'Ngày đặt' => isset($value->created_at) ? $value->created_at : '',
		            // 'Tổng' => (isset($value->quantity) && isset($value->price)) ? number_format($value->quantity * $value->price) : 0
		        ];
		    }
		    return $result;
		}  


		public function search(Request $request)
		{
			$orders = Orders::where('name','like','%'. $request->key. '%') //Tìm kiếm theo tên
                              ->orwhere('phone', $request->key) //Tìm kiếm theo phone
                              ->get();
            return view('backend.exhibition.searchchitietdonhang',compact('orders')); 
		}  
	 
}