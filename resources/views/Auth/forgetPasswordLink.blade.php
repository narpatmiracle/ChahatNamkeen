@extends('layouts.Auth')
@section('content')

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
      
        <!-- end row -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body">

                        <div class="p-2">
                            <div class="text-center">

                                <div class="avatar-md mx-auto">
                                    <div class="avatar-title rounded-circle bg-light">
                                        <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <div class="p-2 mt-4">
                                        <h4>Verify your email</h4>
                                        <p class="mb-5">Please enter the 4 digit code sent to 
                                            <span class="fw-semibold" >
                                              {{$data->email}}
                                            </span>
                                        </p>
                                    <form action="{{ route('reset.password.get') }}" method="post">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-6 ">
                                                <div class="mb-3 float-center">
                                                    <input type="hidden" name="email" value="{{$data->email}}">
                                                    <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                    <input type="text"
                                                    name="otp"
                                                        class="form-control "
                                                     
                                                     >
                                                </div>
                                            </div>

                                        </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success w-md">Confirm</a>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Didn't receive a code ? <a href="#" class="fw-medium text-primary"> Resend </a> </p>
                    <p>©
                        <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                </div>

            </div>
        </div>
    </div>
</div>
  
@endsection

