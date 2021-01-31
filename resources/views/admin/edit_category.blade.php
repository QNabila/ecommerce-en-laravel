@extends('admin.admin_layout')
@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <form action="{{url('update_category',$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="mt-30 page-title">Categories</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item"><a href="{{url('admin_dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('all_category')}}">Categories</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card card-static-2 mb-30">
                        <div class="card-title-2">
                            <h4>Add New Category</h4>
                        </div>
                        <div class="card-body-table">
                            <div class="news-content-right pd-20">
                                <div class="form-group">
                                    <label class="form-label">Name*</label>
                                <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}"placeholder="Category Name" required>
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
                                    <label class="form-label">Upload Category Image*</label>
                                    <div class="file-upload-wrapper">
                                        <input type="file" name="category_image" id="input-file-now"
                                         class="file-upload"  required />
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="file-upload-wrapper">
                                            <img src="{{URL::to($category->category_image)}}" alt="" style="width:150px;height:160px;">
                                          </div>
                                    </div>
    




                                <div class="form-group">
                                    <label class="form-label">Description*</label>
                                    <div class="card card-editor">
                                        <div class="content-editor">
                                            <input class="text-control" name="category_description" value="{{$category->category_description}}"placeholder="Enter Description" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Status*</label>
                                    <select id="status" name="category_status" value="{{$category->category_description}}"class="form-control">
                                        <option selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <button class="save-btn hover-btn" type="submit">Update Category</button>
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