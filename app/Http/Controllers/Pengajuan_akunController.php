<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan_akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Pengajuan_akunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengajuan_akun::create([
            'email'     => $request->email,
            'nama'      => $request->nama,
            'nim'       => $request->nim,
            'thn_lulus' => $request->thn_lulus,
            'password'  => bcrypt($request->password)
        ]);

        return back();
    }

    public function tolak(Request $request, $id)
    {
        $hapus = DB::table('pengajuan_akun')
        ->where('id','=',$id)
        ->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajuan_akun  $pengajuan_akun
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan_akun $pengajuan_akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajuan_akun  $pengajuan_akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajuan_akun $pengajuan_akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengajuan_akun  $pengajuan_akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajuan_akun $pengajuan_akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajuan_akun  $pengajuan_akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajuan_akun $pengajuan_akun)
    {
        //
    }
}
