<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $listProduct;
    public $total;
    public $name;
    public $phone;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    //Dùng biến bên ngoài truyền vô hàm khởi tạo   
    public function __construct($listProduct,$email,$total,$name,$phone)
    {
        $this->listProduct = $listProduct;
        $this->email = $email;
        $this->total = $total;
        $this->name = $name;
        $this->phone = $phone;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('fontend.main.ordermail',compact('listProduct','email','total','name','phone'))->to($this->email)->from('luongitbkap@gmail.com')->subject('Đơn đặt hàng của bạn');
    }
}
