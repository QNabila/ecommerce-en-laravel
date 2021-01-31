<!DOCTYPE html>
<html lang="en">
<head>
 <!--Cart Item Number show-->   
<?php
use App\Http\Controllers\ProductCategoryController;
$total_item=ProductCategoryController::cartItem();
$cart_product=ProductCategoryController::cartList();
?>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <title>Esxence</title>
     <link rel="stylesheet" href="{{asset('resources')}}/css\header.css?{{time()}}">


     <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
     <link href='{{asset('resources')}}/frontend/vendor/unicons-2.0.1/css/unicons.css?{{time()}}' rel='stylesheet'>
     <link href="{{asset('resources')}}/frontend/css/style.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/css/responsive.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/css/night-mode.css?{{time()}}" rel="stylesheet">
     
     <!-- Vendor Stylesheets -->
     <link href="{{asset('resources')}}/frontend/vendor/fontawesome-free/css/all.min.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/vendor/OwlCarousel/assets/owl.carousel.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/vendor/OwlCarousel/assets/owl.theme.default.min.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/vendor/bootstrap/css/bootstrap.min.css?{{time()}}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('resources')}}/frontend/vendor/semantic/semantic.min.css?{{time()}}">	


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css	">
     {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js	"> --}}
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	"> --}}


</head>
	 <!-- Cart Sidebar Offset Start-->
     <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
		
		<div class="bs-canvas-header side-cart-header p-3 ">
		
			<div class="d-inline-block  main-cart-title">My Cart <span>(2 Items)</span></div>
			<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
		</div> 
		
		<div class="bs-canvas-body">
			<div class="cart-top-total">
				<div class="cart-total-dil">
					<h4>Esxence</h4>
					{{-- <span>$34</span> --}}
				</div>
				<div class="cart-total-dil pt-2">
					<h4>Delivery Charges</h4>
					<span>$1</span>
				</div>
			</div>
			<div class="side-cart-items">

			<?php $total_price = 0 ?>
			<?php $total_saving=0 ?>
            @foreach($cart_product as $cart_product)
				<div class="cart-item">
					<div class="cart-product-img">
						<img src="{{$cart_product->getProduct->product_image}}" alt="">
						<?php 
						$discount=($cart_product->getProduct->product_regular_price-$cart_product->getProduct->product_selling_price)/($cart_product->getProduct->product_regular_price*100);
						?>
						<div class="offer-badge">{{round($discount,1)}}%</div>
					</div>
					<div class="cart-text">
						<h4>{{$cart_product->getProduct->product_name}}</h4>

						<h4>{{$cart_product->getProduct->product_name}}</h4>
						<div class="cart-radio">
							<ul class="kggrm-now">
								<td>৳ {{$cart_product->getProduct->product_selling_price}} /  {{$cart_product->getProduct->product_quantity}}</td>			
							</ul>
						</div>
						<div class="qty-group">
							<div class="quantity buttons_added">
								<input type="button" value="-" class="minus minus-btn">
								<input type="number" step="1" name="cart_product_quantity" value="{{$cart_product->cart_product_quantity}}"class="input-text qty text">
								<input type="button" value="+" class="plus plus-btn">
							</div>
							<div class="cart-item-price">৳{{$cart_product->getProduct->product_selling_price*$cart_product->cart_product_quantity}} <span>৳{{$cart_product->getProduct->product_regular_price*$cart_product->cart_product_quantity}}</span></div>
						</div>	
						<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
					</div>
				</div>

				<?php 
				
				$total_price += $cart_product->getProduct->product_selling_price*$cart_product->cart_product_quantity;
				
				$total_saving +=($cart_product->getProduct->product_regular_price*$cart_product->cart_product_quantity)-($cart_product->getProduct->product_selling_price*$cart_product->cart_product_quantity);
				
				?>

			 @endforeach
			 
			</div>
		</div>
		<div class="bs-canvas-footer">
			<div class="cart-total-dil saving-total ">
				<h4>Total Saving</h4>
				<span>৳ {{$total_saving}}</span>
			</div>
			<div class="main-total-cart">
				<h2>Total</h2>
				<span>৳ {{$total_price}}</span>
			</div>
			<div class="checkout-cart">
				<a href="#" class="promo-code">Have a promocode?</a>
				<a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
			</div>
		</div>
		
	</div>
	<!-- Cart Sidebar Offsetl End-->
<body>


<!-- Header Start -->
<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="index.html"><img src="{{asset('resources\frontend\images/dark-logo-1.svg')}}"alt=""></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="{{url('/')}}"><img src="{{asset('resources\frontend\images/logo.png')}}" alt=""></a>
                <a href="index.html"><img class="logo-inverse" src="{{asset('resources\frontend\images/dark-logo.svg')}}" alt=""></a>
            </div>
            <div class="select_location">
                <div class="ui inline dropdown loc-title">
                    <div class="text">
                      <i class="uil uil-location-point"></i>
                      Dhaka
                    </div>
                    <i class="uil uil-angle-down icon__14"></i>
                    <div class="menu dropdown_loc">
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i>
                           Chattogram
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i>
                           Cumilla
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i>
                            Rajshahi
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i>
                            Sylhet
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i>
                            Rangpur
                        </div>
                        <div class="item channel_item">
                            <i class="uil uil-location-point"></i>
                            Khulna
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="search120">
                <div class="ui search">
                  <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text" placeholder="Search for products..">
                    <i class='uil uil-search-alt icon icon1'></i>
                  </div>
                </div>
            </div>
            <div class="header_right">
                <ul>
                    <li>
                        <a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>1800-000-000</a>
                    </li>
                    <li>
                        <a href="offers.html" class="offer-link"><i class="uil uil-gift"></i>Offers</a>
                    </li>
                    <li>
                        <a href="faq.html" class="offer-link"><i class="uil uil-question-circle"></i>Help</a>
                    </li>
                    <li>
                        <a href="dashboard_my_wishlist.html" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>
                    </li>	
                    <li class="ui dropdown">
                        <a href="#" class="opts_account">
                            <img src="{{asset('resources\frontend\images/avatar/img-5.jpg')}}" alt="">
                            <span class="user__name">John Doe</span>
                            <i class="uil uil-angle-down"></i>
                        </a>
                        <div class="menu dropdown_account">
                            <div class="night_mode_switch__btn">
                                <a href="#" id="night-mode" class="btn-night-mode">
                                    <i class="uil uil-moon"></i> Night mode
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                            </div>	
                            <a href="dashboard_overview.html" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a>								
                            <a href="dashboard_my_orders.html" class="item channel_item"><i class="uil uil-box icon__1"></i>My Orders</a>
                            <a href="dashboard_my_wishlist.html" class="item channel_item"><i class="uil uil-heart icon__1"></i>My Wishlist</a>
                            <a href="dashboard_my_wallet.html" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>My Wallet</a>
                            <a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>My Address</a>
                            <a href="offers.html" class="item channel_item"><i class="uil uil-gift icon__1"></i>Offers</a>
                            <a href="faq.html" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Faq</a>
                            <a href="sign_in.html" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-header-group">
        <div class="sub-header">
            <div class="ui dropdown">
                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select Category</span></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light py-3" style="margin-bottom: 0px">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="index.html" class="nav-link active" title="Home">Home</a></li>
                            <li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">New Products</a></li>
                            <li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Featured Products</a></li>
                            <li class="nav-item">
                                <div class="ui icon top left dropdown nav__menu">
                                    <a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
                                    <div class="menu dropdown_page">
                                        <a href="dashboard_overview.html" class="item channel_item page__links">Account</a>
                                        <a href="about_us.html" class="item channel_item page__links">About Us</a>
                                        <a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
                                        <a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>
                                        <a href="checkout.html" class="item channel_item page__links">Checkout</a>
                                        <a href="request_product.html" class="item channel_item page__links">Product Request</a>										
                                        <a href="order_placed.html" class="item channel_item page__links">Order Placed</a>										
                                        <a href="bill.html" class="item channel_item page__links">Bill Slip</a>										
                                        <a href="sign_in.html" class="item channel_item page__links">Sign In</a>
                                        <a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
                                        <a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>
                                        <a href="contact_us.html" class="item channel_item page__links">Contact Us</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="ui icon top left dropdown nav__menu">
                                    <a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
                                    <div class="menu dropdown_page">
                                        <a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
                                        <a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog Two No Sidebar</a>
                                        <a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog with Left Sidebar</a>
                                        <a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog with Right Sidebar</a>
                                        <a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail View</a>
                                        <a href="blog_left_sidebar_single_view.html" class="item channel_item page__links">Blog Detail View with Sidebar</a>
                                    </div>
                                </div>
                            </li>	
                            <li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

           

            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>

            <div class="header_cart order-1">
                <a href="/cart_list" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><ins>{{$total_item}}</ins><i class="uil uil-angle-down"></i></a>
            </div>

            <div class="search__icon order-1">
                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Cart Sidebar Offsetl End-->
@yield('content')

	<!-- Footer Start -->
	<footer class="footer">
		<div class="footer-first-row">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<ul class="call-email-alt">
							<li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>1800-000-000</a></li>
							<li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@gambosupermarket.com</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="social-links-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="footer-second-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Categories</h4>
							<ul>
								<li><a href="#">Fruits and Vegetables</a></li>
								<li><a href="#">Grocery & Staples</a></li>
								<li><a href="#">Dairy & Eggs</a></li>
								<li><a href="#">Beverages</a></li>
								<li><a href="#">Snacks</a></li>
								<li><a href="#">Home Care</a></li>
								<li><a href="#">Noodles & Sauces</a></li>
								<li><a href="#">Personal Care</a></li>
								<li><a href="#">Pet Care</a></li>
								<li><a href="#">Meat & Seafood</a></li>
								<li><a href="#">Electronics</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Useful Links</h4>
							<ul>
								<li><a href="about_us.html">About US</a></li>
								<li><a href="shop_grid.html">Featured Products</a></li>
								<li><a href="offers.html">Offers</a></li>
								<li><a href="our_blog.html">Blog</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="career.html">Careers</a></li>
								<li><a href="contact_us.html">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Top Cities</h4>
							<ul>
								<li><a href="#">Dhaka</a></li>
								<li><a href="#">Chattogram</a></li>
								<li><a href="#">Sylhet</a></li>
								<li><a href="#">Cumilla</a></li>
								<li><a href="#">Khulna</a></li>
								<li><a href="#">Rangpur</a></li>
								<li><a href="#">Rajshahi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item-app">
							<h4>Download App</h4>
							<ul>
								<li><a href="#"><img class="download-btn" src="images/download-1.svg" alt=""></a></li>
								<li><a href="#"><img class="download-btn" src="images/download-2.svg" alt=""></a></li>
							</ul>
						</div>
						<div class="second-row-item-payment">
							<h4>Payment Method</h4>
							<div class="footer-payments">
								<ul id="paypal-gateway" class="financial-institutes">
									<li class="financial-institutes__logo">
									  <img alt="Visa" title="Visa" src="{{asset('resources\frontend\images/footer-icons/pyicon-6.svg')}}">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="Visa" title="Visa" src="{{asset('resources\frontend\images/footer-icons/pyicon-1.svg')}}">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="MasterCard" title="MasterCard" src="{{asset('resources\frontend\images/footer-icons/pyicon-2.svg')}}">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="American Express" title="American Express" src="{{asset('resources\frontend\images/footer-icons/pyicon-3.svg')}}">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="Discover" title="Discover" src="{{asset('resources\frontend\images/footer-icons/pyicon-4.svg')}}">
									</li>
								</ul>
							</div>
						</div>
						<div class="second-row-item-payment">
							<h4>Newsletter</h4>
							<div class="newsletter-input">
								<input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
								<button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-last-row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-bottom-links">
							<ul>
								<li><a href="about_us.html">About</a></li>
								<li><a href="contact_us.html">Contact</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="term_and_conditions.html">Term & Conditions</a></li>
								<li><a href="refund_and_return_policy.html">Refund & Return Policy</a></li>
							</ul>
						</div>
						<div class="copyright-text">
							<i class="uil uil-copyright"></i>Copyright 2020 <b>Designed By Hussain Rifat</b> . All rights reserved
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->



	<!-- Javascripts -->
	<script src="{{asset('resources')}}/frontend/js/jquery-3.3.1.min.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/vendor/OwlCarousel/owl.carousel.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/vendor/semantic/semantic.min.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/js/jquery.countdown.min.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/js/custom.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/js/offset_overlay.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/js/night-mode.js?{{time()}}"></script>


</body>


</html>