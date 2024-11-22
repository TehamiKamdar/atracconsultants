@extends('layouts.admin_main')

@section('main-section')
    @if (session('active'))
        <div class="alert alert-success">
            {{session('active')}}
        </div>
    @endif

    @if (session('inactive'))
        <div class="alert alert-danger">
            {{session('inactive')}}
        </div>
    @endif


        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Country
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{route('country-store')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="country_name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="country_image" class="form-control">
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
                        <th>Country Name</th>
                        <th>Country Image</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $c)
                        <tr>
                            <td>{{$c->country_name}}</td>
                            <td>{{$c->country_image}}</td>
                            <td><a href="" class="btn-primary">Update</a></td>
                            <td>
                                @if ($c->status=='inactive')
                                <form action="{{ route('country-active', $c->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Inactive</button>
                                </form>
                                @else
                                <form action="{{ route('country-inactive', $c->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Active</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
