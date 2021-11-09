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

    <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <nav>
                          <div class="nav nav-pills nav-justified" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-serviceOrderForm-tab" data-toggle="tab" href="#nav-serviceOrderForm" role="tab" aria-controls="nav-serviceOrderForm" aria-selected="true">Service Order Form</a>
                              <a class="nav-item nav-link" id="nav-provisionalReceipt-tab" data-toggle="tab" href="#nav-provisionalReceipt" role="tab" aria-controls="nav-provisionalReceipt" aria-selected="false">Provisional Receipt</a>
                              <a class="nav-item nav-link" id="nav-creditMemo-tab" data-toggle="tab" href="#nav-creditMemo" role="tab" aria-controls="nav-creditMemo" aria-selected="false">Credit Memo</a>
                          </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-serviceOrderForm" role="tabpanel" aria-labelledby="nav-serviceOrderForm-tab">
                              <table class="table" cellspacing="0">
                                  <thead>
                                      <tr>
                                          <th>Service Order No.</th>
                                          <th>DateTime</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><a href="#"></a></td>
                                          <td></td>
                                          <td>
                                            <!-- Send Button -->
                                            <button class="btn btn-primary ml-2">Send</button>
                                            <!-- Send Button -->
                                            <button class="btn btn-warning ml-2" style="background-color: pink;">Print</button>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="nav-provisionalReceipt" role="tabpanel" aria-labelledby="nav-provisionalReceipt-tab">
                              <table class="table" cellspacing="0">
                                  <thead>
                                      <tr>
                                          <th>Provisional Receipt No.</th>
                                          <th>DateTime</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><a href="#"></a></td>
                                          <td></td>
                                          <td>
                                            <!-- Send Button -->
                                            <button class="btn btn-primary ml-2">Send</button>
                                            <!-- Send Button -->
                                            <button class="btn btn-warning ml-2" style="background-color: pink;">Print</button>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="nav-creditMemo" role="tabpanel" aria-labelledby="nav-creditMemo-tab">
                              <table class="table" cellspacing="0">
                                  <thead>
                                      <tr>
                                          <th>Credit Memo No.</th>
                                          <th>DateTime</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><a href="#"></a></td>
                                          <td></td>
                                          <td>
                                            <!-- Send Button -->
                                            <button class="btn btn-primary ml-2">Send</button>
                                            <!-- Send Button -->
                                            <button class="btn btn-warning ml-2" style="background-color: pink;">Print</button>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    </div>
  </div>
</form>
@endsection

@push('scripts')
<!-- js here -->
@endpush