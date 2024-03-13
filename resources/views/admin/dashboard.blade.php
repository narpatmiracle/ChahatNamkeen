@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

           
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Chahat namkeen Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{asset('adminassets/images/profile-img.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="avatar-md profile-user-wid mb-4">
                            @if(!Auth::user()->image)
                        
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-thumbnail rounded-circle">

                            @else
                            <img src="{{ asset('/adminassets/Uploads/Profile').'/'.Auth::user()->image }}" alt="" class="img-thumbnail rounded-circle" >
                            @endif
                        </div>
                        <h5 class="font-size-15 text-truncate">{{Auth::user()->name}}</h5>
                        <h5 class="text-muted mb-0 text-truncate">Admin</h5>
                    </div>

                    <div class="col-sm-5" style="left: 40px;">
                        <div class="pt-4">

                            <div class="row">
                               
                                <div class="col-12">
                                    <h5 class="font-size-15" style="text-align: center"> {{Auth::user()->Phone_no}}</h5>
                                    <h5 class="text-muted mb-0" style="text-align: center">Contact </h5>
                                </div>
                            </div>
                            <div class="mt-4" style="text-align: center">
                                <a href="{{route('admin.profile')}}" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Add Banner</p>
                                <h4 class="mb-0">{{DB::table('banners')->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class='bx bx-image-add font-size-24'></i>
                                            {{-- <i class="bx bx-copy-alt font-size-24"></i> --}}
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Categories</p>
                                <h4 class="mb-0">{{DB::table('categories')->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-layout font-size-24"></i>
                                            {{-- <i class="bx bx-archive-in "></i> --}}
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium"> Products</p>
                                <h4 class="mb-0">{{DB::table('products')->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-calendar font-size-24"></i>
                                            {{-- <i class="bx bx-purchase-tag-alt font-size-24"></i> --}}
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium"> Order</p>
                                <h4 class="mb-0">5</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class='bx bx-box font-size-24'></i>
                                            {{-- <i class="bx bx-purchase-tag-alt font-size-24"></i> --}}
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

       
    </div>
</div>
<!-- end row -->



@endsection

