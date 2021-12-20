<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else if (Auth::guard('alumni')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/alumni');
        }

        return redirect('/weblogin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/webHome');
    }



}
