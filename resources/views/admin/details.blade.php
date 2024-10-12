@extends('layouts.admin_main')

@section('main-section')
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if (session('reject'))
    <div class="alert alert-danger">
        {{session('reject')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-warning">
        {{session('error')}}
    </div>
@endif
<div class="col-md-8 offset-md-2">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Consult Details</h3>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-4">Consult Name:</dt>
                <dd class="col-sm-8">{{ $consult->name }}</dd>

                <dt class="col-sm-4">Email:</dt>
                <dd class="col-sm-8">{{ $consult->email }}</dd>

                <dt class="col-sm-4">Phone:</dt>
                <dd class="col-sm-8">{{ $consult->phone }}</dd>

                <dt class="col-sm-4">Qualified With:</dt>
                <dd class="col-sm-8">{{ $consult->qualification }}</dd>

                <dt class="col-sm-4">Country of Interest:</dt>
                <dd class="col-sm-8">{{ $consult->country_name }}</dd>

                <dt class="col-sm-4">Field of Interest:</dt>
                <dd class="col-sm-8">{{ $consult->field }}</dd>

                <dt class="col-sm-4">Message:</dt>
                <dd class="col-sm-8">{{ $consult->message }}</dd>

                <dt class="col-sm-4">Requested On:</dt>
                <dd class="col-sm-8">{{ $consult->created_at }}</dd>
                <br>

                @if ($consult->status == 'pending')
                <dd class="col-sm-8">
                    <!-- Approve and Reject Buttons -->
                    <form action="{{ route('consult.approve', $consult->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                    </form>

                    <form action="{{ route('consult.reject', $consult->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                    </form>
                </dd>
                @else
                    @if ($consult->status == 'approved')
                    <dd class="col-sm-8">
                        <span class="badge bg-success">{{ $consult->status }}</span>
                    </dd>
                    @else
                    <dd class="col-sm-8">
                        <span class="badge bg-danger">{{ $consult->status }}</span>
                    </dd>
                    @endif
                @endif  



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