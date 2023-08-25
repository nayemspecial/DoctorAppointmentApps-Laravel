@extends('layouts.app')

@section('title', 'DoctorApps')

@section('sidebar')
    <!-- Dashboard -->
    @include('menu')

@endsection

@section('content')
    <!-- Your content goes here -->
    @include('users.index')

@endsection
