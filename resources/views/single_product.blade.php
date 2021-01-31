@extends('layout')
@section('content')


<!-- Body Start -->
<div class="wrapper">
    <div class="gambo-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop_grid.html">Vegetables & Fruits</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Title</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-dt-view">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                    <div class="item">
                                        <img src="{{asset($product->product_image)}}" style="height:200px;font-weight:center">                                    
                                    </div>
                                    
                                   
                              
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="product-dt-right">
                                    <h2>{{$product->product_name}}</h2>
                                    <div class="no-stock">
                                        <p class="pd-no">Product Category<span>{{$product->product_category}}</span></p>
                                        <p class="stock-qty">Available</p>
                                    </div>



                                 
                                    <p class="pp-descp">{{$product->product_short_description}}</p>
                                    <div class="product-group-dt">
                                        <ul>
                                            <li><div class="main-price color-discount">Discount Price<span>{{$product->product_selling_price}}</span> /{{$product->product_quantity}}</span></div></li>
                                            <li><div class="main-price mrp-price">Regular Price<span>{{$product->product_regular_price}}</span></div></li>
                                        </ul>
							
                                        <form action=" {{url('add_to_cart') }}" method="POST"> 

                                        @csrf

                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                               
                                        <ul class="gty-wish-share">
                                            <li>
                                                <div class="qty-product">
                                                    <div class="quantity buttons_added" name="quantity">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1" value="{{$cart_item}}" name="cart_product_quantity"   class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span class="like-icon save-icon" title="wishlist"></span></li>
										</ul>
								
                                        <ul class="ordr-crt-share">
                                            <li><button class="add-cart-btn hover-btn" type="submit"><i class="uil uil-shopping-cart-alt" ></i>Add to Cart</button></li>
                                            <a href="{{url('order')}}" class="cart-checkout-btn hover-btn">Order Now</a>
                                        </ul>

                                        </form>

                                     
                                       
                                    {{-- </ul>
                                    <button class="order-btn hover-btn">Order Now</button>  --}}
                                   
                                        
                                    

                                    </div>




                                    <div class="pdp-details">
                                        <ul>
                                            <li>
                                                <div class="pdp-group-dt">
                                                    <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                                                    <div class="pdp-text-dt">
                                                        <span>Lowest Price Guaranteed</span>
                                                        <p>Get difference refunded if you find it cheaper anywhere else.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pdp-group-dt">
                                                    <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                                                    <div class="pdp-text-dt">
                                                        <span>Easy Returns & Refunds</span>
                                                        <p>Return products at doorstep and get refund in seconds.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="pdpt-bg">
                        <div class="pdpt-title">
                            <h4>More Like This</h4>
                        </div>
                        <div class="pdpt-body scrollstyle_4">
                            <div class="cart-item border_radius">
                                <a href="single_product_view.html" class="cart-product-img">
                                    <div class="offer-badge">4% OFF</div>
                                </a>
                                <div class="cart-text">
                                    <h4>Product Title Here</h4>
                                    <div class="cart-radio">
                                        <ul class="kggrm-now">
                                            <li>
                                                <input type="radio" id="k1" name="cart1">
                                                <label for="k1">0.50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k2" name="cart1">
                                                <label for="k2">1kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k3" name="cart1">
                                                <label for="k3">2kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k4" name="cart1">
                                                <label for="k4">3kg</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="qty-group">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <div class="cart-item-price">$12 <span>$15</span></div>
                                    </div>
                                </div>
                            </div>
                    
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="pdpt-bg">
                        <div class="pdpt-title">
                            <h4>Product Details</h4>
                        </div>
                        <div class="pdpt-body scrollstyle_4">
                            <div class="pdct-dts-1">
                                <div class="pdct-dt-step">
                                    <h4>Long Description</h4>
                                    <p>{{$product->product_description}}.</p>
                                </div>
                                
                            </div>			
                        </div>					
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
<!-- Body End -->


@endsection