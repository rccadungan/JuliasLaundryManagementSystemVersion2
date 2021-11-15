@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Navigation Bar -->
  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="float:right;">
      <a class="nav-link active" id="v-pills-issueCreditMemo-tab" data-toggle="pill" href="#v-pills-issueCreditMemo" role="tab" aria-controls="v-pills-issueCreditMemo" aria-selected="true"> Issue Credit Memo </a>
      <a class="nav-link" id="v-pills-customerInformation-tab" data-toggle="pill" href="#v-pills-customerInformation" role="tab" aria-controls="v-pills-customerInformation" aria-selected="false"> Customer Information </a>
      <a class="nav-link" id="v-pills-creditMemoDetails-tab" data-toggle="pill" href="#v-pills-creditMemoDetails" role="tab" aria-controls="v-pills-creditMemoDetails" aria-selected="false"> Credit Memo Details</a>
    </div>

    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-issueCreditMemo" role="tabpanel" aria-labelledby="v-pills-issueCreditMemo-tab">
        <!-- Issue Credit Memo Section -->
        <div class="card mb-4">
          <div class="card-body">
            <form>
              <!-- Issue Credit Memo Section -->
              <h5 class="font-weight-bold mb-3"> Issue Credit Memo </h5>
              
              <!-- SOF Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="sofNumber">SOF No.</label>
                  <select id="sofNumber" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>

              <!-- Service Order Form Status Section -->
              <h5 class="font-weight-bold mb-3"> Service Order Form Status </h5>

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
                      <option>...</option>
                    </select>
                </div>

                <!-- Customer Name Field -->
                <div class="form-group col-md-6">
                    <label for="customerName">Customer Name</label>
                    <select id="customerName" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
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


      <div class="tab-pane fade" id="v-pills-creditMemoDetails" role="tabpanel" aria-labelledby="v-pills-creditMemoDetails-tab"> 
        <!-- Credit Memo Details Section -->
        <div class="card mb-4">
          <div class="card-body">
            <form>
              <!-- Credit Memo Details Section -->
              <h5 class="font-weight-bold mb-3"> Credit Memo Details </h5>

              <!-- Amount Field -->
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" id="amount" placeholder="Amount">
                </div>
              </div>

              <!-- Reason Field -->
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="reason">Reason</label>
                  <input type="text" class="form-control" id="reason" placeholder="Reason">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Issue Credit Memo Section -->
  <div class="card mb-4">
    <div class="card-body">
      <form>
        <!-- Issue Credit Memo Section -->
        <h5 class="font-weight-bold mb-3"> Issue Credit Memo </h5>
        
        <!-- SOF Field -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="sofNumber">SOF No.</label>
            <select id="sofNumber" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
        </div>

        <!-- Service Order Form Status Section -->
        <h5 class="font-weight-bold mb-3"> Service Order Form Status </h5>

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
      </form>
    </div>
  </div>

    
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
                <option>...</option>
              </select>
          </div>

          <!-- Customer Name Field -->
          <div class="form-group col-md-6">
              <label for="customerName">Customer Name</label>
              <select id="customerName" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
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
            <input type="text" class="form-control" id="customerEmail" placeholder="Email" name="email" value="{{ $customers[0]->cust_add }}" readonly />
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

  <!-- Credit Memo Details Section -->
  <div class="card mb-4">
    <div class="card-body">
      <form>
        <!-- Credit Memo Details Section -->
        <h5 class="font-weight-bold mb-3"> Credit Memo Details </h5>

        <!-- Amount Field -->
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="amount">Amount</label>
              <input type="text" class="form-control" id="amount" placeholder="Amount">
          </div>
        </div>

        <!-- Reason Field -->
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="reason">Reason</label>
            <select id="reason" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div> 
  

  <div class ="mb-2 float-right">
    <!-- Cancel Button -->
    <button type="submit" class="btn btn-danger">Cancel</button>
    <!-- OK Button -->
    <button type="submit" class="btn btn-primary ml-2">OK</button>
  </div>
  
</div> 
@endsection

@push('scripts')
<!-- js here -->
@endpush