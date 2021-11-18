@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Actual search box -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="main">
        
        <!-- Actual search box -->
        <div class="form-group has-search" style="width: 50%;margin: 50px auto;">
          <span class="fa fa-search form-control-feedback" 
              style="position: absolute;
              z-index: 2;
              display: block;
              width: 2.375rem;
              height: 2.375rem;
              line-height: 2.375rem;
              text-align: center;
              pointer-events: none;
              color: #aaa;">
          </span>
          <input type="text" class="form-control" placeholder="Select Service" style="padding-left: 2.375rem;">
        </div>  
      </div>

      <!-- Add New Discounts Button --> 
      <div class="form-row">
        <div class="form-group col-md-12">
          <!-- Add New Discounts Button -->              
          <button id="btn-add-discounts" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#form">
            Add New Discounts
          </button>
          <br/><br/>  
        </div>

        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="addDiscount" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="addDiscount">Enter Discount Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="addServicesName">Service Name</label>
                    <input type="text" class="form-control" id="addServicesName" aria-describedby="addServicesNameHelp" placeholder="Service Name">
                  </div>

                  <div class="form-group">
                    <label for="addMinimumQty">Minimum Qty</label>
                    <input type="number" class="form-control" id="addMinimumQty" placeholder="Minimum Qty">
                  </div>

                  <div class="form-group">
                    <label for="addDiscount">Discount (%)</label>
                    <input type="number" class="form-control" id="addDiscount" placeholder="Discount (%)">
                  </div>
                </div>

                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Submit</button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>




      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Service</th>
            <th scope="col">Minimum Qty</th>
            <th scope="col">Discount (%)</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Comforter White</td>
            <td>2</td>
            <td>.11</td>
            <td>
              <button id="btn-edit-discounts" type="button" class="btn btn-success" data-toggle="modal" data-target="#form1">
                <i class="fas fa-edit"></i>
              </button>          
                <div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="editDiscount" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="editDiscount">Edit Discount Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="editServicesName">Service Name</label>
                            <input type="text" class="form-control" id="editServicesName" aria-describedby="editServicesNameHelp" placeholder="Service Name">
                          </div>

                          <div class="form-group">
                            <label for="editMinimumQty">Minimum Qty</label>
                            <input type="number" class="form-control" id="editMinimumQty" placeholder="Minimum Qty">
                          </div>

                          <div class="form-group">
                            <label for="editDiscount">Discount (%)</label>
                            <input type="number" class="form-control" id="editDiscount" placeholder="Discount (%)">
                          </div>
                        </div>

                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 
</div>
@endsection

@push('scripts')
<!-- js here -->
@endpush