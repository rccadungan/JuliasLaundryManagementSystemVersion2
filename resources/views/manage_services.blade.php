<!-- Redundant to services blade -->
@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Transactions Section -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="main">
          <div class="form-group has-search" style="width: 50%;margin: 50px auto;">
            <span class="fa fa-search form-control-feedback" 
                style="position: absolute;
                z-index: 2;
                display: block;
                width: 2.375rem;
                height: 2.375rem;
                line-height: 2.375rem;
                text-align: center;
                pointer-events: none;
                color: #aaa;">
            </span>
            <input type="text" class="form-control" placeholder="Search Service" style="padding-left: 2.375rem;">
          </div>  
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Service Name</th>
              <th scope="col">Unit Price</th>
              <th scope="col">Unit Type</th>
              <th scope="col">Min. Qty</th>
              <th scope="col">[A]ctive/[I]nactive</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>DC-Barong(100)</td>
              <td>100.00</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Type
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">pc</a>
                    <a class="dropdown-item" href="#">kg</a>
                  </div>
                </div>
              </td>
              <td>1</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Status
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item bg-success text-white" href="#">Active</a>
                    <a class="dropdown-item bg-danger text-white" href="#">Inactive</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- js here -->
<script>
$(function(){
   $(".dropdown-menu").on('click', 'a', function(){
       $(this).parents('.dropdown').find('button').text($(this).text());
   });
});
</script>
@endpush