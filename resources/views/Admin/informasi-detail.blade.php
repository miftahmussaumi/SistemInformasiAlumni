@extends('Template.admin')
@section('title','Detail Informasi')
@section('judul_atas')
<h1>Detail Informasi</h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('informasi-adm')}}">Informasi</a></li>
        <li class="breadcrumb-item active">Detail</li>
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
    <div class="card">
        <!-- /.card-header -->
        @foreach ($dtInfo as $info)
        <div class="card-body">
            <h2>{{$info->judul}}</h2>
            <img class="img-fluid" src="{{asset('img/info/'. $info->gambar)}}" alt="" height="300" width="600" />
            <div class="row">
                <div class="col-5">
                    <table cellpadding="7">
                        <tr>
                            <td>
                                <p class="text-primary"><i class="fas fa-user"></i> {{$info->nama}}</p>
                            </td>
                            <td>
                                <p class="text-primary"><i class="fas fa-calendar-alt"></i> {{$info->tgl_up}}</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><br>
            {!!$info->isi!!}
        </div>
        @endforeach
        <!-- /.card-body -->
    </div>
</div>
@endsection