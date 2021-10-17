@extends('layouts.app')

@section('content')
    <div class="conatainer">
        <div class="row">
            <h3>Login</h3>
            <form action="{{ route('auth.check')}}" method="POST">

                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="Password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                <br>
                <a href="{{route('auth.register')}}">I dont have an account, create new account </a>
            </form>
        </div>
    </div>
    
@endsection