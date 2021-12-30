<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan_akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Pengajuan_akunController extends Controller
{
    public function index()
    {
        return view('Mahasiswa.pengajuan');
    }

    public function index2()
    {
        $dtPeng = Pengajuan_akun::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        return view('Admin.AccPengajuan',compact('dtPeng','jml_pengajuan'));
    }

    public function konfirmasitolak($id)
    {
        alert()->question('Anda yakin ingin menolak Pengajuan Akun?')
        ->showConfirmButton('<a href="/tolak-pengajuan/'.$id.')}}" class="text-white">Tolak</a>', '#3085d6')->toHtml()
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();
        return back();
    }

    public function konfirmasiterima($id)
    {
        alert()->question('Anda yakin ingin Menerima Pengajuan Akun?')
        ->showConfirmButton('<a href="/terima-pengajuan/'.$id.')}}" class="text-white">Terima</a>', '#3085d6')->toHtml()
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();
        return back();
    }

    public function store(Request $request)
    {
        Pengajuan_akun::create([
            'email'     => $request->email,
            'nama'      => $request->nama,
            'nim'       => $request->nim,
            'thn_lulus' => $request->thn_lulus,
            'password'  => $request->password,
            'foto'      => $request->foto
        ]); 
        return back()->with('success', 'Pengajuan Akun Berhasil Diterima!');
    }

    public function tolak(Request $request, $id)
    {
        $hapus = DB::table('pengajuan_akun')
        ->where('id','=',$id)
        ->delete();

        return back()->with('success', 'Pengajuan Akun Berhasil Ditolak!');
    }
}
