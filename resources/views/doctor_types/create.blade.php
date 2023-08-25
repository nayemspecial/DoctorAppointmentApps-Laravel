@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Create Doctor Type</h1>

    <!-- Create doctor type form -->
    <form action="{{ route('doctor_types.store') }}" method="POST">
      @csrf

      <!-- Form fields -->
      <div class="mb-4">
        <label for="name" class="block mb-2">Name</label>
        <input type="text" name="name" id="name" class="w-full border rounded py-2 px-4" value="{{ old('name') }}">
        @error('name')
          <span class="text-red-500">{{ $message }}</span>
        @enderror
      </div>

      <!-- More form fields -->

      <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Doctor Type</button>
        <a href="{{ route('doctor_types.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Cancel</a>
      </div>
    </form>
  </div>
@endsection
