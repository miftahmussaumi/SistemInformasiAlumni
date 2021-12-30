@extends('Template.admin')

@section('title','Pengajuan')
@section('judul_atas')
<h1>Pengajuan Akun Alumni</h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Pengajuan Akun</li>
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
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Tahun Lulus</th>
                        <th>email</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dtPeng as $data)
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nim}}</td>
                        <td>{{$data->thn_lulus}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            <a href="{{url('terima-pengajuan', $data->id)}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="fas fa-check"></i></a>
                            <a href="{{url('konfirmasi-tolak',$data->id)}}" class="btn btn-danger btn-sm m-b-10 m-l-5"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <script>
        swal("Hello world!");
    </script>
</div>
@endsection