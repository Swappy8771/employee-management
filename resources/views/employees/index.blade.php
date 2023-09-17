@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h2 class="float-left">Employee List</h2>
        <div class="float-right">
            <a href="{{ route('employees.create') }}" class="btn btn-success">Create New Employee</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <form method="GET" action="{{ route('employees.index') }}" class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search by Name">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone no.</th>
                <th>Profile Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone_no }}</td>
                <td>
                    @if ($employee->profile_image)
                    <img src="{{ asset('storage/' . $employee->profile_image) }}" alt="Profile Image" width="50">
                    @else
                    No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Update</a>
                    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $employees->links() }}
    </div>
</div>
@endsection
