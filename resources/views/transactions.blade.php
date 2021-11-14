@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
    <!-- Transactions Section -->
    <div class="card mb-4">
        <div class="card-body">
            <form>
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
                    <input type="text" class="form-control" placeholder="Search Transactions" style="padding-left: 2.375rem;">
                </div>  

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-pills nav-justified" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-soAdjustments-tab" data-toggle="tab" href="#nav-soAdjustments" role="tab" aria-controls="nav-soAdjustments" aria-selected="true">SO Adjustments</a>
                                    <a class="nav-item nav-link" id="nav-cancelledSos-tab" data-toggle="tab" href="#nav-cancelledSos" role="tab" aria-controls="nav-cancelledSos" aria-selected="false">Cancelled SOs</a>
                                    <a class="nav-item nav-link" id="nav-orderHistory-tab" data-toggle="tab" href="#nav-orderHistory" role="tab" aria-controls="nav-orderHistory" aria-selected="false">Order History</a>
                                    <a class="nav-item nav-link" id="nav-paymentHistory-tab" data-toggle="tab" href="#nav-paymentHistory" role="tab" aria-controls="nav-paymentHistory" aria-selected="false">Payment History</a>
                                    <a class="nav-item nav-link" id="nav-creditMemos-tab" data-toggle="tab" href="#nav-creditMemos" role="tab" aria-controls="nav-creditMemos" aria-selected="false">Credit Memos</a>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-soAdjustments" role="tabpanel" aria-labelledby="nav-soAdjustments-tab">
                                    <table class="table table-bordered" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Order No.</th>
                                                <th scope="col">User ID</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Pickup Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Adjustment Details</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>000001</td>
                                                <td>004</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>132.00</td>
                                                <td>Pickup date adjusted </td>
                                                <td>
                                                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="tab-pane fade" id="nav-cancelledSos" role="tabpanel" aria-labelledby="nav-cancelledSos-tab">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Order No.</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Pickup Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Received By</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>000001</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>132.00</td>
                                                <td>Sarah Lahbati</td>
                                                <td>
                                                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-orderHistory" role="tabpanel" aria-labelledby="nav-orderHistory-tab">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Order No.</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Pickup Date</th>
                                                <th scope="col">Received By</th>
                                                <th scope="col">Article</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>000001</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>Sarah Lahbati</td>
                                                <td>WDF-Assorted Regular</td>
                                                <td>132.00</td>
                                                <td>4</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-paymentHistory" role="tabpanel" aria-labelledby="nav-paymentHistory-tab">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Order No.</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Pickup Date</th>
                                                <th scope="col">Received By</th>
                                                <th scope="col">Article</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Payment Method</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>000001</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>Sarah Lahbati</td>
                                                <td>WDF-Assorted Regular</td>
                                                <td>132.00</td>
                                                <td>Cash</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-creditMemos" role="tabpanel" aria-labelledby="nav-creditMemos-tab">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Order No.</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Pickup Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Received By</th>
                                                <th scope="col">Reason</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>000001</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>10/10/21 <br>9:00 AM</td>
                                                <td>132.00</td>
                                                <td>Sarah Lahbati</td>
                                                <td>Return Deposit</td>
                                                <td>
                                                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
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
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- js here -->
@endpush