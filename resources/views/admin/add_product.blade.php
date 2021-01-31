@extends('admin.admin_layout')
@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <form action="add_product" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="mt-30 page-title">Add Product</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item"><a href="{{url('admin_dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('all_category')}}">Categories</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card card-static-2 mb-30">
                        <div class="card-title-2">
                            <h4>Add New Product</h4>
                        </div>
                        <div class="card-body-table">
                            <div class="news-content-right pd-20">
                                <div class="form-group">
                                    <label class="form-label">Name*</label>
                                    <input type="text" class="form-control" name="product_name" placeholder="Product name" required>
                                </div>
                            
                                {{-- <div class="form-group">
                                    <label class="form-label">Category Image*</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="category_image" class="custom-file-input">
                                            <label class="custom-file-label" >No File Choosen</label>
                                        </div>
                                    </div>
                                </div> --}}
                             

                                <div class="form-group">
                                    <label class="form-label">Upload Product Image*</label>

                                
                                    <div class="file-upload-wrapper">

                                        <input type="file" name="product_image" id="input-file-now" class="file-upload"  required />
                                      </div>
                                  </div>

                                <div class="form-group">
                                    <label class="form-label">Description*</label>
                                    <div class="card card-editor">
                                        <div class="content-editor">
                                            <textarea class="text-control" name="product_description" placeholder="Enter Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Product Selling Price</label>
                                    <input type="text" name="product_selling_price" class="form-control" placeholder="৳ 0">
                                </div>

                                <div class="form-group">
									<label class="form-label">Product Regular Price</label>
									 <input type="text" name="product_regular_price" class="form-control" placeholder="৳ 0">
                                            </div>
                                            
								
                               <div class="form-group">
                                                <label class="form-label">Product Quantity</label>
                                                 <input type="text" name="Product_quantity" class="form-control" placeholder="">
                                                        </div>
                               <div class="form-group">
												<label class="form-label">Category*</label>
												<select id="categtory" name="product_category" class="form-control">
                                                    <option selected>--Select Category--</option>
                                                    @foreach($categories as $category)
													<option value="{{$category->category_name}}">{{$category->category_name}}</option>
													@endforeach
												</select>
											</div>
                   

                                <div class="form-group">
                                    <label class="form-label">Status*</label>
                                    <select id="status" name="product_status" class="form-control">
                                        <option selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <button class="save-btn hover-btn" type="submit">Add New Category</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
 
</div>

@endsection