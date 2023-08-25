@extends('layouts.app')

@section('content')
    <h1>Appointments</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Doctor Schedule ID</th>
                <th>User ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->doctor_schedule_id }}</td>
                    <td>{{ $appointment->user_id }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->created_at }}</td>
                    <td>{{ $appointment->updated_at }}</td>
                    <td>
                        <a href="{{ route('appointments.show', $appointment->id) }}">View</a>
                        <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
