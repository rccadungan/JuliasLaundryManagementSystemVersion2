@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<form>
  <!-- Order Information Section -->
  <h5 class="fw-bold mb-3 text-uppercase"> Order Information </h5>

  <!-- Service Order Field -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="serviceOrderNumber">Service Order No.</label>
      <input type="text" class="form-control" id="serviceOrderNumber" placeholder="Service Order No." value="{{ $service_order_no }}" name="service_order_no" readonly />    </div>
  </div>

  <!-- Received Date Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="receivedDate">Received Date</label>
      <input type="date" class="form-control" id="receivedDate" placeholder="Received Date " name="received_date" />
    </div>

  <!-- Received Time Field -->
    <div class="form-group col-md-6">
      <label for="receivedTime">Time</label>
      <input type="time" class="form-control" id="receivedTime" placeholder="Time" name="received_time" />
    </div>
  </div>

  <!-- Pickup Date Field -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pickupDate">Pick up Date</label>
      <input type="date" class="form-control" id="pickupDate" placeholder="Pickup Date" name="pickup_date" />
    </div>

  <!-- Pickup Time Field -->
    <div class="form-group col-md-6">
      <label for="pickupTime">Time</label>
      <input type="time" class="form-control" id="pickupTime" placeholder="Time" name="pickup_time" />
    </div>
  </div>

  <!-- Customer Information Section -->
  <h5 class="fw-bold mb-2 text-uppercase">Customer Information</h5>

  <!-- Customer Number Field -->
  <div class="form-group col-md-6">
      <label for="customerNumber">Customer No.</label>
      <input type="number" class="form-control" id="customerNumber" placeholder="Customer No." name="customer_number" value="{{ $customers[0]->id }}" readonly />
  </div>

  <!-- Customer Name Field -->
  <div class="form-group col-md-6">
      <label for="customerName">Customer Name</label>
      <select id="customerName" class="form-control" name="customer_name">
        @foreach($customers as $customer)
          <option value="{{ $customer->id }}">
            {{ $customer->cust_name }}
          </option>
        @endforeach
      </select>
    </div>

  <!-- Customer Address Field -->
    <div class="form-group col-md-6">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="customerAddress" placeholder="Address" name="address" value="{{ $customers[0]->cust_add }}" readonly />
    </div>

    <!-- Customer Contact Number Field -->
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactNumber">Contact Number</label>
      <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number" name="contact_number" value="{{ $customers[0]->cust_tel }}" readonly />
    </div>

    <!-- Make Customer VIP Option -->
    <div class="form-group col-md-6">
      <label for="VIP">VIP</label>
      <input type="text" class="form-control" id="vip" placeholder="vip" name="vip" value="{{ $customers[0]->is_vip == 1 ? 'Yes' : 'No' }}" readonly />
    </div>

    <!-- Customer Transaction Remarks Field -->
    <div class="form-group col-md-12">
      <label for="remarks">Remarks</label>
      <textarea class="form-control" class="form-control" id="remarks" placeholder="Remarks" rows="5" name="remarks" ></textarea>
    </div>

    <!-- Order Details Section -->
    <h5 class="fw-bold mb-2 text-uppercase">Order Details</h5>

    <div class="form-group col-md-12">
    <!-- Add New Item Button -->
    <button id="btn-add-article" class="btn btn-primary">Add a New Item</button>
    <br/><br/>
    <!-- Articles Section -->
      <label for="article">Article</label>
      <select id="article" class="form-control" name="article">
        <option>
          Please select article...
        </option>
        @foreach($serviceTypes as $serviceType)
          <option value="{{ $serviceType->id }}">
            {{ $serviceType->article_name }}
          </option>
        @endforeach
      </select>
    </div>
  
  <!-- Order Quantity Field -->
  <div class="form-row mb-5">
    <div class="form-group col-md-6">
      <label for="quantity">Quantity</label>
      <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity" min="1" />
    </div>

    <!-- Order Discount Field -->
    <div class="form-group col-md-6">
      <label for="discount">Discount</label>
      <select id="discount" class="form-control" name="discount" >
      </select>
    </div>

    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Article</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Minimum</th>
            <th scope="col">Quantity</th>
            <th scope="col">Discount</th>
            <th scope="col">Deposit</th>
            <th scope="col">Amount</th> 
          </tr>
        </thead>
        <tbody id="article-table-body">
        </tbody>
      </table>
    </div>

    <!-- Payment Details Section -->
    <h5 class="fw-bold mb-2 text-uppercase">Payment</h5>

    <!-- Payment Channel Option -->
    <div class="form-group col-md-12">
      <label for="paymentChannel">Payment Channel</label>
      <select id="paymentChannel" class="form-control" name="payment_channel">
        <option selected>Choose...</option>
        <option value="ewallet">E-wallet</option>
        <option value="card">Card</option>
        <option value="cash">Cash</option>
      </select>
    </div>

    <!-- Payment Option -->
    <div class="form-group col-md-12">
      <label for="paymentOption">Payment Option</label>
      <select id="paymentOption" class="form-control" name="payment_option" >
        <option>Choose...</option>
        <!-- Ewallet -->
        <option value="paymaya" class="ewallet">Paymaya</option>
        <option value="gcash" class="ewallet">Gcash</option>

        <!-- Card -->
        <option value="credit" class="card">Credit card</option>
        <option value="debit" class="card">Debit card</option>

        <!-- Cash -->
        <option value="over_the_counter" class="cash">Over the counter</option>
      </select>
    </div>

    <!-- Enter Amount Field -->
    <div class="form-group col-md-12">
      <label for="amount">Amount</label>
      <input type="number" class="form-control" id="amount" placeholder="Amount" name="amount" />
    </div>

    <!-- Cancel Button -->
    <button class="btn btn-danger">Cancel</button>
    <!-- Save Button -->
    <button class="btn btn-primary ml-2">Save</button>
    <!-- Print Button -->
    <button class="btn btn-warning ml-2" style="background-color: pink;">Print</button>

  </div>
</form>
@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    let customers = JSON.parse( '{!! $customers !!}');
    let serviceTypes = JSON.parse( '{!! $serviceTypes !!}');
    $('#customerName').change(function() {
      let customer = customers.filter(cust => {
        return cust.id == $('#customerName').val();
      });
      if (customer.length > 0) {
        $('#customerNumber').val(customer[0].id);
        $('#customerAddress').val(customer[0].cust_add);
        $('#contactNumber').val(customer[0].cust_tel);
        $('#vip').val(customer[0].is_vip == 1 ? 'Yes' : 'No');
      }
    });
    let serviceType = [];
    $('#article').change(function() {
      serviceType = serviceTypes.filter(service => {
        return service.id == $('#article').val();
      });
      $('#quantity').val('');
      $('#quantity').attr('min', serviceType[0].min_qty);
      $('#discount').html(`
        <option value="${serviceType[0].disc_type.disc_pct}">
          ${serviceType[0].disc_type.disc_pct * 100}%
        </option>
      `);
    });
    $('#btn-add-article').click(function(e) {
      e.preventDefault();
      if (serviceType.length > 0) {
        let totalServiceAmount = 0;
        if ($('#quantity').val() > serviceType[0].min_qty) {
          //Todo : check formula if exceeds to min
          totalServiceAmount = $('#quantity').val() * serviceType[0].amount;
        } else { 
          totalServiceAmount = serviceType[0].amount;
        }
        // let discount = totalServiceAmount * serviceType[0].disc_type.disc_pct;
        // totalServiceAmount = totalServiceAmount - discount;
        $('#article-table-body').append(`
          <tr>
            <td>${serviceType[0].article_name}</td>
            <td>${serviceType[0].amount}</td>
            <td>${serviceType[0].min_qty}</td>
            <td>${$('#quantity').val()}</td>
            <td>${serviceType[0].disc_type.disc_pct * 100}%</td>
            <td><input class="form-control" type="number" name="service_type_deposit[]" /></td>
            <td>${totalServiceAmount}</td>
          </tr>
        `);
      }
    });
    $('#paymentChannel').change(function(){
      $('.ewallet').hide();
      $('.card').hide();
      $('.cash').hide();
      if ($('#paymentChannel').val() == "ewallet") {
        $('.ewallet').show();
        $('.card').hide();
        $('.cash').hide();
      }
      if ($('#paymentChannel').val() == "card") {
        $('.ewallet').hide();
        $('.card').show();
        $('.cash').hide();
      }
      if ($('#paymentChannel').val() == "cash") {
        $('.ewallet').hide();
        $('.card').hide();
        $('.cash').show();
      }
    });
  });
</script>
@endpush
