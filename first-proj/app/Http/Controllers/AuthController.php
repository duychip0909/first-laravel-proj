<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request) {
        $user = new User;
        $password = Hash::make($request->input('password'));
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $password;
        $user->save();
        return redirect('auth/admin');
    }

    public function check(Request $request) {
        $user = [
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($user)) {
            return redirect('locationlist');
        } else {
            return redirect('auth/admin');
        }
    }

    public function userlist() {
        return view('user-list', ['list' => User::all()]);
    }

}
