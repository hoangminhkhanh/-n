<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $table = 'contract';
    protected $fillable = [
        'fullname', 'email', 'phone', 'address', 'title', 'content'
    ];
}
