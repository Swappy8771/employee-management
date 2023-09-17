@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Employee</h2>
        <form method="POST" action="{{ route('employees.update', $employee->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $employee->name) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
            </div>

            <div class="form-group">
                <label for="phone_no">Phone Number</label>
                <input type="text" name="phone_no" id="phone_no" class="form-control" value="{{ old('phone_no', $employee->phone_no) }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ old('password', $employee->password) }}" required>
            </div>

            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image" class="form-control-file">
                @if ($employee->profile_image)
                    <img src="{{ asset('storage/' . $employee->profile_image) }}" alt="Profile Image" width="100">
                @else
                    <p>No Image</p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
@endsection
