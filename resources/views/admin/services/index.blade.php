@extends('layouts.admin_main')
@section('main-section')



        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Service
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{route('services-store')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="service_icon" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="service_heading" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="service_details" class="form-control">
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>

        </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>Service Icon</th>
                    <th>Service Heading</th>
                    <th>Service Details</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($countries as $c) --}}
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection