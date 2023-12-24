@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Trip</h1>

    <form action="{{ route('trips.update', $trip->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="location_id" class="form-label">Select Location:</label>
            <select name="location_id" id="location_id" class="form-control" required>
                @foreach($locations as $location)
                    <option value="{{ $location->id }}" {{ $location->id == $trip->location_id ? 'selected' : '' }}>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Select Date:</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $trip->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Trip</button>
    </form>
</div>
@endsection
