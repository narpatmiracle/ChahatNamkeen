<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Productimage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Validator;
use Redirect;

class ProductController extends Controller
{
    public function Create()
    {
        $category = Categories::get();
       
        return view('.Admin.Product.create',compact('category'));
    }  

    public function index($id)
    {
        $data = Product::find($id);
        return response()->json($data);
    } 

    public function show()
    {
        $product =  Product::all();
        return view('admin.Product.index', compact('product'));                           
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
            [
           'name' => 'required',
           'code' => 'required',
           'Description' => 'required',
           'stock' => 'required',
           'price' => 'required',
           'DiscontPrice' => 'required',
           'TaxRate' => 'required',
           'categories_id' => 'required',
           'tags' => 'required',
           'brand' => 'required',
           'Vendor' => 'required',
           'image' => 'required',
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        
        
        $product = new Product();
      
        $product->Categoris_id = $request->categories_id;
        $product->Name = $request->name;
        $product->Code = $request->code;
        $product->Description = $request->Description;
        $product->Stock = $request->stock;
        $product->Price = $request->price;
        $product->DiscontPrice = $request->DiscontPrice;
        $product->TaxRate = $request->TaxRate;
        $product->Tags = $request->tags;
        $product->Brand = $request->brand;
        $product->Vendor = $request->Vendor;


        if($request->hasFile('image')){
            $image=$request->file('image');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/adminassets/Uploads/Products');
            $image->move($dest,$reImage);
        }
        $product->image=$reImage;
       
        $product->save();
        if($product){
            if($request->fimage){

                foreach($request->file('fimage') as $image){
                    $productimage = new Productimage();
                    $name = $image->getClientOriginalName();
                    $dest = public_path('/adminassets/Uploads/Products/Productimage');
                    $image->move($dest,$name);
    
                    $productimage->image=$name;
                   
                    $productimage->Product_id = $product->id;
                    
                    $productimage->save();
                }
                
            }
           
        return redirect('/admin/product/list');
            
        }else{
            return redirect('/admin/product')->with('error',"Somthing went wrong");
        }
       
    }
   

    

    public function status(Request $request)
    {
         $data = Product::where('id',$request->id)->first();
         if($data->status==1){
             $data->status = 0;
         }else{
             $data->status = 1;
         }
 
          $data->update();
    }


    public function edit($id)   
    {
        $data = Product::find($id);
        $Pimage = Productimage::where('Product_id' ,$data->id)->get();
        
        $category = Categories::get();

        return view('admin.Product.edit', compact('data','category','Pimage'));
        
    }

    public function Update(request $request, $id)
    {
        $validator = Validator::make($request->all(), 
        [
       'name' => 'required',
       'code' => 'required',
       'Description' => 'required',
       'stock' => 'required',
       'price' => 'required',
       'DiscontPrice' => 'required',
       'TaxRate' => 'required',
       'categories_id' => 'required',
       'tags' => 'required',
       'brand' => 'required',
       'Vendor' => 'required',
       'image' => '',
    ]);

    if($validator->fails()) {
        return Redirect::back()->withErrors($validator);
    }
        
        $product = Product::find($id);
        $product->Name = $request->name;
        $product->Code = $request->code;
        $product->Description = $request->Description;
        $product->Stock = $request->stock;
        $product->Price = $request->price;
        $product->DiscontPrice = $request->DiscontPrice;
        $product->TaxRate = $request->TaxRate;
        $product->Tags = $request->tags;
        $product->Brand = $request->brand;
        $product->Vendor = $request->Vendor;
    
        if($request->hasFile('image')){
            $image=$request->file('image');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/adminassets/Uploads/Products');
            $image->move($dest,$reImage);
            $product->image=$reImage;
            
        }

        
        if($product->update()){
            if($request->fimage){
                
                foreach($request->file('fimage') as $image){
                    $productimage = new Productimage();
                    $name = $image->getClientOriginalName();
                    $dest = public_path('/adminassets/Uploads/Products/Productimage');
                    $image->move($dest,$name);
    
                    $productimage->image=$name;
                   
                    $productimage->Product_id = $product->id;
                    
                    $productimage->save();
                }
                
            }
           
        return redirect('/admin/product/list');
            
        }else{
            return redirect('/admin/product')->with('error',"Somthing went wrong");
        }

        
    
    }
    
   

//    Categories delete data ----------------------
public function Delete($id)
{
    $category = Product::find($id);
    $category->delete();
    return redirect('/admin/product/list');
 
}

public function Destroy($id)
{
    $Pimage = Productimage::where('id', $id)->delete();
    return redirect('/admin/product/list')->with('success', "Product image Delete Succefully");
}


}
