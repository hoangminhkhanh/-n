<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'note', 'total_amount', 'status', 'cus_id', 'shipper_id'
    ];

     public function Orders_detail()
    {
      return $this->hasMany('App\orders_detail','orders_id','id');
    }

    public function Customer()
    {
    	return $this->belongsTo('App\Customer','cus_id','id');
    }
}
