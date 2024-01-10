<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function show_product(){
        $product=product::all();
        return view('admin.products',compact('product'));
    }

    public function view_product(){
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function add_product(Request $request){
       $product=new product;
       $product->title=$request->title;
       $product->description=$request->description;
       
       $product->category=$request->category;
       $product->quantity=$request->quantity;
       $product->price=$request->price;
       $product->discount_price=$request->discount_price;

       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('product',$imagename);
       $product->image=$imagename;

       $product->save();
       return redirect()->back()->with('message','Product added successfully');
    }

    public function view_category(){
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){

        $data=new Category;

        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category added successfully');
    }

    public function delete_category($id){

        $data=Category::find($id);
        $data->delete();

        return redirect()->back()->with('message','Category deleted successfully');
    }

}
