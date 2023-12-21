@extends('master')
{{-- @section('css'); --}}
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to the Home Page!</h2>
    <p>This is the content of the home page.</p>
     
     <!-- Display Video -->
    <video width="640" height="360" controls autoplay>
        <source src="{{ asset('videos/nature.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
@endsection
