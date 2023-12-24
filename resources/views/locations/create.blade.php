<!-- resources/views/locations/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Location</h1>

    <form action="{{ route('locations.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Location Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <!-- Add any additional fields as needed -->

        <button type="submit" class="btn btn-primary">Create Location</button>
    </form>
@endsection
