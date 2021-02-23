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
                    <img src="{{asset("assets/img/theme/img-1-1000x600.jpg")}}" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{asset("assets/img/theme/ava-new.jpg")}}" class="rounded-circle">
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
                            <h5 class="h3">
                                {{auth()->user()->fname}} {{auth()->user()->lname}}
                                <span class="font-weight-light">
                                    @foreach(auth()->user()->roles->pluck('name') as $role)
                                        -  {{$role}}
                                    @endforeach
                                </span>
                            </h5>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/user/{{$user->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit profile </h3>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email address</label>
                                            <input type="email" id="input-email" class="form-control" name="email" value="{{old('email',$user->email)}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                            <input type="text" id="input-first-name" class="form-control" name="fname" value="{{old('fname',$user->fname)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" id="input-last-name" class="form-control" name="lname" value="{{old('lname',$user->lname)}}" required>
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
                                            <input type="text" id="input-city" class="form-control" name="address" value="{{old('address',$user->address)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Contact Number</label>
                                            <input type="number" id="input-country" class="form-control"  name="contact_no" value="{{old('contact_no',$user->contact_no)}}" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label mr-3" for="input-country">Gender</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="gender"  value="0"
                                                       class="custom-control-input" {{$user->gender ==0 ? 'checked':''}}>
                                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="gender" value="1" class="custom-control-input"
                                                    {{$user->gender ==1 ? 'checked':''}}>
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
