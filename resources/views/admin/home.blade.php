<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('admin/assets/') }}" data-template="">
@include('admin.head')

<body>
    @include('admin.sidebar')
    @include('admin.nav')
    <div class="content-wrapper">
        <!-- Content -->
        
        <div class="container-xxl flex-grow-1 container-p-y">
            
            



  

            <div class="col-md-12 col-lg-4">
              <div class="row">
                <div class="col-lg-6 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{ asset('admin/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                        </div>
                        <div class="dropdown">
                          <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="cardOpt6">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span class="d-block">Sales</span>
                      <h4 class="card-title mb-1">$4,679</h4>
                      <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body pb-2">
                      <span class="d-block fw-medium">Profit</span>
                      <h3 class="card-title mb-0">624k</h3>
                      <div id="profitChart"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body pb-0">
                      <span class="d-block fw-medium">Expenses</span>
                    </div>
                    <div id="expensesChart" class="mb-2"></div>
                    <div class="p-3 pt-2">
                      <small class="text-muted d-block text-center">$21k Expenses more than last month</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{ asset('admin/assets/img/icons/unicons/briefcase.png') }}" alt="Credit Card" class="rounded">
                        </div>
                        <div class="dropdown">
                          <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span class="d-block">Transactions</span>
                      <h4 class="card-title mb-1">$14,857</h4>
                      <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Total Income -->
            <div class="col-md-12 col-lg-12 mb-4">
              <div class="card">
                <div class="row row-bordered g-0">
                  <div class="col-md-8">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Total Income</h5>
                      <small class="card-subtitle">Yearly report overview</small>
                    </div>
                    <div class="card-body">
                      <div id="totalIncomeChart"></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card-header d-flex justify-content-between">
                      <div>
                        <h5 class="card-title mb-0">Report</h5>
                        <small class="card-subtitle">Monthly Avg. $45.578k</small>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="report-list">
                        <div class="report-list-item rounded-2 mb-3">
                          <div class="d-flex align-items-start">
                            <div class="report-list-icon shadow-sm me-2">
                              <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">
                            </div>
                            <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                              <div class="d-flex flex-column">
                                <span>Income</span>
                                <h5 class="mb-0">$42,845</h5>
                              </div>
                              <small class="text-success">+2.34k</small>
                            </div>
                          </div>
                        </div>
                        <div class="report-list-item rounded-2 mb-3">
                          <div class="d-flex align-items-start">
                            <div class="report-list-icon shadow-sm me-2">
                              <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">
                            </div>
                            <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                              <div class="d-flex flex-column">
                                <span>Expense</span>
                                <h5 class="mb-0">$38,658</h5>
                              </div>
                              <small class="text-danger">-1.15k</small>
                            </div>
                          </div>
                        </div>
                        <div class="report-list-item rounded-2">
                          <div class="d-flex align-items-start">
                            <div class="report-list-icon shadow-sm me-2">
                              <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">
                            </div>
                            <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                              <div class="d-flex flex-column">
                                <span>Profit</span>
                                <h5 class="mb-0">$18,220</h5>
                              </div>
                              <small class="text-success">+1.35k</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Income -->
            </div>
            <!--/ Total Income -->
          </div>
          
          
                    </div>
                    <!-- / Content -->

    @include('admin.footer')
  
</body>
</html>



