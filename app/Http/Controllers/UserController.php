<?php

namespace App\Http\Controllers;
use app\Http\Controllers\UserController;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        // Get all users
        $users = User::all();
    
        // Return the users as a view
        return view('users.index', ['users' => $users]);
    }

    public function patient()
    {
        // Get all users
        $users = User::all();
    
        // Return the users as a view
        return view('patients.index', ['users' => $users]);
    }
    
        public function edit($id)
    {
        // Find a user by ID
        $user = User::findOrFail($id);

        // Return the user to the edit view
        return view('users.edit', ['user' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'in:admin,doctor,patient',
            'is_active' => 'boolean',
        ]);

        // Create a new user
        $user = User::create($validatedData);

        // Redirect to the user show page or perform any other desired action
        return redirect()->route('users.show', $user->id);
    }


    public function show($id)
    {
        // Find a user by ID
        $user = User::findOrFail($id);
    
        // Return the user as a view
        return view('users.show', ['user' => $user]);
    }    


    public function update(Request $request, $id)
    {
        // Find a user by ID
        $user = User::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required',
            'role' => 'in:admin,doctor,patient',
            'is_active' => 'boolean',
        ]);

        // Update the user with the validated data
        $user->update($validatedData);

        // Return the updated user as a response
        return response()->json($user);
    }


    public function destroy($id)
    {
        // Find a user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect to the index page with a success message
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }


}

