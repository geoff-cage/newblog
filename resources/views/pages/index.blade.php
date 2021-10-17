@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <h1>{{$title}}</h1>
        <p> A Small Team With Big Brains</p>
        <p><a href="{{route('auth.login')}}" class="btn btn-primary btn-lg" role="button">Login</a> 
             <a href="{{route('auth.register')}}" class="btn btn-success btn-lg" role="button">Register</a></p>
    </div>
@endsection
