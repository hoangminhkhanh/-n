<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    //
    use Notifiable;
    protected $table = 'customer';
    protected $fillable = [
        'name', 'gender','password', 'email', 'phone', 'address', 'note'
    ];

    public function Orders()
    {
    	return $this->hasMany('App\Models\Orders','cus_id','id');
    }

    protected $hidden = [
        'password',
    ];
}
