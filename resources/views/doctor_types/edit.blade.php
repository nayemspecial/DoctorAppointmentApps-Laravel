@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Edit Doctor Type</h1>

    <!-- Edit doctor type form -->
    <form action="{{ route('doctor_types.update', $doctor_type->id) }}" method="POST">
      @csrf
      @method('PUT')

      <!-- Form fields -->
      <div class="mb-4">
        <label for="name" class="block mb-2">Name</label>
        <input type="text" name="name" id="name" class="w-full border rounded py-2 px-4" value="{{ $doctor_type->name }}">
      </div>

      <!-- More form fields -->

      <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Doctor Type</button>
        <a href="{{ route('doctor_types.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Cancel</a>
      </div>
    </form>
  </div>
@endsection
