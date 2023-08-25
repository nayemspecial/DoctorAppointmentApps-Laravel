@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">User Deleted</h1>

    <p>The user has been deleted successfully.</p>

    <a href="{{ route('users.index') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to User List</a>
  </div>
@endsection
