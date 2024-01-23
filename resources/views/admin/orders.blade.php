<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('admin/assets/') }}" data-template="">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta http-equiv="refresh" content="15">
  <title>Order List - eCommerce | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  
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
  <link rel="icon" type="image/x-icon" href="{{ ('admin/assets/img/favicon/favicon.ico') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/flag-icons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />
  
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" /> 
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />

  <!-- Page CSS -->
  

  <!-- Helpers -->
  <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  {{-- <script src="{{ asset('admin/assets/vendor/js/template-customizer.js') }}"></script> --}}
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('admin/assets/js/config.js') }}"></script>
  
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
<span class="text-muted fw-light">eCommerce /</span> Order List
</h4>

<!-- Order List Widget -->

<div class="card mb-4">
<div class="card-widget-separator-wrapper">
<div class="card-body card-widget-separator">
<div class="row gy-4 gy-sm-1">
  <div class="col-sm-6 col-lg-3">
    <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
      <div>
        <h3 class="mb-2">56</h3>
        <p class="mb-0">Pending Payment</p>
      </div>
      <div class="avatar me-sm-4">
        <span class="avatar-initial rounded bg-label-secondary">
          <i class="bx bx-calendar bx-sm"></i>
        </span>
      </div>
    </div>
    <hr class="d-none d-sm-block d-lg-none me-4">
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
      <div>
        <h3 class="mb-2">12,689</h3>
        <p class="mb-0">Completed</p>
      </div>
      <div class="avatar me-lg-4">
        <span class="avatar-initial rounded bg-label-secondary">
          <i class="bx bx-check-double bx-sm"></i>
        </span>
      </div>
    </div>
    <hr class="d-none d-sm-block d-lg-none">
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
      <div>
        <h3 class="mb-2">124</h3>
        <p class="mb-0">Refunded</p>
      </div>
      <div class="avatar me-sm-4">
        <span class="avatar-initial rounded bg-label-secondary">
          <i class="bx bx-wallet bx-sm"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="d-flex justify-content-between align-items-start">
      <div>
        <h3 class="mb-2">32</h3>
        <p class="mb-0">Failed</p>
      </div>
      <div class="avatar">
        <span class="avatar-initial rounded bg-label-secondary">
          <i class="bx bx-error-alt bx-sm"></i>
        </span>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- Order List Table -->
<div class="card">
<div class="card-datatable table-responsive">
<table class="datatables-orders table border-top">
<thead>
  <tr>
    {{-- <th></th> --}}
    <th></th>
    <th>order</th>
    <th>date</th>
    <th>customers</th>
    <th>payment</th>
    <th>status</th>
    <th>method</th>
    <th>actions</th>
  </tr>
</thead>
<tbody>
  @foreach($orders as $orders)
  <tr class="odd" id="order-{{$orders->id}}">
    {{-- <td class="control dtr-hidden" tabindex="0" style="display: none;">
    </td> --}}
    <td class="  dt-checkboxes-cell">
      <input type="checkbox" class="dt-checkboxes form-check-input">
    </td>
    <td>
      <a href="app-ecommerce-order-details.html">
        <span class="fw-medium">#{{$orders->id}}</span>
      </a>
    </td>
    <td class="sorting_1">
      <span class="text-nowrap">{{$orders->created_at}}</span>
    </td>
    <td>
      <div class="d-flex justify-content-start align-items-center order-name text-nowrap">
        {{-- <div class="avatar-wrapper">
          <div class="avatar me-2">
            <img src="../../assets/img/avatars/19.png" alt="Avatar" class="rounded-circle" style="filter: invert(0);">
          </div>
        </div> --}}
        <div class="d-flex flex-column">
          <h6 class="m-0">
            <a href="pages-profile-user.html" class="text-body">
               
              {{User::where('userid', $orders->userid)->pluck('name')->first(); }} 
              
              
              </a>
            </h6>
            <small class="text-muted"> 
              {{User::where('userid', $orders->userid)->pluck('phone')->first(); }}
             </small>
          </div>
        </div>
      </td>
      <td class="" style="">
        <h6 class="mb-0 w-px-100 text-warning"><i class="bx bxs-circle fs-tiny me-2"></i>Pending</h6>
      </td>
      <td class="" style="">
        <span class="badge px-2 bg-label-success" text-capitalized="">Delivered</span>
      </td>
      <td class="" style="">
        <div class="d-flex align-items-center text-nowrap">
          
          <span><i class="bx bx-dots-horizontal-rounded"></i> {{User::where('userid', $orders->userid)->pluck('cash')->first();}}
           </span>
        </div>
      </td>
      <td class="" style="">
        <div class="d-flex justify-content-sm-center align-items-sm-center">
          <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end m-0">
            
            <a href="{{ url('/orderview',$orders->userid) }}" class="dropdown-item" data-id="">View</a>
            <a href="" class="dropdown-item delete-record" data-id="{{$orders->id}}">Delete</a>
          </div>
        </div>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div>


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

<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('admin/assets/js/app-ecommerce-order-list.js') }}"></script>
<script>
  $(document).ready(function() {
  $('.datatables-orders').DataTable()
})

$('.delete-record').on('click', function(e) {
           e.preventDefault();
            var orderId = $(this).attr('data-id');

            $.ajax({
                url: "{{ route('order.rmv') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { id: orderId},
                success: function(response) {
                    $('#order-' + orderId).empty();
                    //toastr.success("Success");
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });

 

</script>
</body>
</html>



