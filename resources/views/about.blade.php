@extends('master')

@section('title', 'About Page')

@section('content')
    <h2>About Us</h2>
    <p>This is the content of the about page.</p>
    <!-- Display Image -->
    <img src="{{ asset('images/cat.jpg') }}" alt="About Image">
@endsection
