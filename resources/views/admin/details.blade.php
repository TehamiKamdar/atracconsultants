@extends('layouts.admin_main')

@section('main-section')
<div class="col-md-8 offset-md-2">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Consult Details</h3>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-4">Consult Name:</dt>
                <dd class="col-sm-8">{{ $consult->name }}</dd>

                <dt class="col-sm-4">Description:</dt>
                <dd class="col-sm-8">{{ $consult->email }}</dd>

                <dt class="col-sm-4">Consult Date:</dt>
                <dd class="col-sm-8">{{ $consult->created_at }}</dd>

                <dt class="col-sm-4">Consult Status:</dt>
                <dd class="col-sm-8">

                        <span class="badge bg-success">Active</span>

                        <span class="badge bg-danger">Inactive</span>
                    
                </dd>

                {{-- <dt class="col-sm-4">Assigned User:</dt>
                <dd class="col-sm-8">{{ $consult->user_name }}</dd> --}}
            </dl>
        </div>
        <div class="card-footer text-end">
            <a href="/admin/consults" class="btn btn-secondary">Back to Consults</a>
        </div>
    </div>
</div>
@endsection