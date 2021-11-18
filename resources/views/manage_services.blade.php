<!-- Redundant to services blade -->
@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Transactions Section -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="main">
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
            <input type="text" class="form-control" placeholder="Search Service" style="padding-left: 2.375rem;">
          </div>  
        </div>

        <!-- Add New Services Button --> 
        <div class="form-row">
          <div class="form-group col-md-12">
              <!-- Add New Services Button -->                
              <button id="btn-add-services" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#form">
                  Add New Services
              </button>
              <br/><br/>  
          </div>

          <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="addService" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <h5 class="modal-title" id="addService">Enter Service Information</h5>
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
                      <label for="addUnitPrice">Unit Price</label>
                      <input type="number" class="form-control" id="addUnitPrice" placeholder="Unit Price">
                    </div>

                    <div class="form-group">
                      <label for="addUnitType">Unit Type</label>
                      <select id="addUnitType" class="form-control">
                        <option selected>Choose...</option>
                        <option>kg</option>
                        <option>pc</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="addMin.Qty">Min. Qty</label>
                        <input type="number" class="form-control" id="addMin.Qty" placeholder="Min. Qty">
                    </div>

                    <div class="form-group">
                        <label for="addActiveInactive">[A]ctive/[I]nactive</label>
                        <select id="addActiveInactive" class="form-control">
                          <option selected>Choose...</option>
                          <option>Active</option>
                          <option>Inactive</option>
                        </select>
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
              <th scope="col">Service Name</th>
              <th scope="col">Unit Price</th>
              <th scope="col">Unit Type</th>
              <th scope="col">Min. Qty</th>
              <th scope="col">[A]ctive/[I]nactive</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($serviceTypes as $serviceType)
            <tr>
              <td>{{ $serviceType->article_name }}</td>
              <td>{{ $serviceType->amount }}</td>
              <td>kg</td>
              <td>{{ $serviceType->min_qty }}</td>
              <td>Active</td>
              <td>
                <button id="btn-edit-services" type="button" class="btn btn-success" data-toggle="modal" data-target="#form1">
                  <i class="fas fa-edit"></i>
                </button>
                  <div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="editService" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                          <h5 class="modal-title" id="editService">Edit Service Information</h5>
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
                              <label for="editUnitPrice">Unit Price</label>
                              <input type="number" class="form-control" id="editUnitPrice" placeholder="Unit Price">
                            </div>

                            <div class="form-group">
                              <label for="editUnitType">Unit Type</label>
                              <select id="editUnitType" class="form-control">
                                <option selected>Choose...</option>
                                <option>kg</option>
                                <option>pc</option>
                              </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="editMin.Qty">Min. Qty</label>
                                <input type="number" class="form-control" id="editMin.Qty" placeholder="Min. Qty">
                            </div>

                            <div class="form-group">
                              <label for="editActiveInactive">[A]ctive/[I]nactive</label>
                              <select id="editActiveInactive" class="form-control">
                                <option selected>Choose...</option>
                                <option>Active</option>
                                <option>Inactive</option>
                              </select>
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
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- js here -->
<script>
$(function(){
   $(".dropdown-menu").on('click', 'a', function(){
       $(this).parents('.dropdown').find('button').text($(this).text());
   });
});
</script>
@endpush