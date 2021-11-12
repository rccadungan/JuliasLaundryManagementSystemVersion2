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

      <div class="form-row">
        <div class="form-group col-md-12">
            <!-- Add New Customer Button -->
            <button id="btn-add-article" class="btn btn-primary float-right">Add New Discounts</button>
            <br/><br/>
        </div>
      </div>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Service</th>
            <th scope="col">Minimum Qty</th>
            <th scope="col">Discount (%)</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($discTypes as $discType)
          <tr>
            <td>{{ $discType->tos_id }}</td>
            <td>{{ $discType->min_qty }}</td>
            <td>{{ $discType->dis_pct }}</td>
            <td>
                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div> 
</div>
@endsection

@push('scripts')
<!-- js here -->
@endpush