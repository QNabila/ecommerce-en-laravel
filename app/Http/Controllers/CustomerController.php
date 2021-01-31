<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Shipping;
use Session;
use App\Models\product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\delivery;
use App\Models\Order;
use App\Models\order_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //For table join





class CustomerController extends Controller
{
    //Product Order
   
    public function checkout(Request $req)
    {
        $customer_id=Auth::user()->id;
        //taking user Id

        if ($Address=Bill::where('customer_id', $customer_id)->first()) {
            $shipping_name=$req->s_name;
            $shipping_contact_number=$req->s_contact_number;
            $s_house=$req->s_house;
            $s_street=$req->s_street;
            $s_postal=$req->s_postal;
            $s_city=$req->s_city;
        
            Shipping::where('customer_id', $customer_id)->update([
            'customer_id'=>$customer_id,
            'shipping_name'=>$shipping_name,
            'shipping_contact_number'=>$shipping_contact_number,
            's_house'=>$s_house,
            's_street'=>$s_street,
            's_postal'=>$s_postal,
            's_city'=>$s_city,
             ]);
  


            $billing_name=$req->b_name;
            $billing_contact_number=$req->b_contact_number;
            $b_house=$req->b_house;
            $b_street=$req->b_street;
            $b_postal=$req->b_postal;
            $b_city=$req->b_city;
             
            Bill::where('customer_id', $customer_id)->update([
            'customer_id'=>$customer_id,
            'billing_name'=>$billing_name,
            'billing_contact_number'=>$billing_contact_number,
            'b_house'=>$b_house,
            'b_street'=>$b_street,
            'b_postal'=>$b_postal,
            'b_city'=>$b_city,
             ]);
             
            
            return view('payment');
        } else {
            $billing_name=$req->b_name;
            $billing_contact_number=$req->b_contact_number;
            $b_house=$req->b_house;
            $b_street=$req->b_street;
            $b_postal=$req->b_postal;
            $b_city=$req->b_city;

            $shipping_name=$req->s_name;
            $shipping_contact_number=$req->s_contact_number;
            $s_house=$req->s_house;
            $s_street=$req->s_street;
            $s_postal=$req->s_postal;
            $s_city=$req->s_city;

            Bill::create([
       'customer_id'=>$customer_id,
       'billing_name'=>$billing_name,
       'billing_contact_number'=>$billing_contact_number,
       'b_house'=>$b_house,
       'b_street'=>$b_street,
       'b_postal'=>$b_postal,
       'b_city'=>$b_city,
        ]);

            Shipping::create([
            'customer_id'=>$customer_id,
          'shipping_name'=>$shipping_name,
          'shipping_contact_number'=>$shipping_contact_number,
          's_house'=>$s_house,
          's_street'=>$s_street,
          's_postal'=>$s_postal,
          's_city'=>$s_city,
           ]);

            return view('payment');
        }
    }

    //For Payment
    
    public function payment(Request $request)
    {
        
        $transaction_id=$request->transcantion_id;
        $order_no= rand(1000,9999);
        $customer_id=auth()->user()->id;
        $billing_id=Bill::where('customer_id',$customer_id)->first()->id;
        $shipping_id=Shipping::where('customer_id',$customer_id)->first()->id;


        $item= cart::where('user_id',$customer_id)->where('active_status','0')->get();
        // file_put_contents('item.txt',$item);
        $item= cart::where('user_id',$customer_id)->update(['active_status'=>'1']);
        
        foreach($item as $item)

        {
         
            order_details::create([
                'customer_id'=>$customer_id,
                'order_no'=>$order_no,
                'product_id'=>$item['product_id'],
                'product_quantity'=>$item['cart_product_quantity'],
                'active_status'=>"pending",
                ]);
                // file_put_contents('item1.txt',"working");


        }

        Payment::create([
            'customer_id'=>$customer_id,
            'order_no'=>$order_no,
            'transaction_id'=>$transaction_id,
            'payment_confirmation'=>"pending",
            ]);


        delivery::create([
                'order_no'=>$order_no,
                'active_status'=>"pending",
                ]);
        
        Order::create([
         'customer_id'=>$customer_id,
         'billing_id'=>$billing_id,
         'shipping_id'=>$shipping_id,
         'order_no'=>$order_no,
         'status'=>"pending",
        ]);

        
     

    


    }


}