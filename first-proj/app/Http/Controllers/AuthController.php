<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegistrationRequest;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(UserRegistrationRequest $request) {
        $user = new User();
        $password = Hash::make($request->input('password'));
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $password;
        $user->save($request->validated());

        return redirect('auth/admin');
    }

    public function check(UserLoginRequest $request) {
        $user = [
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($user)) {
            return redirect('locationlist')->with('success', 'You are now logged in.');
        } else {
            return redirect('auth/admin');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('auth/admin');
    }

    public function userlist() {
        return view('user-list', ['list' => User::all()]);
    }

}
