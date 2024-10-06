@extends('layouts.app')  <!-- Optional: Use if you have a layout file -->

@section('content')
<div class="container">
    <h2>Register for an Event</h2>
    
    <!-- Display form validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Registration Form -->
    <form action="{{ route('registerEvent') }}" method="POST">  <!-- Assuming 'registerEvent' is your route -->
        @csrf  <!-- Security token -->
        
        <!-- Name Input -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <!-- Email Input -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <!-- Event Selection (Optional) -->
        <div class="form-group">
            <label for="event">Choose an Event:</label>
            <select id="event" name="event_id" class="form-control" required>
                <!-- Loop through events if available -->
                @foreach($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }} ({{ $event->date }})</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
