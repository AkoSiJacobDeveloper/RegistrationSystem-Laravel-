@extends('layouts.App')

@section('content')
@php
$features = [
    [
        'title' => 'Event Listing',
        'image' => 'images/eventlisting.svg',
        'description' => 'Users can browse upcoming events with detailed descriptions, dates, and locations.'
    ],
    [
        'title' => 'Online Registration',
        'image' => 'images/onlineRegistration.svg',
        'description' => 'Attendees can easily sign up for events using a user-friendly interface.'
    ],
    [
        'title' => 'Automated Registration',
        'image' => 'images/automatedreminders.svg',
        'description' => 'Organizers can send reminders to attendees about important event details.'
    ],
    [
        'title' => 'Management Dashboard',
        'image' => 'images/eventmanagement.svg',
        'description' => 'Organizers can manage registrations, track event capacity, and collect payments.'
    ],
    [
        'title' => 'Status Tracking',
        'image' => 'images/eventstracking.svg',
        'description' => 'Events can be tagged with statuses like "Upcoming", "Ongoing", or "Completed".'
    ],
    [
        'title' => 'Contact Information',
        'image' => 'images/personalcontact.svg',
        'description' => 'Organizers and attendees can stay connected through contact details provided during registration.'
    ]
];
$hows = [
    [
        'step' => 'Login or Signup',
        'images' => 'images/loginsignup.svg',
        'descriptions' => 'Create an account by providing your email and setting up a password, or log in if youre already a member. This gives you access to our full range of events and features.'
    ],
    [
        'step' => 'Browse Events',
        'images' => 'images/browse.svg',
        'descriptions' => 'Explore a variety of events through our easy-to-use event listings. You can filter events by category, location, date, or type of event.'
    ],
    [
        'step' => 'Select and Register Events',
        'images' => 'images/registerevent.svg',
        'descriptions' => 'Once you find an event youre interested in, click on it to view details, then register by filling out a simple form. Secure your spot instantly.'
    ],
    [
        'step' => 'Manage Your Registrations',
        'images' => 'images/managevents.svg',
        'descriptions' => 'Access your personal dashboard to keep track of all your registrations. You can view event details, modify registrations, and get reminders about upcoming events'
    ],
    [
        'step' => 'Attend the Event',
        'images' => 'images/attendevent.svg',
        'descriptions' => 'Receive confirmation emails and reminders leading up to the event. Just show up and enjoy the experience!'
    ],

];
@endphp
<div class="container">
    <div class="main-container p-2">
        <section class="mb-5">
            <div class="about-container text-center p-1 text-white">
                <p class="fs-3 m-0">About</p>
            </div>
            <div class="about-contents">
                <p class="fs-6 d-flex p-1 mt-1 about-text rounded-1">
                    Our Event Registration System is designed to simplify the process of organizing and registering for events. Whether you're hosting a conference, workshop, or community event, this platform makes it easy to manage registrations, track attendance, and gather important participant details all in one place.
                </p>
            </div>
        </section>
        <section class="mb-5">
            <div class="about-container text-center p-1 text-white">
                <p class="fs-3 m-0">Features</p>
            </div>
            <div class="about-contents d-flex justify-content-center align-items-center gap-4 row">
                @foreach($features as $feature)
                    <div class="holder rounded-1 col-12 col-md-4 mt-1 p-1">
                        <h6 class="fw-bold text-center my-2">{{ $feature['title'] }}</h6>
                        <img src="{{ asset($feature['image']) }}" alt="Description of the image">
                        <p class="text-center">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="mb-5">
            <div class="about-container text-center p-1 text-white">
                <p class="fs-3 m-0">How it Works</p>
            </div>
            <div class="about-contents d-flex justify-content-center align-items-center gap-4 row">
                @foreach($hows as $how)
                    <div class="holder rounded-1 col-12 col-md-4 mt-1 p-1">
                        <h6 class="fw-bold text-center my-2">{{ $how['step'] }}</h6>
                        <img src="{{ asset($how['images']) }}" alt="Description of the image">
                        <p class="text-center" style="font-size: 0.9em">{{ $how['descriptions'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="mb-5">
            <div class="about-container text-center p-1 text-white">
                <p class="fs-3 m-0">Testimonials</p>
            </div>
            <div id="demo" class="carousel-slide" data-bs-ride="carousel">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">

            </div>
        </section>
    </div>
</div>
@endsection
