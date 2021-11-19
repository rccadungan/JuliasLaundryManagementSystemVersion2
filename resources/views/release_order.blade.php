@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Navigation Bar -->
  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="float:right;">
      <a class="nav-link active" id="v-pills-releaseOrder-tab" data-toggle="pill" href="#v-pills-releaseOrder" role="tab" aria-controls="v-pills-releaseOrder" aria-selected="true"> Release Order </a>
      <a class="nav-link" id="v-pills-customerInformation-tab" data-toggle="pill" href="#v-pills-customerInformation" role="tab" aria-controls="v-pills-customerInformation" aria-selected="false"> Customer Information </a>
      <a class="nav-link" id="v-pills-releaseOrderDetails-tab" data-toggle="pill" href="#v-pills-releaseOrderDetails" role="tab" aria-controls="v-pills-releaseOrderDetails" aria-selected="false"> Release Order Details</a>
    </div>

    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-releaseOrder" role="tabpanel" aria-labelledby="v-pills-releaseOrder-tab">
        <!-- Release Order Section -->
        <div class="card mb-4">
          <div class="card-body">
            <form>
              
              <h5 class="font-weight-bold mb-3"> Release Order </h5>
              
              <!-- SOF Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="sofNumber">SOF No.</label>
                  <select id="sofNumber" class="form-control">
                    <option selected>Choose...</option>
                      @foreach($serviceOrders as $serviceOrder)
                        <option value="{{ $serviceOrder->id }}">
                        {{ $serviceOrder->id }}
                        </option>
                      @endforeach
                  </select>
                </div>
              </div>

              <!-- Service Order Form Status Section -->
              <h5 class="font-weight-bold mb-3"> Service Order Form Status </h5>

              <!-- Amount Paid Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="amountPaid">Amount Paid</label>
                  <input type="text" class="form-control" id="amountPaid" placeholder="Amount Paid" readonly/>
                </div>

                <!-- Balance Field -->
                <div class="form-group col-md-6">
                  <label for="balance">Balance</label>
                  <input type="text" class="form-control" id="balance" placeholder="Balance" readonly/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


      <div class="tab-pane fade" id="v-pills-customerInformation" role="tabpanel" aria-labelledby="v-pills-customerInformation-tab">
        <!-- Customer Information Section -->
        <div class="card mb-4">
          <div class="card-body">
            <form>
              <!-- Customer Information Section -->
              <h5 class="font-weight-bold mb-3"> Customer Information </h5>

              <!-- Customer Number Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="customerNumber">Customer No.</label>
                  <select id="customerNumber" class="form-control">
                    <option selected>Choose...</option>
                    @foreach($customers as $customer)
                      <option value="{{ $customer->id }}">
                      {{ $customer->id }}
                      </option>
                    @endforeach
                  </select>
                </div>

                <!-- Customer Name Field -->
                <div class="form-group col-md-6">
                    <label for="customerName">Customer Name</label>
                    <select id="customerName" class="form-control">
                      <option selected>Choose...</option>
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

                <!-- Customer VIP Status Field -->
                <div class="form-group col-md-6">
                  <label for="vip">VIP</label>
                  <input type="text" class="form-control" id="vip" placeholder="vip" name="vip" value="{{ $customers[0]->is_vip == 1 ? 'Yes' : 'No' }}" readonly />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


      <div class="tab-pane fade" id="v-pills-releaseOrderDetails" role="tabpanel" aria-labelledby="v-pills-releaseOrderDetails-tab"> 
        <!-- Credit Memo Details Section -->
        <div class="card mb-4">
          <div class="card-body">
            <form>
              <!-- Credit Memo Details Section -->
              <h5 class="font-weight-bold mb-3"> Release Order Details </h5>

              <!-- Amount Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="amount">Amount Paid</label>
                    <input type="text" class="form-control" id="amount" placeholder="Amount">
                </div>
              </div>

              <!-- Received By Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="receivedBy">Received By</label>
                  <select id="receivedBy" class="form-control" name="received_by">
                    <option selected>Choose...</option>
                    @foreach($users as $user)
                      <option value="{{ $user->user_name }}">
                        {{ $user->user_name }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="form-row float-right col-md-4">
        <div class ="mb-2">
          <!-- Cancel Button -->
          <button type="submit" class="btn btn-danger">Cancel</button>
          <!-- OK Button -->
          <button type="submit" class="btn btn-primary ml-2">OK</button>
        </div>
      </div>

    </div>   
  </div> 
</div> 
@endsection

@push('scripts')
<!-- js here -->
@endpush