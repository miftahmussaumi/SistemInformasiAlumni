<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        return view('Admin.dashboard', compact('jml_pengajuan'));
    }

    public function webHome()
    {
        return view('Mahasiswa.welcome');
    }

    public function webAlumni()
    {
        return view('Mahasiswa.alumni');
    }

    public function webLogin()
    {
        return view('Mahasiswa.login');
    }
}
