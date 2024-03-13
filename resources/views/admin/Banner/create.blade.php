@extends('layouts.admin')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18"> Create Banner </h4>


            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Banner Deatils</h4>

                    <form method="POST" action="{{route('Banner.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="formrow-name-input" class="form-label">Banner Name</label>
                            <input type="text" class="form-control" id="formrow-name-input" name="name"
                                placeholder="Enter Your Banner  Name">
                                <span class="text-danger">
                                    @error('name')
                                       {{$message}} 
                                    @enderror
                                </span> 
                        </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image </label>
                                    <input class="form-control" type="file" name="fimage" id="formFile" accept="image/png, image/gif, image/jpeg,">
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
@endsection
