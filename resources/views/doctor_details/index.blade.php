@extends('layouts.app')

@section('content')
    <h1>Doctor Details</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Doctor Type ID</th>
                <th>Degree</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctorDetails as $doctorDetail)
                <tr>
                    <td>{{ $doctorDetail->id }}</td>
                    <td>{{ $doctorDetail->user_id }}</td>
                    <td>{{ $doctorDetail->doctor_type_id }}</td>
                    <td>{{ $doctorDetail->degree }}</td>
                    <td>{{ $doctorDetail->gender }}</td>
                    <td>{{ $doctorDetail->created_at }}</td>
                    <td>{{ $doctorDetail->updated_at }}</td>
                    <td>
                        <a href="{{ route('doctorDetails.show', $doctorDetail->id) }}">View</a>
                        <a href="{{ route('doctorDetails.edit', $doctorDetail->id) }}">Edit</a>
                        <form action="{{ route('doctorDetails.destroy', $doctorDetail->id) }}" method="POST">
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
