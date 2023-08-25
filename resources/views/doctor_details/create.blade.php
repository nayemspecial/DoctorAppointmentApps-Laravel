@extends('layouts.app')

@section('content')
    <h1>Create Doctor Detail</h1>

    <form action="{{ route('doctorDetails.store') }}" method="POST">
        @csrf

        <div>
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" required>
        </div>

        <div>
            <label for="doctor_type_id">Doctor Type ID:</label>
            <input type="text" id="doctor_type_id" name="doctor_type_id" required>
        </div>

        <div>
            <label for="degree">Degree:</label>
            <input type="text" id="degree" name="degree" required>
        </div>

        <div>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
