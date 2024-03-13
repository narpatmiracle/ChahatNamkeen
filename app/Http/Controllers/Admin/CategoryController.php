<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;







class CategoryController extends Controller
{
    public function Create()
    {
        return view('admin.Category.Create');
    }  
    
    public function store(Request $request)
    {
        $category = new Categories();
        $category->Name = $request->name;
        if($request->hasFile('fimage')){
            $image=$request->file('fimage');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/adminassets/Uploads/Categories');
            $image->move($dest,$reImage);
        }
        $category->image=$reImage;
         
        $category->Description = $request->Desc;
        $category->save();
        return redirect('admin/category/list');
    }

    public function index($id)
    {
        $category = Categories::find($id);
        return view('admin.Category.Show', compact('category'));
    } 
    
    public function show()
    {
        $data = Categories::all();
        return view('admin.Category.index', compact('data'));                           
    }

    
   public function changestatus(Request $request)
   {
        $category = Categories::where('id',$request->id)->first();
        if($category->status==1){
            $category->status = 0;
        }else{
            $category->status = 1;
        }

         $category->update();
   }

// Categories Edit and Update ------------------------

public function Edit($id)   
{
    $data = Categories::find($id);
    return view('admin.Category.Edit', compact('data'));
    
}


public function Update(request $request, $id)
{
    $category = Categories::find($id);
    $category->Name = $request->name;
    $category->Description = $request->Desc;

    if($request->hasFile('fimage'))
    {
        $destination = '/adminassets/Uploads/Categories/'.$category->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        
        if($request->hasFile('fimage')){
            $image=$request->file('fimage');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/adminassets/Uploads/Categories');
            $image->move($dest,$reImage);
        }
        $category->image=$reImage;

    }
        $category->update();
     return redirect('/admin/category/list');

}


//    Categories delete data ----------------------
public function remove($id)
{
    $category = Categories::find($id);
    $category->delete();
    return redirect('admin/category/list');
 
}
 
}
    

