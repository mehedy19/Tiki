@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Trip</h1>

    <form action="{{ route('trips.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="location_id" class="form-label">Select Location:</label>
            <select name="location_id" id="location_id" class="form-control" required>
                @foreach($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Select Date:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Trip</button>
    </form>
</div>
@endsection
