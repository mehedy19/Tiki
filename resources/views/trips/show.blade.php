@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trip Details</h1>

    <p><strong>ID:</strong> {{ $trip->id }}</p>
    <p><strong>Location:</strong> {{ $trip->location->name }}</p>
    <p><strong>Date:</strong> {{ $trip->date }}</p>

    <!-- Add more details as needed -->

    <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-warning">Edit Trip</a>
</div>

@endsection
