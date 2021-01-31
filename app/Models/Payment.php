<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['order_no','customer_id','transaction_id','payment_confirmation'];

    public function getPaymentInfo()
    {
       return $this->hasMany(Order::class,'order_no','order_no'); 
    }
}
