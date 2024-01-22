<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="{{ asset('admin/assets/') }}" data-template="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>eCommerce Category List - Apps | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>


  <meta name="description"
    content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">


  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon"
    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/flag-icons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/rtl/core.css') }}"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/rtl/theme-default.css') }}"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
  <link rel="stylesheet"
    href="{{ asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/%40form-validation/umd/styles/index.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/typography.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/katex.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/quill/editor.css') }}">

  <!-- Page CSS -->

  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/pages/app-ecommerce.css') }}">

  <!-- Helpers -->
  <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../assets/vendor/js/template-customizer.js"></script>
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
        <span class="text-muted fw-light">eCommerce /</span> Product List
      </h4>

      <div class="app-ecommerce-category">

        <!-- Category List Table -->
        <div class="card">
          <div class="dt-buttons"><button id="opennew" class="dt-button add-new btn btn-primary ms-2" tabindex="0"
              aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasEcommerceCategoryList"><span><i class="bx bx-plus me-0 me-sm-1"></i>Add
                Product</span></button>
               </div>
          <div class="card-datatable table-responsive">
            <table class="category-list table border-top" id="mytable">
              <thead>
                <tr>
                  {{-- <th></th> --}}
                  <th></th>
                  <th>Products</th>
                  <th class="text-nowrap text-sm-end">Quantity &nbsp;</th>
                  <th class="text-nowrap text-sm-end">Price</th>
                  <th class="text-lg-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($product as $product)
                <tr class="odd" id="product-{{$product->id}}">
                  {{-- <td class="control dtr-hidden" tabindex="0" style="display: no ne;">
                  </td> --}}
                  <td class="  dt-checkboxes-cell">
                    <input type="checkbox" class="dt-checkboxes form-check-input">
                  </td>
                  <td class="sorting_1">
                    <div class="d-flex align-items-center">
                      <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                        <div class="avatar">
                          <img id="myimage-{{$product->id}}" src="/product/{{$product->image}}" alt="Product-8" class="rounded-2"
                            style="filter: invert(0);">
                        </div>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <span id="title-{{$product->id}}" class="text-body text-wrap fw-medium">{{$product->title}}</span>
                        <span class="text-muted text-truncate mb-0 d-none d-sm-block">
                          <small id="category-{{$product->id}}">Category: {{$product->category}}</small><br>
                          <small id="description-{{$product->id}}">{{$product->description}}</small>
                        </span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-sm-end" id="quantity-{{$product->id}}">{{$product->quantity}}</div>
                  </td>
                  <td class="" style="">
                    <div class="fw-medium text-sm-end" id="price-{{$product->id}}">Tsh {{$product->price}}</div>
                  </td>
                  <td class="" style="">
                    <div class="d-flex align-items-sm-center justify-content-sm-center">
                      <button class="btn btn-sm btn-icon delete-record me-2 rmv-product" data-id="{{$product->id}}"><i class="bx bx-trash"></i></button>
                      <button class="btn btn-sm btn-icon editproduct" data-id="{{$product->id}}" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasEcommerceCategoryList"><i class="bx bx-edit"></i></button>
                    </div>
                  </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- Offcanvas to add new customer -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
          aria-labelledby="offcanvasEcommerceCategoryListLabel">
          <!-- Offcanvas Header -->
          <div class="offcanvas-header py-4">
            <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Edit Product</h5>
            <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <!-- Offcanvas Body -->
          <div class="offcanvas-body border-top">
            <form class="pt-0" id="eCommerceCategoryListForm" enctype="multipart/form-data">
              <!-- Title -->
              <div class="mb-3">
                <label class="form-label"  for="ecommerce-category-title">Title</label>
                <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter Product title"
                  name="categoryTitle" aria-label="category title">
              </div>
              <input type="hidden" val="" id="data-id">
              <div class="mb-3">
                <label class="form-label" for="ecommerce-category-title">Price</label>
                <input type="number" class="form-control" id="ecommerce-category-price" placeholder="Enter Product Price"
                  name="productprice" aria-label="category title">
              </div>
              <div class="mb-3">
                <label class="form-label" for="ecommerce-category-title">Stock</label>
                <input type="number" class="form-control" id="ecommerce-category-quantity" placeholder="Available stock quantity"
                  name="productprice" aria-label="category title">
              </div>

              <!-- Image -->
              <div class="mb-3">
                <label class="form-label" for="ecommerce-category-image">Attachment</label>
                <input class="form-control" type="file" id="ecommerce-category-image">
              </div>

              <!-- Description -->
              <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" id="ecommerce-category-description" placeholder="Enter description"
                  name="productprice" aria-label="category title">
              </div>
              <!-- Status -->
              <div class="mb-4 ecommerce-select2-dropdown">
                <label class="form-label">Select category</label>
                <select id="ecommerce-category-status" class="select2 form-select"
                  data-placeholder="Select category status">
                </select>
              </div>
              <!-- Submit and reset -->
              <div class="mb-3">
                <button type="submit" id="" class="btn btn-primary me-sm-3 me-1 data-submit edited" data-id="{{$product->id}}">Save</button>
                <button type="submit" id="additem" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->




    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          © <script>
            document.write(new Date().getFullYear()) 
          </script>, made with ❤️ by <a href="https://themeselection.com/" target="_blank"
            class="footer-link fw-medium">ThemeSelection</a>
        </div>
        <div class="d-none d-lg-inline-block">

          <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
          <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

          <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
            class="footer-link">Documentation</a>


          <a href="https://themeselection.com/support/" target="_blank"
            class="footer-link d-none d-sm-inline-block">Support</a>

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
    <a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/" target="_blank"
      class="btn btn-danger btn-buy-now">Buy Now</a>
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
  <script src="{{ asset('admin/assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/quill/katex.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/libs/quill/quill.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('admin/assets/js/main.js') }}"></script>


  <!-- Page JS -->
  <script src="{{ asset('admin/assets/js/app-ecommerce-category-list.js') }}"></script>
  <script>
    $(document).ready(function() {
    $('.category-list').DataTable()
  })

  $('.rmv-product').on('click', function(e) {
           e.preventDefault();
            var productId = $(this).attr('data-id');

            $.ajax({
                url: "{{ route('product.rmv') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { id: productId},
                success: function(response) {
                    $('#product-' + productId).empty();
                    //toastr.success("Success");
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });

        $('.editproduct').on('click', function(e) {
           e.preventDefault();
           $('#additem').hide();
           $('.edited').show();
          
            var productId = $(this).attr('data-id');

            $.ajax({
                url: "{{ route('product.edit') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { id: productId},
                success: function(response) {
                   
                     $.get('/product/edit1', function(data) {
            // Populate the category select options
            var categorySelect = $('#ecommerce-category-status');
            categorySelect.empty(); // Clear existing options
            $(document).ready(function() {
            $.each(data, function(editproduct1, category) {
                var option = $('<option>').val(category.id).text(category.category_name);
                categorySelect.append(option);
            });
          });
        });
                     
                     $('#ecommerce-category-title').val(response.message1);
                     $('#ecommerce-category-price').val(response.message3);
                     $('#ecommerce-category-quantity').val(response.message4);
                     $('#ecommerce-category-description').val(response.message2);
                     $('#data-id').val(productId);


                     
                   
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });

        $('.edited').on('click', function(e) {
           e.preventDefault();
           var id=$('#data-id').val();
          // console.log(productid2)
            var title = $('#ecommerce-category-title').val();
            var description = $('#ecommerce-category-description').val();
            var price = $('#ecommerce-category-price').val();
            var quantity = $('#ecommerce-category-quantity').val();
            var category = $('#ecommerce-category-status').val();
            var fileInput = $('#ecommerce-category-image')[0];
            var file = fileInput.files[0]; // Get the selected file
    var formData = new FormData();
    formData.append('file', file);
    formData.append('title', title);
    formData.append('description', description);
    formData.append('price', price);
    formData.append('quantity', quantity);
    formData.append('category', category);
    formData.append('id', id);
            $.ajax({
                url: "{{ route('product.edited') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  data: formData,
  processData: false,
      contentType: false,
                success: function(response) {
                  $('#eCommerceCategoryListForm')[0].reset();
                   $('.text-reset').trigger('click');
                   $('#title-' + id).html(response.message1);
                   $('#description-' + id).html(response.message2);
                   $('#category-' + id).html("Category: " + response.message3);
                   $('#quantity-' + id).html(response.message4);
                   $('#price-' + id).html('Tsh ' + response.message5);
                   $('#myimage-' + id).attr('src', '/product/' + response.message6);
                   $('#additem').show();
                   
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });


        $('#opennew').on('click', function(e) {
           e.preventDefault();
           
          $('#eCommerceCategoryListForm')[0].reset();
          $('#offcanvasEcommerceCategoryListLabel').html("New Product");
          $('.edited').hide();
          $('#additem').show();
          $.get('/product/edit1', function(data) {
            // Populate the category select options
            var categorySelect = $('#ecommerce-category-status');
            categorySelect.empty(); // Clear existing options
            $(document).ready(function() {
            $.each(data, function(editproduct1, category) {
                var option = $('<option>').val(category.id).text(category.category_name);
                categorySelect.append(option);
            });
          });
        });
         });

         $('#additem').on('click', function(e) {
           e.preventDefault();
 
            var title = $('#ecommerce-category-title').val();
            var description = $('#ecommerce-category-description').val();
            var price = $('#ecommerce-category-price').val();
            var quantity = $('#ecommerce-category-quantity').val();
            var category = $('#ecommerce-category-status').val();
            var fileInput = $('#ecommerce-category-image')[0]; // Get the file input element
    var file = fileInput.files[0]; // Get the selected file
    var formData = new FormData();
    formData.append('file', file);
    formData.append('title', title);
    formData.append('description', description);
    formData.append('price', price);
    formData.append('quantity', quantity);
    formData.append('category', category);
   
            //var image = jQuery('#ecommerce-category-image').val();
         
            $.ajax({
                url: "{{ route('product.add') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  data: formData,
  processData: false,
      contentType: false,
                success: function(response) {
                    
                   $('.text-reset').trigger('click');
                   window.location.href = '/show_product';
                  // $('#category-' + respone.message).html('Category: ' + respone.message1);
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });


  </script>
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 07:26:52 GMT -->

</html>

<!-- beautify ignore:end -->