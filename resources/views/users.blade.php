@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
  <!-- Actual search box -->
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
                    <input type="text" class="form-control" placeholder="Search User" style="padding-left: 2.375rem;">
                </div>  

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <!-- Add New Customer Button -->
                        <button id="btn-add-article" class="btn btn-primary float-right">Add New Users</button>
                        <br/><br/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">User Level</th>
                                    <th scope="col">User Status</th>
                                    <th scope="col">User Last Logged In</th>
                                    <th scope="col">User Logged</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Girl 1</td>
                                    <td>girl1@gmail.com</td>
                                    <td>Employee</td> <!-- Employee/Admin  -->
                                    <td>Active</td> <!-- Active check icon  -->
                                    <td>11/05/2021 : 10:30 a.m</td> <!-- Date/Time  -->
                                    <td>Logged in</td> <!-- Logged in Check mark   -->
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