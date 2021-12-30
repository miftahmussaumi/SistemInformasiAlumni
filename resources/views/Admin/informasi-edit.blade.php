@extends('Template.admin')
@section('title','Edit Informasi')
@section('judul_atas')
<h1>Edit Informasi</h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('informasi-adm')}}">Informasi</a></li>
        <li class="breadcrumb-item active">Edit</li>
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
        @foreach($dtinfo as $info)
        <form action="{{route('informasi-edit-simpan-adm',$info->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-header">
                <h3 class="card-title">Informasi</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputBorder">Judul</label>
                    <input type="text" value="{{$info->judul}}" name="judul" class="form-control form-control-border border-width-2" placeholder=" Judul Informasi">
                </div>
                <div class="form-group">
                    <label for="exampleSelectBorder">Kategori Informasi</label>
                    <select name="id_kategori" class="custom-select form-control-border">
                        <option disabled>-Pilih Kategotri-</option>
                        @foreach($dtkat_info as $kat)
                        <option value="{{$kat->id}}" {{$kat->id==$info->id_kategori ? 'selected' : ''}}>{{$kat->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelectBorder">Gambar</label>
                    <img src="{{asset('img/info/'. $info->gambar)}}" width="300" height="200" />
                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" accept="image/*">
                        <input type="hidden" id="hidden_image" name="hidden_image_gambar" value="{{$info->gambar}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <label for="exampleSelectBorder">Isi Informasi</label>
                <textarea name="isi" id="summernote">
                    {!!$info->judul!!}
                </textarea>
                <button type="submit" class="btn btn-success" style="width: 130px;">Submit</button>
            </div>
            <!-- /.card-body -->
        </form>
        @endforeach
    </div>
</div>
@endsection