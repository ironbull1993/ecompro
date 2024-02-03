<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
      © <script>document.write(new Date().getFullYear()) </script>, made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
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
    <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/quill/quill.js') }}"></script>
  
    <!-- Main JS -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    
  
    <!-- Page JS -->
    <script src="{{ asset('admin/assets/js/app-ecommerce-dashboard.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.category-list').DataTable()
      })
    </script>

<script src="{{ asset('admin/assets/js/app-ecommerce-category-list.js') }}"></script>

<script>
  $(document).ready(function() {
    function updateChart() {
    $.ajax({
      url: '/chart-data',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        var options = {
          animationEnabled: true,
          title: {
            text: "GDP Growth Rate - 2016"
          },
          axisY: {
            title: "Growth Rate (in %)"
            
          },
          axisX: {
            title: "Countries"
          },
          data: [{
            type: "column",
            yValueFormatString: "#,##0",
            dataPoints: data.map(function(item) {
            
              return { label: item.title, y: parseFloat(item.quantity) };
            })
          }]
        };
        $("#totalIncomeChart").CanvasJSChart(options);
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  }
  updateChart();

  // Call the updateChart function every 15 seconds
  setInterval(updateChart, 15000);
  });
  </script>

<script type="text/javascript">
  $(document).ready(function() {
    function updateChart() {
    $.ajax({
      url: '/chart-data',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        var options = {
          data: [{
            type: "pie",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
            dataPoints: data.map(function(item) {
            
              return { label: item.title, y: parseFloat(item.quantity) };
            })
          }]
        };
        $("#chartContainer").CanvasJSChart(options);
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  }
  updateChart();

  // Call the updateChart function every 15 seconds
  setInterval(updateChart, 15000);
  });
  </script>


  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>