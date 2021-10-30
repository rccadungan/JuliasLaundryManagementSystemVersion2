@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<form>
  <!-- Service Order Adjustment Details Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> SOF Inquiry </h5>

  <!-- Service Order No. Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="customerName">Customer Name</label>
      <select id="customerName" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- User ID Field -->
    <div class="form-group col-md-6">
      <label for="serviceOrderNo">Service Order No.</label>
      <select id="serviceOrderNo" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
</form>
@endsection

@push('scripts')
<!-- js here -->
@endpush