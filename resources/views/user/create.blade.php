@extends('layouts.table')

@section('content')
<div class="row">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
{{--            <h3 class="mb-0">Nuevo usuario</h3>--}}
          </div>
          <div class="col-4 text-right">
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">Back to employee List</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
          @csrf

          <h6 class="heading-small text-muted mb-4">CSU Basic Information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="name">First Name</label>
                  <input type="text" id="" class="form-control" name="fname" placeholder="Enter your first name" value="">
                </div>
              </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="name">Last Name</label>
                        <input type="text" id="" class="form-control" name="lname" placeholder="Enter your last name" value="">
                    </div>
                </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="email">Email address</label>
                  <input type="email" id="" name="email" class="form-control" placeholder="example@example.com">
                </div>
              </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="email">Address</label>
                        <input type="text" id="" name="address" class="form-control" placeholder="Ex. General Santos City San isidro">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="email">Mobile Number</label>
                        <input type="number" id="" name="contact_no" class="form-control" placeholder="Ex. 09351234567">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="password">Password</label>
                        <input type="password" id="" name="password" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="password">RFID UUID</label>
                        <input type="text" id="" name="rfid_uuid" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
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
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-sm btn-success">Save</button>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
