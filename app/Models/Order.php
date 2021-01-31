<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;
    protected $fillable=['order_no','customer_id','billing_id','shipping_id','status'];
    
    function getUserInfo()
    {
        return $this->belongsTo(User::class,'customer_id','id');
    }
    
    function getBillingInfo()
    {
        return $this->belongsTo(Bill::class,'billing_id','id');
    }

    function getShippingInfo()
    {
        return $this->belongsTo(Shipping::class,'shipping_id','id');
    }

    function getPaymentInfo()
    {
        return $this->belongsTo(Payment::class,'order_no','order_no');
    }

    function getDeliveryInfo()
    {
        return $this->belongsTo(delivery::class,'order_no','order_no');
    }

}
