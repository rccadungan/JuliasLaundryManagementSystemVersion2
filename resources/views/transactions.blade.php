@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<section class="p-3 mb-3 bg-light" style="background-color: #F3F3F3;">
  <!-- Transactions Section -->
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
                    <input type="text" class="form-control" placeholder="Search Transactions" style="padding-left: 2.375rem;">
                </div>  
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
                                                <td></td>
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
                                                <td></td>
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
                                                <td></td>
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
    </div>
</section>
@endsection

@push('scripts')
<!-- js here -->
@endpush