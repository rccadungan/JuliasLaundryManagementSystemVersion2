@extends('layouts.master')

@push('css')
<!-- css here -->
@endpush

@section('content')
<div class="container mt-4">
    <!-- Dashboard Section -->
    <div class="card mb-4">
        <div class="card-body">
            <form>
                <h5 class="font-weight-bold mb-3"> Dashboard </h5>
                <h9 class="font-weight-normal mb-3"> Today- 11/11/21 </h9>
        
                <div class="row mt-3">
                    <div class="col-sm-4">
                        <div class="card bg-info card border-white">
                            <div class="card-body text-center text-white">
                                <h5 class="card-title font-weight-bold">₱ 4,500.00</h5>
                                <h10 class="card-text"> Total Income </10>
                    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-primary card border-white">
                            <div class="card-body text-center text-white">
                                <h5 class="card-title font-weight-bold"> 40 </h5>
                                <h10 class="card-text"> Total Customers </10>
                    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card bg-dark card border-white">
                            <div class="card-body text-center text-white">
                                <h5 class="card-title font-weight-bold "> 48 </h5>
                                <h10 class="card-text"> No. of Transactions </10>
                    
                            </div>
                        </div>
                     </div>
                </div>
            </form>
         </div>
    </div>


    <!-- Dashboard Section -->
    <div class="card mb-4">
        <div class="card-body">
            <form>
                <h5 class="font-weight-bold mb-3"> To do </h5>
                <h9 class="font-weight-normal mb-3"> Today- 11/11/21 </h9>

                <div class="row mt-3">
                    <div class="col-sm-4">
                        <div class="card bg-warning card border-white">
                            <div class="card-body text-center text-white">
                                <h5 class="font-weight-bold"> 1 </h5>
                                <h10 class="card-text"> End of Day Report </10>
                    
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
