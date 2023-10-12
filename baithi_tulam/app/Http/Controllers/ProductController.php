<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Http\Requests\validate;

class ProductController extends Controller
{
    function index(){
        return view('product/index');
    }

    function addProduct($id=null){
    
        $cats=category::all();
        $oneRow=null;

        if($id){
            $oneRow=product::find($id);

        }  
       
        // echo "<pre>";     
        // dd($oneRow); 
        return view("product/addNew",['cats'=>$cats,'row' => $oneRow ]);
    }
    function listProduct(){
        $products=product::paginate(4);
        // echo "<pre>";     
        // dd($cat); 
        return view("product/listPro",['products'=>$products]);
    }
    function delProduct($id){ 
        $product = product::find($id);
        $product->delete();
        return redirect('/listproduct');
    }
    
    function store(validate $req){
        // echo "<pre>";     
        // dd($req->all()); 
        if($req){  
            if($req->id){
                //update record
                $product = product::find($req->id);
            }else{
                //add record
                $product = new product();
            }
            
            $product->fill($req->all());
            $product->category_id = $req->cat;
            if($req->file()){
                $file=$req->file('image');
                $imgName=$file->getClientOriginalName();
               $destinationPath = 'img';
               $imgPath = $file->storeAs($destinationPath, $imgName);
               $product->image = $imgPath;
               //Move Uploaded File
               $file->move($destinationPath,$imgName);

            }         
            $product->save();
         }
         return redirect('/listproduct');

    }
   

}