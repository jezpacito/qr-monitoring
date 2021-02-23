@extends('layouts.table')
@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0')}}" type="text/css">
    </head>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="{{asset('QR/'.$guest->qr_code)}}" alt="Image placeholder"class="img-thumbnail">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
{{--                                    <img src="{{asset("assets/img/theme/ava-new.jpg")}}" class="rounded-circle">--}}
{{--                                    <img src="{{asset('QR/'.$guest->qr_code)}}" alt="QR-CODE" style="width: 50%"/>--}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn   mr-4 " ></a>
                            <a href="#" class="btn float-right"></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">

                        <div class="text-center">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Person Profile </h3>
                            </div>
{{--                            <div class="col-4 text-right">--}}
{{--                                <a href="/#" class="btn btn-sm btn-primary">Update</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <form >
                            <h6 class="heading-small text-muted mb-4">Person information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input type="email" id="input-email"  value="{{$guest->email}}" class="form-control" placeholder="jesse@example.com" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                            <input type="text" id="input-first-name" class="form-control"  placeholder="First name" value="{{$guest->fname}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="{{$guest->lname}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            <hr class="my-4" />--}}
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">Address</label>
                                            <input type="text" id="input-city" class="form-control" placeholder="City" value="{{$guest->address}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Contact Number</label>
                                            <input type="number" id="input-country" class="form-control" placeholder="Contact Number" value="{{$guest->contact_no}}" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label mr-3" for="input-country">Gender</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"
                                                       {{$guest->gender ==0 ? 'checked':''}}
                                                       disabled>
                                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input"
                                                       {{$guest->gender ==1 ? 'checked':''}}
                                                       disabled>
                                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Description -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
