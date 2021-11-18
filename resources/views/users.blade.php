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

                <!-- Add New Users Button --> 
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <!-- Add New Users Button -->              
                        <button id="btn-add-user" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#form">
                            Add New User
                        </button>
                        <br/><br/>  
                    </div>

                    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <h5 class="modal-title" id="addUser">Enter User Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="addUsername">Username</label>
                                            <input type="text" class="form-control" id="addUsername" aria-describedby="addUsernameHelp" placeholder="Username">
                                        </div>

                                        <div class="form-group">
                                            <label for="addEmail">Email</label>
                                            <input type="email" class="form-control" id="addEmail" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="addPassword">Password</label>
                                            <input type="text" class="form-control" id="addPassword" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="addUserLevel">User Level</label>
                                            <input type="number" class="form-control" id="addUserLevel" placeholder="User Level">
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
                                    <!-- Edit User Information Button -->     
                                    <button id="btn-edit-user" type="button" class="btn btn-success" data-toggle="modal" data-target="#form1">
                                        <i class="fas fa-edit"></i>
                                    </button>  
                                        <div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="editUser" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-0">
                                                        <h5 class="modal-title" id="editUser">Edit User Information</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="editusername">Username</label>
                                                                <input type="text" class="form-control" id="editusername" aria-describedby="editusernameHelp" placeholder="Username">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="editEmail">Email</label>
                                                                <input type="email" class="form-control" id="editEmail" placeholder="Email">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="editPassword">Password</label>
                                                                <input type="text" class="form-control" id="editPassword" placeholder="Password">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="editUserLevel">User Level</label>
                                                                <input type="number" class="form-control" id="editUserLevel" placeholder="User Level">
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