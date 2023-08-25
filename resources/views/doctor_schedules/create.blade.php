@extends('layouts.app')

@section('content')
    <h1>Create Doctor Schedule</h1>

    <form action="{{ route('doctorSchedules.store') }}" method="POST">
        @csrf

        <div>
            <label for="doctor_detail_id">Doctor Detail ID:</label>
            <input type="text" id="doctor_detail_id" name="doctor_detail_id" required>
        </div>

        <div>
            <label for="start_at">Start At:</label>
            <input type="text" id="start_at" name="start_at" required>
        </div>

        <div>
            <label for="end_at">End At:</label>
            <input type="text" id="end_at" name="end_at" required>
        </div>

        <div>
            <label for="workdays">Workdays:</label>
            <input type="text" id="workdays" name="workdays" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
