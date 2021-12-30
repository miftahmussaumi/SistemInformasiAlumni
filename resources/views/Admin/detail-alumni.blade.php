@extends('Template.admin')
@section('title','Detail Alumni')
@section('judul_atas')
<h1>Detail Alumni</h1>
@endsection
@section('menu_samping')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('list-alumni')}}">Alumni</a></li>
        <li class="breadcrumb-item">Detail </li>
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
            <a href="/list-alumni"><strong>
                    << BACK</strong></a><br><br>
            @foreach($profil as $data1)
            <div class="row">
                <div class="col-sm-4 sidebar">
                    <img src="{{asset('img/alumni/'. $data1->foto)}}" alt="Alumni belum meng-upload foto" width="300" height="300" /><br><br>
                    <h4>About Me!</h4>
                    <table style="margin-left: 30px;">
                        <tr>{!! $data1->about !!}</tr>
                    </table>
                </div> <!-- /.col -->
                <div class="col-sm-8">
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nama </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;"> {{$data1->nama}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nim </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->nim}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>IPK </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->ipk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tahun Lulus </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->thn_lulus}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Pekerjaan </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->pekerjaan}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tempat Kerja </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->tpt_kerja}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nomor Hp </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->no_hp}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Jenis Kelamin </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->jk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tempat Lahir </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->tempat_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tanggal Lahir </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->tgl_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Alamat </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->alamat}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px">
                                <p style="font-size: 15px;"><strong>Pengalaman Organisasi </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{!!$data1->organisasi!!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Prestasi </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{!!$data1->prestasi!!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Sosial Media </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;">Instagram</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->instagram}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;">LinkedIn</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data1->linkedin}}</p>
                            </td>
                        </tr>
                    </table>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
            @endforeach
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection