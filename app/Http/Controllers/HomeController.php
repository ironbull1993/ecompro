<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
class HomeController extends Controller
{
    public function addproduct(Request $request)
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
            $cartcount=Cart::where('user_id', $sesion)->count();
            //Session::forget('key');
           // return redirect()->back();
           return response()->json(['message'=>$cartcount]);
        }
        else{
            $uniqid=uniqid();
            $userid=new User;
            $userid->userid=$uniqid;
            $userid->usertype="0";
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
            $cartcount=Cart::where('user_id', $sesion)->count();
            //return redirect()->back();
            return response()->json(['message'=>$cartcount]);
        }
        
        
    }

    public function checkout(Request $request)
{
    if (Session::has('key')) {
        $itemIds = [];
        $isQuantityZero = false;
        $productData = $request->input('products');

        foreach ($productData as $data) {
            $productId = $data['id'];
            $purchasedItems = $data['purchased'];

            // Update the product's quantity based on the purchased items
            $product = Product::find($productId);

            if ($product->quantity == 0) {
                $isQuantityZero = true;
                $itemIds[] = $product->id;
                //break; // Stop the execution if the quantity is zero
              
            }
        }

        if ($isQuantityZero) {
            return response()->json(['message' => 'Quantity is zero, update not performed', 'itemIds' => $itemIds]);
        } else {
            $session = Session::get('key');
            $user = User::where('userid', $session)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->additional = $request->additional;
            $user->cash = $request->cash;
            $user->save();

            $newOrder = new Order;
            $newOrder->userid = $session;
            $newOrder->save();


            foreach ($productData as $data) {
                $productId = $data['id'];
                $purchasedItems = $data['purchased'];
    
                // Update the product's quantity based on the purchased items
                $product = Product::find($productId);
    
                
                    $product->quantity -= $purchasedItems;
                    $product->save();
                
            }

            Session::forget('key');
            return response()->json(['message' => $session]);
        }
    } else {
        return view('home.userpage');
    }
}

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
            $cartcount=Cart::where('user_id', $sesion)->count();
            //Session::forget('key');
           // return redirect()->back();
           return response()->json(['message' => 'Item added to cart','message2'=>$cartcount]);
        }
        else{
            $uniqid=uniqid();
            $userid=new User;
            $userid->userid=$uniqid;
            $userid->usertype="0";
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
            $cartcount=Cart::where('user_id', $sesion)->count();
            //return redirect()->back();
            return response()->json(['message' => 'Item added to cart','message2'=>$cartcount]);
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
        $catsumm=Cart::where('user_id',Session::get('key'))->sum('price');

        $total=$catsumm;
        return response()->json(['message' => $cartcount-1,'message2'=>$total,'message3'=>$cartcount-1]);
        //return response()->json(['message2' => $cartcount]);
       // return redirect()->back();
    }


    public function rmvItemall(){
        if (Session::has('key')){
            $sesion=Session::get('key');
            
        }
        else{
            $cartcount="0";
        }

        Cart::where('user_id',$sesion)->delete();
        $catsumm=Cart::where('user_id',Session::get('key'))->sum('price');
        $cartcount=Cart::where('user_id', $sesion)->count();
        $total=$catsumm;
        return response()->json(['message' => $cartcount,'message2'=>$total,'message3'=>$cartcount]);
        //return response()->json(['message2' => $cartcount]);
       // return redirect()->back();
    }




    public function qtyItem(Request $request){
        $sesion=Session::get('key');
        
        $cart=Cart::find($request->id);
        $product=Product::find($cart->product_id);
        
    if($product->quantity<$request->qty){
        return response()->json(['message1' => "Maximum stock reached!", 'message3' => $product->quantity]);
    }else{if($product->discount_price!=null){
        $cart->price=$product->discount_price * $request->qty;}
        else{
            $cart->price=$product->price * $request->qty;
        }    
            $cart->quantity=$request->qty;
           
            $cart->save();
            $catsumm=Cart::where('user_id',Session::get('key'))->sum('price');
            
            $total=$catsumm;
          return response()->json(['message' => $cart->price,'message2'=>$total]);}


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
    return view('home.product_details',compact('product'));
 }

 public function mycheckout(){
    if (Session::has('key')){
    $sesion=Session::get('key');
    $mycart=Cart::where('user_id', $sesion)->get();
    $cartsum=Cart::where('user_id', $sesion)->sum('price');
    return view('home.checkout',compact('mycart','cartsum'));
    }
    else{
        $cartchk=Cart::all();
        $product=Product::all();
        return view('home.userpage',compact('product','cartchk'));
    }
 }
 

    public function index(){
       
         $cartchk=Cart::all();
         $products=Product::paginate(30);
         return view('home.userpage',compact('products','cartchk'));

    }
 
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
          return view('admin.home');
         // $uniqid=uniqid();
         // Session::put('key', $uniqid);
        }
        else{
            return view('home.userpage');
        }
    }

}
