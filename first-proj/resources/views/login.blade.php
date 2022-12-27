@extends('layouts.admin')
@section('content')
    <div class="main-block" id="register">
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card register">
                <div class="nav-logo text-center border-none p-3 pt-0">The hotel</div>
                <form action="post">
                    <label for="username" class="d-block">Email Or Username</label>
                    <input type="text" class="d-block" placeholder="Enter your username">
                    <label for="password" class="d-block mt-3">Password</label>
                    <input type="password" class="d-block" placeholder="***********">
                    <input type="checkbox" name="privacy" class="m-0 p-0">
                    <label for="privacy">Remember Me</label>
                    <a href="#" class="learnmore-btn py-2 mt-4">Sign in</a>
                </form>
                <span class="d-inline-block text-center mt-3">New on our platform? <a href="/admin" class="text-info">Create an account</a></span>
            </div>
        </div>
    </div>
@endsection
