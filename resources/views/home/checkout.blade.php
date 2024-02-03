<!DOCTYPE html>
<html lang="en">
    @include('home.head')
   
    <body>
        @include('home.nav')
        <!-- Spinner Start >
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        < Spinner End -->


        <!-- Navbar start -->
        
        <!-- Navbar End -->


        <!-- Modal Search Start -->
       
        <!-- Modal Search End -->

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Checkout</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="">Pages</a></li>
        <li class="breadcrumb-item active text-white">Checkout</li>
    </ol>
</div>
<!-- Single Page Header End -->
        


        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Billing details</h1>
                <form>
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">Name<sup>*</sup></label>
                                        <input id="name" type="text" class="form-control">
                                    </div>
                                </div>
                               
                            <!--div class="form-item">
                                <label class="form-label my-3">Company Name<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div-->
                            <div class="form-item">
                                <label class="form-label my-3">Address <sup>*</sup></label>
                                <input type="text" id="address" class="form-control" placeholder="House Number Street Name">
                            </div>
                           
                            <div class="form-item">
                                <label class="form-label my-3">Mobile<sup>*</sup></label>
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Email Address<sup>*</sup></label>
                                <input type="email" id="email" class="form-control">
                            </div><br>
                           
                            <div class="form-item">
                                <textarea name="text" id="additional" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Oreder Notes (Optional)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-12">
                            <div class="table-responsive">
                                <table class="table" id="mytablee">
                                    <thead>
                                        <tr>
                                            <th scope="col">Products</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($mycart as $mycart)
                                        <tr data-id="{{$mycart->product_id}}" data-purchased="{{ $mycart->quantity }}">
                                            <th scope="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="/product/{{$mycart->image}}" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                                                </div>
                                            </th>
                                            <td class="py-5">{{$mycart->product_title}}</td>
                                            <td class="py-5">{{($mycart->price)/($mycart->quantity)}}</td>
                                            <td class="py-5">{{ $mycart->quantity }}</td>
                                            <td class="py-5">{{$mycart->price}}</td>
                                        </tr>
                                        
                                       @endforeach
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td class="py-5"></td>
                                            <td class="py-5"></td>
                                            <td class="py-5">
                                                <p class="mb-0 text-dark py-3">Subtotal</p>
                                            </td>
                                            <td class="py-5">
                                                <div class="py-3 border-bottom border-top">
                                                    <p class="mb-0 text-dark">{{$cartsum}}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td class="py-5">
                                                <p class="mb-0 text-dark py-4">Shipping</p>
                                            </td>
                                            <td colspan="3" class="py-5">
                                                <div class="form-check text-start">
                                                    <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-1" name="Shipping-1" value="Shipping">
                                                    <label class="form-check-label" for="Shipping-1">Free Shipping</label>
                                                </div>
                                                <div class="form-check text-start">
                                                    <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-2" name="Shipping-1" value="Shipping">
                                                    <label class="form-check-label" for="Shipping-2">Flat rate: $15.00</label>
                                                </div>
                                                <div class="form-check text-start">
                                                    <input type="checkbox" class="form-check-input bg-primary border-0" id="Shipping-3" name="Shipping-1" value="Shipping">
                                                    <label class="form-check-label" for="Shipping-3">Local Pickup: $8.00</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td class="py-5">
                                                <p class="mb-0 text-dark text-uppercase py-3">TOTAL</p>
                                            </td>
                                            <td class="py-5"></td>
                                            <td class="py-5"></td>
                                            <td class="py-5">
                                                <div class="py-3 border-bottom border-top">
                                                    <p class="mb-0 text-dark">{{$cartsum}}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           
                            <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                                <div class="col-12">
                                    <div class="form-check text-start my-3">
                                        <input type="radio" class="form-check-input bg-primary border-0 cash" id="Payments-1" name="cash" value="Mobile Payments">
                                        <label class="form-check-label" for="Payments-1">Mobile Payments</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                                <div class="col-12">
                                    <div class="form-check text-start my-3">
                                        <input type="radio" class="form-check-input bg-primary border-0 cash" id="Delivery-1" name="cash" value="Cash on Delivery">
                                        <label class="form-check-label" for="Delivery-1">Cash On Delivery</label>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="button" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary checkout">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->


        <!-- Footer Start -->
        @include('home.footer')




<div class="container bootstrap snippets bootdey">
    <div class="btn-demo" id="btn-color-targets">
        
        <a href="#modalColor" id="thank" aria-hidden="true" data-target-color="lightgreen" data-toggle="modal" class="btn btn-default "></a>
       
    </div>
</div>

<div class="modal fade" data-modal-color="" id="modalColor" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p><div id="mycode" style="color:red;"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.</p>
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



    </body>

</html>