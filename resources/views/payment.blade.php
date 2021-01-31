@extends('layout')
@section('content')

<head>
    
    <link href="{{asset('resources')}}/frontend/css/step-wizard.css?{{time()}}" rel="stylesheet">
    

</head>


<body>
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-8 col-md-7">
                        <form action="{{url('payment')}}" method="POST"> 
                            @csrf
                        <div id="checkout_wizard" class="checkout accordion left-chck145">
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingTwo">
                                    <h4 class="checkout-step-title">
                                        <h4> Payment </h1> 
                                    </h4>
                                </div>
                                    <div class="checkout-step-body">
                                        <div class="checout-address-step">
                                            <div class="row">
                                                <div class="col-lg-12">												
                                                        <!-- Multiple Radios (inline) -->
                                                    
                                                        <div class="address-fieldset">
                                                            <div class="row">
                                                              
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Enter Your Bkash TRXid</label>
                                                                        <input  name="transcantion_id" id="b_name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                                                    </div>
                                                                </div>
    
                                                      
                                                           
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
    
    
                                </div>


                            </div>
                        </div>   
                        <button type="submit"  class="login-btn hover-btn">Pay</button>

                      </form>
                    </div>  
	
</body>
@endsection