<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
class AdminController extends Controller
{
    public function edited(Request $request){
        $product=product::find($request->input('id'));
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $category=category::find($request->input('category'));
        $product->category=$category->category_name;
        
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        //$product->discount_price = $request->input('discount_price');
    
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('product', $imageName);
                $product->image = $imageName;
            }
        }
    
    
        $product->save();
        return response()->json(['message1' =>$request->input('title'),'message2' =>$request->input('description'),'message3' =>$category->category_name,'message4' =>$request->input('quantity'),'message5' =>$request->input('price'),'message6' =>$imageName]);
     }

    public function editproduct(Request $request){
        $product=product::find($request->id);
        $category=category::all();
        //$image=$request->image;
        //$imagename=time().'.'.$image->getClientOriginalExtension();
       // $request->image->move('product',$imagename);
       // $product->image=$imagename;
        return response()->json(['message1' => $product->title,'message2'=>$product->description,'message3'=>$product->price
        ,'message4'=>$product->quantity]);
    }

    public function catedit(Request $request){
        $catg=Category::find($request->id);
        return response()->json(['message1' => $catg->category_name]);
    }

    public function catedited(Request $request){
        $catg=Category::find($request->id1);
        $catg->category_name=$request->title1;
       
 
        // $image=$request->image;
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('product',$imagename);
        // $product->image=$imagename;
 
        $catg->save();
        return response()->json(['message1' =>$request->title1]);
     }
 
    public function editproduct1(){

        $category=category::all();
        
        return response()->json($category);
    }


    public function rmvproduct(Request $request){

        $data=Product::find($request->id);
        $data->delete();

        return response()->json(['message2' => 'deleted']);
    }

    public function rmvorder(Request $request){

        $data=Order::find($request->id);
        $data->delete();

        return response()->json(['message2' => 'deleted']);
    }

    public function vieworder($id){
        $customer=User::where('userid', $id)->first();
        $data=Cart::where('user_id', $id)->get();
        $order=Order::where('userid', $id)->first();
       
        $catsumm=Cart::where('user_id',$id)->sum('price');
        $catcount=Cart::where('user_id',$id)->count();
        return view('admin.orderdetails',compact('data','order','catsumm','customer','catcount'));
    }

    public function show_product(){
        $product=product::all();
        return view('admin.products',compact('product'));
    }

    public function view_product(){
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function added(Request $request)
    {
        $product = new Product;
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $category=category::find($request->input('category'));
        $product->category=$category->category_name;
        
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        //$product->discount_price = $request->input('discount_price');
    
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('product', $imageName);
                $product->image = $imageName;
            }
        }
    
        $product->save();
    
        // Redirect back or return a JSON response
        //return redirect()->back();
        // Or
         //return response()->json(['message' =>$product->id,'message1' =>$product->category]);
    }

    public function view_category(){
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function view_order(){
        $orders=Order::all();
        return view('admin.orders',compact('orders'));
    }

    public function view_orderdetails(){
        //$data=category::all();
        return view('admin.orderdetails'  );
    }

    public function catadd(Request $request){

        $data=new Category;

        $data->category_name=$request->title;
        $data->save();
        //return redirect()->back()->with('message','Category added successfully');
    }

    public function catrmv(Request $request){

        $data=Category::find($request->id);
        $data->delete();

        //return redirect()->back()->with('message','Category deleted successfully');
    }


    public function chartdata(){
        $data = Product::all();
        return response()->json($data);
    }

    public function loggedout(){
        Auth::logout();
    return redirect('/');
       // return view('home.userpage'  );
    }

}
