<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('admin/assets/') }}" data-template="">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Order Details - eCommerce | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/typeahead-js/typeahead.css')}}" /> 
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
<link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/select2/select2.css')}}" />

    <!-- Page CSS -->
    

    <!-- Helpers -->
    <script src="{{asset('admin/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="admin/assets/vendor/js/template-customizer.js"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin/assets/js/config.js')}}"></script>
    
</head>



<body>
    @include('admin.sidebar')
    @include('admin.nav')
     <!-- Content wrapper -->

   <!-- Content wrapper -->
   <div class="content-wrapper">

    <!-- Content -->
    
      <div class="container-xxl flex-grow-1 container-p-y">
        
        

<h4 class="py-3 mb-4">
<span class="text-muted fw-light">eCommerce /</span> Order Details
</h4>

<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

<div class="d-flex flex-column justify-content-center">
<h5 class="mb-1 mt-3">Order #32543 <span class="badge bg-label-success me-2 ms-2">Paid</span> <span class="badge bg-label-info">Ready to Pickup</span></h5>
<p class="text-body">Aug 17, <span id="orderYear"></span>, 5:48 (ET)</p>
</div>
<div class="d-flex align-content-center flex-wrap gap-2">
<button class="btn btn-label-danger delete-order">Delete Order</button>
</div>
</div>

<!-- Order Details Table -->

<div class="row">
<div class="col-12 col-lg-8">
<div class="card mb-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="card-title m-0">Order details</h5>
    <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6>
  </div>
  <div class="card-datatable table-responsive">
    <table class="order-details table">
      <thead>
        <tr>
          {{-- <th></th> --}}
          <th></th>
          <th class="w-50">products</th>
          <th class="w-25">price</th>
          <th class="w-25">qty</th>
          <th>total</th>
        </tr>
      </thead>
      <tbody>
        <tr class="odd">
            {{-- <td class="  control" tabindex="0" style="display: none;">
            </td> --}}
            <td class="  dt-checkboxes-cell"
            ><input type="checkbox" class="dt-checkboxes form-check-input">
        </td>
        <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center text-nowrap">
                <div class="avatar-wrapper">
                    <div class="avatar me-2">
                        <img src="{{asset('admin/assets/img/avatars/15.png')}}" alt="product-Wooden Chair" class="rounded-2" style="filter: invert(0);">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h6 class="text-body mb-0">Wooden Chair</h6>
                    <small class="text-muted">Material: Wooden</small>
                </div>
            </div>
        </td>
        <td>
            <span>$841</span>
        </td>
        <td>
            <span class="text-body">2</span>
        </td>
        <td><h6 class="mb-0">$1682</h6>
        </td>
    </tr>
      </tbody>
    </table>
    <div class="d-flex justify-content-end align-items-center m-3 mb-2 p-1">
      <div class="order-calculations">
        <div class="d-flex justify-content-between mb-2">
          <span class="w-px-100">Subtotal:</span>
          <span class="text-heading">$6398</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <span class="w-px-100">Discount:</span>
          <span class="text-heading mb-0">$22</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <span class="w-px-100">Tax:</span>
          <span class="text-heading">$30</span>
        </div>
        <div class="d-flex justify-content-between">
          <h6 class="w-px-100 mb-0">Total:</h6>
          <h6 class="mb-0">$6450</h6>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card mb-4">
  {{-- <div class="card-header">
    <h5 class="card-title m-0">Shipping activity</h5>
  </div>
  <div class="card-body">
    <ul class="timeline pb-0 mb-0">
      <li class="timeline-item timeline-item-transparent border-primary">
        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
        <div class="timeline-event">
          <div class="timeline-header">
            <h6 class="mb-0">Order was placed (Order ID: #32543)</h6>
            <span class="text-muted">Tuesday 11:29 AM</span>
          </div>
          <p class="mt-2">Your order has been placed successfully</p>
        </div>
      </li>
      <li class="timeline-item timeline-item-transparent border-primary">
        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
        <div class="timeline-event">
          <div class="timeline-header">
            <h6 class="mb-0">Pick-up</h6>
            <span class="text-muted">Wednesday 11:29 AM</span>
          </div>
          <p class="mt-2">Pick-up scheduled with courier</p>
        </div>
      </li>
      <li class="timeline-item timeline-item-transparent border-primary">
        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
        <div class="timeline-event">
          <div class="timeline-header">
            <h6 class="mb-0">Dispatched</h6>
            <span class="text-muted">Thursday 11:29 AM</span>
          </div>
          <p class="mt-2">Item has been picked up by courier</p>
        </div>
      </li>
      <li class="timeline-item timeline-item-transparent border-primary">
        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
        <div class="timeline-event">
          <div class="timeline-header">
            <h6 class="mb-0">Package arrived</h6>
            <span class="text-muted">Saturday 15:20 AM</span>
          </div>
          <p class="mt-2">Package arrived at an Amazon facility, NY</p>
        </div>
      </li>
      <li class="timeline-item timeline-item-transparent border-left-dashed">
        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
        <div class="timeline-event">
          <div class="timeline-header">
            <h6 class="mb-0">Dispatched for delivery</h6>
            <span class="text-muted">Today 14:12 PM</span>
          </div>
          <p class="mt-2">Package has left an Amazon facility, NY</p>
        </div>
      </li>
      <li class="timeline-item timeline-item-transparent border-transparent pb-0">
        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-secondary"></span></span>
        <div class="timeline-event pb-0">
          <div class="timeline-header">
            <h6 class="mb-0">Delivery</h6>
          </div>
          <p class="mt-2 mb-0">Package will be delivered by tomorrow</p>
        </div>
      </li>
    </ul>
  </div>
</div> --}}
</div>
<div class="col-12 col-lg-4">
<div class="card mb-4">
  <div class="card-header">
    <h6 class="card-title m-0">Customer details</h6>
  </div>
  <div class="card-body">
    <div class="d-flex justify-content-start align-items-center mb-4">
      <div class="avatar me-2">
        <img src="admin/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
      </div>
      <div class="d-flex flex-column">
        <a href="app-user-view-account.html" class="text-body text-nowrap">
          <h6 class="mb-0">Shamus Tuttle</h6>
        </a>
        <small class="text-muted">Customer ID: #58909</small></div>
    </div>
    <div class="d-flex justify-content-start align-items-center mb-4">
      <span class="avatar rounded-circle bg-label-success me-2 d-flex align-items-center justify-content-center"><i class="bx bx-cart-alt bx-sm lh-sm"></i></span>
      <h6 class="text-body text-nowrap mb-0">12 Orders</h6>
    </div>
    <div class="d-flex justify-content-between">
      <h6>Contact info</h6>
      {{-- <h6><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editUser">Edit</a></h6> --}}
    </div>
    <p class=" mb-1">Email: Shamus889@yahoo.com</p>
    <p class=" mb-0">Mobile: +1 (609) 972-22-22</p>
  </div>
  <div class="card mb-4">

    <div class="card-header d-flex justify-content-between">
      <h6 class="card-title m-0">Shipping address</h6>
      {{-- <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6> --}}
    </div>
    <div class="card-body">
      <p class="mb-0">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
    </div>
  
  </div>
</div>

{{-- <div class="card mb-4">

  <div class="card-header d-flex justify-content-between">
    <h6 class="card-title m-0">Shipping address</h6>
    <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
  </div>
  <div class="card-body">
    <p class="mb-0">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
  </div>

</div> --}}
{{-- <div class="card mb-4">
  <div class="card-header d-flex justify-content-between">
    <h6 class="card-title m-0">Billing address</h6>
    <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
  </div>
  <div class="card-body">
    <p class="mb-4">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
    <h6 class="mb-0 pb-2">Mastercard</h6>
    <p class="mb-0">Card Number: ******4291</p>
  </div> --}}

</div>
</div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-simple modal-edit-user">
<div class="modal-content p-3 p-md-5">
  <div class="modal-body">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p>Updating user details will receive a privacy audit.</p>
    </div>
    <form id="editUserForm" class="row g-3" onsubmit="return false">
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserFirstName">First Name</label>
        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserLastName">Last Name</label>
        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
      </div>
      <div class="col-12">
        <label class="form-label" for="modalEditUserName">Username</label>
        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserEmail">Email</label>
        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserStatus">Status</label>
        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
          <option selected>Status</option>
          <option value="1">Active</option>
          <option value="2">Inactive</option>
          <option value="3">Suspended</option>
        </select>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditTaxID">Tax ID</label>
        <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserPhone">Phone Number</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text">+1</span>
          <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
        </div>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserLanguage">Language</label>
        <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
          <option value="">Select</option>
          <option value="english" selected>English</option>
          <option value="spanish">Spanish</option>
          <option value="french">French</option>
          <option value="german">German</option>
          <option value="dutch">Dutch</option>
          <option value="hebrew">Hebrew</option>
          <option value="sanskrit">Sanskrit</option>
          <option value="hindi">Hindi</option>
        </select>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalEditUserCountry">Country</label>
        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
          <option value="">Select</option>
          <option value="Australia">Australia</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Belarus">Belarus</option>
          <option value="Brazil">Brazil</option>
          <option value="Canada">Canada</option>
          <option value="China">China</option>
          <option value="France">France</option>
          <option value="Germany">Germany</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Japan">Japan</option>
          <option value="Korea">Korea, Republic of</option>
          <option value="Mexico">Mexico</option>
          <option value="Philippines">Philippines</option>
          <option value="Russia">Russian Federation</option>
          <option value="South Africa">South Africa</option>
          <option value="Thailand">Thailand</option>
          <option value="Turkey">Turkey</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
        </select>
      </div>
      <div class="col-12">
        <label class="switch">
          <input type="checkbox" class="switch-input">
          <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
          </span>
          <span class="switch-label">Use as a billing address?</span>
        </label>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<!--/ Edit User Modal -->

<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-simple modal-add-new-address">
<div class="modal-content p-3 p-md-5">
  <div class="modal-body">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="text-center mb-4">
      <h3 class="address-title">Add New Address</h3>
      <p class="address-subtitle">Add new address for express delivery</p>
    </div>
    <form id="addNewAddressForm" class="row g-3" onsubmit="return false">

      <div class="col-12">
        <div class="row">
          <div class="col-md mb-md-0 mb-3">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioHome">
                <span class="custom-option-body">
                  <i class="bx bx-home"></i>
                  <span class="custom-option-title">Home</span>
                  <small> Delivery time (9am – 9pm) </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-3">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioOffice">
                <span class="custom-option-body">
                  <i class='bx bx-briefcase'></i>
                  <span class="custom-option-title"> Office </span>
                  <small> Delivery time (9am – 5pm) </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalAddressFirstName">First Name</label>
        <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalAddressLastName">Last Name</label>
        <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
      </div>
      <div class="col-12">
        <label class="form-label" for="modalAddressCountry">Country</label>
        <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
          <option value="">Select</option>
          <option value="Australia">Australia</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Belarus">Belarus</option>
          <option value="Brazil">Brazil</option>
          <option value="Canada">Canada</option>
          <option value="China">China</option>
          <option value="France">France</option>
          <option value="Germany">Germany</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Japan">Japan</option>
          <option value="Korea">Korea, Republic of</option>
          <option value="Mexico">Mexico</option>
          <option value="Philippines">Philippines</option>
          <option value="Russia">Russian Federation</option>
          <option value="South Africa">South Africa</option>
          <option value="Thailand">Thailand</option>
          <option value="Turkey">Turkey</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
        </select>
      </div>
      <div class="col-12 ">
        <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
        <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
      </div>
      <div class="col-12">
        <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
        <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalAddressLandmark">Landmark</label>
        <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalAddressCity">City</label>
        <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalAddressLandmark">State</label>
        <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
      </div>
      <div class="col-12 col-md-6">
        <label class="form-label" for="modalAddressZipCode">Zip Code</label>
        <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
      </div>
      <div class="col-12">
        <label class="switch">
          <input type="checkbox" class="switch-input">
          <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
          </span>
          <span class="switch-label">Use as a billing address?</span>
        </label>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<!--/ Add New Address Modal -->



      </div>
      <!-- / Content -->

      
      

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
<div class="mb-2 mb-md-0">
© <script>document.write(new Date().getFullYear()) </script>, made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
</div>
<div class="d-none d-lg-inline-block">
  
  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
  
  <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link">Documentation</a>
  
  
  <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
  
</div>
</div>
</footer>
<!-- / Footer -->

      
      <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
  </div>
  <!-- / Layout page -->
</div>



<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->


{{-- <div class="buy-now">
<a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
</div> --}}




<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="{{asset('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('admin/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('admin/assets/vendor/js/menu.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/select2/select2.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('admin/assets/js/main.js')}}"></script>


<!-- Page JS -->
<script src="{{asset('admin/assets/js/app-ecommerce-order-details.js')}}"></script>
<script src="{{asset('admin/assets/js/modal-add-new-address.js')}}"></script>
<script src="{{asset('admin/assets/js/modal-edit-user.js')}}"></script>



<script>
  $(document).ready(function() {
  $('.order-details').DataTable()
})
</script>
</body>
</html>



