<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function show()
    {
        return view('register');
    }

    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/berhasil')->with('success', "Account successfully registered.");
    }

    public function success() {
        return view('berhasil');
    }
}
