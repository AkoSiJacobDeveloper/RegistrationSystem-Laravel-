@extends('layouts.App')

@section('content')
<div class="container-fluid main-container">
    <!-- Add Event Button -->
    <div class="mb-3">
        <a href="{{ route('events.create') }}" class="btn btn-primary">Add Event</a>
    </div>

    <table>
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
                <td class="text-center">
                    <!-- Edit Button -->
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning py-2">Edit</a>

                    <!-- Delete Button -->
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger py-2" onclick="return confirm('Are you sure you want to delete this event?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
