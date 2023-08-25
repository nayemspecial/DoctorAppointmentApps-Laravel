@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Doctor Type Details</h1>

    <div class="mb-4">
      <label class="block font-bold">ID:</label>
      <span>{{ $doctor_type->id }}</span>
    </div>

    <div class="mb-4">
      <label class="block font-bold">Name:</label>
      <span>{{ $doctor_type->name }}</span>
    </div>

    <div class="mt-6">
      <a href="{{ route('doctor_types.edit', $doctor_type->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
      <form action="{{ route('doctor_types.destroy', $doctor_type->id) }}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
      </form>
      <a href="{{ route('doctor_types.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Back</a>
    </div>
  </div>
@endsection
