@extends('layouts.Auth')
@section('content')

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>RESET PASSWORD OTP</h1></div>
                    <div class="card-body">
    
                        <form action="{{ route('forget.password.post') }}" method="POST">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right"> Enter Your OTP</label>
                                <div class="col-md-6">
                                    <input type="Number" id="email_address" class="form-control" name="number" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  
@endsection