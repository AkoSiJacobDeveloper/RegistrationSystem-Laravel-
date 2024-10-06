<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 

class AdminController extends Controller
{
    public function showRegistration() {
        $events = Event::all(); // Fetch all events

        // Pass the events to the view
        return view('RegistrationForm.Register', compact('events'));

    }

    public function registerEvent(Request $request) {
        // Handle the registration logic here
        // For example, validate the request and save the data to the database
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'event_id' => 'required|exists:events,id', // Assuming you have an events table
        ]);

        // Logic to save the registration (e.g., create a new record in the database)

        // Redirect or return a view after registration
        return redirect()->back()->with('success', 'Registration successful!'); // Change this as needed
    }

}
