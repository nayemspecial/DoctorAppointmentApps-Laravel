@extends('layouts.app')

@section('content')
    <h1>Doctor Schedule</h1>

    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $doctorSchedule->id }}</td>
            </tr>
            <tr>
                <th>Doctor Detail ID</th>
                <td>{{ $doctorSchedule->doctor_detail_id }}</td>
            </tr>
            <tr>
                <th>Start At</th>
                <td>{{ $doctorSchedule->start_at }}</td>
            </tr>
            <tr>
                <th>End At</th>
                <td>{{ $doctorSchedule->end_at }}</td>
            </tr>
            <tr>
                <th>Workdays</th>
                <td>{{ $doctorSchedule->workdays }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $doctorSchedule->address }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $doctorSchedule->phone }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $doctorSchedule->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $doctorSchedule->updated_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection
