<?php

namespace App\Http\Controllers;

use App\Models\DoctorType;
use Illuminate\Http\Request;

class DoctorTypeController extends Controller
{
    public function index()
    {
        // Get all doctor types
        $doctorTypes = DoctorType::all();

        // Return the doctor types as a view
        return view('doctor_types.index', ['doctorTypes' => $doctorTypes]);
    }

    public function create()
    {
        return view('doctor_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
        ]);

        DoctorType::create([
            'name' => $request->name,
        ]);

        return redirect()->route('doctor_types.index')->with('success', 'Doctor type created successfully.');
    }

    public function show(DoctorType $doctor_type)
    {
        return view('doctor_types.show', compact('doctor_type'));
    }

    public function edit(DoctorType $doctor_type)
    {
        return view('doctor_types.edit', compact('doctor_type'));
    }

    public function update(Request $request, DoctorType $doctor_type)
    {
        $request->validate([
            'name' => 'required|max:20',
        ]);

        $doctor_type->update([
            'name' => $request->name,
        ]);

        return redirect()->route('doctor_types.index')->with('success', 'Doctor type updated successfully.');
    }

    public function destroy(DoctorType $doctor_type)
    {
        $doctor_type->delete();

        return redirect()->route('doctor_types.index')->with('success', 'Doctor type deleted successfully.');
    }
}



