<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','billing_name','billing_contact_number','b_house','b_street','b_postal','b_city'];

    public function getBillingInfo()
    {
        return $this->hasMany(Order::class,'billing_id','id');
    }


}
