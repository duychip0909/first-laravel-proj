<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegistrationRequest;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function signup(UserRegistrationRequest $request) {
        $user = new User();
        $password = Hash::make($request->input('password'));
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $password;
        $user->save($request->validated());

        return redirect('admin');
    }

    public function check(UserLoginRequest $request) {
        $validated = $request->validated();
        if (Auth::attempt($validated)) {
            toast()->success('Signed In', 'Successfully');
            return redirect()->route('location.list');
        } else {
            toast()->error('Login Failed', 'The user name or password are incorrect.');
            return redirect()->route('login-form');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login-form');
    }

    public function userlist() {
        return view('user-list', ['list' => User::all()]);
    }

}
