@extends('layouts.app')

@section('content')
    <h1>Edit Doctor Detail</h1>

    <form action="{{ route('doctorDetails.update', $doctorDetail->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" value="{{ $doctorDetail->user_id }}" required>
        </div>

        <div>
            <label for="doctor_type_id">Doctor Type ID:</label>
            <input type="text" id="doctor_type_id" name="doctor_type_id" value="{{ $doctorDetail->doctor_type_id }}" required>
        </div>

        <div>
            <label for="degree">Degree:</label>
            <input type="text" id="degree" name="degree" value="{{ $doctorDetail->degree }}" required>
        </div>

        <div>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" value="{{ $doctorDetail->gender }}" required>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
