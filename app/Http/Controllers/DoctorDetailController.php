<?php

namespace App\Http\Controllers;

use App\Models\DoctorDetail;
use Illuminate\Http\Request;

class DoctorDetailController extends Controller
{
    public function index()
    {
        // Get all doctor details
        $doctorDetails = DoctorDetail::all();

        // Return the doctor details as a response
        return response()->json($doctorDetails);
    }

    public function show($id)
    {
        // Find a doctor detail by ID
        $doctorDetail = DoctorDetail::findOrFail($id);

        // Return the doctor detail as a response
        return response()->json($doctorDetail);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'doctor_type_id' => 'required|exists:doctor_types,id',
            'degree' => 'required|max:100',
            'gender' => 'required|in:male,female',
        ]);

        // Create a new doctor detail
        $doctorDetail = DoctorDetail::create($validatedData);

        // Return the created doctor detail as a response
        return response()->json($doctorDetail, 201);
    }

    public function update(Request $request, $id)
    {
        // Find a doctor detail by ID
        $doctorDetail = DoctorDetail::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'doctor_type_id' => 'required|exists:doctor_types,id',
            'degree' => 'required|max:100',
            'gender' => 'required|in:male,female',
        ]);

        // Update the doctor detail with the validated data
        $doctorDetail->update($validatedData);

        // Return the updated doctor detail as a response
        return response()->json($doctorDetail);
    }

    public function destroy($id)
    {
        // Find a doctor detail by ID
        $doctorDetail = DoctorDetail::findOrFail($id);

        // Delete the doctor detail
        $doctorDetail->delete();

        // Return a success message as a response
        return response()->json(['message' => 'Doctor detail deleted successfully']);
    }
}

