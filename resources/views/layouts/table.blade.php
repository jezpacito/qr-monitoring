<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

@include('include.head')

<body>
<!-- Sidenav -->
@include('include.nav-side')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
            @include('include.search')
            <!-- Navbar links -->
                @include('include.navbar')
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
{{--                        <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>--}}
{{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
{{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
{{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="#">Tables</a></li>--}}
{{--                                <li class="breadcrumb-item active" aria-current="page">Tables</li>--}}
{{--                            </ol>--}}
{{--                        </nav>--}}
                    </div>
{{--                    <div class="col-lg-6 col-5 text-right">--}}
{{--                        <a href="#" class="btn btn-sm btn-neutral">New</a>--}}
{{--                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
       @yield('content')
        @include('sweetalert::alert')
        @include('include.footer')
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
