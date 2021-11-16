@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div id="response">
</div>
<form method="post" action="{{ route('orders.post') }}">
  @csrf
  `<!-- Order Information Section -->
  <h5 class="font-weight-bold mb-3"> Order Information </h5>

  <!-- Service Order Field -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="serviceOrderNumber">Service Order No.</label>
      <input type="text" class="form-control" id="serviceOrderNumber" placeholder="Service Order No." value="{{ $service_order_no }}" name="service_order_no" readonly />    </div>
    </div>

    <!-- Received Date Field -->
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="receivedDate">Received Date</label>
        <input type="date" class="form-control" id="receivedDate" placeholder="Received Date " name="received_date" />
      </div>

      <!-- Received Time Field -->
      <div class="form-group col-md-4">
        <label for="receivedTime">Time</label>
        <input type="time" class="form-control" id="receivedTime" placeholder="Time" name="received_time" />
      </div>

     <!-- Received By Field -->
     <div class="form-group col-md-4">
        <label for="receivedBy">Received By</label>
        <select id="receivedBy" class="form-control" name="received_by">
          <option selected>Choose employee...</option>
          @foreach($users as $user)
            <option value="{{ $user->user_name }}">
              {{ $user->user_name }}
            </option>
          @endforeach
        </select>
      </div> 
    </div> 

    <!-- Pickup Date Field -->
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="pickupDate">Pick up Date</label>
        <input type="date" class="form-control" id="pickupDate" placeholder="Pickup Date" name="pickup_date" />
      </div>

      <!-- Pickup Time Field -->
      <div class="form-group col-md-4">
        <label for="pickupTime">Time</label>
        <input type="time" class="form-control" id="pickupTime" placeholder="Time" name="pickup_time" />
      </div>

      <!-- Pickup By Field -->
      <div class="form-group col-md-4">
        <label for="pickupBy">To Be Picked Up By</label>
        <input type="text" class="form-control" id="pickupBy" placeholder="To Be Picked Up By" name="pickup_by" />
      </div>
    </div>`


    <!-- Customer Information Section -->
    <h5 class="font-weight-bold mb-3">Customer Information</h5>

    <!-- Customer Number Field -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="customerNumber">Customer No.</label>
        <input type="number" class="form-control" id="customerNumber" placeholder="Customer No." name="customer_number" value="{{ $customers[0]->id }}" readonly />
      </div>

      <!-- Customer Name Field -->
      <div class="form-group col-md-6">
        <label for="customerName">Customer Name</label>
        <select id="customerName" class="form-control" name="customer_name">
          <option selected>Choose customer...</option>
          @foreach($customers as $customer)
            <option value="{{ $customer->id }}">
              {{ $customer->cust_name }}
            </option>
          @endforeach
        </select>
      </div> 
    </div> 

    <!-- Customer Address Field -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="customerAddress" placeholder="Address" name="address" value="{{ $customers[0]->cust_add }}" readonly />
      </div>

      <!-- Customer Address Field -->
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="customerEmail" placeholder="Email" name="email" value="{{ $customers[0]->email }}" readonly />
      </div>
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
    </div>

    <!-- Customer Transaction Remarks Field -->
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="remarks">Remarks</label>
        <textarea class="form-control" class="form-control" id="remarks" placeholder="Remarks" rows="5" name="remarks" ></textarea>
      </div>
    </div>

    <!-- Order Details Section -->
    <h5 class="font-weight-bold mb-3">Order Details</h5>

    <div class="form-row">
      <div class="form-group col-md-12">
        <!-- Add New Item Button -->
        <button id="btn-add-article" class="btn btn-primary float-right">Add New Item</button>
        <br/><br/>
        <!-- Articles Section -->
        <label for="article">Article</label>
        <select id="article" class="form-control">
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
    </div>
  
    <!-- Order Quantity Field -->
    <div class="form-row mb-3">
      <div class="form-group col-md-6">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" placeholder="Quantity" min="1" />
      </div>

      <!-- Order Discount Field -->
      <div class="form-group col-md-6">
        <label for="discount">Discount</label>
        <select id="discount" class="form-control" readonly>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Article</th>
              <th scope="col">Unit Price</th>
              <th scope="col">Minimum</th>
              <th scope="col">Unit Type</th>
              <th scope="col">Quantity</th>
              <th scope="col">Discount</th>
              <th scope="col">Amount</th> 
            </tr>
          </thead>
          <tbody id="article-table-body">
          </tbody>
        </table>
      </div>
    </div>


    <!-- Payment Details Section -->
    <h5 class="font-weight-bold mb-3">Payment</h5>

    <!-- Enter Total Amount Field -->
    <div class="form-row mb-3">
      <div class="form-group col-md-12">
        <label for="totalAmount">Total Amount</label>
        <input type="number" class="form-control" id="totalAmount" placeholder="Total Amount" name="totalAmount" readonly/>
      </div>
    </div>

    <!-- Payment Channel Option -->
    <div class="form-row mb-3">
      <div class="form-group col-md-6">
        <label for="paymentChannel">Payment Channel</label>
        <select id="paymentChannel" class="form-control" name="payment_channel">
          <option selected>Choose...</option>
          <option value="ewallet">E-wallet</option>
          <option value="card">Card</option>
          <option value="cash">Cash</option>
        </select>
      </div>


      <!-- Payment Option -->
      <div class="form-group col-md-6">
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
    </div>


    <!-- Enter Amount Deposit Field -->
    <div class="form-row mb-3">
      <div class="form-group col-md-6">
        <label for="amountDeposit">Amount Deposit</label>
        <input type="number" class="form-control" id="amountDeposit" placeholder="Amount Deposit" name="amountDeposit" />
      </div>

      <!-- Enter Amount Paid Field -->
      <div class="form-group col-md-6">
        <label for="amountPaid">Amount Paid</label>
        <input type="number" class="form-control" id="amountPaid" placeholder="Amount Paid" name="amountPaid" />
      </div>
    </div>


    <div class ="mb-2 float-right">
      <!-- Cancel Button -->
      <a href="{{ route('home.orders') }}" class="btn btn-danger">Cancel</a>
      <!-- Save Button -->
      <button type="submit" class="btn btn-primary ml-2">Save</button>
      <!-- Print Button -->
      <a href="#" class="btn btn-success ml-2">Print</a>
    </div>
</form>

@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    let totalAmount = 0.00;
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
            <td><input class="form-control" type="text" name="articles[]" readonly value="${serviceType[0].article_name}" /></td>
            <td><input class="form-control" type="text" name="unitPrices[]" readonly value="${serviceType[0].amount}" /></td>
            <td><input class="form-control" type="text" name="minimums[]" readonly value="${serviceType[0].min_qty}" /></td>
            <td><input class="form-control" type="text" readonly value="KG" /></td>
            <td><input class="form-control" type="text" name="quantities[]" readonly value="${$('#quantity').val()}" /></td>
            <td><input class="form-control" type="text" name="discounts[]" readonly value="${serviceType[0].disc_type.disc_pct * 100}%" /></td>
            <td><input class="form-control" type="text" name="amounts[]" readonly value="${totalServiceAmount}" /></td>
          </tr>
        `);
        totalAmount += parseFloat(serviceType[0].amount - (serviceType[0].amount * serviceType[0].disc_type.disc_pct));
        $('#totalAmount').val(totalAmount);
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

    let success = `
      <div class="alert alert-success" role="alert">
        Create order successful.
      </div>
    `;

    let failed = `
      <div class="alert alert-danger" role="alert">
        Create order failed.
      </div>
    `;

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const save = urlParams.get('save');
    if (save == '1') {
      $('#response').html(success);
    } else if (save == '0') {
      $('#response').html(failed);
    }

  });
</script>
@endpush
