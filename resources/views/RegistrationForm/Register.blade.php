@extends('layouts.App')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center gap-2">

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
    <div class="svg-container d-flex">
        <img src="{{ asset('images/register.svg') }}" alt="Description of the image">
    </div>
    <div class="form-container">
        <h4 class="text-center">Join Events Now!</h4>
        <form id="registrationForm" onsubmit="saveToLocalStorage(event)" method="POST">
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="password" placeholder="Password" required>
            <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
            <button type="submit" class="registerBtn w-100 p-3 border-0 rounded-1 fw-bold">Register</button>
        </form>
    </div>

</div>

<script>
    function saveToLocalStorage(event) {
        event.preventDefault(); // Prevent form from submitting normally

        // Get form values
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        // Basic password confirmation check (optional)
        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return;
        }

        // Create an object to store in local storage
        const registrationData = {
            firstName: firstName,
            lastName: lastName,
            email: email,
            password: password, // Note: storing passwords in local storage is not recommended for production
        };

        // Save to local storage
        localStorage.setItem('registrationData', JSON.stringify(registrationData));

        // Show a success message
        alert('Registration data saved to local storage!');

        // Optionally, clear the form after saving
        document.getElementById('registrationForm').reset();
    }
</script>
@endsection
