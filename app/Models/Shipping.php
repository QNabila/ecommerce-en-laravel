<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','shipping_name','shipping_contact_number','s_house','s_street','s_postal','s_city'];

    public function getShippingInfo()
    {
        return $this->hasMany(Order::class,'shipping_id','id');
    }

}
