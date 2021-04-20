<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Parking System</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
<!-- Sidenav -->
{{--@include('sweetalert::alert')--}}

<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('sweetalert::alert')
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <a href="/login" class="btn btn-sm btn-dark" data-toggle="tooltip" data-placement="top" title="Only CSU Employee are allowed to login">
                Login
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <h4 class="text-white-50 mt-2">Other Info</h4>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-ungroup"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                            <div class="justify-content-between">
                             <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                    <i class="ni ni-basket"></i>
                                </span>
                                 <small>About Us</small>
                             </a>
{{--                                <span class="shortcut-media avatar rounded-circle bg-gradient-green">--}}

                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                      <i class="ni ni-books"></i>
                                    </span>
                                    <small>Privacy Policy</small>
                                </a>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header bg-primary pb-6">
        <div class="container-fluid">
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row mt--5">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-upgrade">
                    <div class="card-header text-center border-bottom-0">
                       <h4 class="card-title">Registrater Driver</h4>
{{--                        <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate excepturi, quae quidem suscipit tempore veniam veritatis? </p>--}}
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('parker')}}" name="myForm">
                            @csrf
                            {{-- <h6 class="heading-small text-muted mb-4">Personal information</h6> --}}
                            <div class="pl-lg-4">
                                <div class="row">
                                    
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">School ID</label>
                                             <input type="number" id="input-first-name" class="form-control @error('school_id') is-invalid @enderror" placeholder="School ID" value="" name="school_id" required>
                                            @error('school_id')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Plate Number</label>
                                            <input type="number" id="input-last-name" class="form-control @error('plate_number') is-invalid" @enderror placeholder="Plate Number" value="" name="plate_number" required>
                                            @error('plate_number')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
           
                            
                            <hr class="my-4" />
{{--                            <button type="submit" class="btn btn-default">Submit</button>--}}
                            <!-- Description -->
{{--                            <input type="submit" class="btn btn-default" onclick="myFunction()" value="Submit">--}}

                            <input type="button" value="Submit" class="btn btn-default" id="btnsubmit" onclick="submitForm()">

                        </form>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/js-cookie/js.cookie.js"></script>
<script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.2.0"></script>

<script>
    // function myFunction() {
    //     document.getElementById("myForm").reset();
    // }
    // $('#myForm')[0].reset();
    function submitForm() {
        // Get the first form with the name
        // Usually the form name is not repeated
        // but duplicate names are possible in HTML
        // Therefore to work around the issue, enforce the correct index
        var frm = document.getElementsByName('myForm')[0];
        frm.submit(); // Submit the form
        frm.reset();  // Reset all form data
        return false; // Prevent page refresh
    }
</script>
</body>

</html>
