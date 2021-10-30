@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<form>
  <!-- Service Order Adjustment Details Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> Service Order Adjustment Details </h5>

  <!-- Service Order No. Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="serviceOrderNo">Service Order No.</label>
      <select id="serviceOrderNo" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- User ID Field -->
    <div class="form-group col-md-6">
      <label for="userID">User ID</label>
      <select id="userID" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>

  <!-- Received Date Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="receivedDate">Received Date</label>
      <input type="date" class="form-control" id="receivedDate" placeholder="Received Date">
    </div>

  <!-- Received Time Field -->
    <div class="form-group col-md-6">
      <label for="receivedTime">Time</label>
      <input type="time" class="form-control" id="receivedTime" placeholder="Time">
    </div>
  </div>

  <!-- Pickup Date Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pickupDate">Pick up Date</label>
      <input type="date" class="form-control" id="pickupDate" placeholder="Pickup Date">
    </div>

    <!-- Pickup Time Field -->
    <div class="form-group col-md-6">
      <label for="pickupTime">Time</label>
      <input type="time" class="form-control" id="pickupTime" placeholder="Time">
    </div>
  </div>

    <!-- Enter Amount Field -->
    <div class="form-group col-md-12">
      <label for="amount">Amount</label>
      <input type="number" class="form-control" id="amount" placeholder="Amount">
    </div>

    <!-- Adjustment Details Field -->
    <div class="form-group col-md-12">
      <label for="adjustmentDetails">Adjustment Details</label>
      <textarea class="form-control" class="form-control" id="adjustmentDetails" placeholder="Adjustment Details" rows="5"></textarea>
    </div>

    <!-- Cancel Button -->
    <button type="submit" class="btn btn-primary">Cancel</button>
    <!-- OK Button -->
    <button type="submit" class="btn btn-primary">OK</button>

  </div>
</form>
@endsection

@push('scripts')
<!-- js here -->
@endpush