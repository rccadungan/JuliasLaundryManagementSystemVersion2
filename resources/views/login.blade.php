@extends('layouts.auth')

@push('css')
<!--Not Working -->
.gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

@endpush

@section('content')




<section class="bg-image"
style="background-image: url('https://i.pinimg.com/originals/41/4c/18/414c18e3cf6a9ba9a5515d4d5d08b297.png');
height: 100vh">
  <div class="container py-5 h-100ss">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-black" style="border-radius: 1rem;"> 
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Julia's Laundry Management System</h2>
              <p class="text-black-50 mb-5">Sign with your account</p>

              <div class="form-outline form-black mb-4">
                <div class="input-group">
                  <select type="email" id="typeUsernameX" class="form-select form-select-lg w-100 p-2 border border-1 border-secondary rounded rounded-2" aria-label="Select Username">
                    <option selected>Select Username</option>
                    @foreach($users as $user)
                      <option value="{{ $user['username'] }}">{{ $user['username'] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-outline form-black mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" />
                <div id="toggle-password" style="position: absolute; right: 0; margin-top: -34px; margin-right: 60px;">
                  <span id="toogle-password-icon" class="fa fa-fw fa-eye"></span>
                </div>
              </div>

              <button class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>

            </div>

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
