@extends('layouts.auth')

@push('css')
<!--CSS-->
@endpush

@section('content')

<section class="bg-image"
style="background-image: url('https://i.pinimg.com/originals/41/4c/18/414c18e3cf6a9ba9a5515d4d5d08b297.png');
height: 100vh">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-white text-black" style="border-radius: 1rem;"> 
          <div class="card-body p-5 text-center">
            <form method="post" action="{{ route('login.auth') }}">
              @csrf
              <div class="row mb-5">
                <div class="col-sm-4">
                  <img class="d-block m-auto" style="width: 100%;" alt="Julia's Laundry Logo" src="{{ asset('images/logo.jpg') }}" data-holder-rendered="true">
                </div>
                <div class="col-sm-8 ps-5">
                  <h5 class="font-weight-bold text-md-justified ">Julia's Laundry Management System Version 2</h5>
                </div>
              </div>
              
              <p class="font-weight-normal text-black-100 mb-1">Sign with your account</p>

              <div class="form-outline form-black mb-4">
                <div class="input-group">
                  <select name="username" type="email" id="typeUsernameX" class="form-select form-select-lg w-100 p-2 bg-white border border-1 border-secondary rounded rounded-2" aria-label="Select Username" required>
                    <option selected>Select Username</option>
                    @foreach($users as $user)
                      <option value="{{ $user['user_name'] }}">{{ $user['user_name'] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-outline form-black mb-4">
                <input name="password" type="password" id="typePasswordX" class="form-control w-100 p-2 bg-white border border-1 border-secondary rounded rounded-2" placeholder="Password" required />
                <div id="toggle-password" style="position: absolute; right: 0; margin-top: -34px; margin-right: 60px;">
                  <span id="toogle-password-icon" class="fa fa-fw fa-eye"></span>
                </div>
              </div>

              <div class="text-danger mb-2">
                {{ $error }}
              </div>

              <button type="submit" class="btn btn-outline-light px-5 text-white font-weight-bold" type="submit" style="background-color:#FF1694;">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@push('scripts')
<script>
  $("#toggle-password").click(function() {
    var input = $("#typePasswordX");
    if (input.attr("type") == "password") {
      $("#toogle-password-icon").attr("class", "fa fa-fw fa-eye-slash");
      input.attr("type", "text");
    } else {
      $("#toogle-password-icon").attr("class", "fa fa-fw fa-eye");
      input.attr("type", "password");
    }
  });
</script>

@endpush
