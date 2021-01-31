@extends('admin.admin_layout')
@section('content')
<div id="layoutSidenav_content">
    <main>
        {{-- <div class="container-fluid">
            <h2 class="mt-30 page-title">Dashboard</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="dashboard-report-card purple">
                        <div class="card-content">
                            <span class="card-title">Order Pending</span>
                            <span class="card-count">2</span>
                        </div>
                        <div class="card-media">
                            <i class="fab fa-rev"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="dashboard-report-card red">
                        <div class="card-content">
                            <span class="card-title">Order Cancel</span>
                            <span class="card-count">0</span>
                        </div>
                        <div class="card-media">
                            <i class="far fa-times-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="dashboard-report-card info">
                        <div class="card-content">
                            <span class="card-title">Order Process</span>
                            <span class="card-count">5</span>
                        </div>
                        <div class="card-media">
                            <i class="fas fa-sync-alt rpt_icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="dashboard-report-card success">
                        <div class="card-content">
                            <span class="card-title">Today Income</span>
                            <span class="card-count">$9568.00</span>
                        </div>
                        <div class="card-media">
                            <i class="fas fa-money-bill rpt_icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="card card-static-1 mb-30">
                        <div class="card-body">
                            <div id="earningGraph"></div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-12 col-md-12">
                    <div class="card card-static-2 mb-30">
                        <div class="card-title-2">
                            <h4>Orders</h4>
                            {{-- <a href="orders.html" class="view-btn hover-btn">View All</a>  --}}
                        </div>
                        <div class="card-body-table">
                            <div class="table-responsive">
                                <table class="table ucp-table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:130px">Order ID</th>
                                            <th>Customer Name</th>
                                            {{-- <th style="width:200px">Date</th> --}}
                                            <th style="width:300px">Billing Address</th>
                                            <th style="width:300px">Shipping Address</th>
                                            <th style="width:130px">Status</th>
                                            {{-- <th style="width:130px">Total</th> --}}
                                            <th style="width:100px">Action</th>
                                        </tr>
                                    </thead>
                             
                                        
                                @foreach ($orders as $order) 
                                
                                    <tbody>
                                        <tr>
                                            <td>{{$order->order_no }}</td>
                                            <td>
                                                <a href="#" target="_blank">{{$order->getUserInfo->name}}</a>
                                            </td>
                                            {{-- <td>
                                                <span class="delivery-time">15/06/2020</span>
                                                <span class="delivery-time">4:00PM - 6.00PM</span>
                                            </td> --}}
                                            <td>{{$order->getBillingInfo->b_house}}{{$order->getBillingInfo->b_street}},
                                            {{$order->getBillingInfo->b_city}}<br>Postal Code:{{$order->getBillingInfo->b_postal}}</td>

                                            <td>{{$order->getShippingInfo->s_house}}
                                            {{$order->getShippingInfo->s_street}},
                                            {{$order->getShippingInfo->s_city}},<br>Postal Code:{{$order->getShippingInfo->s_postal}},
                                            </td>
                                            <td>
                                                <span class="badge-item badge-status">{{$order->status}}</span>
                                            </td>
                                            {{-- <td>$90</td> --}}
                                            <td class="action-btns">
                                                <a href="order_view.html" class="views-btn"><i class="fas fa-eye"></i></a>
                                                <a href="{{url('order_edit',$order->order_no)}}" class="edit-btn"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>

                              @endforeach
                                </table>
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
    
@endsection
