<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'name','cat_id','id_type', 'price', 'sale_price', 'image', 'content', 'hot', 'status',
     ];

    public function Orders_detail()
    {
    	return $this->hasMany('App\Models\Orders_detail','product_id','id');
    }
}
