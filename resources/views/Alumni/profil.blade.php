@extends('Template.alumni')
@section('title','Profil Saya')
@section('isi blog')
<section id="blog-single" class="p-top-80 p-bottom-80">
    <!--Container-->
    <div class="container clearfix">
        <a href="/profil-edit" class="send_message btn btn-main btn-theme wow fadeInUp">Edit Profil</a>
        @foreach($profil as $data)
        <div class="row">
            <div class="col-sm-4 sidebar">
                <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="team-item-image">
                        <img src="{{asset('img/alumni/'. $data->foto)}}" alt="Foto ALumni" />
                    </div>
                    <div class="team-item-info">
                        <div class="team-item-name">
                            {{$data->nama}}
                        </div>
                        <div class="team-item-position">
                            {{$data->nim}}
                        </div>
                    </div><br>
                    <div class="widget">
                        <h3>About Me!</h3>
                        {!! $data->about !!}
                    </div>
                </div>

            </div> <!-- /.col -->
            <div class="col-sm-8">
                <div class="widget">
                    <h4>Profil Saya</h4>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nama </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;"> {{$data->nama}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nim </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->nim}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>IPK </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->ipk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tahun Lulus </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->thn_lulus}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Pekerjaan </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->pekerjaan}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tempat Kerja </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->tpt_kerja}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Nomor Hp </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->no_hp}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Jenis Kelamin </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->jk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tempat Lahir </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->tempat_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Tanggal Lahir </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->tgl_lahir}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Alamat </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->alamat}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px">
                                <p style="font-size: 15px;"><strong>Pengalaman Organisasi </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{!!$data->organisasi!!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;"><strong>Prestasi </strong></p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{!!$data->prestasi!!}</p>
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
                                <p style="font-size: 15px;">{{$data->instagram}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 15px;">LinkedIn</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{$data->linkedin}}</p>
                            </td>
                        </tr>

                    </table>
                </div>
                <!--End widget-->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
        @endforeach
    </div> <!-- /.container -->
</section>
<!--End blog single section-->
@endsection