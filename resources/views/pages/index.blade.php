@extends('layouts.default')

@section('content')



    <!-- Main jumbotron for a primary marketing message or call to action -->

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif






@endsection

