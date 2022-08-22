<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_shipping extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
	public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
