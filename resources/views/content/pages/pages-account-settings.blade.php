@extends('layouts/contentNavbarLayout')

@section('title', 'Account')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h6 class="py-1 mb-4">
  <span class="text-muted fw-light"><a href="/"><i class="mdi mdi-home mdi-18px"></i></a> /</span> Account
</h6>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-5">
      <h4 class="card-header">Profile Settings</h4>
      <!-- Account -->
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
              <span class="d-none d-sm-block text-capitalize"><i class="mdi mdi-tray-arrow-up mdi-18px"></i> Upload</span>
              <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
              <i class="mdi mdi-reload d-block d-sm-none"></i>
              <span class="d-none d-sm-block text-capitalize"><i class="mdi mdi-cancel"></i> Reset</span>
            </button>

            <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
          </div>
        </div>
      </div>
      <div class="card-body pt-2 mt-1">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row mt-2 gy-4">
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus />
                <label for="firstName">First Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                <label for="lastName">Last Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com" />
                <label for="email">E-mail</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="202 555 0111" />
                  <label for="phoneNumber">Phone Number</label>
                </div>
                <span class="input-group-text">IDN (+62)</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                <label for="address">Address</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating form-floating-outline">
                <select id="country" class="select2 form-select">
                  <option value="">Select</option>
                  <option value="Australia">Australia</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Canada">Canada</option>
                  <option value="China">China</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Japan">Japan</option>
                  <option value="Korea">Korea, Republic of</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Russia">Russian Federation</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                </select>
                <label for="country">Country</label>
              </div>
            </div>
            
            <div class="col-md-6 mt-4 hstack gap-2">
              <button type="submit" class="btn btn-primary text-capitalize">Save</button>
              <button type="reset" class="btn btn-outline-secondary text-capitalize">Reset</button>
            </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
    <div class="row mt-5 ms-2">
      <h5 class="fw-bold">Delete Account</h5>
    </div>
    <div class="row mt-2 ms-2 me-2 mb-5">
      <div class="col-md-12">
        <div class="alert alert-warning fs-6">
          <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>
          <p class="mb-0" style="font-size: 14px">Once you delete your account, there is no going back. Please be certain.</p>
        </div>
        <form id="formAccountDeactivation" onsubmit="return false">
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation"><b>I confirm</b> my account deactivation</label>
          </div>
          <button type="submit" class="btn btn-danger text-capitalize">Delete Account</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
