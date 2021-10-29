@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<form>
  <!-- Issue Credit Memo Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> Issue Credit Memo </h5>

  <!-- SOF Field -->
  <div class="form-group col-md-6">
    <label for="sofNumber">SOF No.</label>
    <select id="sofNumber" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>

  <!-- Service Order Form Status Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> Service Order Form Status </h5>

  <!-- Amount Paid Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="amountPaid">Amount Paid</label>
      <input type="text" class="form-control" id="amountPaid" placeholder="Amount Paid">
    </div>

    <!-- Balance Field -->
    <div class="form-group col-md-6">
      <label for="balance">Balance</label>
      <input type="text" class="form-control" id="balance" placeholder="Balance">
    </div>
  </div>

  <!-- Customer Information Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> Customer Information </h5>

  <!-- Customer Number Field -->
  <div class="form-group col-md-6">
      <label for="customerNumber">Customer No.</label>
      <select id="customerNumber" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>

  <!-- Customer Name Field -->
  <div class="form-group col-md-12">
      <label for="customerName">Customer Name</label>
      <select id="customerName" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>

  <!-- Customer Address Field -->
  <div class="form-group col-md-12">
      <label for="address">Address</label>
      <select id="address" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>

  <!-- Customer Contact Number Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactNumber">Contact Number</label>
      <input type="date" class="form-control" id="contactNumber" placeholder="Contact Number">
    </div>

    <!-- Customer VIP Status Field -->
    <div class="form-group col-md-12">
      <label for="vip">VIP</label>
      <select id="vip" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>

  <!-- Credit Memo Details Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> Credit Memo Details </h5>

  <!-- Amount Field -->
  <div class="form-group col-md-6">
      <label for="amount">Amount</label>
      <input type="text" class="form-control" id="amount" placeholder="Amount">
  </div>

  <!-- Reason Field -->
  <div class="form-group col-md-12">
    <label for="reason">Reason</label>
    <select id="reason" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
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