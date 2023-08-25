@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Edit Doctor Schedule</h1>

    <!-- Edit doctor schedule form -->
    <form action="{{ route('doctor_schedules.update', $doctorSchedule->id) }}" method="POST">
      @csrf
      @method('PUT')

      <!-- Form fields -->
      <div class="mb-4">
        <label for="doctor_id" class="block mb-2">Doctor</label>
        <select name="doctor_id" id="doctor_id" class="w-full border rounded py-2 px-4">
          <!-- Populate options with doctors -->
          @foreach($doctors as $doctor)
            <option value="{{ $doctor->id }}" {{ $doctorSchedule->doctor_id == $doctor->id ? 'selected' : '' }}>{{ $doctor->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-4">
        <label for="date" class="block mb-2">Date</label>
        <input type="date" name="date" id="date" class="w-full border rounded py-2 px-4" value="{{ $doctorSchedule->date }}">
      </div>

      <div class="mb-4">
        <label for="start_time" class="block mb-2">Start Time</label>
        <input type="time" name="start_time" id="start_time" class="w-full border rounded py-2 px-4" value="{{ $doctorSchedule->start_time }}">
      </div>

      <div class="mb-4">
        <label for="end_time" class="block mb-2">End Time</label>
        <input type="time" name="end_time" id="end_time" class="w-full border rounded py-2 px-4" value="{{ $doctorSchedule->end_time }}">
      </div>

      <!-- More form fields -->

      <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Doctor Schedule</button>
        <a href="{{ route('doctor_schedules.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Cancel</a>
      </div>
    </form>
  </div>
@endsection
