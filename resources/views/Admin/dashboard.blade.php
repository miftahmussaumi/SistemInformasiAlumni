@extends('Template.admin')
@section('title','Welcome')
@section('judul_atas')
<h1>Selamat Datang di Sistem Informasi Alumni </h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{$jml_alumni}}</h3>
            <p>Alumni</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-friends"></i>
        </div>
        <a href="/list-alumni" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>{{$jml_info}}</h3>
            <p>Informasi</p>
        </div>
        <div class="icon">
            <i class="fas fa-newspaper"></i>
        </div>
        <a href="informasi-adm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3>{{$jml_pengajuan}}</h3>
            <p>Pengajuan Akun</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-plus"></i>
        </div>
        <a href="/list-pengajuan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
@endsection