<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\order_details;
use App\Models\Payment;
use App\Models\delivery;

class AdminController extends Controller
{
    public function showOrderList(Request $req)
    {
    
        $orders=Order::get();
        // file_put_contents('order.txt',$orders);

        return view('admin.order',compact('orders'));
    
    }

    public function orderEdit($order_no)

    {
       
        $order_details=Order::where('order_no',$order_no)->get();
        $order_product_details=order_details::where('order_no',$order_no)->get();
       
        return view('admin.order_edit',compact('order_details','order_product_details'));

    }

    public function orderUpdate(Request $req,$order_no)
    {
        
        $order_status=$req->Order_Status;
        Order::where('order_no',$order_no)->update(['status'=>$order_status]);

        $order_details=Order::where('order_no',$order_no)->get();
        $order_product_details=order_details::where('order_no',$order_no)->get();
        return view('admin.order_edit',compact('order_details','order_product_details'));
        // dump($order_status);
    }

    public function paymentUpdate(Request $req,$order_no)
    {
        $Payment_Status=$req->Payment_Status;
        Payment::where('order_no',$order_no)->update(['payment_confirmation'=>$Payment_Status]);

        $order_details=Order::where('order_no',$order_no)->get();
        $order_product_details=order_details::where('order_no',$order_no)->get();
        return view('admin.order_edit',compact('order_details','order_product_details'));
    }

    public function deliveryUpdate(Request $req,$order_no)
    {
        $Delivery_Status=$req->Delivery_Status;
        delivery::where('order_no',$order_no)->update(['active_status'=>$Delivery_Status]);
        
        $order_details=Order::where('order_no',$order_no)->get();
        $order_product_details=order_details::where('order_no',$order_no)->get();
        return view('admin.order_edit',compact('order_details','order_product_details'));
    }


}
