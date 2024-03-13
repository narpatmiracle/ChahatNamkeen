@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">  Banner</h4>

               

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Banner</h4>

                    <form method="POST" action="{{Route('Banner.Update',$data->id)}} " enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            
                        <div class="mb-4">
                            <div class="col-lg-6">
                            <label for="formrow-firstname-input" class="form-label"> Name</label>
                            <input type="text" class="form-control"  name="name" value="{{ $data->Name }}" id="formrow-firstname-input" placeholder="Enter Your Product Name">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Product image</label>
                                    <input type="file"  class="form-control" id="#formrow-image-input" name="fimage" accept="image/png, image/gif, image/jpeg," placeholder="Enter Your Image">
                                    <img src="{{ asset('/adminassets/Uploads/Banner').'/'.$data->image }}" width="100px" style="margin-top: 10px;"> 

                                </div>
                            </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

       
    </div>
    <!-- end row -->

    
</div>


    
@endsection
