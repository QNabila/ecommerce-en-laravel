<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_image', 'product_description','product_regular_price','product_selling_price','product_status','product_category','product_quantity'];

   function getProduct()
   {
       return $this->hasMany(Cart::class,'product_id','id');
   }
   
   public function getOrderDetails()
   {
    return $this->hasMany(Order::class,'product_id','id');
   }

}

