@extends('admin.admin_layout')
@section('content')
<head> <meta name="csrf-token" content="{{ csrf_token() }}"> </head>


    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="index.html">Gambo Supermarket</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
            <ul class="navbar-nav ml-auto mr-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
						<a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
                        <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
								<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
							</a>
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
								<div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="posts.html">All Posts</a>
									<a class="nav-link sub_nav_link" href="add_post.html">Add New</a>
									<a class="nav-link sub_nav_link" href="post_categories.html">Categories</a>
									<a class="nav-link sub_nav_link" href="post_tags.html">Tags</a>
								</nav>
                            </div>		
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocations" aria-expanded="false" aria-controls="collapseLocations">
								<div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                                Locations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseLocations" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="locations.html">All Locations</a>
									<a class="nav-link sub_nav_link" href="add_location.html">Add Location</a>
								</nav>
                            </div>		
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAreas" aria-expanded="false" aria-controls="collapseAreas">
								<div class="sb-nav-link-icon"><i class="fas fa-map-marked-alt"></i></div>
                                Areas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseAreas" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="areas.html">All Areas</a>
									<a class="nav-link sub_nav_link" href="add_area.html">Add Area</a>
								</nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
								<div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="category.html">All Categories</a>
									<a class="nav-link sub_nav_link" href="add_category.html">Add Category</a>
								</nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShops" aria-expanded="false" aria-controls="collapseShops">
								<div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Shops
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseShops" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="shops.html">All Shops</a>
									<a class="nav-link sub_nav_link" href="add_shop.html">Add Shop</a>
								</nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
								<div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="products.html">All Products</a>
									<a class="nav-link sub_nav_link" href="add_product.html">Add Product</a>
								</nav>
                            </div>
							<a class="nav-link active" href="orders.html">
								<div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                                Orders
							</a>
							<a class="nav-link" href="customers.html">
								<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Customers
							</a>
							<a class="nav-link" href="offers.html">
								<div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                                Offers
							</a>
							<a class="nav-link" href="pages.html">
								<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
							</a>
                            <a class="nav-link" href="menu.html">
								<div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                                Menu
							</a>
							<a class="nav-link" href="updater.html">
								<div class="sb-nav-link-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                Updater
							</a>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
								<div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                Setting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseSettings" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="general_setting.html">General Settings</a>
									<a class="nav-link sub_nav_link" href="payment_setting.html">Payment Settings</a>
									<a class="nav-link sub_nav_link" href="email_setting.html">Email Settings</a>
								</nav>
                            </div>
							<a class="nav-link" href="reports.html">
								<div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                Reports
							</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Orders</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin_order')}}">Orders</a></li>
                            <li class="breadcrumb-item active">Order Edit</li>
						</ol>
					
							
						
                        <div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h2 class="title1458">Invoice</h2>
										
											
										@foreach ($order_details as $order_details)
										
									
										<span class="order-id">Order No:{{$order_details->order_no}}</span> 
									</div>
									<div class="invoice-content">
										<div class="row">
											<div class="col-lg-6 col-sm-6">
												<div class="ordr-date">
													<b>Order Date :</b> 
													{{$order_details->updated_at}}
													<br><br><br><b>Customer Name: </b>{{ $order_details->getUserInfo->name}}
													 <br><b>Email: </b>{{ $order_details->getUserInfo->email}}
													 <br><b>Contact Number: </b>{{ $order_details->getUserInfo->number}}<br>
													 <b>Order Status:</b>
													 {{$order_details->status}}
													 <br><br>
													 <strong><b>Billing Address</b></strong>
													 <br><b>Billing Name: </b>
													 {{$order_details->getBillingInfo->billing_name}}
													 <br><b>Contact Number: </b>{{$order_details->getBillingInfo->billing_contact_number}}
													 <br><b>House: </b>
													 {{$order_details->getBillingInfo->b_house}}
													 <br><b>Street: </b>
													 {{$order_details->getBillingInfo->b_street}}
													 <br><b>Postal Code: </b>
													 {{$order_details->getBillingInfo->b_postal}}
													 <br><b>City: </b>
													 {{$order_details->getBillingInfo->b_city}}<br><br>
													 <strong><b>Payment Information</b></strong><br>
													 <b>Bkash TrxID: </b>
													 {{$order_details->getPaymentInfo->transaction_id}}<br>
													 <b>Payment Status: </b>
													 {{$order_details->getPaymentInfo->payment_confirmation}}
												</div>
												
												 
											</div>
											<div class="col-lg-6 col-sm-6">
												<div class="ordr-date right-text">
													<b>Address</b><br>

													{{$order_details->getUserInfo->address}},<br>
													{{$order_details->getUserInfo->district}}<br><br>
												
													<strong><b>Shipping Address</b></strong>
													 <br><b>Shipping Name:</b>
													 {{$order_details->getShippingInfo->shipping_name}}
													 <br><b>Contact Number:</b>
													 {{$order_details->getShippingInfo->shipping_contact_number}}
													 <br><b>House:</b>
													 {{$order_details->getShippingInfo->s_house}}
													 <br><b>Street:</b>
													 {{$order_details->getShippingInfo->s_street}}
													 <br><b>Postal Code:</b>
													 {{$order_details->getShippingInfo->s_postal}}
													 <br><b>City:</b> {{$order_details->getShippingInfo->s_city}}<br><br>
													
													<strong>Delivery Info </strong><br>
													 <b>Delivery Status: </b>
													 {{$order_details->getDeliveryInfo->active_status}}

												</div>
											</div>
											@endforeach
											<div class="col-lg-12">
												<div class="card card-static-2 mb-30 mt-30">
													<div class="card-title-2">
														<h4>Recent Orders</h4>
													</div>
													<div class="card-body-table">
														<div class="table-responsive">
															<table class="table ucp-table table-hover">
																<thead>
   																  <tr>
																		<th style="width:130px">Product Id</th>
																		<th>Item</th>
																		<th style="width:150px" class="text-center">Regular Price</th>
																		<th style="width:150px" class="text-center">Selling Price</th>
																		<th style="width:150px" class="text-center">Quantity</th>
																		<th style="width:100px" class="text-center">Total</th>
																	</tr>
																</thead>
															
																<tbody>
																
																<?php $sub_total=0?>
																<?php $total=0?>

																@foreach ($order_product_details as $item)	
																	<tr>
																		<td>{{$item->product_id}}</td>
																		<td>
																		<a href="#" target="_blank">
																		</a>
																		{{$item->getOrderDetails->product_name}}
																		</td>
																		<td class="text-center">৳{{$item->getOrderDetails->product_regular_price}}</td>
																		<td class="text-center">৳{{$item->getOrderDetails->product_selling_price}}</td>
																		<td class="text-center">{{$item->product_quantity}}</td>
																		<td class="text-center">৳{{$item->product_quantity*$item->getOrderDetails->product_selling_price}}</td>
																	</tr>

                                                                <?php
																$sub_total += $item->product_quantity*$item->getOrderDetails->product_selling_price;
																?>	

																@endforeach

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-7"></div>
											<div class="col-lg-5">
												<div class="order-total-dt">
													<div class="order-total-left-text">
														Sub Total
													</div>

												
													   
													<div class="order-total-right-text">
														৳ {{$sub_total}}
													</div>
												</div>
												<div class="order-total-dt">
													<div class="order-total-left-text">
														Delivery Fees
													</div>
													<div class="order-total-right-text">
														৳60
													</div>
												</div>
												<div class="order-total-dt">
													<div class="order-total-left-text fsz-18">
														Total Amount
													</div>
													<div class="order-total-right-text fsz-18">
														৳{{$sub_total+60}}
													</div>
												</div>
											</div>
										<div class="col-lg-7"></div>

										<form action="{{url('order_update',$order_details->order_no)}}" method="POST" >
											@csrf
		
											<div class="row-lg-5">
												<div class="select-status">
													<label for="status">Order Status*</label>
													<div class="input-group">
														<select id="status" name="Order_Status" class="custom-select">
															<option value="Pending">Pending</option>
															<option value="Cancel">Cancel</option>
															<option value="Progress">Progress</option>
															<option value="Completed">Completed</option>
														</select>
														<div class="input-group-append">
															<button class="status-btn hover-btn" type="submit">Submit</button>
														</div>
													</div>
												</div>
											</form>

											<form action="{{url('payment_update',$order_details->order_no)}}" method="POST">
                                            @csrf
												<div class="row-lg-5">
													<div class="select-status">
													<label for="status">Payment Status*</label>
													
													<div class="input-group">
														<select id="status" name="Payment_Status" class="custom-select">
															<option value="Pending">Pending</option>
															<option value="Cancel">Cancel</option>
															<option value="On Hold">On Hold</option>
															<option value="Paid">Paid</option>
															<option value="Refunded">Refunded</option>
															<option value="Cash On Delivery">Cash On Delivery</option>
														</select>
														<div class="input-group-append">
															<button class="status-btn hover-btn" type="submit">Submit</button>
														</div>
													</div>
													</div>
												</div>
											</form>

											<form action="{{url('delivery_update',$order_details->order_no)}}" method="POST">
												@csrf
												<div class="row-lg-5">
													<div class="select-status">
													<label for="status">Delivery Status*</label>
												
													<div class="input-group">
														<select id="status" name="Delivery_Status" class="custom-select">
															<option value="Pending">Pending</option>
															<option value="Cancel">Cancel</option>
															<option value="Placed">Placed</option>
															<option value="Packed">Packed</option>
															<option value="On The Way">On The Way</option>
															<option value="Delivered">Delivered</option>
														</select>
														<div class="input-group-append">
															<button class="status-btn hover-btn" type="submit">Submit</button>
														</div>
													</div>
													</div>
												</div>

											</form>
										</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
						
                    </div>
                </main>
                <footer class="py-4 bg-footer mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted-1">© 2020 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
                            <div class="footer-links">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
  
       
    </body>

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/order_edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2020 10:04:30 GMT -->
@endsection