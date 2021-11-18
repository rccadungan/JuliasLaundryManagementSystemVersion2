<!-- Redundant to Customers blade -->
@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Manage Customer Section -->
  <div class="card mb-4">
        <div class="card-body">
            <div class="container">
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
                    <input type="text" class="form-control" placeholder="Search Customer" style="padding-left: 2.375rem;">
                </div>  

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <!-- Add New Customer Button -->                
                        <button id="btn-add-customer" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#form">
                            Add New Customer
                        </button>
                        <br/><br/>  
                    </div>

                    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="addCustomerInformation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <h5 class="modal-title" id="addCustomerInformation">Enter Customer Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="addCustomerName">Customer Name</label>
                                            <input type="text" class="form-control" id="addCustomerName" aria-describedby="addCustomerNameHelp" placeholder="Enter Customer Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="addAddress">Address</label>
                                            <input type="text" class="form-control" id="addAddress" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="addContactNo.">Contact No.</label>
                                            <input type="contactNo." class="form-control" id="addContactNo." placeholder="Contact No.">
                                        </div>
                                        <div class="form-group">
                                            <label for="addEmail">Email</label>
                                            <input type="email" class="form-control" id="addEmail" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="addStatus">VIP Status</label>
                                            <select id="addStatus" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>VIP</option>
                                                <option>Not VIP</option>
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


                <div class="row">
                    <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact no.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Justine Dela Paz</td>
                            <td>Blk 15 Lot 12 31st Taguig City</td>
                            <td>09087894562</td>
                            <td>bj@hotmail.com</td>
                            <td>VIP</td>
                            <td>
                            <button id="btn-edit-customer" type="button" class="btn btn-success" data-toggle="modal" data-target="#form1">
                                <i class="fas fa-edit"></i>
                            </button>   
                                <div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="addCustomerInformation" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-bottom-0">
                                                <h5 class="modal-title" id="addCustomerInformation">Edit Customer Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="editCustomerName">Customer Name</label>
                                                        <input type="text" class="form-control" id="editCustomerName" aria-describedby="editCustomerNameHelp" placeholder="Enter Customer Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editAddress">Address</label>
                                                        <input type="text" class="form-control" id="editAddress" placeholder="Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editContactNo.">Contact No.</label>
                                                        <input type="contactNo." class="form-control" id="editContactNo." placeholder="Contact No.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editEmail">Email</label>
                                                        <input type="email" class="form-control" id="editEmail" placeholder="Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="editStatus">VIP Status</label>
                                                        <select id="editStatus" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option>VIP</option>
                                                            <option>Not VIP</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
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