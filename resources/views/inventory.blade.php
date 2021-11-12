@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Aging Inventory Section -->
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


                <div class="row">
                    <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Service Order No.</th>
                            <th scope="col">Date</th>
                            <th scope="col">Customer no.</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Item</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Qty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>501</td>
                            <td>11/11/21</td>
                            <td>09087894562</td>
                            <td>Mae Dumaslan</td>
                            <td>WDF-Assorted Regular</td>
                            <td>99.00</td>
                            <td>3</td>
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
@endpush