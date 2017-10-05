<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_detail extends Model
{
    //
    protected $table = 'orders_detail';
    protected $fillable = [
        'orders_id', 'product_id', 'price', 'quantity', 'payment_id', 'shipper_id'
    ];

    public function Product()
    {
    	return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function Orders()
    {
    	return $this->belongsTo('App\Models\Orders','orders_id','id');
    }
}
