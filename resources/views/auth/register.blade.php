@extends('layouts.app')

@section('content')
<!-- resources/views/auth/register.blade.php -->

<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" :value="old('name')" required autofocus>
    </div>

    <div>
        <label for="dob">Date of Birth</label>
        <input id="dob" type="date" name="dob" :value="old('dob')" required>
    </div>

    <div>
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <div>
        <label for="phone_number">Phone Number</label>
        <input id="phone_number" type="tel" name="phone_number" :value="old('phone_number')" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" :value="old('email')" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit">Register</button>
</form>

@endsection
