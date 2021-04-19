<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>CDBTMS</title>
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
                       <h4 class="card-title">Registration Form</h4>
{{--                        <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur cupiditate excepturi, quae quidem suscipit tempore veniam veritatis? </p>--}}
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('guest')}}" name="myForm">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Personal information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                             <input type="text" id="input-first-name" class="form-control @error('fname') is-invalid @enderror" placeholder="First name" value="" name="fname" required>
                                            @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" id="input-last-name" class="form-control @error('name') is-invalid" @enderror placeholder="Last name" value="" name="lname" required>
                                            @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <input id="input-address" class="form-control @error('address') is-invalid" @enderror placeholder="Home Address" value="" type="text" name="address" required>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-city">City/Province</label>
                                                <input type="text" id="input-city" class="form-control @error('city') is-invalid" @enderror placeholder="City" value="" name="city" required>
                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Prk/Barangay</label>
                                                <input type="text" id="input-country" class="form-control @error('prk_brgy') is-invalid" @enderror placeholder="Prk/Barangay" value="" name="prk_brgy" required>
                                                @error('prk_brgy')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Postal code</label>
                                                <input type="number" id="input-postal-code" class="form-control @error('postal_code]') is-invalid"@enderror placeholder="9500" name="postal_code" required>
                                                @error('postal_code')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label mr-3" for="input-country">Gender</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="gender" value="0" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="gender" value="1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-country">Contact Number</label>
                                                    <input type="number" id="input-country" class="form-control @error('contact-NP') is-invalid" @enderror placeholder="Country" value="" name="contact_no" required>
                                                    @error('contact_no')
                                                    <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-country">Email Address (optional)</label>
                                                    <input type="email" id="input-country" class="form-control @error('email') is-invalid" @enderror placeholder="Email Address" value="" name="email" required>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
