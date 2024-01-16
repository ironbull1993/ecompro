
   

<?php
//namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
if (Session::has('key')){
   $sesion=Session::get('key');
   $cartcount=Cart::where('user_id', $sesion)->count();
  
  
}
else{
   
   $cartcount="0";
  
 
}
?>
<header class="header_section" style="">
  
            <div class="container">
               
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                 
                
                  <a class="navbar-brand" href="{{ url('/') }}"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/cart_items') }}">Cart<sup id="superscript" style="vertical-align: super;font-size: smaller;">{{$cartcount}}</sup></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        @if (Route::has('login'))
                          @auth
                          <li class="nav-item">
                           <form action="logout" method="POST">
                              @csrf()
                           <button type="submit" class="btn btn-primary" id="logincss">LogOut</a>
                           
                        </li>
                                                     
                        @else
                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                        @endif
                        <!--button class="btn  my-2 my-sm-0 nav_search-btn" href="{{ url('/cart_items') }}">
                           <i class="fa fa-cart-plus" style="font-size:36px;margin-left:45px;" aria-hidden="true"></i>
                           </button-->
                          
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         @include('home.css')
        
  