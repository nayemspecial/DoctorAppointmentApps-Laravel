<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        // Get all appointments
        $appointments = Appointment::all();

        // Return the appointments as a response
        return response()->json($appointments);
    }

    public function show($id)
    {
        // Find an appointment by ID
        $appointment = Appointment::findOrFail($id);

        // Return the appointment as a response
        return response()->json($appointment);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'doctor_detail_id' => 'required|exists:doctor_details,id',
            'schedule_id' => 'required|exists:doctor_schedules,id',
            'is_appointed' => 'boolean',
        ]);

        // Create a new appointment
        $appointment = Appointment::create($validatedData);

        // Return the created appointment as a response
        return response()->json($appointment, 201);
    }

    public function update(Request $request, $id)
    {
        // Find an appointment by ID
        $appointment = Appointment::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'doctor_detail_id' => 'required|exists:doctor_details,id',
            'schedule_id' => 'required|exists:doctor_schedules,id',
            'is_appointed' => 'boolean',
        ]);

        // Update the appointment with the validated data
        $appointment->update($validatedData);

        // Return the updated appointment as a response
        return response()->json($appointment);
    }

    public function destroy($id)
    {
        // Find an appointment by ID
        $appointment = Appointment::findOrFail($id);

        // Delete the appointment
        $appointment->delete();

        // Return a success message as a response
        return response()->json(['message' => 'Appointment deleted successfully']);
    }
}

