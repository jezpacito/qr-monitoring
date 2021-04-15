@extends('layouts.table')
@section('content')

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="{{asset("assets/img/theme/")}}" alt="Image placeholder" class="card-img-top">
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
{{--                            <div class="h5 font-weight-300">--}}
{{--                                <i class="ni location_pin mr-2"></i>CSU, Romania--}}
{{--                            </div>--}}
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div>
{{--                            <div>--}}
{{--                                <i class="ni education_hat mr-2"></i>University of Computer Science--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="mb-0">Edit profile </h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Save</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form >
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
                                            <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">First name</label>
                                            <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Last name</label>
                                            <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
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
                                            <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Contact Number</label>
                                            <input type="number" id="input-country" class="form-control" placeholder="Country" value="United States">
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
