<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Kat_info;
use App\Models\Pengajuan_akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InformasiController extends Controller
{
    //===========ALUMNI=============//
    public function index()
    {
        $kat_info = Kat_info::all();
        return view ('Alumni.informasi-tambah',compact('kat_info'));
    }

    //Informasi Saya
    public function index2()
    {
        $dtInfo = DB::table('informasi')
        ->join('kat_info','kat_info.id','=','informasi.id_kategori')
        ->where('informasi.id_penulis','=', Auth::guard('alumni')->user()->id)
        ->get([
            'informasi.id AS id_informasi', 'informasi.judul', 'informasi.gambar',
            'informasi.isi', 'informasi.tgl_up', 'kat_info.nama_kategori'
        ]);
        return view('Alumni.informasi-saya', compact('dtInfo'));
    }

    public function lihat()
    {
        $dtInfo = DB::table('informasi')
        ->join('kat_info', 'kat_info.id', '=', 'informasi.id_kategori')
        ->get([
            'informasi.id AS id_informasi','informasi.judul','informasi.gambar',
            'informasi.isi','informasi.tgl_up','kat_info.nama_kategori'
        ]);
        return view('Alumni.informasi', compact('dtInfo'));
    }

    public function detail($id)
    {
        $dtInfo = DB::table('informasi')
        ->join('kat_info', 'kat_info.id', '=', 'informasi.id_kategori')
        ->where('informasi.id','=',$id)
        ->get([
            'informasi.id AS id_informasi', 'informasi.judul', 'informasi.gambar',
            'informasi.isi', 'informasi.tgl_up', 'kat_info.nama_kategori'
        ]);
        return view('Alumni.informasi-detail',compact('dtInfo'));
    }

    public function store(Request $request)
    {
        $judul = $request->judul;
        $id_kategori = $request->id_kategori;
        $isi = $request->isi;

        if($judul != '' and $id_kategori != '' and $isi != ''){
            $gambar = $request->gambar;
            if($gambar != ''){
                $extension = $gambar->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $gambar->move(public_path() . '/img/info', $filename);
    
                Informasi::create([
                    'id_penulis'    => Auth::guard('alumni')->user()->id,
                    'id_kategori'   => $request->id_kategori,
                    'judul'         => $request->judul,
                    'gambar'        => $filename,
                    'isi'           => $request->isi,
                    'tgl_up'        => date('Y-m-d')
                ]);
                alert()->success('Succes', 'Informasi Berhasil Ditambahkan');
                return redirect('informasi-saya');

            } else {
                Informasi::create([
                    'id_penulis'    => Auth::guard('alumni')->user()->id,
                    'id_kategori'   => $request->id_kategori,
                    'judul'         => $request->judul,
                    'isi'           => $request->isi,
                    'tgl_up'        => date('Y-m-d')
                ]);
                alert()->success('Succes', 'Informasi Berhasil Ditambahkan');
                return redirect('informasi-saya');
            }

        } else {
            alert()->warning('Warning', 'Pastikan Seluruh Data Terisi');
            return back();
        }

    }

    public function edit($id)
    {
        $kat_info = Kat_info::all();
        $info = DB::table('informasi')
        ->where('id','=',$id)
        ->get();
        return view('Alumni.informasi-edit', compact('info', 'kat_info'));
    }

    public function update(Request $request, $id)
    {
        $dtInfo = DB::table('informasi')
        ->where('id', '=', $id)
        ->get([
            'gambar', 'id'
        ]);

        foreach ($dtInfo as $info) {
            $gambar = $info->gambar;
        }

        $newgambar = $request->gambar;

        if ($newgambar != '') {
            $extension = $newgambar->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $newgambar->move(public_path() . '/img/info', $filename);

            $update = DB::table('informasi')
                ->where('id', '=', $id)
                ->update([
                    'judul'         => $request->judul,
                    'isi'           => $request->isi,
                    'id_kategori'   => $request->id_kategori,
                    'tgl_up'        => date('Y-m-d'),
                    'id_penulis'    => Auth::guard('alumni')->user()->id,
                    'gambar'        => $filename
                ]);

            $old_image_name_gambar = $request->hidden_image_gambar;
            unlink(public_path('img/info/' . $old_image_name_gambar));
            return redirect('informasi-saya')->with('success', 'Informasi Berhasil DiUpdate!');
        } else {
            $update = DB::table('informasi')
                ->where('id', '=', $id)
                ->update([
                    'judul'         => $request->judul,
                    'isi'           => $request->isi,
                    'id_kategori'   => $request->id_kategori,
                    'tgl_up'        => date('Y-m-d'),
                    'id_penulis'    => Auth::guard('alumni')->user()->id,
                ]);
            return redirect('informasi-saya')->with('success', 'Informasi Berhasil DiUpdate!');
        }

        
    }

    public function destroy( $id)
    {
        $info = Informasi::findorfail($id);
        $info->delete();
        return back()->with('success', 'Informasi Berhasil Dihapus!');
    }

    //===========ADMIN=============//
    public function lihatadm()
    {
        $dtPeng = Pengajuan_akun::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        $dtInfo = DB::table('informasi')
            ->join('kat_info', 'kat_info.id', '=', 'informasi.id_kategori')
            ->leftJoin('alumni','alumni.id','=','informasi.id_penulis')
            ->get([
                'informasi.id AS id_informasi', 'informasi.judul', 'informasi.gambar',
                'informasi.isi', 'informasi.tgl_up', 'kat_info.nama_kategori','alumni.nama'
            ]);
        return view('Admin.informasi', compact('dtInfo','jml_pengajuan'));
    }

    public function editadm($id)
    {
        $dtPeng = Pengajuan_akun::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        $dtkat_info = Kat_info::all();
        $dtinfo = DB::table('informasi')
        ->where('id', '=', $id)
        ->get();
        return view('Admin.informasi-edit', compact('jml_pengajuan','dtkat_info','dtinfo'));
    }

    public function updateadm(Request $request, $id)
    {
        $dtInfo = DB::table('informasi')
        ->where('id', '=', $id)
        ->get([
            'gambar', 'id'
        ]);

        foreach ($dtInfo as $info) {
            $gambar = $info->gambar;
        }

        $newgambar = $request->gambar;

        if ($newgambar != '') {
            $extension = $newgambar->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $newgambar->move(public_path() . '/img/info', $filename);

            $update = DB::table('informasi')
            ->where('id', '=', $id)
                ->update([
                    'judul'         => $request->judul,
                    'isi'           => $request->isi,
                    'id_kategori'   => $request->id_kategori,
                    'tgl_up'        => date('Y-m-d'),
                    'id_penulis'    => Auth::guard('alumni')->user()->id,
                    'gambar'        => $filename
                ]);

            $old_image_name_gambar = $request->hidden_image_gambar;
            unlink(public_path('img/info/' . $old_image_name_gambar));
            return redirect('informasi-adm')->with('success', 'Informasi Berhasil DiUpdate!');
        } else {
            $update = DB::table('informasi')
            ->where('id', '=', $id)
                ->update([
                    'judul'         => $request->judul,
                    'isi'           => $request->isi,
                    'id_kategori'   => $request->id_kategori,
                    'tgl_up'        => date('Y-m-d'),
                    'id_penulis'    => Auth::guard('alumni')->user()->id,
                ]);
            return redirect('informasi-adm')->with('success', 'Informasi Berhasil DiUpdate!');
        }
    }

    public function konfhpsinfo($id)
    {
        alert()->question('Anda yakin ingin Menghapus Informasi ini?')
        ->showConfirmButton('<a href="/informasi-hapus-adm/' . $id . ')}}" class="text-white">Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();
        return back();
    }

    public function destroyadm($id)
    {
        $info = Informasi::findorfail($id);
        $info->delete();
        return back()->with('success', 'Informasi Berhasil Dihapus');;
    }

    public function detailadm($id)
    {
        $dtPeng = Pengajuan_akun::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        $dtInfo = DB::table('informasi')
        ->join('kat_info', 'kat_info.id', '=', 'informasi.id_kategori')
        ->leftJoin('alumni', 'alumni.id', '=', 'informasi.id_penulis')
        ->where('informasi.id', '=', $id)
        ->get([
            'informasi.id AS id_informasi', 'informasi.judul', 'informasi.gambar',
            'informasi.isi', 'informasi.tgl_up', 'kat_info.nama_kategori','alumni.nama'
        ]);
        return view('Admin.informasi-detail', compact('dtInfo','jml_pengajuan'));
    }

    //Tampilkan Form Tambah Informasi Admin
    public function indexadm()
    {
        $dtPeng = Pengajuan_akun::all();
        $akun = DB::table('pengajuan_akun')->get();
        $jml_pengajuan = count(collect($akun));

        $kat_info = Kat_info::all();
        return view('Admin.informasi-tambah', compact('kat_info', 'jml_pengajuan'));
    }

    public function storeadm(Request $request)
    {
        // dd($request->all());
        $judul = $request->judul;
        $id_kategori = $request->id_kategori;
        $isi = $request->isi;

        if ($judul != '' and $id_kategori != '' and $isi != ''
        ) {
            $gambar = $request->gambar;
            if ($gambar != '') {
                $extension = $gambar->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $gambar->move(public_path() . '/img/info', $filename);
                $id_penulis = "1";

                Informasi::create([
                    'id_penulis'    => $id_penulis,
                    'id_kategori'   => $request->id_kategori,
                    'judul'         => $request->judul,
                    'gambar'        => $filename,
                    'isi'           => $request->isi,
                    'tgl_up'        => date('Y-m-d')
                ]);
                alert()->success('Succes', 'Informasi Berhasil Ditambahkan');
                return redirect('informasi-adm');
            } else {
                $id_penulis = "1";
                Informasi::create([
                    'id_penulis'    => $id_penulis,
                    'id_kategori'   => $request->id_kategori,
                    'judul'         => $request->judul,
                    'isi'           => $request->isi,
                    'tgl_up'        => date('Y-m-d')
                ]);
                alert()->success('Succes', 'Informasi Berhasil Ditambahkan');
                return redirect('informasi-adm');
            }
        } else {
            alert()->warning('Warning', 'Pastikan Seluruh Data Terisi');
            return back();
        }


        // $tgl_up = date('Y-m-d');
        // $id_penulis = "1";

        // $gambar = $request->gambar;
        // $extension = $gambar->getClientOriginalExtension();
        // $filename = time(). '.' . $extension;
        // $gambar->move(public_path() . '/img/info', $filename);

        //     Informasi::create([
        //         'id_penulis'    => $id_penulis,
        //         'id_kategori'   => $request->id_kategori,
        //         'judul'         => $request->judul,
        //         'gambar'        => $filename,
        //         'isi'           => $request->isi,
        //         'tgl_up'        => $tgl_up
        //     ]);
        
        // return redirect('informasi-adm')->with('success', 'Informasi Berhasil Ditambahkan!');
    }
}
