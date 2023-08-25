@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Doctor Types</h1>

    <div>
        <!-- Create a New Doctor Type button -->
        <a href="{{ route('doctor_types.create') }}" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Create a New Doctor Type</a>
    </div>

    <table id="doctorTypesTable" class="w-full mt-6">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-2 px-4 text-left">ID</th>
          <th class="py-2 px-4 text-left">Name</th>
          <th class="py-2 px-4 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-gray-50">
        <!-- Loop through doctor types -->
        @foreach($doctorTypes as $doctorType)
          <tr>
            <td class="py-2 px-4">{{ $doctorType->id }}</td>
            <td class="py-2 px-4">{{ $doctorType->name }}</td>
            <td class="py-2 px-4">
              <!-- View button -->
              <a href="{{ route('doctor_types.show', $doctorType) }}" class="text-blue-500 hover:text-blue-700 mr-2">View</a>

              <!-- Edit button -->
              <a href="{{ route('doctor_types.edit', $doctorType) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

              <!-- Delete button -->
              <form action="{{ route('doctor_types.destroy', $doctorType) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this doctor type?')" class="text-red-500 hover:text-red-700">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
