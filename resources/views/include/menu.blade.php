<div class="collapse navbar-collapse" id="sidenav-collapse-main">
  <!-- Nav items -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="/home">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="{{ route('user.index') }}">--}}
{{--        <i class="ni ni-planet text-orange"></i>--}}
{{--        <span class="nav-link-text">Employee List</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--      <li class="nav-item">--}}
{{--          <a class="nav-link" href="examples/tables.html">--}}
{{--              <i class="ni ni-bullet-list-67 text-default"></i>--}}
{{--              <span class="nav-link-text">List of Employees</span>--}}
{{--          </a>--}}
{{--      </li>--}}

{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="/register">--}}
{{--        <i class="ni ni-circle-08 text-pink"></i>--}}
{{--        <span class="nav-link-text">Add Employee</span>--}}
{{--      </a>--}}

      @role('admin')
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
             aria-expanded="false">
              <i class="ni ni-circle-08 text-primary"></i>
              <span class="nav-link-text">User List</span>
          </a>
          <div class="dropdown-menu">
              <a href="/admin" class="nav-link">
                  <i class="ni ni-circle-08 text-yellow"></i>
                  <span class="nav-link-text">Admin</span>
              </a>
              <a href="/employee" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Employee</span>
              </a>
              <a href="/user" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">All User</span>
              </a>
          </div>
      </li>
      @endrole
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
             aria-expanded="false">
              <i class="ni ni-books text-primary"></i>
              <span class="nav-link-text">Generate Report</span>
          </a>
          <div class="dropdown-menu">
              <a href="#" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Monthly Report</span>
              </a>
              <a href="#" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Weekly Report</span>
              </a>
          </div>
      </li> -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
             aria-expanded="false">
              <i class="ni ni-box-2 text-primary"></i>
              <span class="nav-link-text">Guest List</span>
          </a>
          <div class="dropdown-menu">
              <a href="/people" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Registered Guest</span>
              </a>
              <!-- <a href="#" class="nav-link">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Weekly Report</span>
              </a> -->
          </div>
      </li>

  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">LOGS </span>
  </h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="/logs/employee"
    >
        <i class="ni ni-spaceship"></i>
        <span class="nav-link-text">Employee Logs</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/guest-logs"
        >
        <i class="ni ni-palette"></i>
        <span class="nav-link-text">Guest Logs</span>
      </a>
    </li>
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"--}}
{{--        target="_blank">--}}
{{--        <i class="ni ni-ui-04"></i>--}}
{{--        <span class="nav-link-text">Components</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html"--}}
{{--        target="_blank">--}}
{{--        <i class="ni ni-chart-pie-35"></i>--}}
{{--        <span class="nav-link-text">Plugins</span>--}}
{{--      </a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link active active-pro" href="examples/upgrade.html">--}}
{{--        <i class="ni ni-send text-dark"></i>--}}
{{--        <span class="nav-link-text">Upgrade to PRO</span>--}}
{{--      </a>--}}
{{--    </li>--}}
  </ul>
</div>
