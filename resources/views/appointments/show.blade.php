@extends('layouts.app')

@section('content')
    <h1>Appointment</h1>

    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $appointment->id }}</td>
            </tr>
            <tr>
                <th>Doctor Schedule ID</th>
                <td>{{ $appointment->doctor_schedule_id }}</td>
            </tr>
            <tr>
                <th>User ID</th>
                <td>{{ $appointment->user_id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ $appointment->date }}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{ $appointment->time }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $appointment->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $appointment->updated_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection
