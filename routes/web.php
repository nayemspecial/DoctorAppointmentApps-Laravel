<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Home Route
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('home');

// User Routes
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{id}/delete', [App\Http\Controllers\UserController::class, 'confirmDelete'])->name('users.confirm-delete');
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

// Patient Route
Route::get('/patients', [App\Http\Controllers\UserController::class, 'patient'])->name('patients.index');

// DoctorType Routes
Route::get('/doctor_types', [App\Http\Controllers\DoctorTypeController::class, 'index'])->name('doctor_types.index');
Route::get('/doctor_types/create', [App\Http\Controllers\DoctorTypeController::class, 'create'])->name('doctor_types.create');
Route::post('/doctor_types', [App\Http\Controllers\DoctorTypeController::class, 'store'])->name('doctor_types.store');
Route::get('/doctor_types/{doctor_type}', [App\Http\Controllers\DoctorTypeController::class, 'show'])->name('doctor_types.show');
Route::get('/doctor_types/{doctor_type}/edit', [App\Http\Controllers\DoctorTypeController::class, 'edit'])->name('doctor_types.edit');
Route::put('/doctor_types/{doctor_type}', [App\Http\Controllers\DoctorTypeController::class, 'update'])->name('doctor_types.update');
Route::delete('/doctor_types/{doctor_type}', [App\Http\Controllers\DoctorTypeController::class, 'destroy'])->name('doctor_types.destroy');

// DoctorDetail Routes
Route::get('/doctor_details', [App\Http\Controllers\DoctorDetailController::class, 'index'])->name('doctor_details.index');
Route::get('/doctor_details/create', [App\Http\Controllers\DoctorDetailController::class, 'create'])->name('doctor_details.create');
Route::post('/doctor_details', [App\Http\Controllers\DoctorDetailController::class, 'store'])->name('doctor_details.store');
Route::get('/doctor_details/{doctor_detail}', [App\Http\Controllers\DoctorDetailController::class, 'show'])->name('doctor_details.show');
Route::get('/doctor_details/{doctor_detail}/edit', [App\Http\Controllers\DoctorDetailController::class, 'edit'])->name('doctor_details.edit');
Route::put('/doctor_details/{doctor_detail}', [App\Http\Controllers\DoctorDetailController::class, 'update'])->name('doctor_details.update');
Route::delete('/doctor_details/{doctor_detail}', [App\Http\Controllers\DoctorDetailController::class, 'destroy'])->name('doctor_details.destroy');

// DoctorSchedule Routes
Route::get('/doctor_schedules', [App\Http\Controllers\DoctorScheduleController::class, 'index'])->name('doctor_schedules.index');
Route::get('/doctor_schedules/create', [App\Http\Controllers\DoctorScheduleController::class, 'create'])->name('doctor_schedules.create');
Route::post('/doctor_schedules', [App\Http\Controllers\DoctorScheduleController::class, 'store'])->name('doctor_schedules.store');
Route::get('/doctor_schedules/{doctor_schedule}', [App\Http\Controllers\DoctorScheduleController::class, 'show'])->name('doctor_schedules.show');
Route::get('/doctor_schedules/{doctor_schedule}/edit', [App\Http\Controllers\DoctorScheduleController::class, 'edit'])->name('doctor_schedules.edit');
Route::put('/doctor_schedules/{doctor_schedule}', [App\Http\Controllers\DoctorScheduleController::class, 'update'])->name('doctor_schedules.update');
Route::delete('/doctor_schedules/{doctor_schedule}', [App\Http\Controllers\DoctorScheduleController::class, 'destroy'])->name('doctor_schedules.destroy');

// Appointment Routes
Route::get('/appointments', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [App\Http\Controllers\AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [App\Http\Controllers\AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{appointment}/edit', [App\Http\Controllers\AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'update'])->name('appointments.update');
Route::delete('/appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'destroy'])->name('appointments.destroy');
