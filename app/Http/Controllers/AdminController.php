<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    // Show the home page with all events
    public function showHome() {
        $events = Event::all(); // Fetch all events

        return view('HomePage.Home', compact('events')); // Return the home view with events
    }

    // Show the registration form
    public function showRegistration() {
        $events = Event::all(); // Fetch all events

        return view('RegistrationForm.Register', compact('events')); // Pass the events to the view
    }

    // Handle event registration
    public function registerEvent(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'event_id' => 'required|exists:events,id', // Validate the event ID
        ]);

        // Logic to save the registration (e.g., create a new record in the database)

        return redirect()->back()->with('success', 'Registration successful!'); // Redirect after registration
    }

    // Show the form for editing the specified event
    public function editEvent($id) {
        $event = Event::findOrFail($id); // Find the event by ID
        return view('events.edit', compact('event')); // Return the edit view with the event data
    }

    // Update the specified event in storage
    public function updateEvent(Request $request, $id) {
        $event = Event::findOrFail($id); // Find the event by ID

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:10',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'registration_fee' => 'required|numeric',
            'status' => 'required|string|max:50',
            'contact' => 'required|string|max:255',
        ]);

        // Update the event
        $event->update($request->all());

        // Redirect back to home with success message
        return redirect()->route('HomePage.Home')->with('success', 'Event updated successfully!'); // Change 'home' to your route name
    }

    // Remove the specified event from storage
    public function deleteEvent($id) {
        $event = Event::findOrFail($id); // Find the event by ID
        $event->delete(); // Delete the event

        // Redirect back to home with success message
        return redirect()->route('HomePage.Home')->with('success', 'Event deleted successfully!'); // Change 'home' to your route name
    }
}
