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
                        <button id="btn-add-article" class="btn btn-primary float-right">Add New Customer</button>
                        <br/><br/>
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
                            <td>Bustine Jieber </td>
                            <td>Blk 15 Lot 12 31st Taguig City</td>
                            <td>09087894562</td>
                            <td>bj@hotmail.com</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        VIP Status
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">VIP</a>
                                        <a class="dropdown-item" href="#">Not VIP</a>
                                    </div>
                                </div>
                            </td>
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