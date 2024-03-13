<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use Validator;
use Redirect;
use File;


class ProfileController extends Controller
{
    public function Profile()
    {

        return view('admin.Profile.index');
    }

    public function Update(Request $request)
    {

        $profile = User::find($request->id);
        if($request->hasFile('image'))
        {
            $destination = '/adminassets/Uploads/Profile/'.$profile->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            if($request->hasFile('image')){
                $image=$request->file('image');
                $reImage= $image->getClientOriginalName();
                $dest=public_path('/adminassets/Uploads/Profile');
                $image->move($dest,$reImage);
            }
            $profile->image=$reImage;
    
        }
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->Phone_no = $request->number;
        $profile->About = $request->about;

        if($request->Oldpassword){
                $user = user::where('email', $request->email)->first();
                
                if(Hash::check($request->Oldpassword, $user->password)){
                   
                    $validator = Validator::make(
                                $request->all(),
                                [
                                    'password' => 'min:6',
                                    'Comfirmpassword' => 'required_with:password|same:password|min:6',
                                ]
                            );
                
                            if ($validator->fails()) {
                                return Redirect::back()->withErrors($validator);
                            }
                            $profile->password = Hash::make($request->password);
                                $profile->update();
                                return redirect('/admin');

                }else{
                    
                    return back()->with('fail','Sorry!! Old password are Wrong !!.');
                }
            
        }else{
            $profile->update();
            return redirect('/admin');
        }
       
    }
}
