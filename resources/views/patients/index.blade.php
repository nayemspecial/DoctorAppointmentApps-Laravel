@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Patients Management</h1>

    <div>
        <!-- Create a New User button in here -->
        <a href="{{ url('/users/create') }}" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Create a New User</a>

        <!-- Search by Filter button
        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Search by Filter</button> -->
      </div>

    <table id="usersTable" class="w-full mt-6">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-2 px-4 text-left">ID</th>
          <th class="py-2 px-4 text-left">Name</th>
          <th class="py-2 px-4 text-left">Username</th>
          <th class="py-2 px-4 text-left">Email</th>
          <th class="py-2 px-4 text-left">Role</th>
          <th class="py-2 px-4 text-left">Status</th>
          <th class="py-2 px-4 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-gray-50">
        <!-- Loop through users -->
        @foreach($users as $user)
          @if($user->role === 'patient')
            <tr>
              <td class="py-2 px-4">{{ $user->id }}</td>
              <td class="py-2 px-4">{{ $user->first_name }} {{ $user->last_name }}</td>
              <td class="py-2 px-4">{{ $user->username }}</td>
              <td class="py-2 px-4">{{ $user->email }}</td>
              <td class="py-2 px-4">{{ $user->role }}</td>
              <td class="py-2 px-4">{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
              <td class="py-2 px-4">
                <!-- Edit button -->
                <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

                <!-- Delete button -->
                <form action="{{ route('users.confirm-delete', $user->id) }}" method="POST" class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
              </td>
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
