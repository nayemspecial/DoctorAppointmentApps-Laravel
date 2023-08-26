@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Appointments</h1>

    <table id="appointmentsTable" class="w-full mt-6">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-2 px-4">ID</th>
          <th class="py-2 px-4">Doctor Schedule ID</th>
          <th class="py-2 px-4">User ID</th>
          <th class="py-2 px-4">Date</th>
          <th class="py-2 px-4">Time</th>
          <th class="py-2 px-4">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-gray-50">
        <!-- Loop through appointments -->
        @foreach ($appointments as $appointment)
          <tr>
            <td class="py-2 px-4">{{ $appointment->id }}</td>
            <td class="py-2 px-4">{{ $appointment->doctor_schedule_id }}</td>
            <td class="py-2 px-4">{{ $appointment->user_id }}</td>
            <td class="py-2 px-4">{{ $appointment->date }}</td>
            <td class="py-2 px-4">{{ $appointment->time }}</td>
            <td class="py-2 px-4">
              <!-- View button -->
              <a href="{{ route('appointments.show', $appointment->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">View</a>

              <!-- Edit button -->
              <a href="{{ route('appointments.edit', $appointment->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

              <!-- Delete button -->
              <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this appointment?')" class="text-red-500 hover:text-red-700">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
