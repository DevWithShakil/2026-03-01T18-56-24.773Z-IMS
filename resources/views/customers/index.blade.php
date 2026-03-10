@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Customers List</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCustomerModal">Add New Customer</button>
                </div>
                <div class="card-body">
                    <p>Customer Table will be here...</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
