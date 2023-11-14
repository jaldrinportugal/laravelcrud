@extends('layout.app')

@section('content')
    <h1>Authentication Page</h1>
    @error('message')
        <p>{{$message}}</p>
    @enderror
    <form action="{{route('login.submit')}}" method="post">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button>Submit</button>
        </div>

        @if(auth()->check())
                <a href="{{route('logout')}}">Log Out</a>
            @else
                <a href="{{ route('login') }}">Log In</a>
                <a href="{{ route('registration') }}">Register</a>

            @endif
    </form>
@endsection

@section('title')
    Login Page
@endsection