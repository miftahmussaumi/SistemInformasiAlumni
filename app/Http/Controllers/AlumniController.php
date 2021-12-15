<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtAlumni = Alumni::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        return view('Admin.Alumni', compact('dtAlumni','jml_pengajuan')); 
    }

    public function index2()
    {
        $dtAlumni = Alumni::all();
        return view('Mahasiswa.alumni', compact('dtAlumni'));
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
    public function store(Request $request, $id)
    {
        $peng = DB::table('pengajuan_akun')
        ->where('id','=',$id)
        ->get([
            'nama','nim','email','password','thn_lulus'
        ]);

        foreach ($peng as $key) {
            $d_nama         = $key->nama;
            $d_nim          = $key->nim;
            $d_email        = $key->email;
            $d_password     = $key->password;
            $d_thn_lulus    = $key->thn_lulus;
        }

        Alumni::create([
            'email'     => $d_email, 
            'password'  => $d_password, 
            'nama'      => $d_nama, 
            'nim'       => $d_nim,
            'thn_lulus' => $d_thn_lulus
        ]);

        $hapus = DB::table('pengajuan_akun')
        ->where('id', '=', $id)
        ->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumni = Alumni::findorfail($id);
        $alumni->delete();
        return back();
    }
}
