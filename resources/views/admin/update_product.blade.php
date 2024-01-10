<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
<style>
    .div_center{
        text-align: center;
        padding-top: 40px;
    }

    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }

    .input_color{
        color: black;
        margin-bottom: 15px;
       
    }

    .labell{
      display: inline-block;
      width: 200px;
    }

    @import 'https://fonts.googleapis.com/css?family=Open+Sans:600,700';

* {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background: #428bca;
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


/* THE END OF THE IMPORTANT STUFF */

/* Basic Styling */
body {
background: #4B79A1;
background: -webkit-linear-gradient(to left, #4B79A1 , #283E51);
background: linear-gradient(to left, #4B79A1 , #283E51);        
}
h1 {
  text-align: center;
  font-size: 2.4em;
  color: #f2f2f2;
}
.container {
  display: block;
  text-align: center;
}
h3 {
  display: inline-block;
  position: relative;
  text-align: center;
  font-size: 1.5em;
  color: #cecece;
}
h3:before {
  content: "\25C0";
  position: absolute;
  left: -50px;
  -webkit-animation: leftRight 2s linear infinite;
  animation: leftRight 2s linear infinite;
}
h3:after {
  content: "\25b6";
  position: absolute;
  right: -50px;
  -webkit-animation: leftRight 2s linear infinite reverse;
  animation: leftRight 2s linear infinite reverse;
}
@-webkit-keyframes leftRight {
  0%    { -webkit-transform: translateX(0)}
  25%   { -webkit-transform: translateX(-10px)}
  75%   { -webkit-transform: translateX(10px)}
  100%  { -webkit-transform: translateX(0)}
}
@keyframes leftRight {
  0%    { transform: translateX(0)}
  25%   { transform: translateX(-10px)}
  75%   { transform: translateX(10px)}
  100%  { transform: translateX(0)}
}



</style>

  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
       <div class="main-panel" >
       <div class="content-wrapper" style="background-color: #4B79A1">
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            
            {{ session()->get('message') }}
              
          </div>
             @endif
        <div class="div_center">
         <h2 class="h2_font">Update Product</h2>
           <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="labell">Title</label>
            <input type="text" class="input_color" name="title" value="{{$product->title}}" placeholder="Enter title name"><br>
            <label class="labell">Description</label>
            <input type="text" class="input_color" name="description" value="{{$product->description}}" placeholder="Enter description"><br>
            <label class="labell">Quantity</label>
            <input type="number" min="0" class="input_color" name="quantity" value="{{$product->quantity}}" placeholder="Enter quantity"><br>
            
            <label class="labell">Price</label>
            <input type="number" class="input_color" name="price" value="{{$product->price}}" placeholder="Enter price"><br>
            <label class="labell">Price discount</label>
            <input type="number" class="input_color" name="discount_price" value="{{$product->discount_price}}" placeholder="Enter price discount"><br>
            <label class="labell">Category</label>
            <select class="input_color" name="category">
              <option value="{{$product->category}}" selected="">
                {{$product->category}}
              </option>
              @foreach ($category as $category)
                
              
              <option value="{{$category->category_name}}">
              {{$category->category_name}}
            </option>

            @endforeach
            </select><br>
            <label class="labell">Current product Image</label>
            <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}">
            <input type="file" class="input_color" name="image" placeholder="Upload image"><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Update Product"> 
           </form>

        </div>

        

       </div>
       </div>    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>