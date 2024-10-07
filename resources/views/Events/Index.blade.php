@extends('layouts.App')

@section('content')
<div class="container-fluid main-container">
    <h1>Events</h1>
    <a href="{{ route('events.create') }}" class="btn btn-success">Add Event</a> <!-- Add Event button -->
    <table class="table">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Description</th>
                <th>Registration Fee</th>
                <th>Status</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->time }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->description }}</td>
                    <td>${{ $event->registration_fee }}</td>
                    <td>{{ $event->status }}</td>
                    <td>{{ $event->contact }}</td>
                    <td>
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?');">Delete</button>
                        </form>
                        <button class="btn btn-info">Book Now</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
