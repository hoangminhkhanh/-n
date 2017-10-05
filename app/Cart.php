<?php
namespace App;



class Cart
{
	/**
		* Khai báo các thuộc tính
	*/

	// lấy ra thông tin các item trong giỏ hàng
	public $items = array();

	// lấy ra tổng số lượng sản phẩm trong giỏ hàng
	public $totalQty;

	// lấy ra tổng tiền trong giỏ hàngtrong giỏ hàng
	public $totalPrice;

	// Khai bao ham construct 

	public function __construct(){
		$this->items = session('cart');
		$this->totalQty = $this->getTotalQty();
		$this->totalPrice = $this->getTotalPrice();
	}

	// Phuong thuc them vao gio hang
	public function add($product,$qty=1){
		/*
			Xử lý để lưu thông tin sản phẩm vào session
		*/	
		if (isset($this->items[$product['id']])) {
			$this->items[$product['id']]['qty'] += $qty;
		}else{
			$this->items[$product['id']] = $product;
			$this->items[$product['id']]['qty'] = $qty;
		}
		
		session(['cart' => $this->items]);
	}

	// Phuong thuc Xoa mot item trong  gio hang
	public function remove($id){
		if (isset($this->items[$id])) {
			unset($this->items[$id]);
			session(['cart' => $this->items]);
		}

	}

	// Phuong thuc update so luong cua mot item trong gio hang
	public function update($id,$qty){
		if (isset($this->items[$id])) {
			$this->items[$id]['qty'] = $qty;
		}
		session(['cart' => $this->items]);
	}

	// Phuong thuc xoa toan bo gio hang
	public function clear($product){
		
	}

	protected function getTotalQty(){
		$tong = 0;
		if ($this->items) {
			foreach ($this->items as $item) {
				$tong+= $item['qty'];
			}
		}

		return $tong;
	}

	protected function getTotalPrice(){
		$tong = 0;
		if ($this->items) {
			foreach ($this->items as $item) {
				if ($item['sale_price'] > 0) {
					$tong+= $item['qty']*$item['sale_price'];
				}else{
					$tong+= $item['qty']*$item['price'];
				}
			}
		}

		return $tong;
	}
}
