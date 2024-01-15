<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
class HomeController extends Controller
{

    public function addItem(Request $request)
    {  
        // return $request->id;
        if (Session::has('key')){
            $sesion=Session::get('key');
            $product=Product::find($request->id);
            $cart=new cart;
            $cart->product_title=$product->title;
        
        if($product->discount_price!=null){
        $cart->price=$product->discount_price * $request->qty;}
        else{
            $cart->price=$product->price * $request->qty;
        }    
            $cart->quantity=$request->qty;
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->product_title=$product->title;
            $cart->user_id=$sesion;
        
            $cart->save();
            //Session::forget('key');
           // return redirect()->back();
           return response()->json(['message' => 'Item added to cart']);
        }
        else{
            $uniqid=uniqid();
            $userid=new User;
            $userid->userid=$uniqid;
            $userid->save();
        
            Session::put('key', $uniqid);
            $sesion=Session::get('key');
            $product=Product::find($request->id);
            $cart=new cart;
            $cart->product_title=$product->title;
        
        if($product->discount_price!=null){
        $cart->price=$product->discount_price * $request->qty;}
        else{
            $cart->price=$product->price * $request->qty;
        }    
            $cart->quantity=$request->qty;
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->product_title=$product->title;
            $cart->user_id=$sesion;
        
            $cart->save();
        
            //return redirect()->back();
            return response()->json(['message' => 'Item added to cart']);
        }
        
        
    }

    public function rmvItem(Request $request){
        if (Session::has('key')){
            $sesion=Session::get('key');
            $cartcount=Cart::where('user_id', $sesion)->count();
        }
        else{
            $cartcount="0";
        }

        $data=Cart::where('id',$request->id)->where('user_id',Session::get('key'))->first();
        $data->delete();
        
        return response()->json(['message' => $cartcount-1]);
        //return response()->json(['message2' => $cartcount]);
       // return redirect()->back();
    }

    public function qtyItem(Request $request){
        $sesion=Session::get('key');
        
        $cart=Cart::find($request->id);
        $product=Product::find($cart->product_id);
        
    
    if($product->discount_price!=null){
    $cart->price=$product->discount_price * $request->qty;}
    else{
        $cart->price=$product->price * $request->qty;
    }    
        $cart->quantity=$request->qty;
       
        $cart->save();
        
       return response()->json(['message' => $cart->price]);
    }

    public function deletecart(){

        $data=Cart::where('user_id',Session::get('key'));
        $data->delete();

        return redirect()->back();
    }


    public function deletecart_product($id){

        $data=Cart::where('id',$id)->where('user_id',Session::get('key'))->first();
        $data->delete();

        return redirect()->back();
    }


    public function user_register(){
        if (Session::has('key')){
        Session::forget('key');
        $cartchk=Cart::all();
        $product=Product::all();
        return view('home.userpage',compact('product','cartchk'));
        }
         else{
            $cartchk=Cart::all();
            $product=Product::all();
            return view('home.userpage',compact('product','cartchk'));
         }
    }

    public function cart_items(){
        $sesion=Session::get('key');

       $mycart=Cart::where('user_id', $sesion)->get();
       $cartcount=Cart::where('user_id', $sesion)->count();
       $cartsum=Cart::where('user_id', $sesion)->sum('price');
        return view('home.cart_items',compact('mycart','cartcount','cartsum'));

    }

public function add_cart(Request $request,$id){

    if (Session::has('key')){
    $sesion=Session::get('key');
    $product=Product::find($id);
    $cart=new cart;
    $cart->product_title=$product->title;

if($product->discount_price!=null){
$cart->price=$product->discount_price * $request->quantity;}
else{
    $cart->price=$product->price * $request->quantity;
}    
    $cart->quantity=$request->quantity;
    $cart->image=$product->image;
    $cart->product_id=$product->id;
    $cart->product_title=$product->title;
    $cart->user_id=$sesion;

    $cart->save();
    //Session::forget('key');
    return redirect()->back();
}
else{
    $uniqid=uniqid();
    $userid=new User;
    $userid->userid=$uniqid;
    $userid->save();

    Session::put('key', $uniqid);
    $sesion=Session::get('key');
    $product=Product::find($id);
    $cart=new cart;
    $cart->product_title=$product->title;

if($product->discount_price!=null){
$cart->price=$product->discount_price * $request->quantity;}
else{
    $cart->price=$product->price * $request->quantity;
}    
    $cart->quantity=$request->quantity;
    $cart->image=$product->image;
    $cart->product_id=$product->id;
    $cart->product_title=$product->title;
    $cart->user_id=$sesion;

    $cart->save();

    return redirect()->back();

}

   

}


 public function product_details($id){
    $product=Product::find($id);
    //Session::forget('key');
    return view('home.product_details',compact('product'));
 }


 

    public function index(){
       // return view('home.userpage');
       
         $cartchk=Cart::all();
         $product=Product::all();
         return view('home.userpage',compact('product','cartchk'));

    }
 
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
          return view('admin.home');
        }
        else{
            return view('home.userpage');
        }
    }

}
