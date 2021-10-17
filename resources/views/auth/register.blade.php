@extends('layouts.app')

@section('content')
    <div class="conatainer">
        <div class="row">
            <h3>Register</h3>
            <form action="{{route('auth.save')}}" method="POST">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{old('name')}}">
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="Password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign up</button>
                <br>
                <a href="{{ route('auth.login')}}">I already have an account, sign in </a>
            </form>
        </div>
    </div>
    
@endsection