@extends('layouts.app')

@section('content')
    <h1>Doctor Detail</h1>

    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $doctorDetail->id }}</td>
            </tr>
            <tr>
                <th>User ID</th>
                <td>{{ $doctorDetail->user_id }}</td>
            </tr>
            <tr>
                <th>Doctor Type ID</th>
                <td>{{ $doctorDetail->doctor_type_id }}</td>
            </tr>
            <tr>
                <th>Degree</th>
                <td>{{ $doctorDetail->degree }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $doctorDetail->gender }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $doctorDetail->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $doctorDetail->updated_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection
