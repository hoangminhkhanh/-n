<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = 
    ['name','phone','address','note','total_amount','created-at'];
}
