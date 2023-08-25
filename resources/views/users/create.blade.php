@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">User Management</h1>

    <div>
      <!-- Create a New User button -->
      <a href="{{ route('users.create') }}" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Create a New User</a>
    </div>

    <!-- User Creation Form -->
    <form action="{{ route('users.store') }}" method="POST">
      @csrf
      <div class="mt-4">
        <label for="first_name" class="block">First Name:</label>
        <input type="text" name="first_name" id="first_name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mt-4">
        <label for="last_name" class="block">Last Name:</label>
        <input type="text" name="last_name" id="last_name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mt-4">
        <label for="last_name" class="block">Username:</label>
        <input type="text" name="username" id="username" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mt-4">
        <label for="last_name" class="block">Email:</label>
        <input type="email" name="email" id="email" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mt-4">
        <label for="last_name" class="block">Password:</label>
        <input type="password" name="password" id="password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mt-4">
        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="doctor">Doctor</option>
            <option value="patient">Patient</option>
        </select>
      </div>


      <!-- Add more form fields as needed -->

      <div class="mt-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create User</button>
      </div>
    </form>
  </div>
@endsection
