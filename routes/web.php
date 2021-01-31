<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view("login");
// });

// Route::view("/login", "login");
Route::view("/layout", "layout");
Route::view("/emni", "emni");
Route::get('/home', 'ProductCategoryController@categorySlider');
//sign_up
Route::view("/sign_up", "registration.sign_up");
Route::post('create_user','UserController@create_user');
//sign_in
Route::view('/sign_in', 'registration.sign_in');
Route::post('/login', 'UserController@login');
Route::view('/forgot_password', 'registration.forgot_password');

//Admin
Route::view("/admin_dashboard", "admin.admin_dashboard");
Route::view("/admin_layout", "admin.admin_layout");
//admin_add_categories
Route::view("/add_category", "admin.add_category")->name('admin.add_category');
Route::post('/add_category', 'ProductCategoryController@addCategory')->name('admin.add_category');
//admin_show_categories
Route::get('/categories', 'ProductCategoryController@showAllCategories');
//edit category
Route::get('/edit_category/{id}', 'ProductCategoryController@editCategory');
Route::post('/update_category/{id}','ProductCategoryController@updateCategory');

//admin add product
Route::get("/add_product","ProductCategoryController@viewAddProduct" );  //get bcz database theke category fetch kortese
Route::post('add_product','ProductCategoryController@addProduct');
//admin show product
Route::get('/all_product','ProductCategoryController@showAllProduct');

//admin order list
Route::get('/admin_order','AdminController@showOrderList');
//
Route::get('/order_edit/{order_no}','AdminController@orderEdit');
Route::post('/order_update/{order_no}','AdminController@orderUpdate');
Route::post('/payment_update/{order_no}','AdminController@paymentUpdate');
Route::post('/delivery_update/{order_no}','AdminController@deliveryUpdate');


//featured_product
Route::view("/products", "featured_products");

//single_Product_Page  //get, as db theke info antesi 
Route::get('product/{id}','ProductCategoryController@productDetail'); 

//Add_To_Cart
Route::post('add_to_cart','ProductCategoryController@addToCart'); 
Route::get('cart_list','ProductCategoryController@cartList');

Route::view('order','checkout');
Route::post('checkout','CustomerController@checkout');
Route::post('payment','CustomerController@payment');


