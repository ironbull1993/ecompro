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

/** 
    public function check_cart(){
        $cartchk=Cart::all();
        $product=Product::all();
        return view('home.userpage',compact('cartchk','product'));

    }
*/
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
