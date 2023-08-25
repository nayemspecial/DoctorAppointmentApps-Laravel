@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Edit User</h1>

    <!-- Edit user form -->
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')

      <!-- Form fields -->
      <div class="mb-4">
        <label for="first_name" class="block mb-2">First Name</label>
        <input type="text" name="first_name" id="first_name" class="w-full border rounded py-2 px-4" value="{{ $user->first_name }}">
      </div>

      <div class="mb-4">
        <label for="last_name" class="block mb-2">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="w-full border rounded py-2 px-4" value="{{ $user->last_name }}">
      </div>

      <div class="mb-4">
        <label for="username" class="block mb-2">Username</label>
        <input type="text" name="username" id="username" class="w-full border rounded py-2 px-4" value="{{ $user->username }}">
      </div>

      <div class="mb-4">
        <label for="email" class="block mb-2">Email</label>
        <input type="email" name="email" id="email" class="w-full border rounded py-2 px-4" value="{{ $user->email }}">
      </div>

      <div class="mb-4">
        <label for="role" class="block mb-2">Role</label>
        <input type="text" name="role" id="role" class="w-full border rounded py-2 px-4" value="{{ $user->role }}">
      </div>

      <!-- More form fields -->

      <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update User</button>
        <a href="{{ route('users.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Cancel</a>
      </div>
    </form>
  </div>
@endsection
