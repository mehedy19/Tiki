@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trip List</h1>
    
    <a href="{{ route('trips.create') }}" class="btn btn-primary btn-sm">Create New Trip</a>

    <table class="table mt-3 text-center table-striped table-sm">
        <thead class="table-info">
            <tr>
                <th>ID</th>
                <th>Location</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trips as $trip)
                <tr>
                    <td>{{ $trip->id }}</td>
                    <td>{{ $trip->location->name }}</td>
                    <td>{{ $trip->date }}</td>
                    <td>
                        <!-- View button -->
                        <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-info btn-sm">View</a>
                         <!-- Edit button -->
                        <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-warning btn-sm ">Edit</a>
                        <!-- Delete button -->
            <form action="{{ route('trips.destroy', $trip->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this trip?')">Delete</button>
            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
