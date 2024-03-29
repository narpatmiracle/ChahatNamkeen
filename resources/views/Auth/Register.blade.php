@extends('layouts.Auth')
@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Free Register</h5>
                                    <p>Get your free Skote account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('adminassets/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div>
                            <a href="#">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{asset('adminassets/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form method="post" action="{{route('Auth.insert.Register')}}">
                                @if (Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div> 
                             @endif
                             @if (Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div> 
                             @endif
                                @csrf
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" >  
                                    <div class="invalid-feedback">
                                        Please Enter Name
                                    </div>  
                                    <span class="text-danger">
                                        @error('name')
                                           {{$message}} 
                                        @enderror
                                    </span>    
                                </div>
        
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" >
                                    <div class="invalid-feedback">
                                        Please Enter Email
                                    </div> 
                                    <span class="text-danger">
                                        @error('email')
                                           {{$message}} 
                                        @enderror
                                    </span> 
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Phone number</label>
                                    <input type="number" class="form-control" name="number" placeholder="Enter Number" >
                                    <div class="invalid-feedback">
                                        Please Enter Number
                                    </div> 
                                    <span class="text-danger">
                                        @error('Number')
                                           {{$message}} 
                                        @enderror
                                    </span> 
                                </div>
                                <div class="roles">
                                    <input type="hidden" name="role" value="user">
                                </div>
        
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password" >
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>  
                                    <span class="text-danger">
                                        @error('password')
                                           {{$message}} 
                                        @enderror
                                    </span>     
                                </div>
            
                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </form>
                            <span id="msg"></span>
                                <div class="mt-4 text-center">
                                    <h5 class="font-size-14 mb-3">Sign up using</h5>
    
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
        
                                <div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                          
                        </div>
    
                    </div>
                </div>
                <div class="mt-5 text-center">
                    
                    <div>
                        <p>Already have an account ? <a href="{{route('Auth.index')}}" class="fw-medium text-primary"> Login</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection