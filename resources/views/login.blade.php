@extends('layouts.auth')

@push('css')

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
style="background-image: url('https://mdbootstrap.com/img/new/standard/city/041.jpg');
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
                <div class="input-group"> <!--Not Working -->
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
                  <input type="email" id="typeUsernameX" class="form-control form-control-lg" placeholder="Username" />
                </div>
              </div>

              <div class="form-outline form-black mb-4">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Password" />
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
<!-- js here -->
@endpush
