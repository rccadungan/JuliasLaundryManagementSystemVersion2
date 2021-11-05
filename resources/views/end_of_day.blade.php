<!-- Redundant to Reports blade -->
@extends('layouts.master') 

@push('css')
<!-- css here -->
@endpush

@section('content')
<form>
  <!-- Create End of Day Report Section -->
  <h5 class="fw-bold mb-3 text"> End of Day Report </h5>

  <!-- Created at Field -->
  <div class="form-group col-md-6">
      <label for="createdAt">Created at</label>
      <input type="text" class="form-control" id="createdAt" placeholder="Created At" name="created_at" readonly />
  </div>

  <!-- Cash Breakdown Section -->
  <h5 class="fw-bold mb-3 text"> Cash Breakdown </h5>

  <div class="row">
    <div class="col-12">
    <table class="table table-bordered">  
      <thead>
      <tr>
          <th scope="col">Bill/Coin</th>
          <th scope="col">Count</th>
          <th scope="col">Amount</th>
      </tr>
      </thead>
        <tbody>
          <tr>
            <td>1,000.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>500.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>200.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>100.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>50.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>20.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>10.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>5.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>1.00</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>0.50</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>0.25</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>0.10</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>0.05</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>CHECKS</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td></td>
            <td>Actual Cash Total</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Payment Section -->
  <h5 class="fw-bold mb-3 text"> Payment </h5>

  <!-- Date Today Section -->
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dateToday">Date Today</label>
        <input type="date" class="form-control" id="dateToday" placeholder="Date Today " name="date_Today" />
      </div>
  </div>

  <!-- Payment Total Section -->
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="paymentTotal">Payment Total</label>
        <input type="number" class="form-control" id="paymentTotal" placeholder="Payment Total " name="payment_Total" />
      </div>
  </div>

  <!-- Provisional Receipt no. Section -->
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">  
        <thead>
          <tr>
            <th scope="col">Provisional Receipt No.</th>
            <th scope="col">DateTime</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td>000001</td>
              <td>
                <input type="datetime-local">
              </td>
              <td>132.00</td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <!-- LESS: Expenses Section -->
  <h5 class="fw-bold mb-3 text"> LESS: Expenses </h5>

  <!-- Date Today Section -->
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dateToday">Date Today</label>
        <input type="date" class="form-control" id="dateToday" placeholder="Date Today " name="date_Today" />
      </div>
  </div>

  <!-- Total Expenses Section -->
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="total_Expenses">Total Expenses</label>
        <input type="number" class="form-control" id="totalExpenses" placeholder="Total Expenses " name="total_Expenses" />
      </div>
  </div>

  <!-- Expenses Type Section -->
  <div class="row">
      <div class="col-12">
        <table class="table table-bordered">  
          <thead>
            <tr>
              <th scope="col">Expenses Type</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-group col-md-12">
                    <select id="expenseType" class="form-control" name="expense_type">
                      <option selected>Choose...</option>
                      <option value="Soap">Soap</option>
                      <option value="Powder">Powder</option>
                      <option value="Detergent">Detergent</option>
                    </select>
                  </div>
                </td>
                <td>150.00</td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>

  <!-- LESS: Credit Memo Section -->
  <h5 class="fw-bold mb-3 text"> LESS: Credit Memos </h5>

  <!-- Date Today Section -->
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dateToday">Date Today</label>
        <input type="date" class="form-control" id="dateToday" placeholder="Date Today " name="date_Today" />
      </div>
  </div>

  <!-- Credit Memo Total Section -->
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="total_Expenses">Credit Memo Total</label>
        <input type="number" class="form-control" id="totalExpenses" placeholder="Total Expenses " name="total_Expenses" />
      </div>
  </div>

  <!-- Provisional Receipt no. Section -->
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">  
        <thead>
          <tr>
            <th scope="col">Provisional Receipt No.</th>
            <th scope="col">DateTime</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td>000002</td>
              <td>
                <input type="datetime-local">
              </td>
              <td>135.00</td>
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <!-- LESS: Credit Memo Section -->
  <h5 class="fw-bold mb-3 text"> Income Details </h5>

  <h6 class="fw-bold mb-3 text"> Cash Subtotal </h6>
  <h7 class="fw-bold mb-3 text"> Total Payment </h7>
  <h6 class="fw-bold mb-3 text"> LESS Subtotal </h6>
  <h7 class="fw-bold mb-3 text"> Expenses </h7>
  <h7 class="fw-bold mb-3 text"> Credit Memo </h7>
  <h6 class="fw-bold mb-3 text"> Total Income </h6>

  <!-- Cancel Button -->
  <button class="btn btn-danger">Cancel</button>
  <!-- Save Button -->
  <button class="btn btn-primary ml-2">Finalize EOD</button>

</form>
@endsection

@push('scripts')
<!-- js here -->
@endpush