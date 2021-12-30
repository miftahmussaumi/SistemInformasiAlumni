@extends('Template.admin')
@section('title','Tambah Informasi')
@section('judul_atas')
<h1>Tambah Informasi</h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('informasi-adm')}}">Informasi</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</div>
@endsection
@section('notifikasi')
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">{{$jml_pengajuan}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">{{$jml_pengajuan}} Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="{{route('list-pengajuan')}}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>{{$jml_pengajuan}} Pengajuan Akun Mahasiswa
        </a>
    </div>
</li>
@endsection
@section('container')
<div class="col-12">
    <div class="card card-primary">
        <form action="{{route('informasi-simpan-adm')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-header">
                <p for="exampleSelectBorder">Wajib diisi<sup style="color: red; font-size: 20px;">*</sup></p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputBorder">Judul<sup style="color: red; font-size: 20px;">*</sup></label>
                    <input type="text" name="judul" class="form-control form-control-border border-width-2" placeholder=" Judul Informasi" required>
                </div>
                <div class="form-group">
                    <label for="exampleSelectBorder">Kategori Informasi<sup style="color: red; font-size: 20px;">*</sup></label>
                    <select name="id_kategori" class="custom-select form-control-border" required>
                        <option selected disabled>-Pilih Kategori-</option>
                        @foreach($kat_info as $kat)
                        <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelectBorder">Gambar</label>
                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="customFile" accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <label for="exampleSelectBorder">Isi Informasi<sup style="color: red; font-size: 20px;">*</sup></label>
                <textarea name="isi" id="summernote"></textarea>
                <button type="submit" class="btn btn-success" style="width: 130px;">Submit</button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
</div>
@endsection