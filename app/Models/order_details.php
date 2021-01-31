<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;
    protected $fillable = ['order_no','customer_id','product_id','product_quantity','active_status'];

    public function getOrderDetails()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }

}
