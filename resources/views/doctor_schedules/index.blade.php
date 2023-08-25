@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Doctor Schedules</h1>

    <div>
        <!-- Create a New Schedule button -->
        <a href="{{ url('/doctor_schedules/create') }}" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Create a New Schedule</a>

        <!-- Search by Filter button -->
        <!-- <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Search by Filter</button> -->
    </div>

    <table id="schedulesTable" class="w-full mt-6">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-2 px-4 text-left">ID</th>
          <th class="py-2 px-4 text-left">Doctor ID</th>
          <th class="py-2 px-4 text-left">Date</th>
          <th class="py-2 px-4 text-left">Start Time</th>
          <th class="py-2 px-4 text-left">End Time</th>
          <th class="py-2 px-4 text-left">Created At</th>
          <th class="py-2 px-4 text-left">Updated At</th>
          <th class="py-2 px-4 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-gray-50">
        <!-- Loop through schedules -->
        @foreach($schedules as $schedule)
          <tr>
            <td class="py-2 px-4">{{ $schedule->id }}</td>
            <td class="py-2 px-4">{{ $schedule->doctor_id }}</td>
            <td class="py-2 px-4">{{ $schedule->date }}</td>
            <td class="py-2 px-4">{{ $schedule->start_time }}</td>
            <td class="py-2 px-4">{{ $schedule->end_time }}</td>
            <td class="py-2 px-4">{{ $schedule->created_at }}</td>
            <td class="py-2 px-4">{{ $schedule->updated_at }}</td>
            <td class="py-2 px-4">
              <!-- View button -->
              <a href="{{ route('doctor_schedules.show', $schedule) }}" class="text-blue-500 hover:text-blue-700 mr-2">View</a>

              <!-- Edit button -->
              <a href="{{ route('doctor_schedules.edit', $schedule) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

              <!-- Delete button -->
              <form action="{{ route('doctor_schedules.destroy', $schedule) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this schedule?')" class="text-red-500 hover:text-red-700">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
