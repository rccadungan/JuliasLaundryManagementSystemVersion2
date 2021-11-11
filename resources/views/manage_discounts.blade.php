@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Actual search box -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="main">
        
        <!-- Actual search box -->
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
          <input type="text" class="form-control" placeholder="Select Service" style="padding-left: 2.375rem;">
        </div>  
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Minimum Qty</th>
            <th scope="col">Discount (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>3</td>
            <td>.10</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 
</div>
@endsection

@push('scripts')
<!-- js here -->
@endpush