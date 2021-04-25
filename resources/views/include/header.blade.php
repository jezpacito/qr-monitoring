<div class="container-fluid">
  <div class="header-body">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
          <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="/">Dashboards</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
          </ol>
        </nav>
      </div>
      {{-- <div class="col-lg-6 col-5 text-right">
        <a href="#" class="btn btn-sm btn-neutral">New</a>
        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
      </div> --}}
    </div>
    <!-- Card stats -->
    <div class="row">
      <div class="col-xl-3 col-md-4">
        <div class="card card-stats">
          <!-- Card body -->
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Total CSU</h5>
                {{-- <span class="h2 font-weight-bold mb-0">{{\App\User::role('staff')->count()}}</span> --}}
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                  <i class="ni ni-active-40"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
              <span class="text-success mr-2"></span>
              <span class="text-nowrap"></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-4">
        <div class="card card-stats">
          <!-- Card body -->
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Total Guest Registered</h5>
                {{-- <span class="h2 font-weight-bold mb-0">{{\App\Guest::count()}}</span> --}}
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                  <i class="ni ni-chart-pie-35"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
              {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>000</span> --}}
              {{-- <span class="text-nowrap">This Month</span> --}}
            </p>
          </div>
        </div>
      </div>
        <div class="col-xl-3 col-md-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Guest Entered</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{ \App\Attendance::where('user_id',null)->count() }}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>000</span> --}}
                        {{-- <span class="text-nowrap">This Month</span> --}}
                    </p>
                </div>
            </div>
        </div>
      <div class="col-xl-3 col-md-4">
        <div class="card card-stats">
          <!-- Card body -->
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Total Employee Entered</h5>
                <span class="h2 font-weight-bold mb-0">12</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                  <i class="ni ni-money-coins"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
              {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 000</span> --}}
              {{-- <span class="text-nowrap">This Week</span> --}}
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
