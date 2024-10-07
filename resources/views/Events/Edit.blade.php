@extends('layouts.App')

@section('content')
<div class="container">
    <h2>Edit Event</h2>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" name="name" id="name" value="{{ $event->name }}" required>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ $event->date }}" required>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" name="time" id="time" value="{{ $event->time }}" required>
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{ $event->location }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $event->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="registration_fee">Registration Fee:</label>
            <input type="number" name="registration_fee" id="registration_fee" value="{{ $event->registration_fee }}" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="email" name="contact" id="contact" value="{{ $event->contact }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
</div>
@endsection
