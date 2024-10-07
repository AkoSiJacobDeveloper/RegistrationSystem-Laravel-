<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import the Event model

class EventController extends Controller
{
    // Display a listing of events
    public function index()
    {
        $events = Event::all(); // Fetch all events from the database
        return view('events.index', compact('events')); // Pass events to the view
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('Events.Create'); // Load the create event view
    }

    // Store a newly created event in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'registration_fee' => 'nullable|numeric',
            'status' => 'required|string|max:50',
            'contact' => 'nullable|string|max:255',
        ]);

        // Create a new event record in the database
        Event::create($request->all());

        // Redirect back to the event index with a success message
        return redirect()->route('Events.Index')->with('success', 'Event created successfully!');
    }

    // Display the specified event
    public function show(string $id)
    {
        $event = Event::findOrFail($id); // Find the event by ID or fail
        return view('events.show', compact('event')); // Load the show view with event data
    }

    // Show the form for editing the specified event
    public function edit(string $id)
    {
        $event = Event::findOrFail($id); // Find the event by ID or fail
        return view('events.edit', compact('event')); // Load the edit view with event data
    }

    // Update the specified event in the database
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'registration_fee' => 'nullable|numeric',
            'status' => 'required|string|max:50',
            'contact' => 'nullable|string|max:255',
        ]);

        // Find the event by ID or fail
        $event = Event::findOrFail($id);
        // Update the event with the new data
        $event->update($request->all());

        // Redirect to the event index with a success message
        return redirect()->route('Events.Index')->with('success', 'Event updated successfully!');
    }

    // Remove the specified event from the database
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id); // Find the event by ID or fail
        $event->delete(); // Delete the event record

        // Redirect back to the event index with a success message
        return redirect()->route('Events.Index')->with('success', 'Event deleted successfully!');
    }
}
