@extends('Template.admin')
@section('title','Informasi')
@section('judul_atas')
<h1>Halaman Informasi</h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Informasi</li>
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
            <a href="/informasi-tambah-adm" type="button" class="btn btn-success" style="width: 130px;">+ Informasi</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal Post</th>
                        <th>Penulis</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($dtInfo as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->nama_kategori}}</td>
                        <td>{{$data->tgl_up}}</td>
                        <td>{{$data->nama}}</td>
                        <td>
                            <a href="{{url('informasi-edit-adm',$data->id_informasi)}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="far fa-edit"></i></a>
                            <a href="{{url('konfirmasi-hapus-info-adm',$data->id_informasi)}}" class="btn btn-danger btn-sm m-b-10 m-l-5"><i class="fas fa-trash"></i></a>
                            <a href="{{url('informasi-detail-adm',$data->id_informasi)}}" class="btn btn-secondary btn-sm m-b-10 m-l-5"><i class="far fa-eye"></i></a>
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