@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<form>
  <!-- Order Information Section -->
  <h5 class="fw-bold mb-2 text-uppercase">Order Information</h2>

  <!-- Service Order Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="serviceOrderNumber">Service Order No.</label>
      <input type="number" class="form-control" id="serviceOrderNumber" placeholder="Service Order No.">
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
      <label for="pickupDate">Pickup Date</label>
      <input type="date" class="form-control" id="pickupDate" placeholder="Pickup Date">
    </div>
    <!-- Pickup Time Field -->
    <div class="form-group col-md-6">
      <label for="pickupTime">Time</label>
      <input type="time" class="form-control" id="pickupTime" placeholder="Time">
    </div>
  </div>

  <!-- Customer Information Section -->
  <h5 class="fw-bold mb-2 text-uppercase">Customer Information</h2>

  <!-- Customer Number Field -->
  <div class="form-group col-md-6">
      <label for="customerNumber">Customer No.</label>
      <input type="number" class="form-control" id="customerNumber" placeholder="Customer No.">
    </div>
  </div>

  <!-- Customer Name Field -->
  <div class="form-group col-md-4">
      <label for="customerName">Customer Name</label>
      <select id="customerName" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- Customer Address Field -->
    <div class="form-group col-md-4">
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
      <input type="number" class="form-control" id="contactNumber" placeholder="Contact Number">
    </div>
    <!-- Make Customer VIP Option -->
    <div class="form-group col-md-4">
      <label for="VIP">VIP</label>
      <select id="VIP" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- Customer TransactionRemarks Field -->
    <div class="form-group col-md-6">
      <label for="remarks">Remarks</label>
      <input type="textArea" class="form-control" id="remarks" placeholder="Remarks">
    </div>

    <!-- Order Details Section -->
    <h5 class="fw-bold mb-2 text-uppercase">Order Details</h2>

    <div class="form-group col-md-6">
    <!-- Add New Item Button -->
    <button type="submit" class="btn btn-primary">Add a New Item</button>
    <!-- Articles Section -->
      <label for="article">Article</label>
      <input type="email" class="form-control" id="article" placeholder="Article">
    </div>
  
  <!-- Order Quantity Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="quantity">Quantity</label>
      <input type="number" class="form-control" id="quantity" placeholder="Quantity">
    </div>
    <!-- Order Discount Field -->
    <div class="form-group col-md-4">
      <label for="discount">Discount</label>
      <select id="discount" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- Payment Details Section -->
    <h5 class="fw-bold mb-2 text-uppercase">Payment</h2>
    <!-- Payment Option -->
    <div class="form-group col-md-4">
      <label for="paymentOption">Payment Option</label>
      <select id="paymentOption" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- Payment Channel Option -->
    <div class="form-group col-md-4">
      <label for="paymentChannel">Payment Channel</label>
      <select id="paymentChannel" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <!-- Enter Amount Field -->
    <div class="form-group col-md-6">
      <label for="amount">Amount</label>
      <input type="number" class="form-control" id="amount" placeholder="Amount">
    </div>

    <!-- Cancel Button -->
    <button type="submit" class="btn btn-primary">Cancel</button>
    <!-- Save Button -->
    <button type="submit" class="btn btn-primary">Save</button>
    <!-- Send Button -->
    <button type="submit" class="btn btn-primary">Send</button>
    <!-- Print Button -->
    <button type="submit" class="btn btn-primary">Print</button>

  </div>
</form>
@endsection

@push('scripts')
<!-- js here -->
@endpush
