<?php

namespace App\Http\Controllers;

use App\Models\DoctorSchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    public function index()
    {
        // Get all doctor schedules
        $doctorSchedules = DoctorSchedule::all();

        // Return the doctor schedules as a response
        return response()->json($doctorSchedules);
    }

    public function show($id)
    {
        // Find a doctor schedule by ID
        $doctorSchedule = DoctorSchedule::findOrFail($id);

        // Return the doctor schedule as a response
        return response()->json($doctorSchedule);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'doctor_detail_id' => 'required|exists:doctor_details,id',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'workdays' => 'required|json',
            'address' => 'required',
            'phone' => 'required|max:20',
        ]);

        // Create a new doctor schedule
        $doctorSchedule = DoctorSchedule::create($validatedData);

        // Return the created doctor schedule as a response
        return response()->json($doctorSchedule, 201);
    }

    public function update(Request $request, $id)
    {
        // Find a doctor schedule by ID
        $doctorSchedule = DoctorSchedule::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'doctor_detail_id' => 'required|exists:doctor_details,id',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'workdays' => 'required|json',
            'address' => 'required',
            'phone' => 'required|max:20',
        ]);

        // Update the doctor schedule with the validated data
        $doctorSchedule->update($validatedData);

        // Return the updated doctor schedule as a response
        return response()->json($doctorSchedule);
    }

    public function destroy($id)
    {
        // Find a doctor schedule by ID
        $doctorSchedule = DoctorSchedule::findOrFail($id);

        // Delete the doctor schedule
        $doctorSchedule->delete();

        // Return a success message as a response
        return response()->json(['message' => 'Doctor schedule deleted successfully']);
    }
}
