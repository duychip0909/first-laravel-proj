@extends('layouts.admin')
@section('content')
    <div class="main-block" id="register">
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card register">
                <div class="nav-logo text-center border-none p-3 pt-0">The hotel</div>
                <form action="/auth/signup" method="post">
                    @csrf
                    <label for="username" class="d-block">Username</label>
                    <input type="text" class="d-block" name="username" placeholder="Enter your username">
                    <span class="text-danger validate-text">{{$errors->first('username')}}</span>
                    <label for="email" class="d-block mt-3">Email</label>
                    <input type="text" class="d-block" name="email" placeholder="Enter your email">
                    <span class="text-danger validate-text">{{$errors->first('email')}}</span>
                    <label for="password" class="d-block mt-3">Password</label>
                    <input type="password" class="d-block" name="password" placeholder="***********">
                    <span class="text-danger validate-text">{{$errors->first('password')}}</span>
                    <input type="checkbox" name="privacy" class="m-0 p-0">
                    <label for="privacy">I agree to <a href="#">privacy policy & terms</a></label>
                    <button type="submit" class="learnmore-btn py-2 mt-4">Sign up</button>
                </form>
                <span class="d-inline-block text-center mt-3">Already have an account? <a href="{{route('login-form')}}" class="text-info">Sign in instead</a></span>
            </div>
        </div>
    </div>
@endsection
