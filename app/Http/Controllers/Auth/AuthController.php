<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adminresgister;
use App\Models\User;
use App\Models\Userlogin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use File;
use Repsonse;
use Carbon\Carbon; 
use Mail; 
use Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.index');
    }
    
    public function password()
    {
        
        return view('Auth.Recoverpw');
    }
    public function Register()
    {
        return view('Auth.Register');
        
    }
    

    public function insert(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = new User;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->Phone_no = $request->number;
        $data->password  = Hash::make($request->password);
       

        $data->save();
        
        if ($data) {
            return back()->with('success','You have registered successfully');
        }else{
            return back()->with('fail','Somthing Wrong');
        }
        
    }

    public function login(Request $request)
    {
        

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
       
       $user = User::where('email',$request->email)->first();
       if($user){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

            return redirect()->route('admin.dashboard');

        }else{

            return back()->with('fail','Sorry !! password are wrong!!.');
        }

       }else{
        return back()->with('fail','Email are not found.!');
       }

        
    
       
       }
      

       public function submitForgetPasswordForm(Request $request)
       {
           $request->validate([
               'email' => 'required|email|exists:users',
           ]);
   
        //    $token = Str::random(64);
        $otp = rand(1234,9999);
        $user = User::where('email',$request->email)->first();
        $user->otp = $otp;
        $user->update();
          
           Mail::send([], [], function($message) use($request,$otp){
               $message->to($request->email);
               $message->subject('Reset Password');
               $message->html('Your OTP IS ('.$otp.') '); 
           });
           
           $data = User::where('email',$request->email)->first();

          
           return view('Auth.forgetPasswordLink',compact('data'));
       }



       public function showResetPasswordForm(request $request) 
       {
          
                // dd($request->otp);
                $user = User::where('email',$request->email)->where('otp',$request->otp)->first();
                if($user){
                    // $email = $user->email;
                    return view('Auth.forgetPassword',compact('user'));
                }else{
                    dd("somthing went wrong");
                }
      
            
       }

       public function submitResetPasswordForm(request $request)
       {
        $request->validate([
            'password' => 'required',
            'Comfirmpassword' => 'required',
        ]);

      
        
        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        if($user->update()){
            
            return redirect()->route('Auth.index');

        }else{
            dd("Somthing went wrong");
        }

        }

        
      
        
}