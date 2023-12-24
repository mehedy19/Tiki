<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Location;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        $locations = Location::all();

        return view('trips.index', compact('trips', 'locations'));
    }

    public function create()
    {
        $locations = Location::all();

        return view('trips.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'date' => 'required|date',
        ]);

        Trip::create([
            'location_id' => $request->input('location_id'),
            'date' => $request->input('date'),
        ]);

        return redirect()->route('trips.index')->with('success', 'Trip created successfully.');
    }

    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }

    public function edit(Trip $trip)
    {
        $locations = Location::all();
    
        return view('trips.edit', compact('trip', 'locations'));
    }

    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'date' => 'required|date',
        ]);

        $trip->update([
            'location_id' => $request->input('location_id'),
            'date' => $request->input('date'),
        ]);

        return redirect()->route('trips.index')->with('success', 'Trip updated successfully.');
    }

    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('trips.index')->with('success', 'Trip deleted successfully.');
    }
}
