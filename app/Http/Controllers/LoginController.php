<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            Alert::success('Success', 'Anda Berhasil Login');
            return redirect('/dashboard');
        } else if (Auth::guard('alumni')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/alumni');
        } 
        Alert::error('Error', 'Password dan Username salah!');
        return redirect('/webLogin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/webHome');
    }



}
