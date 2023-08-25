@extends('layouts.app')

@section('content')
    <h1>Create Appointment</h1>

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div>
            <label for="doctor_schedule_id">Doctor Schedule ID:</label>
            <input type="text" id="doctor_schedule_id" name="doctor_schedule_id" required>
        </div>

        <div>
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" required>
        </div>

        <div>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date" required>
        </div>

        <div>
            <label for="time">Time:</label>
            <input type="text" id="time" name="time" required>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
