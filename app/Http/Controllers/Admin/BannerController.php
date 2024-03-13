<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use File;

class BannerController extends Controller
{
    public function Create()
    {
        return view('admin.Banner.Create');
    }  
    
    public function store(Request $request)
    {
        
        $Banner = new Banner();
        $Banner->Name = $request->name;
        if($request->hasFile('fimage')){
            $image=$request->file('fimage');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/adminassets/Uploads/Banner');
            $image->move($dest,$reImage);
        }
        $Banner->image=$reImage;
         
        $Banner->save();
        return redirect('admin/banner/list');
    }

    public function index($id)
    {
        $Banner = Banner::find($id);
        
        return view('admin.Banner.Show', compact('Banner'));
    } 
    
    public function show()
    {
        $data = Banner::all();
        return view('admin.Banner.index', compact('data'));                           
    }

    
   public function changestatus(Request $request)
   {
        $Banner = Banner::where('id',$request->id)->first();
        if($Banner->status==1){
            $Banner->status = 0;
        }else{
            $Banner->status = 1;
        }

         $Banner->update();
   }

// Banner Edit and Update ------------------------

public function Edit($id)   
{
    $data = Banner::find($id);
    return view('admin.Banner.Edit', compact('data'));
    
}


public function Update(request $request, $id)
{
    $Banner = Banner::find($id);
    $Banner->Name = $request->name;

    if($request->hasFile('fimage'))
    {
        $destination = '/adminassets/Uploads/Banner/'.$Banner->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        
        if($request->hasFile('fimage')){
            $image=$request->file('fimage');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/adminassets/Uploads/Banner');
            $image->move($dest,$reImage);
        }
        $Banner->image=$reImage;

    }
        $Banner->update();
     return redirect('/admin/banner/list');

}


//    Banner delete data ----------------------
public function remove($id)
{
    $Banner = Banner::find($id);
    $Banner->delete();
    return redirect('admin/banner/list');
 
}
}
