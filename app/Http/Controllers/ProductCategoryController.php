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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //For table join

class ProductCategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $category_name= $request->category_name;
        $category_description= $request->category_description;
        $category_status= $request->category_status;
        $category_image= $request->category_image;

        $category_image = time().'.'.request()->category_image->getClientOriginalExtension();
        request()->category_image->move(base_path('category_image'), $category_image);
   
        //'db table name'=> var name
        //store in database
        category::create([
             'category_name'=>$category_name,
             'category_description'=>$category_description,
             'active_status'=>$category_status,
             'category_image'=>"category_image/".$category_image,//category_image folder ta create hobe and image store hobe
             ]);

       
        return redirect('categories');
    }

    public function showAllCategories(Request $req)
    {
        // return ProductCategory::all();
        
        $category=category::get();


        //   file_put_contents("category.txt",$categories);  //check data
          return view('admin.all_categories', ['categories'=>$category]);  //categories key create and sent to blade.php
        // return redirect('categories');
    }

    //Edit
    public function editCategory($id)
    {
        $category=category::find($id);
        return view('admin.edit_category', compact('category'));
    }
    
    //Update
    public function updateCategory(Request $req, $id)
    {
        $category_name=$req->category_name;
        $category_description=$req->category_description;
        $category_status= $req->category_status;
        $category_image= $req->category_image;

        $category_image = time().'.'.request()->category_image->getClientOriginalExtension();
        request()->category_image->move(base_path('category_image'), $category_image);

        $category=category::find($id);
        $category->category_name=$category_name;
        $category->category_description=$category_description;
        $category->active_status=$category_status;
        $category->category_image="category_image/".$category_image;
        $category->save();
        return redirect('categories');
    }

    
    public function addProduct(Request $req)
    {
        $product_name=$req->product_name;
        $product_description=$req->product_description;
        $product_regular_price=$req->product_regular_price;
        $product_selling_price=$req->product_selling_price;
        $product_status=$req->product_status;
        $product_category=$req->product_category;
        $product_quantity=$req->Product_quantity;
        $product_image= $req->product_image;
        $product_image = time().'.'.request()->product_image->getClientOriginalExtension();
        request()->product_image->move(base_path('product_image'), $product_image);

    
        product::create([
            'product_name'=>$product_name,
            'product_description'=>$product_description,
            'product_regular_price'=>$product_regular_price,
            'product_selling_price'=>$product_selling_price,
            'product_status'=>$product_status,
            'product_category'=>$product_category,
            'product_quantity'=>$product_quantity,
            'product_image'=>'product_image/'.$product_image,
        ]);
        return redirect('add_product');
    }

    public function viewAddProduct(Request $req)
    {
        $product=category::get();
        return view('admin.add_product', ['categories'=>$product]);
    }

    public function showAllProduct(Request $req)
    {
        $product=product::get();
        return view('admin.all_product', ['products'=>$product]);
    }


    public function categorySlider(Request $req)
    {
        // $id = Auth::user()->id;
        // file_put_contents('id.txt',$id);
        $category=category::get();
        $product=product::get();
        // return view('/home',['categories'=>$category]);
        return view('/home')->with(compact('category', 'product'));
    }

    //Single Product Detail
    public function productDetail($id)
    {
        $product=product::find($id);
        $user_id=Auth::user()->id;
        if ($cart=Cart::where('product_id', $id)->where('user_id', $user_id)->first()) {
            $cart_item=$cart->cart_product_quantity;
            // file_put_contents('cart.txt', $cart);
            return view('single_product')->with(compact('product', 'cart_item'));
        } else {
            $cart_item=1;
            return view('single_product')->with(compact('product', 'cart_item'));
        }
    }

    //Add to Cart
    public function addToCart(Request $req)
    {
        if (Auth::check()) {
            $id=Auth::user()->id;
            if ($carts=Cart::where('product_id', $req->product_id)->where('user_id', $id)->where('active_status','0')->first()) {  //taking all the data from cart table where product_id and user_id are matched(If a user add same product in cart for multiple times)
                $old_cart=$carts->cart_product_quantity;
                $new_cart=$req->cart_product_quantity;
                $new=$old_cart+$new_cart;

                Cart::where('user_id', $id)->where('product_id', $req->product_id)->where('active_status','0')->update(['cart_product_quantity'=>$new]);
            } else {
                Cart::create([
                'user_id'=>$id,
                'product_id'=>$req->product_id,
                'cart_product_quantity'=>$req->cart_product_quantity,
                ]);
            }
            
            return back();
        } else {
            return redirect('/sign_in');
        }
    }


    
  
    //Cart Count Function
    public static function cartItem() //static is for error "non static fun bla bla..."
    {
        if (Auth::check()) {
            $id=Auth::user()->id;  //taking user Id
          return Cart::where('user_id', $id)->count();  // id er shate db er user id match kore Cart theke cart number show
        } else {
            return redirect('/sign_in');
        }
    }


    //Cart Show

    public static function cartList()
    {
        if (Auth::check()) {
            $id=Auth::user()->id;

            //   $user_id=auth()->user()->id;
            // $product= cart::where('user_id',$user_id)->first();
            //  dd( cart::where('user_id',$user_id)->with('getProduct')->get());

            $product=cart::where('user_id', $id)->orderBy('id', 'desc')->get();
            return $product;
        } else {
            return redirect('/sign_in');
        }
    }

    
}