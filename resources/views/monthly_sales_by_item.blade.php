@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')

<div class="container mt-4">
    <!-- Monthly Sales by SO Section -->
    <div class="card mb-4">
        <div class="card-body">
            <form>
                <h5 class="font-weight-bold mb-3"> Monthly Sales by Item </h5>

                <!-- Branch Field -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="branch">Branch</label>
                        <select id="branch" class="form-control">
                        <option selected>Select Branch</option>
                        <option>...</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="year">Year</label>
                        <select id="year" class="form-control">
                        <option selected>Select Year</option>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Report Type</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monthly Sales by </td>
                                    <td>10-31-2021 9:00 AM</td>
                                    <td>
                                        <button type="button" class="btn btn-success"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-primary ml-2"><i class="fa fa-print"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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