<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    //FOR ADMIN
    public function index()
    {
        $dtAlumni = Alumni::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        return view('Admin.Alumni', compact('dtAlumni','jml_pengajuan')); 
    }

    //FOR MAHASISWA
    public function index2()
    {
        $dtAlumni = Alumni::all();
        return view('Mahasiswa.alumni', compact('dtAlumni'));
    }

    // FOR ALUMNI
    public function index3()
    {
        $dtAlumni = Alumni::all();
        return view('Alumni.alumni', compact('dtAlumni'));
    }

    public function profil()
    {
        $profil = Alumni::all()
        ->where('id','=', Auth::guard('alumni')->user()->id );
        return view('Alumni.profil', compact('profil'));
    }

    public function edit()
    {
        $profil = Alumni::all()
            ->where('id', '=', Auth::guard('alumni')->user()->id);
        return view('Alumni.profil-edit', compact('profil'));
    }

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
            'password'  => bcrypt($d_password), 
            'nama'      => $d_nama, 
            'nim'       => $d_nim,
            'thn_lulus' => $d_thn_lulus
        ]);

        $hapus = DB::table('pengajuan_akun')
        ->where('id', '=', $id)
        ->delete();

        return back();
    }

    public function detail1($id)
    {
        $profil = Alumni::all()
        ->where('id', '=', $id);

        return view ('Alumni.detail-alumni',compact('profil'));
    }

    public function detail2($id)
    {
        $profil = Alumni::all()
            ->where('id', '=', $id);

        return view('Mahasiswa.detail-alumni', compact('profil'));
    }

    public function detail3($id)
    {
        $profil = Alumni::all()
        ->where('id', '=', $id);
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        return view('Admin.detail-alumni', compact('profil','jml_pengajuan'));
    }

    public function cari1(Request $request)
    {
        $cari = $request->cari;
        $dtAlumni = DB::table('alumni')
        ->where('nama','LIKE',"%".$cari."%")
        ->orWhere('nim', 'LIKE', "%" . $cari . "%")
        ->orWhere('thn_lulus', 'LIKE', "%" . $cari . "%")
        ->get();

        return view('Mahasiswa.hasil-cari', compact('dtAlumni'));
    }

    public function cari2(Request $request)
    {
        $cari = $request->cari;
        $dtAlumni = DB::table('alumni')
        ->where('nama', 'LIKE', "%" . $cari . "%")
            ->orWhere('nim', 'LIKE', "%" . $cari . "%")
            ->orWhere('thn_lulus', 'LIKE', "%" . $cari . "%")
            ->get();

        return view('Alumni.hasil-cari', compact('dtAlumni'));
    }

    public function updateprofil(Request $request, $id)
    {
        $profil = Alumni::findorfail($id);
        $profil->update($request->all());
        return redirect('profil-alumni');
    }

    public function updateabout(Request $request, $id)
    {
        $update = DB::table('alumni')
        ->where('id','=',$id)
        ->update([
            'about' => $request->about
        ]);
        return back();
    }

    public function destroy($id)
    {
        $alumni = Alumni::findorfail($id);
        $alumni->delete();
        return back();
    }
}
