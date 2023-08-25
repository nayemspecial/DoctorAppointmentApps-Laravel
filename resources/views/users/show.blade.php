@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">User Management</h1>

    <div>
      <!-- Create a New User button -->
      <a href="{{ route('users.create') }}" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Create a New User</a>
    </div>

    <div class="mt-6">
      <h3 class="text-xl font-bold mb-4">This new user is created successfully.</h3>
      <table id="usersTable" class="w-full mt-6">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">First Name</th>
                <th class="py-2 px-4">Last Name</th>
                <th class="py-2 px-4">Username</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Role</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4">{{ $user->id }}</td>
                <td class="py-2 px-4">{{ $user->first_name }}</td>
                <td class="py-2 px-4">{{ $user->last_name }}</td>
                <td class="py-2 px-4">{{ $user->username }}</td>
                <td class="py-2 px-4">{{ $user->email }}</td>
                <td class="py-2 px-4">{{ $user->role }}</td>
                <td class="py-2 px-4">{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                <td class="py-2 px-4">
                    <!-- Edit button -->
                    <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

                    <!-- Delete button -->
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
